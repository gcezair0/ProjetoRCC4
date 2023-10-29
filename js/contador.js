document.addEventListener("DOMContentLoaded", function () {
  // Define a data de término
  var endDate = new Date("Oct 31, 2023 20:25:00").getTime();

  // Atualiza o contador a cada segundo
  var x = setInterval(function () {
    // Obtém a data e hora atual
    var now = new Date().getTime();

    // Calcula a diferença entre a data de término e a data atual
    var distance = endDate - now;

    // Calcula dias, horas, minutos e segundos
    var days = Math.floor(distance / (1000 * 60 * 60 * 24));
    var hours = Math.floor((distance % (1000 * 60 * 60 * 24)) / (1000 * 60 * 60));
    var minutes = Math.floor((distance % (1000 * 60 * 60)) / (1000 * 60));
    var seconds = Math.floor((distance % (1000 * 60)) / 1000);

    // Atualiza os elementos HTML com os valores calculados
    document.querySelector("#days .deal-container-timer-time").innerHTML = days;
    document.querySelector("#hours .deal-container-timer-time").innerHTML = hours;
    document.querySelector("#minutes .deal-container-timer-time").innerHTML = minutes;
    document.querySelector("#seconds .deal-container-timer-time").innerHTML = seconds;

    // Verifica se a promoção chegou ao fim
    if (distance < 0) {
      clearInterval(x);
      // Pode adicionar ações adicionais após o término da promoção aqui
      document.querySelector(".deal-container-content-title").innerHTML = "Promoção Encerrada";
    }
  }, 1000);
});
