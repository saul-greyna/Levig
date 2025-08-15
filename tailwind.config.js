/** @type {import('tailwindcss').Config} */
export default {
  content: [
    "./resources/**/*.blade.php",
    "./resources/**/*.js",
    "./resources/**/*.vue",
    "./resources/**/*.ts"
  ],
  theme: {
    extend: {
      fontFamily: {
        'lexend': ['Lexend Deca', 'sans-serif'],
      },
      colors: {
        'primary': '#d9d7be',
        'secondary': '#c6c4a2',
        'tertiary': '#a29e60',
        'quaternary': '#8e874d',
        'quinary': '#7a703b',
        'primary-text': '#000000',
        'secondary-text': '#ffffff',
      },
    },
  },
  plugins: [],
}
