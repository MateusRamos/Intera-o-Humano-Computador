<?php
include 'conexão.php';

if ($conn->connect_error) {
  die("Conexão falhou: " . $conn->connect_error);
}

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $name = $_POST['name'];
    $job = $_POST['job'];
    $text = $_POST['text'];
    var_dump($_FILES);
    var_dump($_POST);
    // Processa a imagem
    $imagem = $_FILES['file'];
    $imagem_nome = $imagem['name'];
    $imagem_tmp = $imagem['tmp_name'];
    
    // Definindo o caminho para a pasta de uploads
    $pasta_destino = 'img/comment/';
    $id = 0;

    // Verifica se a pasta existe, caso contrário, cria
    if (!is_dir($pasta_destino)) {
        mkdir($pasta_destino, 0755, true);
    }

    // Insere um comentário temporariamente para obter o ID
    $sql = "INSERT INTO comentario (name, job, caminho_imagem, text) VALUES (?, ?, ?, ?)";
    $stmt = $conn->prepare($sql);
    $stmt->bind_param("ssss", $name, $job, $dummy = '', $text); // dummy para evitar erro
    $stmt->execute();
    $id = $stmt->insert_id; // obtém o ID da nova entrada
    $stmt->close();

    // Move a imagem para a pasta de destino
    $novo_nome_imagem = "comentario{$id}." . pathinfo($imagem_nome, PATHINFO_EXTENSION);
    move_uploaded_file($imagem_tmp, $pasta_destino . $novo_nome_imagem);
    $novo_nome_imagem = "img/comment/".$novo_nome_imagem;

    // Atualiza o caminho da imagem no banco de dados
    $sql = "UPDATE comentario SET caminho_imagem = ? WHERE id = ?";
    $stmt = $conn->prepare($sql);
    $stmt->bind_param("si", $novo_nome_imagem, $id);
    
    if ($stmt->execute()) {
        echo "Comentário enviado com sucesso!";
    } else {
        echo "Erro ao atualizar o caminho da imagem: " . $stmt->error;
    }

    $stmt->close();
}

$conn->close();

// Redirecionar de volta para o index.php após o processamento
header("Location: index.php");
exit();
?>
