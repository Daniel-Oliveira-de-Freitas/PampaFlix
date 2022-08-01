const defaultTheme = require('tailwindcss/defaultTheme');

/** @type {import('tailwindcss').Config} */
module.exports = {
    content: [
        './vendor/laravel/framework/src/Illuminate/Pagination/resources/views/*.blade.php',
        './storage/framework/views/*.php',
        './resources/views/**/*.blade.php',
    ],

    theme: {
        extend: {
            fontFamily: {
                sans: ['Nunito', ...defaultTheme.fontFamily.sans],
            },     colors:{
                'laranja':'#FF6B00',
                'principal':'#1E272E'
              },
              backgroundImage: {
                'cine': 'url("~/img/movie.jpg")',
              },
              margin: {
                '25%': '25%',
                '5%': '5%',
                '2%': '2%',
                '1%':'1%'
              },
               screens: {
                'custom' :'820px'
              },
            },
        },

    plugins: [require('@tailwindcss/forms')],
};
