<!DOCTYPE html>
<html lang="en">

<head>
   <meta charset="UTF-8">
   <meta name="viewport" content="width=device-width, initial-scale=1.0">
   <title>Document</title>
   <link rel="stylesheet" href="../assets/css/style.css">
   <link rel="stylesheet" href="../assets/css/carousel.css">
   <link rel="stylesheet" href="../assets/css/testimonials.css">

   <script src="../assets/js/cdn.tailwindcss.js"></script>
   <script src="../assets/js/tailwind.conf.js"></script>
</head>

<body>

   <div class="navbar sticky top-0 w-full text-white">
      <div class='flex flex-row items-center justify-between px-8 py-4 md:px-20 md:py-6 border-b border-gray-200'>
         <div class="flex flex-row items-center justify-between md:justify-center logo">
            <div class="menu-btn" onclick="toggleSidebar()">☰</div>
            <form class="md:w-[600px] flex items-center">
               <label for="simple-search" class="sr-only">Search</label>
               <div class="relative w-full">
                  <input type="text" id="simple-search" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full ps-10 p-2.5  dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500" placeholder="Search ..." required>
               </div>
               <button type="submit" class="p-2.5 ms-2 text-sm font-medium text-white bg-blue-700 rounded-lg border border-blue-700 hover:bg-blue-800 focus:ring-4 focus:outline-none focus:ring-blue-300 dark:bg-blue-600 dark:hover:bg-blue-700 dark:focus:ring-blue-800">
                  <svg class="w-4 h-4" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 20 20">
                     <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="m19 19-4-4m0-7A7 7 0 1 1 1 8a7 7 0 0 1 14 0Z" />
                  </svg>
                  <span class="sr-only">Search</span>
               </button>
            </form>
         </div>
         <div class="hidden md:flex items-center justify-center space-x-4">
            <button>
               <img class="w-10 h-10" src="../icons/notifications.svg" alt="" srcset="">
            </button>
            <button>
               <img class="w-8 h-8" src="../icons/categories.svg" alt="" srcset="">
            </button>
            <button>
               <img class="w-8 h-8" src="../icons/ellipsis.svg" alt="" srcset="">
            </button>
         </div>
      </div>

      <div class="sidebar flex flex-col no-scrollbar text-gray-800">
         <div class="flex flex-row items-center justify-between border-b border-gray-300 w-full px-4">
            <div class="welcome p-2 text-lg">Hello Admin</div>
            <div class="menu-btn p-2 text-2xl" onclick="toggleSidebar()">&#x2715;</div>
         </div>
         <div class="p-4">
            <a href="./index.php"><img class="w-8 mr-2" src="../icons/dash.svg" alt="" srcset=""><span>Dashboard</span></a>
            <a href="./clients.php"><img class="w-8 mr-2" src="../icons/clients2.svg" alt="" srcset=""><span>Clients</span></a>
            <a href="./users.php"><img class="w-8 mr-2" src="../icons/clients.svg" alt="" srcset=""><span>Users</span></a>
            <a href="./listings.php"><img class="w-8 mr-2" src="../icons/listings.svg" alt="" srcset=""><span>Listings</span></a>
            <!-- Add more menu items as needed -->
         </div>
         <div class="flex flex-col space-y-3 justify-between border-t border-gray-300 w-full p-4">
            <div class="p-2 text-lg">Sell With Us</div>
            <div class="p-2 text-lg">All Business</div>
            <div class="p-2 text-lg">Help & FAQ</div>
            <div class="p-2 text-lg">About</div>
            <div class="p-2 text-lg">Contact</div>
         </div>
      </div>
   </div>

   <section class='lg:px-20 mx-auto my-12'>
      <div class="relative overflow-x-auto shadow-md sm:rounded-lg">
         <table class="w-full text-sm text-left rtl:text-right text-gray-500 dark:text-gray-400">
            <thead class="text-xs text-gray-700 uppercase bg-gray-50 dark:bg-gray-700 dark:text-gray-400">
               <tr>
                  <th scope="col" class="px-6 py-4">ID</th>
                  <th scope="col" class="px-6 py-4">Client info</th>
                  <th scope="col" class="px-6 py-4">Country</th>
                  <th scope="col" class="px-6 py-4">State</th>
                  <th scope="col" class="px-6 py-4">Active Listing</th>
                  <th scope="col" class="px-6 py-4">Action</th>
               </tr>
            </thead>
            <tbody>
               <tr class="bg-white border-b dark:bg-gray-800 dark:border-gray-700 hover:bg-gray-50 dark:hover:bg-gray-600">
                  <td class="w-4 p-4">
                     <span>1</span>
                  </td>
                  <td scope="row" class="flex items-center px-6 py-4 text-gray-900 whitespace-nowrap dark:text-white">
                     <img class="w-10 h-10 rounded-full" src="https://freesvg.org/img/abstract-user-flat-4.png" alt="Jese image">
                     <div class="ps-3">
                        <div class="text-base font-semibold">Oussama Dev</div>
                        <div class="font-normal text-gray-500">webdev@user.com</div>
                     </div>
                  </td>
                  <td class="px-6 py-4">
                     Algeria
                  </td>
                  <td class="px-6 py-4">
                     Batna
                  </td>
                  <td class="px-6 py-4">
                     Yes
                  </td>
                  <td class="px-6 py-4">
                     <a href="#">
                        <svg class="w-6 h-6" viewBox="0 0 1024 1024" xmlns="http://www.w3.org/2000/svg" fill="#000000">
                           <g id="SVGRepo_bgCarrier" stroke-width="0"></g>
                           <g id="SVGRepo_tracerCarrier" stroke-linecap="round" stroke-linejoin="round"></g>
                           <g id="SVGRepo_iconCarrier">
                              <path fill="#ee2020" d="M160 256H96a32 32 0 0 1 0-64h256V95.936a32 32 0 0 1 32-32h256a32 32 0 0 1 32 32V192h256a32 32 0 1 1 0 64h-64v672a32 32 0 0 1-32 32H192a32 32 0 0 1-32-32V256zm448-64v-64H416v64h192zM224 896h576V256H224v640zm192-128a32 32 0 0 1-32-32V416a32 32 0 0 1 64 0v320a32 32 0 0 1-32 32zm192 0a32 32 0 0 1-32-32V416a32 32 0 0 1 64 0v320a32 32 0 0 1-32 32z"></path>
                           </g>
                        </svg>
                     </a>
                  </td>
               </tr>
               <tr class="bg-white border-b dark:bg-gray-800 dark:border-gray-700 hover:bg-gray-50 dark:hover:bg-gray-600">
                  <td class="w-4 p-4">
                     <span>1</span>
                  </td>
                  <td scope="row" class="flex items-center px-6 py-4 text-gray-900 whitespace-nowrap dark:text-white">
                     <img class="w-10 h-10 rounded-full" src="https://freesvg.org/img/abstract-user-flat-4.png" alt="Jese image">
                     <div class="ps-3">
                        <div class="text-base font-semibold">Oussama Dev</div>
                        <div class="font-normal text-gray-500">webdev@user.com</div>
                     </div>
                  </td>
                  <td class="px-6 py-4">
                     Algeria
                  </td>
                  <td class="px-6 py-4">
                     Batna
                  </td>
                  <td class="px-6 py-4">
                     Yes
                  </td>
                  <td class="px-6 py-4">
                     <a href="#">
                        <svg class="w-6 h-6" viewBox="0 0 1024 1024" xmlns="http://www.w3.org/2000/svg" fill="#000000">
                           <g id="SVGRepo_bgCarrier" stroke-width="0"></g>
                           <g id="SVGRepo_tracerCarrier" stroke-linecap="round" stroke-linejoin="round"></g>
                           <g id="SVGRepo_iconCarrier">
                              <path fill="#ee2020" d="M160 256H96a32 32 0 0 1 0-64h256V95.936a32 32 0 0 1 32-32h256a32 32 0 0 1 32 32V192h256a32 32 0 1 1 0 64h-64v672a32 32 0 0 1-32 32H192a32 32 0 0 1-32-32V256zm448-64v-64H416v64h192zM224 896h576V256H224v640zm192-128a32 32 0 0 1-32-32V416a32 32 0 0 1 64 0v320a32 32 0 0 1-32 32zm192 0a32 32 0 0 1-32-32V416a32 32 0 0 1 64 0v320a32 32 0 0 1-32 32z"></path>
                           </g>
                        </svg>
                     </a>
                  </td>
               </tr>
               <tr class="bg-white border-b dark:bg-gray-800 dark:border-gray-700 hover:bg-gray-50 dark:hover:bg-gray-600">
                  <td class="w-4 p-4">
                     <span>1</span>
                  </td>
                  <td scope="row" class="flex items-center px-6 py-4 text-gray-900 whitespace-nowrap dark:text-white">
                     <img class="w-10 h-10 rounded-full" src="https://freesvg.org/img/abstract-user-flat-4.png" alt="Jese image">
                     <div class="ps-3">
                        <div class="text-base font-semibold">Oussama Dev</div>
                        <div class="font-normal text-gray-500">webdev@user.com</div>
                     </div>
                  </td>
                  <td class="px-6 py-4">
                     Algeria
                  </td>
                  <td class="px-6 py-4">
                     Batna
                  </td>
                  <td class="px-6 py-4">
                     Yes
                  </td>
                  <td class="px-6 py-4">
                     <a href="#">
                        <svg class="w-6 h-6" viewBox="0 0 1024 1024" xmlns="http://www.w3.org/2000/svg" fill="#000000">
                           <g id="SVGRepo_bgCarrier" stroke-width="0"></g>
                           <g id="SVGRepo_tracerCarrier" stroke-linecap="round" stroke-linejoin="round"></g>
                           <g id="SVGRepo_iconCarrier">
                              <path fill="#ee2020" d="M160 256H96a32 32 0 0 1 0-64h256V95.936a32 32 0 0 1 32-32h256a32 32 0 0 1 32 32V192h256a32 32 0 1 1 0 64h-64v672a32 32 0 0 1-32 32H192a32 32 0 0 1-32-32V256zm448-64v-64H416v64h192zM224 896h576V256H224v640zm192-128a32 32 0 0 1-32-32V416a32 32 0 0 1 64 0v320a32 32 0 0 1-32 32zm192 0a32 32 0 0 1-32-32V416a32 32 0 0 1 64 0v320a32 32 0 0 1-32 32z"></path>
                           </g>
                        </svg>
                     </a>
                  </td>
               </tr>
               <tr class="bg-white border-b dark:bg-gray-800 dark:border-gray-700 hover:bg-gray-50 dark:hover:bg-gray-600">
                  <td class="w-4 p-4">
                     <span>1</span>
                  </td>
                  <td scope="row" class="flex items-center px-6 py-4 text-gray-900 whitespace-nowrap dark:text-white">
                     <img class="w-10 h-10 rounded-full" src="https://freesvg.org/img/abstract-user-flat-4.png" alt="Jese image">
                     <div class="ps-3">
                        <div class="text-base font-semibold">Oussama Dev</div>
                        <div class="font-normal text-gray-500">webdev@user.com</div>
                     </div>
                  </td>
                  <td class="px-6 py-4">
                     Algeria
                  </td>
                  <td class="px-6 py-4">
                     Batna
                  </td>
                  <td class="px-6 py-4">
                     Yes
                  </td>
                  <td class="px-6 py-4">
                     <a href="#">
                        <svg class="w-6 h-6" viewBox="0 0 1024 1024" xmlns="http://www.w3.org/2000/svg" fill="#000000">
                           <g id="SVGRepo_bgCarrier" stroke-width="0"></g>
                           <g id="SVGRepo_tracerCarrier" stroke-linecap="round" stroke-linejoin="round"></g>
                           <g id="SVGRepo_iconCarrier">
                              <path fill="#ee2020" d="M160 256H96a32 32 0 0 1 0-64h256V95.936a32 32 0 0 1 32-32h256a32 32 0 0 1 32 32V192h256a32 32 0 1 1 0 64h-64v672a32 32 0 0 1-32 32H192a32 32 0 0 1-32-32V256zm448-64v-64H416v64h192zM224 896h576V256H224v640zm192-128a32 32 0 0 1-32-32V416a32 32 0 0 1 64 0v320a32 32 0 0 1-32 32zm192 0a32 32 0 0 1-32-32V416a32 32 0 0 1 64 0v320a32 32 0 0 1-32 32z"></path>
                           </g>
                        </svg>
                     </a>
                  </td>
               </tr>
               <tr class="bg-white border-b dark:bg-gray-800 dark:border-gray-700 hover:bg-gray-50 dark:hover:bg-gray-600">
                  <td class="w-4 p-4">
                     <span>1</span>
                  </td>
                  <td scope="row" class="flex items-center px-6 py-4 text-gray-900 whitespace-nowrap dark:text-white">
                     <img class="w-10 h-10 rounded-full" src="https://freesvg.org/img/abstract-user-flat-4.png" alt="Jese image">
                     <div class="ps-3">
                        <div class="text-base font-semibold">Oussama Dev</div>
                        <div class="font-normal text-gray-500">webdev@user.com</div>
                     </div>
                  </td>
                  <td class="px-6 py-4">
                     Algeria
                  </td>
                  <td class="px-6 py-4">
                     Batna
                  </td>
                  <td class="px-6 py-4">
                     Yes
                  </td>
                  <td class="px-6 py-4">
                     <a href="#">
                        <svg class="w-6 h-6" viewBox="0 0 1024 1024" xmlns="http://www.w3.org/2000/svg" fill="#000000">
                           <g id="SVGRepo_bgCarrier" stroke-width="0"></g>
                           <g id="SVGRepo_tracerCarrier" stroke-linecap="round" stroke-linejoin="round"></g>
                           <g id="SVGRepo_iconCarrier">
                              <path fill="#ee2020" d="M160 256H96a32 32 0 0 1 0-64h256V95.936a32 32 0 0 1 32-32h256a32 32 0 0 1 32 32V192h256a32 32 0 1 1 0 64h-64v672a32 32 0 0 1-32 32H192a32 32 0 0 1-32-32V256zm448-64v-64H416v64h192zM224 896h576V256H224v640zm192-128a32 32 0 0 1-32-32V416a32 32 0 0 1 64 0v320a32 32 0 0 1-32 32zm192 0a32 32 0 0 1-32-32V416a32 32 0 0 1 64 0v320a32 32 0 0 1-32 32z"></path>
                           </g>
                        </svg>
                     </a>
                  </td>
               </tr>
               <tr class="bg-white border-b dark:bg-gray-800 dark:border-gray-700 hover:bg-gray-50 dark:hover:bg-gray-600">
                  <td class="w-4 p-4">
                     <span>1</span>
                  </td>
                  <td scope="row" class="flex items-center px-6 py-4 text-gray-900 whitespace-nowrap dark:text-white">
                     <img class="w-10 h-10 rounded-full" src="https://freesvg.org/img/abstract-user-flat-4.png" alt="Jese image">
                     <div class="ps-3">
                        <div class="text-base font-semibold">Oussama Dev</div>
                        <div class="font-normal text-gray-500">webdev@user.com</div>
                     </div>
                  </td>
                  <td class="px-6 py-4">
                     Algeria
                  </td>
                  <td class="px-6 py-4">
                     Batna
                  </td>
                  <td class="px-6 py-4">
                     Yes
                  </td>
                  <td class="px-6 py-4">
                     <a href="#">
                        <svg class="w-6 h-6" viewBox="0 0 1024 1024" xmlns="http://www.w3.org/2000/svg" fill="#000000">
                           <g id="SVGRepo_bgCarrier" stroke-width="0"></g>
                           <g id="SVGRepo_tracerCarrier" stroke-linecap="round" stroke-linejoin="round"></g>
                           <g id="SVGRepo_iconCarrier">
                              <path fill="#ee2020" d="M160 256H96a32 32 0 0 1 0-64h256V95.936a32 32 0 0 1 32-32h256a32 32 0 0 1 32 32V192h256a32 32 0 1 1 0 64h-64v672a32 32 0 0 1-32 32H192a32 32 0 0 1-32-32V256zm448-64v-64H416v64h192zM224 896h576V256H224v640zm192-128a32 32 0 0 1-32-32V416a32 32 0 0 1 64 0v320a32 32 0 0 1-32 32zm192 0a32 32 0 0 1-32-32V416a32 32 0 0 1 64 0v320a32 32 0 0 1-32 32z"></path>
                           </g>
                        </svg>
                     </a>
                  </td>
               </tr>
            </tbody>
         </table>
      </div>
   </section>


   <script src="../assets/js/sidebar.js"></script>
   <script src="../assets/js/fade.js"></script>
</body>

</html>