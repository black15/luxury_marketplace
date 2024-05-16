<!DOCTYPE html>
<html lang="en">

<head>
   <meta charset="UTF-8">
   <meta name="viewport" content="width=device-width, initial-scale=1.0">
   <!-- <link rel="stylesheet" href="output.css"> -->
   <link rel="stylesheet" href="../assets/css/style.css">
   <link rel="stylesheet" href="../assets/css/carousel.css">
   <link rel="stylesheet" href="../assets/css/testimonials.css">

   <script src="../assets/js/cdn.tailwindcss.js"></script>
   <script src="../assets/js/tailwind.conf.js"></script>
   <title>Document</title>
   <style>
      .form-group {
         margin-bottom: 10px;
      }

      .field-container {
         display: flex;
         gap: 10px;
      }
   </style>
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

   <section class='container lg:px-20 mx-auto grid grid-cols-2 gap-6 my-12'>
      <div class="flex flex-row-reverse justify-between h-64 transition duration-500 ease-in-all rounded-xl bg-blue-500 font-rubik font-medium px-6 py-4 hover:scale-105">
         <svg class="w-48 h-48" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
            <g id="SVGRepo_bgCarrier" stroke-width="0"></g>
            <g id="SVGRepo_tracerCarrier" stroke-linecap="round" stroke-linejoin="round"></g>
            <g id="SVGRepo_iconCarrier">
               <path d="M14 12.25C13.2583 12.25 12.5333 12.0301 11.9166 11.618C11.2999 11.206 10.8193 10.6203 10.5355 9.93506C10.2516 9.24984 10.1774 8.49584 10.3221 7.76841C10.4668 7.04098 10.8239 6.3728 11.3484 5.84835C11.8728 5.3239 12.541 4.96675 13.2684 4.82206C13.9958 4.67736 14.7498 4.75162 15.4351 5.03545C16.1203 5.31928 16.706 5.79993 17.118 6.41661C17.5301 7.0333 17.75 7.75832 17.75 8.5C17.75 9.49456 17.3549 10.4484 16.6517 11.1517C15.9484 11.8549 14.9946 12.25 14 12.25ZM14 6.25C13.555 6.25 13.12 6.38196 12.75 6.62919C12.38 6.87643 12.0916 7.22783 11.9213 7.63896C11.751 8.0501 11.7064 8.5025 11.7932 8.93895C11.8801 9.37541 12.0943 9.77632 12.409 10.091C12.7237 10.4057 13.1246 10.62 13.561 10.7068C13.9975 10.7936 14.4499 10.749 14.861 10.5787C15.2722 10.4084 15.6236 10.12 15.8708 9.75003C16.118 9.38002 16.25 8.94501 16.25 8.5C16.25 7.90326 16.0129 7.33097 15.591 6.90901C15.169 6.48705 14.5967 6.25 14 6.25Z" fill="#eeeeee"></path>
               <path d="M21 19.25C20.8019 19.2474 20.6126 19.1676 20.4725 19.0275C20.3324 18.8874 20.2526 18.6981 20.25 18.5C20.25 16.55 19.19 15.25 14 15.25C8.81 15.25 7.75 16.55 7.75 18.5C7.75 18.6989 7.67098 18.8897 7.53033 19.0303C7.38968 19.171 7.19891 19.25 7 19.25C6.80109 19.25 6.61032 19.171 6.46967 19.0303C6.32902 18.8897 6.25 18.6989 6.25 18.5C6.25 13.75 11.68 13.75 14 13.75C16.32 13.75 21.75 13.75 21.75 18.5C21.7474 18.6981 21.6676 18.8874 21.5275 19.0275C21.3874 19.1676 21.1981 19.2474 21 19.25Z" fill="#eeeeee"></path>
               <path d="M8.31999 13.06H7.99999C7.20434 12.9831 6.47184 12.5933 5.96361 11.9763C5.45539 11.3593 5.21308 10.5657 5.28999 9.77001C5.36691 8.97436 5.75674 8.24186 6.37373 7.73363C6.99073 7.22541 7.78434 6.9831 8.57999 7.06001C8.68201 7.0644 8.78206 7.08957 8.87401 7.13399C8.96596 7.1784 9.04787 7.24113 9.11472 7.31831C9.18157 7.3955 9.23196 7.48553 9.26279 7.58288C9.29362 7.68023 9.30425 7.78285 9.29402 7.88445C9.28379 7.98605 9.25292 8.08449 9.20331 8.17374C9.15369 8.26299 9.08637 8.34116 9.00548 8.40348C8.92458 8.46579 8.83181 8.51093 8.73286 8.53613C8.6339 8.56133 8.53084 8.56605 8.42999 8.55001C8.23479 8.53055 8.03766 8.55062 7.85038 8.60904C7.6631 8.66746 7.48952 8.76302 7.33999 8.89001C7.18812 9.01252 7.06216 9.16403 6.96945 9.33572C6.87673 9.50741 6.81913 9.69583 6.79999 9.89001C6.77932 10.0866 6.79797 10.2854 6.85488 10.4747C6.91178 10.6641 7.0058 10.8402 7.13144 10.9928C7.25709 11.1455 7.41186 11.2716 7.58673 11.3638C7.76159 11.456 7.95307 11.5125 8.14999 11.53C8.47553 11.5579 8.80144 11.4808 9.07999 11.31C9.24973 11.2053 9.45413 11.1722 9.64824 11.2182C9.84234 11.2641 10.0102 11.3853 10.115 11.555C10.2198 11.7248 10.2528 11.9292 10.2069 12.1233C10.1609 12.3174 10.0397 12.4853 9.86999 12.59C9.40619 12.8858 8.86998 13.0484 8.31999 13.06Z" fill="#eeeeee"></path>
               <path d="M3 18.5C2.80189 18.4974 2.61263 18.4176 2.47253 18.2775C2.33244 18.1374 2.25259 17.9481 2.25 17.75C2.25 15.05 2.97 13.25 6.5 13.25C6.69891 13.25 6.88968 13.329 7.03033 13.4697C7.17098 13.6103 7.25 13.8011 7.25 14C7.25 14.1989 7.17098 14.3897 7.03033 14.5303C6.88968 14.671 6.69891 14.75 6.5 14.75C4.15 14.75 3.75 15.5 3.75 17.75C3.74741 17.9481 3.66756 18.1374 3.52747 18.2775C3.38737 18.4176 3.19811 18.4974 3 18.5Z" fill="#eeeeee"></path>
            </g>
         </svg>
         <div class='flex flex-col justify-around'>
            <span class='text-gray-100 text-3xl'>Clients</span>
            <span class='text-gray-200 text-lg'>8050.00</span>
         </div>
      </div>
      <div class="flex flex-row-reverse justify-between h-64 transition duration-500 ease-in-all rounded-xl bg-blue-500 font-rubik font-medium px-6 py-4 hover:scale-105">
         <svg class="w-48 h-48" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
            <g id="SVGRepo_bgCarrier" stroke-width="0"></g>
            <g id="SVGRepo_tracerCarrier" stroke-linecap="round" stroke-linejoin="round"></g>
            <g id="SVGRepo_iconCarrier">
               <path d="M18 19V18C18 15.7909 16.2091 14 14 14H10C7.79086 14 6 15.7909 6 18V19M23 19V18C23 15.7909 21.2091 14 19 14H18.5M1 19V18C1 15.7909 2.79086 14 5 14H5.5M17 11C18.6569 11 20 9.65685 20 8C20 6.34315 18.6569 5 17 5M7 11C5.34315 11 4 9.65685 4 8C4 6.34315 5.34315 5 7 5M15 8C15 9.65685 13.6569 11 12 11C10.3431 11 9 9.65685 9 8C9 6.34315 10.3431 5 12 5C13.6569 5 15 6.34315 15 8Z" stroke="#eeeeee" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"></path>
            </g>
         </svg>
         <div class='flex flex-col justify-around'>
            <span class='text-gray-100 text-3xl'>Users</span>
            <span class='text-gray-200 text-lg'>245,075.00</span>
         </div>
      </div>
      <div class="flex flex-row-reverse justify-between h-64 transition duration-500 ease-in-all rounded-xl bg-blue-500 font-rubik font-medium px-6 py-4 hover:scale-105">
         <svg class="w-48 h-48" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
            <g id="SVGRepo_bgCarrier" stroke-width="0"></g>
            <g id="SVGRepo_tracerCarrier" stroke-linecap="round" stroke-linejoin="round"></g>
            <g id="SVGRepo_iconCarrier">
               <path d="M10 17H9.2C8.07989 17 7.51984 17 7.09202 16.782C6.71569 16.5903 6.40973 16.2843 6.21799 15.908C6 15.4802 6 14.9201 6 13.8V11C6 11.9319 6 12.3978 6.15224 12.7654C6.35523 13.2554 6.74458 13.6448 7.23463 13.8478C7.60218 14 8.06812 14 9 14M3 8H21M12 11H18M13 14H18M6.2 20H17.8C18.9201 20 19.4802 20 19.908 19.782C20.2843 19.5903 20.5903 19.2843 20.782 18.908C21 18.4802 21 17.9201 21 16.8V7.2C21 6.0799 21 5.51984 20.782 5.09202C20.5903 4.71569 20.2843 4.40973 19.908 4.21799C19.4802 4 18.9201 4 17.8 4H6.2C5.0799 4 4.51984 4 4.09202 4.21799C3.71569 4.40973 3.40973 4.71569 3.21799 5.09202C3 5.51984 3 6.07989 3 7.2V16.8C3 17.9201 3 18.4802 3.21799 18.908C3.40973 19.2843 3.71569 19.5903 4.09202 19.782C4.51984 20 5.07989 20 6.2 20Z" stroke="#eeeeee" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"></path>
            </g>
         </svg>
         <div class='flex flex-col justify-around'>
            <span class='text-gray-100 text-3xl'>Listings</span>
            <span class='text-gray-200 text-lg'>1022.00</span>
         </div>
      </div>
      <div class="flex flex-row-reverse justify-between h-64 transition duration-500 ease-in-all rounded-xl bg-blue-500 font-rubik font-medium px-6 py-4 hover:scale-105">
         <svg viewBox="0 0 16 16" xmlns="http://www.w3.org/2000/svg" fill="#000000">
            <g id="SVGRepo_bgCarrier" stroke-width="0"></g>
            <g id="SVGRepo_tracerCarrier" stroke-linecap="round" stroke-linejoin="round"></g>
            <g id="SVGRepo_iconCarrier">
               <path d="m 8 0 c -3.3125 0 -6 2.6875 -6 6 c 0.007812 0.710938 0.136719 1.414062 0.386719 2.078125 l -0.015625 -0.003906 c 0.636718 1.988281 3.78125 5.082031 5.625 6.929687 h 0.003906 v -0.003906 c 1.507812 -1.507812 3.878906 -3.925781 5.046875 -5.753906 c 0.261719 -0.414063 0.46875 -0.808594 0.585937 -1.171875 l -0.019531 0.003906 c 0.25 -0.664063 0.382813 -1.367187 0.386719 -2.078125 c 0 -3.3125 -2.683594 -6 -6 -6 z m 0 3.691406 c 1.273438 0 2.308594 1.035156 2.308594 2.308594 s -1.035156 2.308594 -2.308594 2.308594 c -1.273438 -0.003906 -2.304688 -1.035156 -2.304688 -2.308594 c -0.003906 -1.273438 1.03125 -2.304688 2.304688 -2.308594 z m 0 0" fill="#eeeeee"></path>
            </g>
         </svg>
         <div class='flex flex-col justify-around'>
            <span class='text-gray-100 text-3xl'>Active Wilayas</span>
            <span class='text-gray-200 text-lg'>12.00</span>
         </div>
      </div>
   </section>

   <script src="../assets/js/sidebar.js"></script>
   <script src="../assets/js/fade.js"></script>
</body>

</html>