let currentIndex = 0;

//Próximo produto
function nextSlide() {
  //
  const itemWidth = document.querySelector('.products-grid-card').offsetWidth;
  const totalItems = document.querySelectorAll('.products-grid-card').length;
  const container = document.querySelector('.products-grid-container');

  if (currentIndex < totalItems - 1) {
    currentIndex++;
    container.style.transform = `translateX(${-currentIndex * itemWidth}px)`;
  }
}

//Produto Anterior
function prevSlide() {
  const itemWidth = document.querySelector('.products-grid-card').offsetWidth;
  const container = document.querySelector('.products-grid-container');

  if (currentIndex > 0) {
    currentIndex--;
    container.style.transform = `translateX(${-currentIndex * itemWidth}px)`;
  }
}