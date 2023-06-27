/** @type {import('tailwindcss').Config} */
module.exports = {
  // remove for automatic dark mode
  darkMode: "class",
  content: ["./public/**/*.{html,js}"],
  theme: {
    extend: {
      fontFamily: {
        sans: ["Quicksand", "sans-serif"],
      },
    },
  },
  plugins: [],
};
