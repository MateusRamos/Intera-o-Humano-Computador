<?php include 'conexão.php'; ?>
<!DOCTYPE html>
<html>

<head>
  <meta charset='utf-8'>
  <meta http-equiv='X-UA-Compatible' content='IE=edge'>
  <title>SPARC</title>
  <meta name='viewport' content='width=device-width, initial-scale=1'>

  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.6.0/css/all.min.css"
    integrity="sha512-Kc323vGBEqzTmouAECnVceyQqyqdsSiqLQISBL29aUW4U/M7pSPA/gEUZQqv1cwx4OnYxTxve5UMg5GT6L4JJg=="
    crossorigin="anonymous" referrerpolicy="no-referrer" />

  <link rel="preconnect" href="https://fonts.googleapis.com">
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
  <link
    href="https://fonts.googleapis.com/css2?family=Inter:ital,opsz,wght@0,14..32,100..900;1,14..32,100..900&display=swap"
    rel="stylesheet">
  <link href="https://fonts.googleapis.com/css2?family=Noto+Sans:ital,wght@0,100..900;1,100..900&display=swap"
    rel="stylesheet">

  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/assets/owl.carousel.min.css" />
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/assets/owl.theme.default.min.css" />
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css" />

  <link rel='stylesheet' type='text/css' media='screen' href='css/styles.css'>

</head>

