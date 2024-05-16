// Function to show the current slide of the specified carousel
function showSlide(carouselId, index) {
   const carousel = document.getElementById(carouselId);
   const slides = carousel.querySelectorAll('.slide');
   const newPosition = -index * 100 + '%';
   carousel.querySelector('.slides').style.transform = 'translateX(' + newPosition + ')';
}

// Function to move to the next slide of the specified carousel
function nextSlide(carouselId) {
   const carousel = document.getElementById(carouselId);
   const slides = carousel.querySelectorAll('.slide');
   const currentIndex = parseInt(carousel.dataset.currentIndex || 0);
   const nextIndex = (currentIndex + 1) % slides.length;
   carousel.dataset.currentIndex = nextIndex;
   showSlide(carouselId, nextIndex);
}

// Function to move to the previous slide of the specified carousel
function prevSlide(carouselId) {
   const carousel = document.getElementById(carouselId);
   const slides = carousel.querySelectorAll('.slide');
   const currentIndex = parseInt(carousel.dataset.currentIndex || 0);
   const prevIndex = (currentIndex - 1 + slides.length) % slides.length;
   carousel.dataset.currentIndex = prevIndex;
   showSlide(carouselId, prevIndex);
}