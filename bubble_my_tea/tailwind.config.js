const defaultTheme = require('tailwindcss/defaultTheme');

module.exports = {
    content: [
        './vendor/laravel/framework/src/Illuminate/Pagination/resources/views/*.blade.php',
        './storage/framework/views/*.php',
        './resources/views/layouts/default.blade.php',
    ],

    theme: {
        colors: {
            "pink":"#fee2e2",
            "pink1":"#fca5a5",
            "gray":"#9ca3af",
        },
        extend: {
           
            fontFamily: {
                sans: ['Nunito', ...defaultTheme.fontFamily.sans],
                pacifico: ["Pacifico, cursive"],
            },
        },
        container:{
            center: true,
            padding:"1rem",
            screen:{
                lg:"1124px",
                xl:"1124px",
                "2xl": "1124px",

            }
        }
    },

    plugins: [require('@tailwindcss/forms')],
};
