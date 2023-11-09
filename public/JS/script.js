document.querySelector('.toggle-buttonSalgados').addEventListener('click', function() {
    var opcoesSalgados = document.querySelector('.opcoesSalgados');
    if (opcoesSalgados.style.height === '' || opcoesSalgados.style.height === '0px') {
      opcoesSalgados.style.height = '70px'; // Define a altura das opcoes disponiveis quando visível
    } else {
      opcoesSalgados.style.height = '0';
    }
});
document.querySelector('.toggle-buttonBebidas').addEventListener('click', function() {
  var opcoesBebidas = document.querySelector('.opcoesBebidas');
  if (opcoesBebidas.style.height === '' || opcoesBebidas.style.height === '0px') {
    opcoesBebidas.style.height = '115px'; // Define a altura das opcoes disponiveis quando visível
  } else {
    opcoesBebidas.style.height = '0';
  }
});
document.querySelector('.toggle-buttonDiversificados').addEventListener('click', function() {
  var opcoesDiversificados = document.querySelector('.opcoesDiversificados');
  if (opcoesDiversificados.style.height === '' || opcoesDiversificados.style.height === '0px') {
    opcoesDiversificados.style.height = '115px'; // Define a altura das opcoes disponiveis quando visível
  } else {
    opcoesDiversificados.style.height = '0';
  }
});