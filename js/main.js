document.getElementById('imagem').addEventListener('change', function() {
  var label = document.querySelector('.imagem-label');
  if (this.files.length > 0) {
      label.classList.add('file-selected'); // Adiciona a classe quando um arquivo é selecionado
      label.textContent = 'Salvo'; // Muda o texto para o nome do arquivo selecionado
  } else {
      label.classList.remove('file-selected'); // Remove a classe se nenhum arquivo for selecionado
      label.textContent = 'Selecione uma imagem'; // Reseta o texto
  }
});