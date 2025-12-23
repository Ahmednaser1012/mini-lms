/** @type {import('tailwindcss').Config} */
export default {
  content: [
    "./resources/**/*.blade.php",
    "./resources/**/*.js",
    "./resources/**/*.vue",
    "./app/Livewire/**/*.php",
    "./app/View/**/*.php",
  ],
  theme: {
    extend: {
      colors: {
        primary: {
          DEFAULT: '#1B2D64',
        },
        secondary: {
          DEFAULT: '#c2146e',
          light: '#D1107A',
        },
        accent: {
          DEFAULT: '#3D57A8',
          hover: '#324c85',
        }
      },
      fontFamily: {
        sans: ['Inter', 'sans-serif'],
      }
    },
  },
  plugins: [],
}
