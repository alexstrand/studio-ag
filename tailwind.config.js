/** @type {import('tailwindcss').Config} config */
const config = {
  content: ['./app/**/*.php', './resources/**/*.{php,vue,js}'],
  theme: {
    extend: {
      colors: {
        'black': '#2A2B2A',
        'yellow': '#FFBD52',
        'beige': '#F6EADF',
        'red': '#D35845',
        'green': '#154734',
        'pink': '#EFBDBF'
      }, // Extend Tailwind's default colors
    },
  },
  plugins: [require('tailwind-hamburgers')],
};

export default config;
