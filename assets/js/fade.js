document.addEventListener('DOMContentLoaded', function () {
   const navbar = document.querySelector('.navbar');
   const logo = document.querySelector('.logo');
   const second = document.querySelector('.second');
   const profile = document.querySelector('.profile');

   window.addEventListener('load', function () {
      navbar.classList.add('bg-white');
      navbar.classList.add('text-gray-800');
      navbar.classList.remove('text-white');
      // second.classList.remove('border-b');
      // navbar.classList.add('fixed');
      // navbar.classList.remove('sticky');
      logo.classList.add('text-gray-800');
      second.classList.add('text-gray-800');
      second.classList.remove('text-white');
      profile.classList.add('text-gray-800');
   });
});