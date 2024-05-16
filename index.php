<!DOCTYPE html>
<html lang="en">

<head>
   <meta charset="UTF-8">
   <meta name="viewport" content="width=device-width, initial-scale=1.0">
   <link rel="stylesheet" href="./assets/css/style.css">
   <link rel="stylesheet" href="./assets/css/testimonials.css">

   <script src="./assets/js/cdn.tailwindcss.js"></script>
   <script src="./assets/js/tailwind.conf.js"></script>
   <title>Your Website</title>
</head>

<body>

   <div class="hero overflow-x-hidden">
      <?php include('./navbar.php'); ?>

      <h1 class="hero-desc max-w-3xl absolute bottom-12 px-6 lg:px-20 font-ptsans text-3xl lg:text-6xl w-full">The World's
         Luxury Marketplace</h1>
   </div>

   <!-- Featured Categories Section -->
   <section class="container mx-auto mt-10 mb-20 lg:px-0 px-6">
      <div class="flex flex-col space-y-6 justify-center">
         <h1 class="text-3xl font-medium font-ptsans">Featured Categories</h1>
         <div class="flex flex-col lg:flex-row items-center justify-center space-y-6 lg:space-y-0 lg:space-x-10">
            <a href="cars.php" class="relative lg:w-[370px] lg:h-[490px] overflow-hidden shadow-lg cursor-pointer">
               <img class="object-cover w-full h-full transform transition duration-500 hover:scale-105" src="https://hips.hearstapps.com/hmg-prod/images/2023-mclaren-artura-101-1655218102.jpg?crop=0.8889431489846579xw:1xh;center,top&resize=1200:*" alt=" Flower and sky" />

               <div class="absolute bottom-0 left-0 px-6 py-4">
                  <h4 class="mb-3 text-3xl font-semibold font-ptsans tracking-tight text-white">Cars</h4>
                  <p class="leading-normal text-gray-100">100,00 Listing</p>
               </div>
            </a>
            <a href="cars.php" class="relative lg:w-[370px] lg:h-[490px] overflow-hidden shadow-lg cursor-pointer">
               <img class="object-cover w-full h-full transform transition duration-500 hover:scale-105" src="https://product.hstatic.net/200000230193/product/bus-34-buong_10_de4fa6f8e4484e91b00911c836a8cfa3_master.jpg" alt=" Flower and sky" />

               <div class="absolute bottom-0 left-0 px-6 py-4">
                  <h4 class="mb-3 text-3xl font-semibold font-ptsans tracking-tight text-white">Buses</h4>
                  <p class="leading-normal text-gray-100">200 Listing</p>
               </div>
            </a>
            <a href="cars.php" class="relative lg:w-[370px] lg:h-[490px] overflow-hidden shadow-lg cursor-pointer">
               <img class="object-cover w-full h-full transform transition duration-500 hover:scale-105" src="https://www.autocar.co.uk/sites/autocar.co.uk/files/styles/gallery_slide/public/images/car-reviews/first-drives/legacy/20220707-dsc_0236.jpg?itok=Bho8jXuZ" alt=" Flower and sky" />

               <div class="absolute bottom-0 left-0 px-6 py-4">
                  <h4 class="mb-3 text-3xl font-semibold font-ptsans tracking-tight text-white">Motorcycles</h4>
                  <p class="leading-normal text-gray-100">50.000 Listing</p>
               </div>
            </a>
            <a href="cars.php" class="relative lg:w-[370px] lg:h-[490px] overflow-hidden shadow-lg cursor-pointer">
               <img class="object-cover w-full h-full transform transition duration-500 hover:scale-105" src="https://images.wsj.net/im-589998?width=1280&size=1.33333333" alt=" Flower and sky" />

               <div class="absolute bottom-0 left-0 px-6 py-4">
                  <h4 class="mb-3 text-3xl font-semibold font-ptsans tracking-tight text-white">Bikes</h4>
                  <p class="leading-normal text-gray-100">100 Listing</p>
               </div>
            </a>
         </div>
      </div>
   </section>

   <!-- Start now  -->
   <section class="container mx-auto lg:px-0 px-6">
      <div class='relative block h-[500px] w-full'>
         <div class='pic' id='pic4'>
            <div class="text-gray-100 absolute bottom-24 left-6">
               <h1 class="block text-4xl font-ptsans font-medium mb-6">
                  Sell Thing 1 on ZakiEdition
               </h1>
               <span class="max-w-md block text-xl font-sans">
                  Attract quality leads within the highest concentration of international luxury buyers
               </span>
            </div>
         </div>
         <div class='pic' id='pic3'>
            <div class="text-gray-100 absolute bottom-24 left-6">
               <h1 class="block text-4xl font-ptsans font-medium mb-6">
                  Sell Thing 1 on ZakiEdition
               </h1>
               <span class="max-w-md block text-xl font-sans">
                  Attract quality leads within the highest concentration of international luxury buyers
               </span>
            </div>
         </div>
         <div class='pic' id='pic2'>
            <div class="text-gray-100 absolute bottom-24 left-6">
               <h1 class="block text-4xl font-ptsans font-medium mb-6">
                  Sell Thing 1 on ZakiEdition
               </h1>
               <span class="max-w-md block text-xl font-sans">
                  Attract quality leads within the highest concentration of international luxury buyers
               </span>
            </div>
         </div>
         <div class='pic' id='pic1'>
            <div class="text-gray-100 absolute bottom-24 left-6">
               <h1 class="block text-4xl font-ptsans font-medium mb-6">
                  Sell Thing 1 on ZakiEdition
               </h1>
               <span class="max-w-md block text-xl font-sans">
                  Attract quality leads within the highest concentration of international luxury buyers
               </span>
            </div>
         </div>
         <a class="absolute absolute bottom-6 left-6 text-gray-700 z-10 w-[220px] p-3 border border-gray-100 bg-gray-200 transform transition ease-all-in duration-300 hover:scale-105">
            <span class="flex items-center justify-center">
               <span class="font-ptsans">START NOW</span>
               <svg class="w-6 ml-4" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg" stroke="#000">
                  <g id="SVGRepo_bgCarrier" stroke-width="0"></g>
                  <g id="SVGRepo_tracerCarrier" stroke-linecap="round" stroke-linejoin="round"></g>
                  <g id="SVGRepo_iconCarrier">
                     <path d="M4 12H20M20 12L16 8M20 12L16 16" stroke="#3C4160" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"></path>
                  </g>
               </svg>
            </span>
         </a>
      </div>
   </section>

   <!-- News & Trending Section -->
   <section class="container mx-auto mt-10 mb-20 lg:px-0 px-6">
      <div class="flex flex-col space-y-6 justify-center">
         <h1 class="text-3xl font-medium font-ptsans">News & Trending</h1>
         <div class="w-full flex flex-row items-center overflow-x-auto space-x-12">
            <div class="flex flex-col space-y-2 cursor-pointer">
               <img class="object-cover w-72 h-72" src="https://www.bhg.com/thmb/O308V5FawLSwluNQ8K1RHHtIW1I=/1244x0/filters:no_upscale():strip_icc()/modern-bedroom-neutrals-gold-sconces-7bLa8Fz-4H883NnY4KOJvi-261ce61898a340ff9cf6352ba1744ab7.jpg" />
               <span class="text-sm lg:text-md text-gray-800">874.000.00 DZD</span>
               <span class="text-sm lg:text-md text-gray-600 truncate">Lorem ipsum dolor sit
                  elit.</span>
            </div>
            <div class="flex flex-col space-y-2 cursor-pointer">
               <img class="object-cover w-72 h-72" src="https://images.ctfassets.net/n2ifzifcqscw/3QRMlAcJFrYAEAbhziixZW/d4b9aa50215c5ea7a161b8a6b59f1974/hero-real-estate-facts-trends.jpeg" />
               <span class="text-sm lg:text-md text-gray-800">874.000.00 DZD</span>
               <span class="text-sm lg:text-md text-gray-600 truncate">Lorem ipsum dolor sit
                  elit.</span>
            </div>
            <div class="flex flex-col space-y-2 cursor-pointer">
               <img class="object-cover w-72 h-72" src="https://www.bankrate.com/2020/10/02105002/What_are_real_estate_comps.jpg" />
               <span class="text-sm lg:text-md text-gray-800">874.000.00 DZD</span>
               <span class="text-sm lg:text-md text-gray-600 truncate">Lorem ipsum dolor sit
                  elit.</span>
            </div>
            <div class="flex flex-col space-y-2 cursor-pointer">
               <img class="object-cover w-72 h-72" src="https://bridportantiques.co.uk/wp-content/uploads/2021/08/space-to-let-1024x683.jpg" />
               <span class="text-sm lg:text-md text-gray-800">874.000.00 DZD</span>
               <span class="text-sm lg:text-md text-gray-600 truncate">Lorem ipsum dolor sit
                  elit.</span>
            </div>
            <div class="flex flex-col space-y-2 cursor-pointer">
               <img class="object-cover w-72 h-72" src="https://farms.unitedcountry.com/images/farms/farms1200x630.jpg" />
               <span class="text-sm lg:text-md text-gray-800">874.000.00 DZD</span>
               <span class="text-sm lg:text-md text-gray-600 truncate">Lorem ipsum dolor sit
                  elit.</span>
            </div>
         </div>
      </div>
   </section>

   <!-- Journal Section -->
   <section class="mt-10 mb-20 lg:px-0 px-6">
      <div class="container mx-auto flex flex-col space-y-6 justify-center">
         <h1 class="text-3xl font-ptsans">
            The Journal
         </h1>
         <div class="flex flex-col lg:flex-row items-center justify-center space-y-4 lg:space-x-6 lg:space-y-0">
            <div style="background-image: linear-gradient(rgba(0, 0, 0, 0), rgba(0, 0, 0, 0.7)), url('https://blogs.dal.ca/openthink/files/2022/07/leon-seierlein-1dNISwLcaVk-unsplash.jpg');
            " class="relative overflow-hidden block text-xs lg:text-md z-10 bg-cover bg-no-repeat bg-center w-full h-[250px] lg:h-[450px]">
               <div class="absolute bottom-6 left-6">
                  <div class="flex flex-col space-y-4 text-gray-100 px-2">
                     <span class="">10 Nov 2023</span>
                     <span class="text-lg lg:text-2xl font-ptsans">Lorem ipsum dolor sit amet consectetur adipisicing elit.
                        Perspiciatis blanditiis quaerat ad
                        ab
                        impedit officiis.</span>
                     <span>Lorem, ipsum dolor sit amet consectetur adipisicing elit. Voluptate, explicabo...</span>
                  </div>
               </div>
            </div>
            <div class="flex flex-col items-center justify-center space-y-6">
               <div class="flex flex-row space-x-4">
                  <img class="w-48 h-32" src="https://static.jamesedition.com/bir?img=/2023/11/Levi-Living-hero.webp&size=home_small" alt="" srcset="">
                  <div class="flex flex-col space-y-1">
                     <span class="text-xs lg:text-sm text-gray-500">08 NOV 2023</span>
                     <span class="max-w-xs text-sm lg:text-md text-gray-800 font-ptsans">Lorem ipsum dolor sit amet.
                        Expedita,
                        est?</span>
                     <p class="text-gray-600 text-sm lg:block hidden">Lorem ipsum dolor sit amet consectetur adipisicing elit. Sint
                        ullam
                        accusantium asperiores
                        veniam deserunt fugit.</p>
                  </div>
               </div>
               <div class="flex flex-row space-x-4">
                  <img class="w-48 h-32" src="https://static.jamesedition.com/bir?img=/2023/11/Bo-Fi-hero.webp&size=home_small" alt="" srcset="">
                  <div class="flex flex-col space-y-1">
                     <span class="text-xs lg:text-sm text-gray-500">08 NOV 2023</span>
                     <span class="max-w-xs text-sm lg:text-md text-gray-800 font-ptsans">Lorem ipsum dolor sit amet.
                        Expedita,
                        est?</span>
                     <p class="text-gray-600 text-sm lg:block hidden">Lorem ipsum dolor sit amet consectetur adipisicing elit. Sint
                        ullam
                        accusantium asperiores
                        veniam deserunt fugit.</p>
                  </div>
               </div>
               <div class="flex flex-row space-x-4">
                  <img class="w-48 h-32" src="https://static.jamesedition.com/bir?img=/2023/11/Washigton-DC-Mansions-hero.webp&size=home_small" alt="" srcset="">
                  <div class="flex flex-col space-y-1">
                     <span class="text-xs lg:text-sm text-gray-500">08 NOV 2023</span>
                     <span class="max-w-xs text-sm lg:text-md text-gray-800 font-ptsans">Lorem ipsum dolor sit amet.
                        Expedita,
                        est?</span>
                     <p class="text-gray-600 text-sm lg:block hidden">Lorem ipsum dolor sit amet consectetur adipisicing elit. Sint
                        ullam
                        accusantium asperiores
                        veniam deserunt fugit.</p>
                  </div>
               </div>
            </div>
         </div>
      </div>
   </section>

   <section class="container mx-auto flex flex-col items-center justify-center space-y-12 border-t border-gray-300 my-20 lg:px-0 px-6">
      <span class="text-gray-600 text-[10px] mt-12">AS SEEN IN</span>
      <div class="flex flex flex-row items-center overflow-x-auto space-x-12 items-center justify-center space-y-6 lg:space-y-0">
         <img src="https://static-x.jamesedition.com/assets/as_seen_in/HUFFP-a214a0c3a6213f8b47fe1b8130bb9e8bde45abc274a9020ff4e80c204ac95140.svg" alt="" srcset="">
         <img src="https://static-x.jamesedition.com/assets/as_seen_in/BI-640c29a24bfb76647e6f85729ad2e4164f14077274a042f5ed2973176351bede.svg" alt="" srcset="">
         <img src="https://static-x.jamesedition.com/assets/as_seen_in/BLOOM-c583e1a7fcbd1d21617cf8cf33d51dac1aa66d18a934de975db474ca1998418c.svg" alt="" srcset="">
         <img src="https://static-x.jamesedition.com/assets/as_seen_in/CNBC-0e41f777ca54464bf7b6b89fcd7553f3a8e5f5efb6c6e28704d34063c0d14999.svg" alt="" srcset="">
         <img src="https://static-x.jamesedition.com/assets/as_seen_in/BBC-2b0e554959097e0d24fb60d011c9cbd440ecb83540ce969eee2ab5e4fc0c9b67.svg" alt="" srcset="">
         <img src="https://static-x.jamesedition.com/assets/as_seen_in/FT-aa75d26228f2a1da9c971646cfb37e7bdc6292d20fa4347444860c54a93198f0.svg" alt="" srcset="">
      </div>
      <div class="mt-6"></div>
      <div style="background-image: linear-gradient(rgba(0, 0, 0, 0), rgba(0, 0, 0, 0.7)), url('https://preview.redd.it/mbzeky1odww81.png?width=6000&format=png&auto=webp&s=b3cc1211f28915e7af3228b9e9d1d51a2afd8739');
            " class="relative overflow-hidden z-10 bg-cover bg-no-repeat bg-center w-full h-[320px]">
         <div class="absolute top-14 left-6 mx-auto">
            <div class="flex flex-col space-y-4 text-gray-100 px-2">
               <span class="text-3xl font-ptsans">Here is a tiltle to edit</span>
               <span class="text-md font-ptsans max-w-md">Lorem ipsum dolor sit amet consectetur adipisicing elit.
                  Perspiciatis blanditiis quaerat ad
                  ab Lorem ipsum, dolor sit amet consectetur adipisicing elit. Fuga, itaque?
                  impedit officiis.</span>
               <a href="" class="text-gray-700 w-48 p-2 border border-gray-100 bg-gray-200 transition ease-all-in duration-300 hover:bg-gray-300">
                  <span class="flex items-center justify-center">
                     <span class="font-ptsans">View now</span>
                     <svg class="w-5 ml-3" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg" stroke="#000">
                        <g id="SVGRepo_bgCarrier" stroke-width="0"></g>
                        <g id="SVGRepo_tracerCarrier" stroke-linecap="round" stroke-linejoin="round"></g>
                        <g id="SVGRepo_iconCarrier">
                           <path d="M4 12H20M20 12L16 8M20 12L16 16" stroke="#3C4160" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"></path>
                        </g>
                     </svg>
                  </span>
               </a>
            </div>
         </div>
      </div>
      </div>
   </section>

   <section class="w-full lg:h-96 bg-[#f0f0f0] mb-12">
      <div class="h-full flex flex-col items-center justify-center">
         <div class="testimonials">
            <div class="testimonial-container">

               <div class="testimonial">
                  <div class="flex flex-col items-center justify-center space-y-6">
                     <p class="max-w-lg overflow-hidden text-gray-800 text-md lg:text-lg">Lorem ipsum dolor sit amet consectetur adipisicing elit.
                        Similique
                        delectus itaque sapiente. Corporis maxime debitis eius. Iusto inventore eum, minus aut adipisci
                        cumque
                        odit
                        Lorem ipsum dolor sit amet consectetur adipisicing elit. Explicabo, veritatis incidunt?
                        fugit numquam nam cupiditate? Blanditiis, mollitia?</p>
                     <span class="text-gray-600 text-sm lg:text-md">Oussama Test, Developer UK.</span>
                  </div>
               </div>

               <div class="testimonial">
                  <div class="flex flex-col items-center justify-center space-y-6">
                     <p class="max-w-4xl text-gray-800 text-lg">Lorem ipsum dolor sit amet consectetur adipisicing elit.
                        Similique
                        delectus itaque sapiente. Corporis maxime debitis eius. Iusto inventore eum, minus aut adipisci
                        cumque
                        odit
                        Lorem ipsum dolor sit amet consectetur adipisicing elit. Explicabo, veritatis incidunt?
                        fugit numquam nam cupiditate? Blanditiis, mollitia?</p>
                     <span class="text-gray-600 text-sm lg:text-md">Oussama Test, Developer UK.</span>
                  </div>
               </div>

               <div class="testimonial">
                  <div class="flex flex-col items-center justify-center space-y-6">
                     <p class="max-w-4xl text-gray-800 text-lg">Lorem ipsum dolor sit amet consectetur adipisicing elit.
                        Similique
                        delectus itaque sapiente. Corporis maxime debitis eius. Iusto inventore eum, minus aut adipisci
                        cumque
                        odit
                        Lorem ipsum dolor sit amet consectetur adipisicing elit. Explicabo, veritatis incidunt?
                        fugit numquam nam cupiditate? Blanditiis, mollitia?</p>
                     <span class="text-gray-600 text-sm lg:text-md">Oussama Test, Developer UK.</span>
                  </div>
               </div>
            </div>
         </div>
         <div class="flex flex-row items-center justify-center space-x-6">
            <img class="w-10 h-10" onclick="prevSlide()" src="./icons/arrow-sm-left.svg" alt="" />
            <img class="w-10 h-10" onclick="nextSlide()" src="./icons/arrow-sm-right.svg" alt="" />
         </div>
      </div>
   </section>

   <section class="container mx-auto flex flex-col lg:items-center space-y-6 my-12 px-6 lg:px-0">
      <div class="flex flex-row items-center justify-between w-full">
         <div class="flex flex-col space-y-3 items-center">
            <h1 class="text-3xl text-gray-800 font-ptsans">Stay In The Know</h1>
            <span class="text-sm text-gray-500">
               Join 150K+ followers on Instagram
            </span>
         </div>
         <a href="" class="hidden lg:block text-gray-100 text-lg w-56 p-2 bg-black transition ease-all-in duration-300 hover:bg-gray-800">
            <span class="flex items-center justify-center">
               <span class="font-rubik">Follow</span>
               <svg class="w-5 ml-3" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg" stroke="#000">
                  <g id="SVGRepo_bgCarrier" stroke-width="0"></g>
                  <g id="SVGRepo_tracerCarrier" stroke-linecap="round" stroke-linejoin="round"></g>
                  <g id="SVGRepo_iconCarrier">
                     <path d="M4 12H20M20 12L16 8M20 12L16 16" stroke="#f0f0f0" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"></path>
                  </g>
               </svg>
            </span>
         </a>
      </div>

      <!-- Stay in the know Mobile Version -->
      <div class="w-full flex flex-row items-center overflow-x-auto space-x-12 lg:hidden">
         <div class="flex flex-col space-y-2 cursor-pointer">
            <img class="object-cover" src="https://scoutboats.com/wp-content/uploads/2023/02/670-lx-homepage.jpg" />
            <span class="text-sm lg:text-md text-gray-600 truncate">Lorem ipsum dolor sit
               elit.</span>
         </div>
         <div class="flex flex-col space-y-2 cursor-pointer">
            <img class="object-cover" src="https://scoutboats.com/wp-content/uploads/2023/02/670-lx-homepage.jpg" />
            <span class="text-sm lg:text-md text-gray-600 truncate">Lorem ipsum dolor sit
               elit.</span>
         </div>
         <div class="flex flex-col space-y-2 cursor-pointer">
            <img class="object-cover" src="https://scoutboats.com/wp-content/uploads/2023/02/670-lx-homepage.jpg" />
            <span class="text-sm lg:text-md text-gray-600 truncate">Lorem ipsum dolor sit
               elit.</span>
         </div>
         <div class="flex flex-col space-y-2 cursor-pointer">
            <img class="object-cover" src="https://scoutboats.com/wp-content/uploads/2023/02/670-lx-homepage.jpg" />
            <span class="text-sm lg:text-md text-gray-600 truncate">Lorem ipsum dolor sit
               elit.</span>
         </div>
         <div class="flex flex-col space-y-2 cursor-pointer">
            <img class="object-cover" src="https://scoutboats.com/wp-content/uploads/2023/02/670-lx-homepage.jpg" />
            <span class="text-sm lg:text-md text-gray-600 truncate">Lorem ipsum dolor sit
               elit.</span>
         </div>
      </div>

      <!-- Stay in the know Larger Screen Version -->
      <div class="hidden lg:flex lg:flex-row items-center justify-center lg:space-x-3">
         <div class="bg-gradient-to-r relative w-64 h-72 overflow-hidden shadow-lg cursor-pointer hover:from-gray-200 hover:to-gray-900">
            <img class="object-cover w-full h-full" src="https://c02.purpledshub.com/uploads/sites/39/2022/10/Fox-DHX-Factory-rear-mountain-bike-shock-2-3e0ee7f.jpg?w=1029&webp=1" alt=" Flower and sky" />

            <div class="absolute top-0 left-0 p-3 drop-shadow-2xl w-full h-full transform transition duration-500 hover:bg-gray-900/[0.3]">
               <h4 class="mb-3 text-xl font-semibold font-ptsans tracking-tight text-white">Mountain rider bikes here for you</h4>
            </div>
         </div>
         <div class="bg-gradient-to-r relative w-64 h-72 overflow-hidden shadow-lg cursor-pointer hover:from-gray-200 hover:to-gray-900">
            <img class="object-cover w-full h-full" src="https://www.bankrate.com/2022/09/21122002/Residential-real-estate.jpg?auto=webp&optimize=high&crop=16:9" alt=" Flower and sky" />

            <div class="absolute top-0 left-0 p-3 drop-shadow-2xl w-full h-full transform transition duration-500 hover:bg-gray-900/[0.3]">
               <h4 class="mb-3 text-xl font-semibold font-ptsans tracking-tight text-white">Real estate for sell or rent
               </h4>
            </div>
         </div>
         <div class="bg-gradient-to-r relative w-64 h-72 overflow-hidden shadow-lg cursor-pointer hover:from-gray-200 hover:to-gray-900">
            <img class="object-cover w-full h-full" src="https://www.for-interieur.fr/wp-content/uploads/2023/06/cuisine-ouverte-24.jpg" alt=" Flower and sky" />

            <div class="absolute top-0 left-0 p-3 drop-shadow-2xl w-full h-full transform transition duration-500 hover:bg-gray-900/[0.3]">
               <h4 class="mb-3 text-xl font-semibold font-ptsans tracking-tight text-white">New Kitchen looks in Zaki's Edition
               </h4>
            </div>
         </div>
         <div class="bg-gradient-to-r relative w-64 h-72 overflow-hidden shadow-lg cursor-pointer hover:from-gray-200 hover:to-gray-900">
            <img class="object-cover w-full h-full" src="https://cdn.motor1.com/images/mgl/1ZQrxK/s3/2023-bmw-m3-cs-first-drive-review.jpg" alt=" Flower and sky" />

            <div class="absolute top-0 left-0 p-3 drop-shadow-2xl w-full h-full transform transition duration-500 hover:bg-gray-900/[0.3]">
               <h4 class="mb-3 text-xl font-semibold font-ptsans tracking-tight text-white">Excited to get your first sport car ?
               </h4>
            </div>
         </div>
         <div class="bg-gradient-to-r relative w-64 h-72 overflow-hidden shadow-lg cursor-pointer hover:from-gray-200 hover:to-gray-900">
            <img class="object-cover w-full h-full" src="https://powersports.honda.com/-/media/products/segment/street/sport/category-mp/hero/desktop/2024/sport-segment-hero-01-2400x1350.jpg" alt=" Flower and sky" />

            <div class="absolute top-0 left-0 p-3 drop-shadow-2xl w-full h-full transform transition duration-500 hover:bg-gray-900/[0.3]">
               <h4 class="mb-3 text-xl font-semibold font-ptsans tracking-tight text-white">Now you can go for the ride you dreamed of
               </h4>
            </div>
         </div>
         <div class="bg-gradient-to-r relative w-64 h-72 overflow-hidden shadow-lg cursor-pointer hover:from-gray-200 hover:to-gray-900">
            <img class="object-cover w-full h-full" src="https://scoutboats.com/wp-content/uploads/2023/02/670-lx-homepage.jpg" alt=" Flower and sky" />

            <div class="absolute top-0 left-0 p-3 drop-shadow-2xl w-full h-full transform transition duration-500 hover:bg-gray-900/[0.3]">
               <h4 class="mb-3 text-xl font-semibold font-ptsans tracking-tight text-white">New Boats on Zaki's Edition
               </h4>
            </div>
         </div>
      </div>
      <a href="" class="block lg:hidden text-gray-100 text-lg w-56 p-2 bg-black transition ease-all-in duration-300 hover:bg-gray-800">
         <span class="flex items-center justify-center">
            <span class="font-rubik">Follow</span>
            <svg class="w-5 ml-3" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg" stroke="#000">
               <g id="SVGRepo_bgCarrier" stroke-width="0"></g>
               <g id="SVGRepo_tracerCarrier" stroke-linecap="round" stroke-linejoin="round"></g>
               <g id="SVGRepo_iconCarrier">
                  <path d="M4 12H20M20 12L16 8M20 12L16 16" stroke="#f0f0f0" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"></path>
               </g>
            </svg>
         </span>
      </a>
   </section>

   <section class="container mx-auto flex flex-col lg:flex-row items-start lg:items-center lg:justify-between border-t border-gray-200 my-20 pt-20 px-6 lg:px-0 space-y-6 lg:space-y-0">
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
      <div class="container mx-auto space-y-8 px-4 py-16 sm:px-6 lg:space-y-16 lg:px-8">
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

   <script src="./assets/js/sidebar.js"></script>
   <script src="./assets/js/navbar.js"></script>
   <script>
      let currentIndex = 0;
      const testimonials = document.querySelector('.testimonial-container');
      const testimonialItems = document.querySelectorAll('.testimonial');

      function showSlide(index) {
         const newPosition = -index * 100 + '%';
         testimonials.style.transform = 'translateX(' + newPosition + ')';
         currentIndex = index;
      }

      function nextSlide() {
         currentIndex = (currentIndex + 1) % testimonialItems.length;
         showSlide(currentIndex);
      }

      function prevSlide() {
         currentIndex = (currentIndex - 1 + testimonialItems.length) % testimonialItems.length;
         showSlide(currentIndex);
      }
   </script>
</body>

</html>