    import defaultTheme from 'tailwindcss/defaultTheme';
    import forms from '@tailwindcss/forms';

    /** @type {import('tailwindcss').Config} */
    export default {
        content: [
            './vendor/laravel/framework/src/Illuminate/Pagination/resources/views/*.blade.php',
            './storage/framework/views/*.php',
            './resources/views/**/*.blade.php',
            './resources/js/**/*.tsx',
        ],

        theme: {
            extend: {
                fontFamily: {
                    sans: ['Inter', ...defaultTheme.fontFamily.sans],
                },
                colors: {
            primary: {
            50:  "#E9FBE1",
            100: "#D4F6C4",
            200: "#B8EE9D",
            300: "#9EE37D",
            400: "#7DD85A",
            500: "#63C132",
            600: "#4FA21F",
            700: "#3D8615",
            800: "#2F6A0E",
            900: "#358600", // your darkest green
            },

            accent: {
            50:  "#F0FAFF",
            100: "#CFF0FF", // from palette
            200: "#AAEFDF", // from palette
            300: "#8BE3CF",
            400: "#6FD8C0",
            500: "#4CCEB1",
            600: "#2EB5A0",
            700: "#1E9484",
            800: "#14736A",
            900: "#0B524D",
            },
        }
            },
        },

        plugins: [forms],
    };
