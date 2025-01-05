import defaultTheme from 'tailwindcss/defaultTheme';
import forms from '@tailwindcss/forms';

const plugin = require('tailwindcss/plugin');


/** @type {import('tailwindcss').Config} */
export default {
    content: [
        './vendor/laravel/framework/src/Illuminate/Pagination/resources/views/*.blade.php',
        './storage/framework/views/*.php',
        './resources/views/**/*.blade.php',
    ],


    
    theme: {
        extend: {

            aspectRatio: {
                'a4': '1.414 / 1'
            },
            colors: {
            },
            fontFamily: {
                sans: ["ui-sans-serif", "system-ui", "sans-serif", "Apple Color Emoji", "Segoe UI Emoji", "Segoe UI Symbol", "Noto Color Emoji"],
                poppins: ['Poppins', 'sans-serif'],
                orator: ['OratorStd', 'sans-serif'],
                oswald: ['Oswald', 'sans-serif'],
                lato: ['Lato', 'sans-serif']
            },
            spacing: {
                '1.5': '0.375rem',
                '3': '0.2rem',
            },
            backgroundImage: {
                'radial': 'radial-gradient(circle, rgba(17,17,17,1) 0%, rgba(0,0,0,1) 100%)',
                
            },
            dropShadow: {
                glow: [
                  "0 0px 1px rgba(255,255, 255, 0.7)",
                  "0 0px 4px rgba(255, 255,255, 0.3)"
                ]
              }
        },
    },

    plugins: [
        function ({ addUtilities }) {
            addUtilities({
                    '.bg-striped': {
                        backgroundColor: '#080808',
                        opacity: '1',
                        backgroundImage: 'linear-gradient(0deg, #080808 50%, #030303 50%)',
                        backgroundSize: '40px 40px',
                    }

            }
            )
        },
    ],

    darkMode: 'false',
};

