<!DOCTYPE html>
<html lang="en">

<head>
   <meta charset="UTF-8">
   <meta name="viewport" content="width=device-width, initial-scale=1.0">
   <link rel="stylesheet" href="./assets/css/style.css">
   <link rel="stylesheet" href="./assets/css/carousel.css">
   <link rel="stylesheet" href="./assets/css/testimonials.css">

   <script src="https://cdn.jsdelivr.net/gh/alpinejs/alpine@v2.x.x/dist/alpine.min.js" defer></script>
   <script src="./assets/js/cdn.tailwindcss.js"></script>
   <script src="./assets/js/tailwind.conf.js"></script>
   <title>Your Website</title>
</head>

<body>

   <?php include('./navbar.php'); ?>

   <!-- Item's Pictures  -->
   <section>
      <div class="mb-6">
         <div x-data="{ imgModal : false, imgModalSrc : '', imgModalDesc : '' }">
            <template @img-modal.window="imgModal = true; imgModalSrc = $event.detail.imgModalSrc; imgModalDesc = $event.detail.imgModalDesc;" x-if="imgModal">
               <div x-transition:enter="transition ease-out duration-300" x-transition:enter-start="opacity-0 transform scale-90" x-transition:enter-end="opacity-100 transform scale-100" x-transition:leave="transition ease-in duration-300" x-transition:leave-start="opacity-100 transform scale-100" x-transition:leave-end="opacity-0 transform scale-90" x-on:click.away="imgModalSrc = ''" class="p-2 fixed w-full h-100 inset-0 z-50 overflow-hidden flex justify-center items-center bg-black bg-opacity-75">
                  <div @click.away="imgModal = ''" class="flex flex-col max-w-3xl max-h-full overflow-auto">
                     <div class="z-50">
                        <button @click="imgModal = ''" class="float-right pt-2 pr-2 outline-none focus:outline-none">
                           <svg class="fill-current text-white " xmlns="http://www.w3.org/2000/svg" width="18" height="18" viewBox="0 0 18 18">
                              <path d="M14.53 4.53l-1.06-1.06L9 7.94 4.53 3.47 3.47 4.53 7.94 9l-4.47 4.47 1.06 1.06L9 10.06l4.47 4.47 1.06-1.06L10.06 9z">
                              </path>
                           </svg>
                        </button>
                     </div>
                     <div class="p-2">
                        <img :alt="imgModalSrc" class="object-contain h-1/2-screen" :src="imgModalSrc">
                        <p x-text="imgModalDesc" class="text-center text-white"></p>
                     </div>
                  </div>
               </div>
            </template>
         </div>

         <div x-data="{}" class="">
            <div class="px-5 py-2 lg:px-20 lg:pt-12">
               <div class="-m-1 flex flex-wrap md:-m-2">
                  <div class="flex w-1/2 flex-wrap">
                     <div class="w-1/2 p-1 md:p-2">
                        <div class="bg-gray-400">
                           <a @click="$dispatch('img-modal', {  imgModalSrc: 'https://img.jamesedition.com/listing_images/2023/03/24/14/46/04/55502394-99b3-4ff9-9f6a-ea6278ed43f9/je/1900xxs.jpg', imgModalDesc: '' })" class="cursor-pointer">
                              <img alt="Placeholder" class="block h-full w-full rounded-lg object-cover object-center" src="https://img.jamesedition.com/listing_images/2023/03/24/14/46/04/55502394-99b3-4ff9-9f6a-ea6278ed43f9/je/1900xxs.jpg">
                           </a>
                        </div>
                     </div>
                     <div class="w-1/2 p-1 md:p-2">
                        <div class="bg-gray-400">
                           <a @click="$dispatch('img-modal', {  imgModalSrc: 'https://img.jamesedition.com/listing_images/2023/03/24/14/45/54/da535362-7293-44cb-ac77-a7f2dffd0913/je/1900xxs.jpg', imgModalDesc: '' })" class="cursor-pointer">
                              <img alt="Placeholder" class="object-fit w-full" src="https://img.jamesedition.com/listing_images/2023/03/24/14/45/54/da535362-7293-44cb-ac77-a7f2dffd0913/je/1900xxs.jpg">
                           </a>
                        </div>
                     </div>
                     <div class="w-full p-1 md:p-2">
                        <div class="bg-gray-400">
                           <a @click="$dispatch('img-modal', {  imgModalSrc: 'https://img.jamesedition.com/listing_images/2023/03/24/14/46/04/0697bd23-5cdd-4d92-abf2-8bdb9940ced6/je/1900xxs.jpg', imgModalDesc: '' })" class="cursor-pointer">
                              <img alt="Placeholder" class="object-fit w-full" src="https://img.jamesedition.com/listing_images/2023/03/24/14/46/04/0697bd23-5cdd-4d92-abf2-8bdb9940ced6/je/1900xxs.jpg">
                           </a>
                        </div>
                     </div>
                  </div>
                  <div class="flex w-1/2 flex-wrap">
                     <div class="w-full p-1 md:p-2">
                        <div class="bg-gray-400">
                           <a @click="$dispatch('img-modal', {  imgModalSrc: 'https://img.jamesedition.com/listing_images/2023/03/24/14/45/54/ed83c9a4-9302-4def-82a4-57ec3929e8fd/je/1900xxs.jpg', imgModalDesc: '' })" class="cursor-pointer">
                              <img alt="Placeholder" class="object-fit w-full" src="https://img.jamesedition.com/listing_images/2023/03/24/14/45/54/ed83c9a4-9302-4def-82a4-57ec3929e8fd/je/1900xxs.jpg">
                           </a>
                        </div>
                     </div>
                     <div class="w-1/2 p-1 md:p-2">
                        <div class="bg-gray-400">
                           <a @click="$dispatch('img-modal', {  imgModalSrc: 'https://img.jamesedition.com/listing_images/2023/03/24/14/45/54/78099b2c-6d30-4ee3-9e0c-9ff936abad5c/je/1900xxs.jpg', imgModalDesc: '' })" class="cursor-pointer">
                              <img alt="Placeholder" class="object-fit w-full" src="https://img.jamesedition.com/listing_images/2023/03/24/14/45/54/78099b2c-6d30-4ee3-9e0c-9ff936abad5c/je/1900xxs.jpg">
                           </a>
                        </div>
                     </div>
                     <div class="w-1/2 p-1 md:p-2">
                        <div class="bg-gray-400">
                           <a @click="$dispatch('img-modal', {  imgModalSrc: 'https://img.jamesedition.com/listing_images/2023/03/24/14/45/55/19ed901f-df24-4440-b4e7-81134828248e/je/1900xxs.jpg', imgModalDesc: '' })" class="cursor-pointer">
                              <img alt="Placeholder" class="object-fit w-full" src="https://img.jamesedition.com/listing_images/2023/03/24/14/45/55/19ed901f-df24-4440-b4e7-81134828248e/je/1900xxs.jpg">
                           </a>
                        </div>
                     </div>
                  </div>
               </div>
            </div>
         </div>
      </div>
   </section>

   <!-- Item Discreption -->
   <section class="px-6 lg:px-20 mx-auto flex flex-col lg:flex-row justify-center space-y-6 lg:space-y-0 lg:space-x-12">
      <div class="w-full lg:w-[75%]">
         <div class="flex flex-row justify-between border-b border-gray-300 py-5">
            <div class="flex flex-col justify-end space-y-3">
               <h1 class="text-gray-900 text-3xl font-ptsans">
                  2021 Bugatti Divo awd
               </h1>
               <span class="text-gray-600 font-medium">
                  Dubai, United Arab Emirates
               </span>
            </div>
            <h1 class="text-gray-900 text-3xl font-ptsans">
               $47,000
            </h1>
         </div>
         <div class="flex flex-row overflow-x-auto items-center space-x-12 py-6 border-b border-gray-300">
            <div class="flex flex-col items-start justify-center">
               <span class="text-gray-900 font-poppins font-medium">2021</span>
               <span class="text-gray-400 font-poppins font-medium">Year</span>
            </div>
            <div class="flex flex-col items-start justify-center">
               <span class="text-gray-900 font-poppins font-medium">367 Km</span>
               <span class="text-gray-400 font-poppins font-medium">Mileage</span>
            </div>
            <div class="flex flex-col items-start justify-center">
               <span class="text-gray-900 font-poppins font-medium">16 Cylinder</span>
               <span class="text-gray-400 font-poppins font-medium">Engine</span>
            </div>
            <div class="flex flex-col items-start justify-center">
               <span class="text-gray-900 font-poppins font-medium">Automatic</span>
               <span class="text-gray-400 font-poppins font-medium">Gearbox</span>
            </div>
            <div class="flex flex-col items-start justify-center">
               <span class="text-gray-900 font-poppins font-medium">Petrol</span>
               <span class="text-gray-400 font-poppins font-medium">Fuel Type</span>
            </div>
         </div>
         <div class="flex flex-col py-6 border-b border-gray-300">
            <h2 class="text-gray-900 text-2xl font-ptsans">
               About This Item
            </h2>
            <p class="text-gray-700 text-lg font-poppins">
               BUGATTI DIV0 1 OUT OF 40 CARS IN THE WORLD
            </p>
         </div>
         <div class="flex flex-col items-start justify-center space-y-6 py-6 border-b border-gray-300">
            <h1 class="text-gray-900 text-2xl font-ptsans">
               Car Details
            </h1>
            <div class="flex flex-row items-center justify-center space-x-16">
               <div class="flex flex-col items-start space-y-6">
                  <span class="text-gray-600 font-poppins">VAT Type</span>
                  <span class="text-gray-600 font-poppins">Year</span>
                  <span class="text-gray-600 font-poppins">Location</span>
                  <span class="text-gray-600 font-poppins">Address</span>
                  <span class="text-gray-600 font-poppins">Mileage</span>
                  <span class="text-gray-600 font-poppins">Engine</span>
                  <span class="text-gray-600 font-poppins">Car type</span>
                  <span class="text-gray-600 font-poppins">Drive</span>
                  <span class="text-gray-600 font-poppins">Power</span>
                  <span class="text-gray-600 font-poppins">Color</span>
                  <span class="text-gray-600 font-poppins">Condition</span>
               </div>
               <div class="flex flex-col items-start space-y-6">
                  <span class="text-gray-900 font-poppins">VAT Execluded</span>
                  <span class="text-gray-900 font-poppins">2021</span>
                  <span class="text-gray-900 font-poppins">Dubai, United Arab Emirates</span>
                  <span class="text-gray-900 font-poppins">Downtown Dubai - Dubai - United Arab Emirates</span>
                  <span class="text-gray-900 font-poppins">367 km (228 mi)</span>
                  <span class="text-gray-900 font-poppins">16 Cylinder</span>
                  <span class="text-gray-900 font-poppins">Coupe</span>
                  <span class="text-gray-900 font-poppins">LHD</span>
                  <span class="text-gray-900 font-poppins">1500 hp (1119 kw)</span>
                  <span class="text-gray-900 font-poppins">Blue</span>
                  <span class="text-gray-900 font-poppins">New</span>
               </div>
            </div>
         </div>
         <div class="flex flex-col items-start justify-center space-y-6 py-6 border-b border-gray-300">
            <h2 class="text-gray-900 text-2xl font-ptsans">
               Ask a Question
            </h2>
            <div class="flex items-center justify-center space-x-3">
               <img class="w-10" src="./icons/profile-circle.svg" alt="" srcset="">
               <span class="text-sm font-poppins">
                  hunterofbugs61@gmail.com
               </span>
            </div>
            <textarea id="message" rows="4" class="block p-6 w-full text-md text-gray-900 border border-gray-300 focus:ring-blue-500 focus:border-blue-500" placeholder="Leave a comment..."></textarea>
            <button class="text-gray-100 bg-[#19818A] transition ease-all-in duration-300 hover:bg-[#148F77] py-3.5 px-12" type="submit">Ask a
               Question</button>
         </div>
      </div>
      <div class="w-full lg:w-[25%]">
         <div class="border border-gray-200">
            <h3 class="text-gray-800 text-lg font-rubik mx-2 mt-6">Contact agent</h3>
            <h3 class="text-gray-800 text-lg font-rubik mx-2">info@emirationemotors.com</h3>
            <h3 class="text-gray-800 text-lg font-rubik mx-2 mb-6">info@emirationemotors.com</h3>

            <form class="max-w-md mx-auto border border-gray-200 p-4">
               <div class="grid md:grid-cols-2 md:gap-6">
                  <div class="relative z-0 w-full mb-5 group">
                     <input type="text" name="floating_first_name" id="floating_first_name" class="block py-2.5 px-0 w-full text-sm text-gray-900 bg-transparent border-0 border-b-2 border-gray-300 appearance-none dark:text-white dark:border-gray-600 dark:focus:border-blue-500 focus:outline-none focus:ring-0 focus:border-blue-600 peer" placeholder=" " required />
                     <label for="floating_first_name" class="peer-focus:font-medium absolute text-sm text-gray-500 dark:text-gray-400 duration-300 transform -translate-y-6 scale-75 top-3 -z-10 origin-[0] peer-focus:start-0 rtl:peer-focus:translate-x-1/4 peer-focus:text-blue-600 peer-focus:dark:text-blue-500 peer-placeholder-shown:scale-100 peer-placeholder-shown:translate-y-0 peer-focus:scale-75 peer-focus:-translate-y-6">First
                        name</label>
                  </div>
                  <div class="relative z-0 w-full mb-5 group">
                     <input type="text" name="floating_last_name" id="floating_last_name" class="block py-2.5 px-0 w-full text-sm text-gray-900 bg-transparent border-0 border-b-2 border-gray-300 appearance-none dark:text-white dark:border-gray-600 dark:focus:border-blue-500 focus:outline-none focus:ring-0 focus:border-blue-600 peer" placeholder=" " required />
                     <label for="floating_last_name" class="peer-focus:font-medium absolute text-sm text-gray-500 dark:text-gray-400 duration-300 transform -translate-y-6 scale-75 top-3 -z-10 origin-[0] peer-focus:start-0 rtl:peer-focus:translate-x-1/4 peer-focus:text-blue-600 peer-focus:dark:text-blue-500 peer-placeholder-shown:scale-100 peer-placeholder-shown:translate-y-0 peer-focus:scale-75 peer-focus:-translate-y-6">Last
                        name</label>
                  </div>
               </div>
               <div class="relative z-0 w-full mb-5 group">
                  <input type="email" name="floating_email" id="floating_email" class="block py-2.5 px-0 w-full text-sm text-gray-900 bg-transparent border-0 border-b-2 border-gray-300 appearance-none dark:text-white dark:border-gray-600 dark:focus:border-blue-500 focus:outline-none focus:ring-0 focus:border-blue-600 peer" placeholder=" " required />
                  <label for="floating_email" class="peer-focus:font-medium absolute text-sm text-gray-500 dark:text-gray-400 duration-300 transform -translate-y-6 scale-75 top-3 -z-10 origin-[0] peer-focus:start-0 rtl:peer-focus:translate-x-1/4 rtl:peer-focus:left-auto peer-focus:text-blue-600 peer-focus:dark:text-blue-500 peer-placeholder-shown:scale-100 peer-placeholder-shown:translate-y-0 peer-focus:scale-75 peer-focus:-translate-y-6">Email
                     address</label>
               </div>
               <div class="relative z-0 w-full mb-5 group">
                  <input type="tel" pattern="[0-9]{3}-[0-9]{3}-[0-9]{4}" name="floating_phone" id="floating_phone" class="block py-2.5 px-0 w-full text-sm text-gray-900 bg-transparent border-0 border-b-2 border-gray-300 appearance-none dark:text-white dark:border-gray-600 dark:focus:border-blue-500 focus:outline-none focus:ring-0 focus:border-blue-600 peer" placeholder=" " required />
                  <label for="floating_phone" class="peer-focus:font-medium absolute text-sm text-gray-500 dark:text-gray-400 duration-300 transform -translate-y-6 scale-75 top-3 -z-10 origin-[0] peer-focus:start-0 rtl:peer-focus:translate-x-1/4 peer-focus:text-blue-600 peer-focus:dark:text-blue-500 peer-placeholder-shown:scale-100 peer-placeholder-shown:translate-y-0 peer-focus:scale-75 peer-focus:-translate-y-6">Phone
                     number (123-456-7890)</label>
               </div>
               <div class="relative z-0 w-full mb-5 group">
                  <textarea class="block py-2.5 px-3 w-full text-gray-900 text-lg bg-transparent border border-b-2 border-gray-300 appearance-none dark:text-white dark:border-gray-600 dark:focus:border-blue-500 focus:outline-none focus:ring-0 focus:border-blue-600 peer" name="" id="" cols="20" rows="3">I'm interested in 2021 Bugatti Divo awd (Dubai, Dubai, United Arab Emirates).</textarea>
               </div>
               <button type="submit" class="text-white bg-[#19818A] hover:bg-[#148F77] transition transform duration-300 ease-in-out font-medium w-full px-5 py-2.5 text-center">Send
                  a message</button>
            </form>
            <div class="flex items-center px-4 pt-8 pb-4">
               <input id="terms" type="checkbox" value="" class="w-4 h-4 border border-gray-300 rounded bg-gray-50 focus:ring-3 focus:ring-blue-300 dark:bg-gray-700 dark:border-gray-600 dark:focus:ring-blue-600 dark:ring-offset-gray-800 dark:focus:ring-offset-gray-800" required>
               <label for="terms" class="ms-2 text-sm font-medium text-gray-600 dark:text-gray-300">Notify me via email
                  when similar listings appear</label>
            </div>
            <div class="flex items-center px-4 pb-8">
               <input id="terms" type="checkbox" value="" class="w-4 h-4 border border-gray-300 rounded bg-gray-50 focus:ring-3 focus:ring-blue-300 dark:bg-gray-700 dark:border-gray-600 dark:focus:ring-blue-600 dark:ring-offset-gray-800 dark:focus:ring-offset-gray-800" required>
               <label for="terms" class="ms-2 text-sm font-medium text-gray-600 dark:text-gray-300">I agree to Terms of
                  use and Privacy Policy</label>
            </div>
         </div>
      </div>
   </section>

   <!-- Also Like Section -->
   <section class="px-6 lg:px-20 mt-20 mx-auto flex flex-col space-y-6">
      <h1 class="font-ptsans text-4xl text-gray-900">
         You Might Also Like
      </h1>
      <div class="grid md:grid-cols-2 lg:grid-cols-3 gap-6">
         <!-- First Carousel -->
         <div class="relative overflow-hidden" id="carousel1">
            <div class="slides h-[250px] lg:h-[350px]">
               <!-- Slide 1 -->
               <div class=" slide">
                  <img src="https://img.jamesedition.com/listing_images/2023/03/15/13/41/56/eb634881-5257-481e-869c-bc76d0b402f5/je/556x342xcxm.jpg" alt="Slide 1">
               </div>

               <!-- Slide 2 -->
               <div class="slide">
                  <img src="https://img.jamesedition.com/listing_images/2023/03/15/13/41/55/82002e60-c7ef-4174-8d3f-28b5e23b6956/je/556x342xcxm.jpg" alt="Slide 2">
               </div>

               <!-- Slide 3 -->
               <div class="slide">
                  <img src="https://img.jamesedition.com/listing_images/2023/03/15/13/41/56/f118ed76-938c-4430-b7a7-011492e39f19/je/556x342xcxm.jpg" alt="Slide 3">
               </div>
            </div>

            <!-- Description -->
            <div class="flex flex-col items-start justify-center space-y-1 px-4 py-3 border border-gray-300">
               <span class="text-gray-900 font-poppins font-medium">Price on request</span>
               <span class="text-gray-700 text-sm font-poppins">2024 Bugatti Mistral</span>
               <span class="text-gray-500 text-sm font-poppins">Oran, Algeria</span>
            </div>

            <!-- Navigation Arrows -->
            <div class="arrow arrow-left" onclick="prevSlide('carousel1')">&#10094;</div>
            <div class="arrow arrow-right" onclick="nextSlide('carousel1')">&#10095;</div>
         </div>

         <!-- Second Carousel -->
         <div class="relative overflow-hidden" id="carousel2">
            <div class="slides h-[250px] lg:h-[350px]">
               <!-- Slide 1 -->
               <div class="slide">
                  <img src="https://img.jamesedition.com/listing_images/2023/03/15/13/41/56/f118ed76-938c-4430-b7a7-011492e39f19/je/556x342xcxm.jpg" alt="Slide 1">
               </div>

               <!-- Slide 2 -->
               <div class="slide">
                  <img src="https://img.jamesedition.com/listing_images/2023/03/15/13/41/56/f118ed76-938c-4430-b7a7-011492e39f19/je/556x342xcxm.jpg" alt="Slide 1">
               </div>

               <!-- Slide 3 -->
               <div class="slide">
                  <img src="https://img.jamesedition.com/listing_images/2023/03/15/13/41/56/f118ed76-938c-4430-b7a7-011492e39f19/je/556x342xcxm.jpg" alt="Slide 1">
               </div>
            </div>

            <!-- Description -->
            <div class="flex flex-col items-start justify-center space-y-1 px-4 py-3 border border-gray-300">
               <span class="text-gray-900 font-poppins font-medium">Price on request</span>
               <span class="text-gray-700 text-sm font-poppins">2024 Bugatti Mistral</span>
               <span class="text-gray-500 text-sm font-poppins">Oran, Algeria</span>
            </div>

            <!-- Navigation Arrows -->
            <div class="arrow arrow-left" onclick="prevSlide('carousel2')">&#10094;</div>
            <div class="arrow arrow-right" onclick="nextSlide('carousel2')">&#10095;</div>
         </div>

         <!-- Third Carousel -->
         <div class="relative overflow-hidden" id="carousel3">
            <div class="slides h-[250px] lg:h-[350px]">
               <!-- Slide 1 -->
               <div class="slide">
                  <img src="https://img.jamesedition.com/listing_images/2023/03/15/13/41/56/f118ed76-938c-4430-b7a7-011492e39f19/je/556x342xcxm.jpg" alt="Slide 1">
               </div>

               <!-- Slide 2 -->
               <div class="slide">
                  <img src="https://img.jamesedition.com/listing_images/2023/03/15/13/41/56/f118ed76-938c-4430-b7a7-011492e39f19/je/556x342xcxm.jpg" alt="Slide 1">
               </div>

               <!-- Slide 3 -->
               <div class="slide">
                  <img src="https://img.jamesedition.com/listing_images/2023/03/15/13/41/56/f118ed76-938c-4430-b7a7-011492e39f19/je/556x342xcxm.jpg" alt="Slide 1">
               </div>
            </div>

            <!-- Description -->
            <div class="flex flex-col items-start justify-center space-y-1 px-4 py-3 border border-gray-300">
               <span class="text-gray-900 font-poppins font-medium">Price on request</span>
               <span class="text-gray-700 text-sm font-poppins">2024 Bugatti Mistral</span>
               <span class="text-gray-500 text-sm font-poppins">Oran, Algeria</span>
            </div>

            <!-- Navigation Arrows -->
            <div class="arrow arrow-left" onclick="prevSlide('carousel3')">&#10094;</div>
            <div class="arrow arrow-right" onclick="nextSlide('carousel3')">&#10095;</div>
         </div>

      </div>
   </section>

   <!-- Newsletter Section -->
   <section class="px-6 lg:px-20 mx-auto flex flex-col lg:flex-row items-start lg:items-center lg:justify-between border-t border-gray-200 my-20 pt-20 px-6 lg:px-0 space-y-6 lg:space-y-0">
      <div class="flex flex-col space-y-6">
         <h1 class="text-gray-800 text-2xl lg:text-3xl font-ptsans">Weekly Luxury Newsletter
         </h1>
         <p class="max-w-lg text-gray-600 text-sm lg:text-md font-rubik-light">
            Receive the beautifully curated selection of what’s trending in luxury with inside stories and tips from our
            experts
         </p>
      </div>
      <div>
         <form class="flex flex-col space-y-3 items-center justify-center" action="">

            <input type="email" id="email" aria-describedby="helper-text-explanation" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5  dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500" placeholder="Email">
            <input class="bg-black text-gray-100 text-md font-poppins w-full p-2 cursor-pointer" type="button" value="SUBSCRIBE" />

            <p id="helper-text-explanation" class="mt-2 text-sm text-gray-500 dark:text-gray-400">We’ll never share your
               details. Read our <a href="#" class="font-medium text-blue-600 hover:underline dark:text-blue-500">Privacy Policy</a>.</p>
         </form>
      </div>
   </section>

   <footer class="bg-black text-gray-100">
      <div class="mx-20 space-y-8 px-4 py-16 sm:px-6 lg:space-y-16 lg:px-8">
         <div class="sm:flex sm:items-center sm:justify-between">
            <div class="text-4xl font-ptsans">
               ZakiEdition
            </div>
            <ul class="mt-8 flex justify-start gap-6 sm:mt-0 sm:justify-end">
               <li>
                  <a href="#" rel="noreferrer" target="_blank" class="text-gray-100 transition hover:opacity-75">
                     <span class="sr-only">Facebook</span>

                     <svg class="h-6 w-6" fill="currentColor" viewBox="0 0 24 24" aria-hidden="true">
                        <path fill-rule="evenodd" d="M22 12c0-5.523-4.477-10-10-10S2 6.477 2 12c0 4.991 3.657 9.128 8.438 9.878v-6.987h-2.54V12h2.54V9.797c0-2.506 1.492-3.89 3.777-3.89 1.094 0 2.238.195 2.238.195v2.46h-1.26c-1.243 0-1.63.771-1.63 1.562V12h2.773l-.443 2.89h-2.33v6.988C18.343 21.128 22 16.991 22 12z" clip-rule="evenodd" />
                     </svg>
                  </a>
               </li>

               <li>
                  <a href="#" rel="noreferrer" target="_blank" class="text-gray-100 transition hover:opacity-75">
                     <span class="sr-only">Instagram</span>

                     <svg class="h-6 w-6" fill="currentColor" viewBox="0 0 24 24" aria-hidden="true">
                        <path fill-rule="evenodd" d="M12.315 2c2.43 0 2.784.013 3.808.06 1.064.049 1.791.218 2.427.465a4.902 4.902 0 011.772 1.153 4.902 4.902 0 011.153 1.772c.247.636.416 1.363.465 2.427.048 1.067.06 1.407.06 4.123v.08c0 2.643-.012 2.987-.06 4.043-.049 1.064-.218 1.791-.465 2.427a4.902 4.902 0 01-1.153 1.772 4.902 4.902 0 01-1.772 1.153c-.636.247-1.363.416-2.427.465-1.067.048-1.407.06-4.123.06h-.08c-2.643 0-2.987-.012-4.043-.06-1.064-.049-1.791-.218-2.427-.465a4.902 4.902 0 01-1.772-1.153 4.902 4.902 0 01-1.153-1.772c-.247-.636-.416-1.363-.465-2.427-.047-1.024-.06-1.379-.06-3.808v-.63c0-2.43.013-2.784.06-3.808.049-1.064.218-1.791.465-2.427a4.902 4.902 0 011.153-1.772A4.902 4.902 0 015.45 2.525c.636-.247 1.363-.416 2.427-.465C8.901 2.013 9.256 2 11.685 2h.63zm-.081 1.802h-.468c-2.456 0-2.784.011-3.807.058-.975.045-1.504.207-1.857.344-.467.182-.8.398-1.15.748-.35.35-.566.683-.748 1.15-.137.353-.3.882-.344 1.857-.047 1.023-.058 1.351-.058 3.807v.468c0 2.456.011 2.784.058 3.807.045.975.207 1.504.344 1.857.182.466.399.8.748 1.15.35.35.683.566 1.15.748.353.137.882.3 1.857.344 1.054.048 1.37.058 4.041.058h.08c2.597 0 2.917-.01 3.96-.058.976-.045 1.505-.207 1.858-.344.466-.182.8-.398 1.15-.748.35-.35.566-.683.748-1.15.137-.353.3-.882.344-1.857.048-1.055.058-1.37.058-4.041v-.08c0-2.597-.01-2.917-.058-3.96-.045-.976-.207-1.505-.344-1.858a3.097 3.097 0 00-.748-1.15 3.098 3.098 0 00-1.15-.748c-.353-.137-.882-.3-1.857-.344-1.023-.047-1.351-.058-3.807-.058zM12 6.865a5.135 5.135 0 110 10.27 5.135 5.135 0 010-10.27zm0 1.802a3.333 3.333 0 100 6.666 3.333 3.333 0 000-6.666zm5.338-3.205a1.2 1.2 0 110 2.4 1.2 1.2 0 010-2.4z" clip-rule="evenodd" />
                     </svg>
                  </a>
               </li>

               <li>
                  <a href="#" rel="noreferrer" target="_blank" class="text-gray-100 transition hover:opacity-75">
                     <span class="sr-only">Twitter</span>

                     <svg class="h-6 w-6" fill="currentColor" viewBox="0 0 24 24" aria-hidden="true">
                        <path d="M8.29 20.251c7.547 0 11.675-6.253 11.675-11.675 0-.178 0-.355-.012-.53A8.348 8.348 0 0022 5.92a8.19 8.19 0 01-2.357.646 4.118 4.118 0 001.804-2.27 8.224 8.224 0 01-2.605.996 4.107 4.107 0 00-6.993 3.743 11.65 11.65 0 01-8.457-4.287 4.106 4.106 0 001.27 5.477A4.072 4.072 0 012.8 9.713v.052a4.105 4.105 0 003.292 4.022 4.095 4.095 0 01-1.853.07 4.108 4.108 0 003.834 2.85A8.233 8.233 0 012 18.407a11.616 11.616 0 006.29 1.84" />
                     </svg>
                  </a>
               </li>

               <li>
                  <a href="#" rel="noreferrer" target="_blank" class="text-gray-100 transition hover:opacity-75">
                     <span class="sr-only">GitHub</span>

                     <svg class="h-6 w-6" fill="currentColor" viewBox="0 0 24 24" aria-hidden="true">
                        <path fill-rule="evenodd" d="M12 2C6.477 2 2 6.484 2 12.017c0 4.425 2.865 8.18 6.839 9.504.5.092.682-.217.682-.483 0-.237-.008-.868-.013-1.703-2.782.605-3.369-1.343-3.369-1.343-.454-1.158-1.11-1.466-1.11-1.466-.908-.62.069-.608.069-.608 1.003.07 1.531 1.032 1.531 1.032.892 1.53 2.341 1.088 2.91.832.092-.647.35-1.088.636-1.338-2.22-.253-4.555-1.113-4.555-4.951 0-1.093.39-1.988 1.029-2.688-.103-.253-.446-1.272.098-2.65 0 0 .84-.27 2.75 1.026A9.564 9.564 0 0112 6.844c.85.004 1.705.115 2.504.337 1.909-1.296 2.747-1.027 2.747-1.027.546 1.379.202 2.398.1 2.651.64.7 1.028 1.595 1.028 2.688 0 3.848-2.339 4.695-4.566 4.943.359.309.678.92.678 1.855 0 1.338-.012 2.419-.012 2.747 0 .268.18.58.688.482A10.019 10.019 0 0022 12.017C22 6.484 17.522 2 12 2z" clip-rule="evenodd" />
                     </svg>
                  </a>
               </li>

               <li>
                  <a href="#" rel="noreferrer" target="_blank" class="text-gray-100 transition hover:opacity-75">
                     <span class="sr-only">Dribbble</span>

                     <svg class="h-6 w-6" fill="currentColor" viewBox="0 0 24 24" aria-hidden="true">
                        <path fill-rule="evenodd" d="M12 2C6.48 2 2 6.48 2 12s4.48 10 10 10c5.51 0 10-4.48 10-10S17.51 2 12 2zm6.605 4.61a8.502 8.502 0 011.93 5.314c-.281-.054-3.101-.629-5.943-.271-.065-.141-.12-.293-.184-.445a25.416 25.416 0 00-.564-1.236c3.145-1.28 4.577-3.124 4.761-3.362zM12 3.475c2.17 0 4.154.813 5.662 2.148-.152.216-1.443 1.941-4.48 3.08-1.399-2.57-2.95-4.675-3.189-5A8.687 8.687 0 0112 3.475zm-3.633.803a53.896 53.896 0 013.167 4.935c-3.992 1.063-7.517 1.04-7.896 1.04a8.581 8.581 0 014.729-5.975zM3.453 12.01v-.26c.37.01 4.512.065 8.775-1.215.25.477.477.965.694 1.453-.109.033-.228.065-.336.098-4.404 1.42-6.747 5.303-6.942 5.629a8.522 8.522 0 01-2.19-5.705zM12 20.547a8.482 8.482 0 01-5.239-1.8c.152-.315 1.888-3.656 6.703-5.337.022-.01.033-.01.054-.022a35.318 35.318 0 011.823 6.475 8.4 8.4 0 01-3.341.684zm4.761-1.465c-.086-.52-.542-3.015-1.659-6.084 2.679-.423 5.022.271 5.314.369a8.468 8.468 0 01-3.655 5.715z" clip-rule="evenodd" />
                     </svg>
                  </a>
               </li>
            </ul>
         </div>

         <div class="grid grid-cols-1 gap-8 border-t border-gray-700 pt-8 sm:grid-cols-2 lg:grid-cols-4 lg:pt-16">
            <div>
               <p class="font-medium text-gray-100">Services</p>

               <ul class="mt-6 space-y-4 text-sm">
                  <li>
                     <a href="#" class="text-gray-200 transition hover:opacity-75">
                        1on1 Coaching
                     </a>
                  </li>

                  <li>
                     <a href="#" class="text-gray-200 transition hover:opacity-75">
                        Company Review
                     </a>
                  </li>

                  <li>
                     <a href="#" class="text-gray-200 transition hover:opacity-75">
                        Accounts Review
                     </a>
                  </li>

                  <li>
                     <a href="#" class="text-gray-200 transition hover:opacity-75">
                        HR Consulting
                     </a>
                  </li>

                  <li>
                     <a href="#" class="text-gray-200 transition hover:opacity-75">
                        SEO Optimisation
                     </a>
                  </li>
               </ul>
            </div>

            <div>
               <p class="font-medium text-gray-100">Company</p>

               <ul class="mt-6 space-y-4 text-sm">
                  <li>
                     <a href="#" class="text-gray-200 transition hover:opacity-75">
                        About
                     </a>
                  </li>

                  <li>
                     <a href="#" class="text-gray-200 transition hover:opacity-75">
                        Meet the Team
                     </a>
                  </li>

                  <li>
                     <a href="#" class="text-gray-200 transition hover:opacity-75">
                        Accounts Review
                     </a>
                  </li>
               </ul>
            </div>

            <div>
               <p class="font-medium text-gray-100">Helpful Links</p>

               <ul class="mt-6 space-y-4 text-sm">
                  <li>
                     <a href="#" class="text-gray-200 transition hover:opacity-75">
                        Contact
                     </a>
                  </li>

                  <li>
                     <a href="#" class="text-gray-200 transition hover:opacity-75">
                        FAQs
                     </a>
                  </li>

                  <li>
                     <a href="#" class="text-gray-200 transition hover:opacity-75">
                        Live Chat
                     </a>
                  </li>
               </ul>
            </div>

            <div>
               <p class="font-medium text-gray-100">Legal</p>

               <ul class="mt-6 space-y-4 text-sm">
                  <li>
                     <a href="#" class="text-gray-200 transition hover:opacity-75">
                        Accessibility
                     </a>
                  </li>

                  <li>
                     <a href="#" class="text-gray-200 transition hover:opacity-75">
                        Returns Policy
                     </a>
                  </li>

                  <li>
                     <a href="#" class="text-gray-200 transition hover:opacity-75">
                        Refund Policy
                     </a>
                  </li>

                  <li>
                     <a href="#" class="text-gray-200 transition hover:opacity-75">
                        Hiring Statistics
                     </a>
                  </li>
               </ul>
            </div>
         </div>

         <p class="text-xs text-gray-200">
            &copy; 2023. ZakiEdition. All rights reserved.
         </p>
      </div>
   </footer>

   <script src="./assets/js/carousel.js"></script>
   <script src="./assets/js/fade.js"></script>
   <script src="./assets/js/sidebar.js"></script>
</body>

</html>