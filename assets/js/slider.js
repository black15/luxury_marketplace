document.addEventListener('DOMContentLoaded', function () {
   const slides = document.querySelector('.slides');
   const slideElements = document.querySelectorAll('.slide');
   let currentSlide = 0;

   function nextSlide() {
      const nextIndex = (currentSlide + 1) % slideElements.length;

      slideElements[currentSlide].classList.remove('active');
      slideElements[nextIndex].classList.add('active');

      currentSlide = nextIndex;
   }

   setInterval(nextSlide, 3000); // Change slide every 3 seconds
});