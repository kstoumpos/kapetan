/** @type {import('tailwindcss').Config} */
module.exports = {
  content: ["./*.php"],
  theme: {
    extend: {
      fontFamily: {
        sans: ['Gilmer', 'ui-sans-serif', 'system-ui', 'sans-serif'],
        display: ['TikTok Sans', 'ui-sans-serif', 'system-ui', 'sans-serif'],
        body: ['Gilmer', 'ui-sans-serif', 'system-ui', 'sans-serif'],
      },
      colors: {
        /* Official Kapetan brand palette — kapetan-website-brand-sheet.pdf, p.2 */
        navy: { DEFAULT: '#071A3F', 900: '#071A3F' },
        brand: { DEFAULT: '#0055FD' },
        accent: { DEFAULT: '#DE2E0E' },
      },
    },
  },
  plugins: [],
};
