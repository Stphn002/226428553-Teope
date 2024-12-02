let currentSlide = 0;

function moveSlide(direction) {
  const slides = document.querySelectorAll('.carousel-images img');
  const totalSlides = slides.length;
  const carouselImages = document.querySelector('.carousel-images');

  currentSlide = (currentSlide + direction + totalSlides) % totalSlides;

  carouselImages.style.transform = `translateX(-${currentSlide * 100}%)`;
}

function addToCart(productName) {
  alert(`${productName} has been added to your cart!`);
}

function learnMore(productName) {
  alert(`Learn more about ${productName}!`);
}
