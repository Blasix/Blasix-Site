/** @type {import('tailwindcss').Config} */
module.exports = {
  // remove for automatic dark mode
  darkMode: "class",
  content: ["./src/**/*.{html,js,php}"],
  theme: {
    extend: {
      fontFamily: {
        sans: ["Quicksand", "sans-serif"],
      },
    },
  },
  plugins: [],
};
