// Define a data de termino
var endDate = new Date("Oct 31, 2023 00:00:00").getTime();

// Atualizar o contador a cada segundo
var x = setInterval(function () {
  // Obter a data e hora atual
  var now = new Date().getTime();

  // Calcular a diferença entre a data de término e a data atual
  var distance = endDate - now;

  // Calcular dias, horas, minutos e segundos
  var days = Math.floor(distance / (1000 * 60 * 60 * 24));
  var hours = Math.floor((distance % (1000 * 60 * 60 * 24)) / (1000 * 60 * 60));
  var minutes = Math.floor((distance % (1000 * 60 * 60)) / (1000 * 60));
  var seconds = Math.floor((distance % (1000 * 60)) / 1000);

  // Atualizar os elementos HTML com os valores calculados
  document.querySelector(".deal-container-timer-time:nth-child(1)").innerHTML =
    days;
  document.querySelector(".deal-container-timer-time:nth-child(2)").innerHTML =
    hours;
  document.querySelector(".deal-container-timer-time:nth-child(3)").innerHTML =
    minutes;
  document.querySelector(".deal-container-timer-time:nth-child(4)").innerHTML =
    seconds;

  // Verificar se a promoção chegou ao fim
  if (distance < 0) {
    clearInterval(x);
    // Pode adicionar ações adicionais após o término da promoção aqui
    document.querySelector(".deal-container-content-title").innerHTML =
      "Promoção Encerrada";
  }
}, 1000);
