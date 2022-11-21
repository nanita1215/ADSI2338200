module.exports = {
  purge: [
    './resources/views/**/*.blade.php',
    './resources/css/**/*.css',
  ],
  theme: {
    extend: {}
    colors: {
      'larapp: #614883';
    }
  },
  variants: {},
  plugins: [
    require('@tailwindcss/ui'),
  ]
}
