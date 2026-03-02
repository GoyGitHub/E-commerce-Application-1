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
        "yale-blue": "#274060",
        "baltic-blue": "#335c81",
        "cool-sky": "#65afff",
        "space-indigo": "#1b2845",
        "cloudy-sky": "#5899e2",
      },
        accent: {
          50:  "#e6f3ff", // very light
          100: "#cce6ff",
          200: "#99ccff",
          300: "#66b3ff",
          400: "#3399ff",
          500: "#65afff", // base accent
          600: "#4d91e6",
          700: "#3573b3",
          800: "#1f5480",
          900: "#10334d", // very dark
        },
      },
            },
        },

        plugins: [forms],
    };