<body>

  <section class="hh-wrapper">
    <header class="">
      <nav class="main-nav d-flex-center-between">
        <a href="#" class="logo">
          <img src="img/logo.png" height="80px" alt="Logo do Sistema">
        </a>
        <ul class="nav d-flex-center-between">
          <li class="scroll-to-section"><a href="#" class="active">Home</a></li>
          <li class="scroll-to-section"><a href="#" class="">A Empresa</a></li>
          <li class="scroll-to-section"><a href="#" class="">Serviços</a></li>
          <li class="scroll-to-section"><a href="#" class="">Contato</a></li>
          <li style="margin-right: 0;"><a class="header-li-button" href="#">Cadastre-se já</a></li>
        </ul>
      </nav>
    </header>

    <section class="hero">
      <div class="hero-text">
        <h2>Otimize seus <em>espaços</em>, maximize seus <em>resultados</em>.</h2>
        <div class="div-dec"></div>
        <p>O SPARC é a solução ideal para quem busca otimizar a gestão de espaços. Com uma interface intuitiva, permite reservar salas, acompanhar a disponibilidade e gerar relatórios detalhados de forma rápida e eficiente.</p>
        <div class="buttons d-flex-center-start">
          <div class="button-1">
            <a href="#">Saiba Mais</a>
          </div>
          <div class="button-2">
            <a href="#">Entre em Contato</a>
          </div>
        </div>
      </div>
    </section>


    <section class="services">
      <div class="service-item-line  d-flex-center-center">
        <div class="service-item d-flex-center-start">
          <i class="fa-solid fa-door-open"></i>
          <div>
            <h4>Gerenciamento de Salas</h4>
            <p>Controle total sobre todos os seus espaços. Acompanhe a disponibilidade, faça reservas e muito mais.</p>
          </div>
        </div>
        <div class="service-item d-flex-center-start">
          <i class="fa-solid fa-chair"></i>
          <div>
            <h4>Reserva de Mesas</h4>
            <p>Reserve mesas para reuniões, eventos e trabalhos em equipe de forma simples e rápida.</p>
          </div>
        </div>
      </div>
      <div class="service-item-line  d-flex-center-center">
        <div class="service-item d-flex-center-start">
          <i class="fa-solid fa-display"></i>
          <div>
            <h4>Visualização Personalizada da Ocupação</h4>
            <p>Veja a ocupação dos seus espaços em tempo real e de forma personalizada.</p>
          </div>
        </div>
        <div class="service-item d-flex-center-start">
          <i class="fa-solid fa-file-lines"></i>
          <div>
            <h4>Relatórios e Indicadores</h4>
            <p>Gere relatórios detalhados sobre o uso dos seus espaços e acompanhe indicadores de desempenho.</p>
          </div>
        </div>
      </div>
      <div class="service-item-line  d-flex-center-center">
        <div class="service-item d-flex-center-start">
          <i class="fa-solid fa-address-card"></i>
          <div>
            <h4>Cadastro de Usuário e Equipamentos</h4>
            <p>Cadastre usuários e equipamentos para um controle mais preciso das reservas e recursos.</p>
          </div>
        </div>
        <div class="service-item d-flex-center-start">
          <i class="fa-solid fa-user-tag"></i>
          <div>
            <h4>Reservas Diversificadas</h4>
            <p>Realize reservas de diferentes tipos, como salas de reunião, espaços de coworking e muito mais.</p>
          </div>
        </div>
      </div>
    </section>

    <section class="mission">
      <div class="mission-title d-flex-center-center">
        <h6>Sobre nós</h6>
        <h4>Nos Conheça um Pouco Melhor</h4>
      </div>
      <div class="mission-text d-flex-center-between">
        <div class="mission-descrition d-flex-center-center">
          <p>Sugestão de texto único, combinando os melhores aspectos das opções anteriores:
            A SPARC é a sua parceira para otimizar a gestão de espaços e impulsionar a produtividade da sua equipe. Nossa solução inovadora e intuitiva, o [Nome do seu software], transforma a forma como as empresas gerenciam suas salas de reunião, escritórios e outros ambientes corporativos. Com a SPARC, você terá controle total sobre a disponibilidade dos seus espaços, poderá realizar reservas de forma simples e rápida, acompanhar a ocupação em tempo real e gerar relatórios personalizados para tomar decisões mais estratégicas. Desenvolvemos nossa plataforma com as mais recentes tecnologias, garantindo uma experiência completa e escalável, que se adapta às necessidades únicas de cada cliente. Nossa equipe de suporte técnico está sempre à disposição para auxiliar na implementação e utilização do software, garantindo uma experiência positiva para todos os nossos clientes. Ao escolher a SPARC, você estará adquirindo muito mais do que um software: você estará adquirindo um parceiro estratégico para otimizar seus processos e alcançar seus objetivos.</p>
          <img src="img/Madonna's_signature.png" alt="Assinatura da responsável pela empresa">
        </div>
        <div class="mission-image">
          <img src="img/StockCake-Confident Corporate Presentation_1727632081.jpg"
            alt="Dono da compania fazendo a apresentação para sua equipe.">
        </div>
      </div>
    </section>


    <section class="comment-form">
      <div class="comment-form-image">
        <img src="img/vecteezy_happy-woman-pointing-at-a-smartphone-with-a-blank-screen_45821540.png"
          alt="Mulher apontando para o telefone celular.">
      </div>
      <div class="comment-form-form">
        <div>
          <h6>SUA OPINIÃO</h6>
          <h4>Nos ajude a melhorar cada vez mais!</h4>
        </div>
        <form action="controller.php" method="POST" class="comentario-form"  enctype="multipart/form-data">
          <div class="input-group">
            <label for="name">Nome:</label>
            <input type="text" id="name" name="name" required>
          </div>
          <div class="d-flex-center-between input-wrapper">
            <div class="input-group" style="width: 76%;">
              <label for="company">Cargo:</label>
              <input type="text" id="company" name="job" required>
            </div>
            <div class="input-group" style="width: 22%;align-self: end;">
              <label for="imagem" class="imagem-label">
                  Envie uma Foto
              </label>
              <input id="imagem" type="file" name="file" required />
            </div>
          </div>
          <div class="input-group">
            <label for="text">Comentário:</label>
            <textarea name="text" id="text" cols="3" name="text" required></textarea>
          </div>
          <button type="submit">Enviar</button>
        </form>
      </div>
    </section>


    <section class="comments">
      <div class="comments-title d-flex-center-center">
          <h6>TESTEMUNHAS</h6>
          <h4>O que eles falam</h4>
      </div>
      <div class="comments-carousel">
          <div class="carousel d-flex-center-center owl-carousel owl-theme">


              <?php 
                $sql = "SELECT * FROM comentario";
                $result = $conn->query($sql);

                if($result->num_rows > 0) {
                  while($row = $result->fetch_assoc()) {
                    ?>

                    <div class="carousel-item item d-flex-center-between">
                        <div class="carousel-wrapper">
                            <i class="fa-solid fa-quote-left"></i>
                            <p>"<?= $row['text'] ?>"</p>
                            <h4><?= $row['name'] ?></h4>
                            <span><?= $row['job'] ?></span>
                        </div>
                        <div class="right-image">
                            <img src="<?= $row['caminho_imagem'] ?>" alt="Foto da pessoa que está comentando.">
                        </div>
                    </div>

                    <?php
                  }
                }
              ?>


          </div>
      </div>
    </section>
    


    <footer>
      <p>Razão Social: Space Allocation and Resource Control Co. | CNPJ: 12.345.678/0001-90</p>
      <p>Endereço: Rua Exemplo, 123, Bairro Centro, São Paulo - SP, CEP 01234-567</p>
      <div class="semi-footer d-flex-center-center">
        <p>Desenvolvido por <a href="https://github.com/reroso">Felipe Soares</a> e <a href="https://github.com/MateusRamos">Mateus Ramos</a></a>
      </div>
    </footer>



    <script src='js/main.js'></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/owl.carousel.min.js"></script>
    <script>
        $(document).ready(function(){
            $(".owl-carousel").owlCarousel({
                items: 1, // Número de itens a serem exibidos
                loop: true, // Ativa o loop
                autoplay: false, // Ativa a reprodução automática
                autoplayTimeout: 3000, // Tempo entre as transições (em ms)
                dots: true // Exibe os pontos indicadores
            });
        });
    </script>
</body>


<?php $conn->close(); ?>
</html>