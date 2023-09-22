/** @type {import('tailwindcss').Config} */
export default {
    content: [
        "./resources/**/*.blade.php",
        "./resources/**/*.js",
        "./resources/**/*.vue",
        "./node_modules/flowbite/**/*.js",
    ],
    theme: {
        extend: {},
        colors: {
            primary: "#283f7e",
            secondary: "#DEA35A",
            primaryBg: "#131d37",
            primaryHover: "#3d528a",
            // ...
        },
        screens: {
            md: "640px",
            // => @media (min-width: 640px) { ... }

            lg: "1024px",
            // => @media (min-width: 1024px) { ... }

            xlg: "1280px",
            // => @media (min-width: 1280px) { ... }
        },
    },
    plugins: [require("flowbite/plugin")],
};
