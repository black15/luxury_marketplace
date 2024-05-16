document.addEventListener('DOMContentLoaded', function () {
   const navbar = document.querySelector('.navbar');
   const logo = document.querySelector('.logo');
   const second = document.querySelector('.second');

   window.addEventListener('scroll', function () {
      if (window.scrollY > 0) {
         navbar.classList.add('bg-white');
         navbar.classList.add('text-gray-800');
         second.classList.remove('border-b');
         navbar.classList.add('fixed');
         navbar.classList.remove('text-white');
         navbar.classList.remove('sticky');
         logo.classList.add('text-gray-800');
         second.classList.add('text-gray-800');
         second.classList.remove('text-white');
      } else {
         navbar.classList.remove('bg-white');
         second.classList.add('border-b');
         navbar.classList.add('sticky');
         navbar.classList.remove('fixed');
         navbar.classList.remove('text-gray-800');
         navbar.classList.add('text-white');
         logo.classList.remove('text-gray-800');
         second.classList.add('text-white');
      }
   });
});