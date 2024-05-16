tailwind.config = {
   theme: {
      extend: {
         colors: {
            clifford: '#fff',
         }
      },
      screens: {
         'sm': '640px',
         'md': '768px',
         'lg': '1024px',
         'xl': '1280px',
         '2xl': '1536px',
      },
      fontFamily: {
         'ptsans': ['PT Serif', 'serif'],
         'poppins': ['Poppins', 'sans-serif'],
         'inter': ['Inter', 'sans-serif'],
         'rubik': ['Rubik', 'sans-serif'],
      },
      container: {
         // you can configure the container to be centered
         center: true,

         // or have default horizontal padding
         padding: '0',

         // default breakpoints but with 40px removed
         screens: {
            sm: '600px',
            md: '728px',
            lg: '984px',
            xl: '1280px',
            '2xl': '1536px',
         },
      },
   }
}