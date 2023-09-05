/** @type {import('tailwindcss').Config} */
module.exports = {
    extend: {
        color: {
            primary: "#073B4C",
        },
    },
    content: [
        "./resources/**/*.blade.php",
        "./resources/**/*.js",
        "./resources/**/*.vue",
    ],
    theme: {
        extend: {},
    },
    plugins: [],
};
