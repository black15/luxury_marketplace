<!DOCTYPE html>
<html lang="en">

<head>
   <meta charset="UTF-8">
   <meta name="viewport" content="width=device-width, initial-scale=1.0">
   <link rel="stylesheet" href="./assets/css/style.css">

   <script src="./assets/js/cdn.tailwindcss.js"></script>
   <script src="./assets/js/tailwind.conf.js"></script>
   <title>Document</title>
</head>

<body class=''>
   <?php // include("./navbar.php"); 
   ?>

   <div class="h-screen md:flex">
      <div class="relative overflow-hidden md:block bg-cover bg-center md:w-3/5 hidden" style="background-image:url('./assets/images/loginbg2.jpg')" ;>
      </div>
      <div class="flex w-full h-screen md:h-auto md:w-2/5 justify-center py-10 items-center bg-white">
         <div>
            <form class="bg-white">
               <h1 class="text-gray-800 font-bold text-2xl mb-1">Hello Again!</h1>
               <p class="text-sm font-normal text-gray-600 mb-7">Welcome Back</p>
               <div class="flex items-center border-2 py-2 px-3 rounded-2xl mb-4">
                  <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5 text-gray-400" viewBox="0 0 20 20" fill="currentColor">
                     <path fill-rule="evenodd" d="M10 9a3 3 0 100-6 3 3 0 000 6zm-7 9a7 7 0 1114 0H3z" clip-rule="evenodd" />
                  </svg>
                  <input class="pl-2 outline-none border-none" type="text" name="" id="" placeholder="Full name" />
               </div>
               <div class="flex items-center border-2 py-2 px-3 rounded-2xl mb-4">
                  <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5 text-gray-400" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                     <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 11c0 3.517-1.009 6.799-2.753 9.571m-3.44-2.04l.054-.09A13.916 13.916 0 008 11a4 4 0 118 0c0 1.017-.07 2.019-.203 3m-2.118 6.844A21.88 21.88 0 0015.171 17m3.839 1.132c.645-2.266.99-4.659.99-7.132A8 8 0 008 4.07M3 15.364c.64-1.319 1-2.8 1-4.364 0-1.457.39-2.823 1.07-4" />
                  </svg>
                  <input class="pl-2 outline-none border-none" type="text" name="" id="" placeholder="Username" />
               </div>
               <div class="flex items-center border-2 py-2 px-3 rounded-2xl mb-4">
                  <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5 text-gray-400" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                     <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M16 12a4 4 0 10-8 0 4 4 0 008 0zm0 0v1.5a2.5 2.5 0 005 0V12a9 9 0 10-9 9m4.5-1.206a8.959 8.959 0 01-4.5 1.207" />
                  </svg>
                  <input class="pl-2 outline-none border-none" type="text" name="" id="" placeholder="Email Address" />
               </div>
               <div class="flex items-center border-2 py-2 px-3 rounded-2xl">
                  <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5 text-gray-400" viewBox="0 0 20 20" fill="currentColor">
                     <path fill-rule="evenodd" d="M5 9V7a5 5 0 0110 0v2a2 2 0 012 2v5a2 2 0 01-2 2H5a2 2 0 01-2-2v-5a2 2 0 012-2zm8-2v2H7V7a3 3 0 016 0z" clip-rule="evenodd" />
                  </svg>
                  <input class="pl-2 outline-none border-none" type="text" name="" id="" placeholder="Password" />
               </div>
               <button type="submit" class="block w-full bg-indigo-600 mt-4 py-2 rounded-2xl text-white font-semibold mb-2">Register</button>
            </form>
            <span class="text-sm ml-2 block">Already have an Account? <a class="text-blue-800 underline" href="login.php">Login</a></span>
            <span class="ml-2 block mt-3">
               <a class="text-blue-800 flex items-center justify-start space-x-1" href="test.php">
                  <span class='text-md'>Go Back</span>
                  <svg viewBox="0 0 24 24" class="w-6 h-6 inline" fill="none" xmlns="http://www.w3.org/2000/svg">
                     <g id="SVGRepo_bgCarrier" stroke-width="0"></g>
                     <g id="SVGRepo_tracerCarrier" stroke-linecap="round" stroke-linejoin="round"></g>
                     <g id="SVGRepo_iconCarrier">
                        <path d="M22 22L2 22" stroke="#1C274C" stroke-width="1.5" stroke-linecap="round"></path>
                        <path d="M2 11L10.1259 4.49931C11.2216 3.62279 12.7784 3.62279 13.8741 4.49931L22 11" stroke="#1C274C" stroke-width="1.5" stroke-linecap="round"></path>
                        <path d="M15.5 5.5V3.5C15.5 3.22386 15.7239 3 16 3H18.5C18.7761 3 19 3.22386 19 3.5V8.5" stroke="#1C274C" stroke-width="1.5" stroke-linecap="round"></path>
                        <path d="M4 22V9.5" stroke="#1C274C" stroke-width="1.5" stroke-linecap="round"></path>
                        <path d="M20 22V9.5" stroke="#1C274C" stroke-width="1.5" stroke-linecap="round"></path>
                        <path d="M15 22V17C15 15.5858 15 14.8787 14.5607 14.4393C14.1213 14 13.4142 14 12 14C10.5858 14 9.87868 14 9.43934 14.4393C9 14.8787 9 15.5858 9 17V22" stroke="#1C274C" stroke-width="1.5"></path>
                        <path d="M14 9.5C14 10.6046 13.1046 11.5 12 11.5C10.8954 11.5 10 10.6046 10 9.5C10 8.39543 10.8954 7.5 12 7.5C13.1046 7.5 14 8.39543 14 9.5Z" stroke="#1C274C" stroke-width="1.5"></path>
                     </g>
                  </svg>
               </a>
            </span>
         </div>
      </div>
   </div>

</body>

</html>