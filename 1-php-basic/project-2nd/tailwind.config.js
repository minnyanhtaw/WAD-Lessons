/** @type {import('tailwindcss').Config} */
module.exports = {
  content: ["./*.php", "./node_modules/flowbite/**/*.js", "./template/*.php"],
  theme: {
    extend: {
      fontFamily: {
        sans: ["Montserrat", "sans-serif"],
      },
    },
  },
  plugins: [require("flowbite/plugin")],
};
