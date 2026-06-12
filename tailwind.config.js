/** @type {import('tailwindcss').Config} */
module.exports = {
  content: [
    './app/Views/**/*.php',
    './public/**/*.html',
  ],
  theme: {
    extend: {
      colors: {
        'primary': '#1152d4',
        'background-light': '#f6f6f8',
        'accent-purple': '#5a78f0',
        'accent-cyan': '#2cc0f1',
      },
      fontFamily: {
        'display': ['Lexend', 'sans-serif'],
        'inter': ['Inter', 'sans-serif'],
      },
      borderRadius: {
        'DEFAULT': '0.5rem',
        'lg': '1rem',
        'xl': '1.5rem',
      },
    },
  },
  plugins: [require('@tailwindcss/forms')],
}
