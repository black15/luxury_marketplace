<!DOCTYPE html>
<html lang="en">

<head>
   <meta charset="UTF-8">
   <meta name="viewport" content="width=device-width, initial-scale=1.0">
   <link rel="stylesheet" href="./assets/css/style.css">
   <link rel="stylesheet" href="./assets/css/carousel.css">
   <link rel="stylesheet" href="./assets/css/testimonials.css">

   <script src="./assets/js/cdn.tailwindcss.js"></script>
   <script src="./assets/js/tailwind.conf.js"></script>
   <title>Your Website</title>
</head>

<body class='bg-gray-100'>
   <?php include("./navbar.php"); ?>

   <section>
      <!-- component -->
      <div class="p-6 mt-6 flex items-center justify-center">
         <div class="container mx-auto">
            <div>

               <div class="bg-white rounded shadow-lg p-4 px-4 md:p-8 mb-6">
                  <div class="grid gap-4 gap-y-2 text-sm grid-cols-1 lg:grid-cols-3">
                     <div class="flex flex-col items-start justify-start space-y-6">
                        <div class="text-gray-600">
                           <p class="font-medium text-lg">Edit Showroom Info</p>
                           <p>Please fill out all the fields.</p>
                        </div>
                        <div class="col-span-full">
                           <label for="photo" class="block text-sm font-medium leading-6 text-gray-700">Profile Image</label>
                           <div class="mt-2 flex items-center gap-x-3">
                              <div class="h-24 w-24 rounded-full bg-cover" style="background-image: url('https://pbs.twimg.com/media/EBYdwPqVUAACL1L.jpg');"></div>
                              <button>
                                 <svg class="w-7 h-7" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                                    <g id="SVGRepo_bgCarrier" stroke-width="0"></g>
                                    <g id="SVGRepo_tracerCarrier" stroke-linecap="round" stroke-linejoin="round"></g>
                                    <g id="SVGRepo_iconCarrier">
                                       <path d="M12 20H20.5M18 10L21 7L17 3L14 6M18 10L8 20H4V16L14 6M18 10L14 6" stroke="#000000" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"></path>
                                    </g>
                                 </svg>
                              </button>
                           </div>
                        </div>
                     </div>
                     <div class="lg:col-span-2">
                        <div class="grid gap-4 gap-y-2 text-sm grid-cols-1 md:grid-cols-5">
                           <div class="md:col-span-3">
                              <label for="full_name">First Name</label>
                              <input type="text" name="full_name" id="full_name" class="h-10 border mt-1 rounded px-4 w-full bg-gray-50" value="User" />
                           </div>

                           <div class="md:col-span-2">
                              <label for="full_name">Last Name</label>
                              <input type="text" name="full_name" id="full_name" class="h-10 border mt-1 rounded px-4 w-full bg-gray-50" value="Client" />
                           </div>

                           <div class="md:col-span-5">
                              <label for="email">Email Address</label>
                              <input type="text" name="email" id="email" class="h-10 cursor-not-allowed mt-1 rounded px-4 w-full bg-gray-50" value="" placeholder="user12@gmail.com" disabled />
                           </div>

                           <div class="md:col-span-3">
                              <label for="address">Address / Street</label>
                              <input type="text" name="address" id="address" class="h-10 border mt-1 rounded px-4 w-full bg-gray-50" value="" placeholder="" />
                           </div>

                           <div class="md:col-span-2">
                              <label for="city">City</label>
                              <input type="text" name="city" id="city" class="h-10 border mt-1 rounded px-4 w-full bg-gray-50" value="" placeholder="" />
                           </div>

                           <div class="md:col-span-2">
                              <label for="country">Country / region</label>
                              <div class="h-10 bg-gray-50 flex border border-gray-200 rounded items-center mt-1">
                                 <input name="country" id="country" placeholder="Country" class="px-4 appearance-none outline-none text-gray-800 w-full bg-transparent" value="" />
                              </div>
                           </div>

                           <div class="md:col-span-2">
                              <label for="state">State / province</label>
                              <div class="h-10 bg-gray-50 flex border border-gray-200 rounded items-center mt-1">
                                 <input name="state" id="state" placeholder="State" class="px-4 appearance-none outline-none text-gray-800 w-full bg-transparent" value="" />
                              </div>
                           </div>
                           <div class="md:col-span-1">
                              <label for="zipcode">Zipcode</label>
                              <input type="text" name="zipcode" id="zipcode" class="transition-all flex items-center h-10 border mt-1 rounded px-4 w-full bg-gray-50" placeholder="" value="" />
                           </div>

                           <div class="md:col-span-5 text-right mt-10">
                              <div class="inline-flex items-end">
                                 <button class="bg-blue-500 hover:bg-blue-700 text-white font-bold py-2 px-4 rounded">Save Changes</button>
                              </div>
                           </div>

                        </div>
                     </div>
                  </div>
               </div>
            </div>
         </div>
      </div>
   </section>

   <script src="./assets/js/sidebar.js"></script>
   <script src="./assets/js/fade.js"></script>
</body>

</html>