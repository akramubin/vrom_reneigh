const defaultTheme = require('tailwindcss/defaultTheme');

/** @type {import('tailwindcss').Config} */
module.exports = {
    content: [
        './vendor/laravel/framework/src/Illuminate/Pagination/resources/views/*.blade.php',
        './vendor/laravel/jetstream/**/*.blade.php',
        './storage/framework/views/*.php',
        './resources/views/**/*.blade.php',
    ],

    theme: {
<<<<<<< HEAD
        container: {
			center: true,
			padding: {
				DEFAULT: "1rem",
				lg: "75px",
				xl: "100px",
			},
		},
        extend: {
            colors: {
				primary: "#4743FB",
				secondary: "#9D9DBC",
				dark: "#0D0C41",
				grey: "#D8D8E4",
				darkGrey: "#F5F6F6",
				subtlePars: "#B0AED6",
			},
            fontFamily: {
                sans: ['Nunito', ...defaultTheme.fontFamily.sans],
			    poppins: "Poppins, sans-serif",
=======
        extend: {
            fontFamily: {
                sans: ['Figtree', ...defaultTheme.fontFamily.sans],
>>>>>>> 21d66d715cff087f0b6e76a6e29606207e68da90
            },
        },
    },

    plugins: [require('@tailwindcss/forms'), require('@tailwindcss/typography')],
};
