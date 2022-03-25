const defaultTheme = require('tailwindcss/defaultTheme');

module.exports = {
    content: [
        './vendor/laravel/framework/src/Illuminate/Pagination/resources/views/*.blade.php',
        './storage/framework/views/*.php',
        './resources/views/layouts/default.blade.php',
        './resources/views/welcome.blade.php',
        './resources/views/components/button.blade.php',
        './resources/views/components/application-logo.blade.php',
        './resources/views/components/auth-card.blade.php',
       './resources/views/components/input.blade.php',
       './resources/views/components/auth-session-status.blade.php',
      './resources/views/auth/login.blade.php,',
      './resources/views/components/dropdown-link.blade.php',
      './resources/views/components/label.blade.php',
      
    ],

    theme: {
        colors: {
            "pink":"#fee2e2",
            "pink1":"#fca5a5",
            "gray":"#9ca3af",
            "lightpink":"#FFFAFA",
        },
        extend: {
           
            fontFamily: {
                sans: ['Nunito', ...defaultTheme.fontFamily.sans],
                pacifico: ["Pacifico, cursive"],
                karla:["Karla"],
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
