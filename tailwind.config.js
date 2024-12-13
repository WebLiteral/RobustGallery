import defaultTheme from 'tailwindcss/defaultTheme';
import forms from '@tailwindcss/forms';

/** @type {import('tailwindcss').Config} */
export default {
    content: [
        './vendor/laravel/framework/src/Illuminate/Pagination/resources/views/*.blade.php',
        './storage/framework/views/*.php',
        './resources/views/**/*.blade.php',
    ],


    
    theme: {
        extend: {
            colors: {
            },
            fontFamily: {
                sans: ["ui-sans-serif", "system-ui", "sans-serif", "Apple Color Emoji", "Segoe UI Emoji", "Segoe UI Symbol", "Noto Color Emoji"],
                poppins: ['Poppins', 'sans-serif']
            },
            spacing: {
                '1.5': '0.375rem',
                '3': '0.2rem',
            },
        },
    },

    plugins: [
        function ({ addUtilities, theme }) {
            addUtilities({
                    

            }
            )
        },
    ],

    darkMode: 'false',
};

