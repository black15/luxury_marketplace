<!DOCTYPE html>
<html lang="en">

<head>
   <meta charset="UTF-8">
   <meta name="viewport" content="width=device-width, initial-scale=1.0">
   <!-- <link rel="stylesheet" href="output.css"> -->
   <link rel="stylesheet" href="./assets/css/style.css">
   <link rel="stylesheet" href="./assets/css/carousel.css">
   <link rel="stylesheet" href="./assets/css/testimonials.css">

   <script src="./assets/js/cdn.tailwindcss.js"></script>
   <script src="./assets/js/tailwind.conf.js"></script>
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
   <?php include("./navbar.php"); ?>

   <section class='container mx-auto px-10 py-10 xl:px-20'>
      <form>
         <div class="space-y-12">

            <div class="border-b border-gray-900/10 pb-12">
               <h2 class="text-base font-semibold leading-7 text-gray-900">Product Details</h2>
               <p class="mt-1 text-sm leading-6 text-gray-600">Use a permanent address where you can receive mail.</p>

               <div class="mt-10 grid grid-cols-1 gap-x-6 gap-y-8 sm:grid-cols-6">
                  <div class="sm:col-span-3">
                     <label for="item-name" class="block text-sm font-medium leading-6 text-gray-900">Product Name</label>
                     <div class="mt-2">
                        <input type="text" name="item-name" id="item-name" autocomplete="given-name" class="block w-full rounded-md border-0 py-1.5 px-2 text-gray-900 shadow-sm ring-1 ring-inset ring-gray-300 placeholder:text-gray-400 focus:ring-2 focus:ring-inset focus:ring-indigo-600 sm:text-sm sm:leading-6">
                     </div>
                  </div>

                  <div class="sm:col-span-3">
                     <label for="price" class="block text-sm font-medium leading-6 text-gray-900">Price</label>
                     <div class="mt-2">
                        <input type="number" name="price" id="price" class="block w-full rounded-md border-0 py-1.5 px-2 text-gray-900 shadow-sm ring-1 ring-inset ring-gray-300 placeholder:text-gray-400 focus:ring-2 focus:ring-inset focus:ring-indigo-600 sm:text-sm sm:leading-6">
                     </div>
                  </div>

                  <div class="sm:col-span-3">
                     <label for="email" class="block text-sm font-medium leading-6 text-gray-900">Email address</label>
                     <div class="mt-2">
                        <input id="email" name="email" type="email" autocomplete="email" class="block w-full rounded-md border-0 py-1.5 px-2 text-gray-900 shadow-sm ring-1 ring-inset ring-gray-300 placeholder:text-gray-400 focus:ring-2 focus:ring-inset focus:ring-indigo-600 sm:text-sm sm:leading-6" value='user@email.com'>
                     </div>
                  </div>

                  <div class="sm:col-span-4">
                     <label for="country" class="block text-sm font-medium leading-6 text-gray-900">Country</label>
                     <div class="mt-2">
                        <select id="country" name="country" autocomplete="country-name" class="block w-full rounded-md border-0 p-2 text-gray-900 shadow-sm ring-1 ring-inset bg-white ring-gray-300 focus:ring-2 focus:ring-inset focus:ring-indigo-600 sm:max-w-xs sm:text-sm sm:leading-6">
                           <option>Algeria</option>
                           <option>Moroco</option>
                           <option>United State</option>
                        </select>
                     </div>
                  </div>

                  <div class="col-span-full">
                     <label for="street-address" class="block text-sm font-medium leading-6 text-gray-900">Street address</label>
                     <div class="mt-2">
                        <input type="text" name="street-address" id="street-address" autocomplete="street-address" class="block w-full rounded-md border-0 py-1.5 text-gray-900 shadow-sm ring-1 ring-inset ring-gray-300 placeholder:text-gray-400 focus:ring-2 focus:ring-inset focus:ring-indigo-600 sm:text-sm sm:leading-6">
                     </div>
                  </div>

                  <div class="sm:col-span-2 sm:col-start-1">
                     <label for="city" class="block text-sm font-medium leading-6 text-gray-900">City</label>
                     <div class="mt-2">
                        <input type="text" name="city" id="city" autocomplete="address-level2" class="block w-full rounded-md border-0 py-1.5 text-gray-900 shadow-sm ring-1 ring-inset ring-gray-300 placeholder:text-gray-400 focus:ring-2 focus:ring-inset focus:ring-indigo-600 sm:text-sm sm:leading-6">
                     </div>
                  </div>

                  <div class="sm:col-span-2">
                     <label for="region" class="block text-sm font-medium leading-6 text-gray-900">State / Province</label>
                     <div class="mt-2">
                        <input type="text" name="region" id="region" autocomplete="address-level1" class="block w-full rounded-md border-0 py-1.5 text-gray-900 shadow-sm ring-1 ring-inset ring-gray-300 placeholder:text-gray-400 focus:ring-2 focus:ring-inset focus:ring-indigo-600 sm:text-sm sm:leading-6">
                     </div>
                  </div>

                  <div class="sm:col-span-2">
                     <label for="postal-code" class="block text-sm font-medium leading-6 text-gray-900">ZIP / Postal code</label>
                     <div class="mt-2">
                        <input type="text" name="postal-code" id="postal-code" autocomplete="postal-code" class="block w-full rounded-md border-0 py-1.5 text-gray-900 shadow-sm ring-1 ring-inset ring-gray-300 placeholder:text-gray-400 focus:ring-2 focus:ring-inset focus:ring-indigo-600 sm:text-sm sm:leading-6">
                     </div>
                  </div>
                  <div class="col-span-full">
                     <label for="about" class="block text-sm font-medium leading-6 text-gray-900">About</label>
                     <div class="mt-2">
                        <textarea id="about" name="about" rows="3" class="block w-full rounded-md border-0 py-1.5 px-2 text-gray-900 shadow-sm ring-1 ring-inset ring-gray-300 placeholder:text-gray-400 focus:ring-2 focus:ring-inset focus:ring-indigo-600 sm:text-sm sm:leading-6"></textarea>
                     </div>
                     <p class="mt-3 text-sm leading-6 text-gray-600">Describe your product for customers.</p>
                  </div>
               </div>
               <div class="mt-10 grid grid-cols-1 gap-x-6 gap-y-8 sm:grid-cols-6">
                  <div class="col-span-full">
                     <label for="cover-photo" class="block text-sm font-medium leading-6 text-gray-900">Product images</label>
                     <div class="mt-2 flex justify-center rounded-lg border border-dashed border-gray-900/25 px-6 py-10">
                        <div class="text-center">
                           <svg class="mx-auto h-12 w-12 text-gray-300" viewBox="0 0 24 24" fill="currentColor" aria-hidden="true">
                              <path fill-rule="evenodd" d="M1.5 6a2.25 2.25 0 012.25-2.25h16.5A2.25 2.25 0 0122.5 6v12a2.25 2.25 0 01-2.25 2.25H3.75A2.25 2.25 0 011.5 18V6zM3 16.06V18c0 .414.336.75.75.75h16.5A.75.75 0 0021 18v-1.94l-2.69-2.689a1.5 1.5 0 00-2.12 0l-.88.879.97.97a.75.75 0 11-1.06 1.06l-5.16-5.159a1.5 1.5 0 00-2.12 0L3 16.061zm10.125-7.81a1.125 1.125 0 112.25 0 1.125 1.125 0 01-2.25 0z" clip-rule="evenodd" />
                           </svg>
                           <div class="mt-4 flex text-sm leading-6 text-gray-600">
                              <label for="image-input" class="relative cursor-pointer rounded-md bg-white font-semibold text-indigo-600 focus-within:outline-none focus-within:ring-2 focus-within:ring-indigo-600 focus-within:ring-offset-2 hover:text-indigo-500">
                                 <span>Upload a file</span>
                                 <input id="image-input" name="image-input" type="file" multiple accept="image/*" class="sr-only">
                              </label>
                              <p class="pl-1">or drag and drop</p>
                           </div>
                           <p class="text-xs leading-5 text-gray-600">PNG, JPG, GIF up to 10MB</p>
                        </div>
                     </div>
                  </div>
               </div>

               <div id="myForm" class='mt-12'>
                  <div id="form-container">
                     <!-- Fields will be added/removed here -->
                  </div>
                  <button class="rounded-md bg-indigo-600 px-3 py-2 text-sm font-semibold text-white shadow-sm hover:bg-indigo-500 focus-visible:outline focus-visible:outline-2 focus-visible:outline-offset-2 focus-visible:outline-indigo-600" type="button" onclick="addField()">Add Option</button>
               </div>
            </div>
         </div>

         <div class="mt-6 flex items-center justify-end gap-x-6">
            <button type="button" class="text-sm font-semibold leading-6 text-gray-900">Cancel</button>
            <button type="submit" class="rounded-md bg-indigo-600 px-3 py-2 text-sm font-semibold text-white shadow-sm hover:bg-indigo-500 focus-visible:outline focus-visible:outline-2 focus-visible:outline-offset-2 focus-visible:outline-indigo-600">Save</button>
         </div>
      </form>
   </section>

   <script src="./assets/js/addfield.js"></script>
   <script src="./assets/js/sidebar.js"></script>
   <script src="./assets/js/fade.js"></script>
</body>

</html>