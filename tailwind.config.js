/** @type {import('tailwindcss').Config} */
module.exports = {
  content: ["./app/Views/**/*.{html,php,js}"],
  theme: {
    extend: {
      colors: {
        primary: {
          500: '#your-color',
          600: '#your-darker-color',
        }
      }
    },
  },
  plugins: [],
}

