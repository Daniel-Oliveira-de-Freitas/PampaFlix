module.exports = {
  content: [
    "./resources/**/*.blade.php",
    "./resources/**/*.js",
    "./resources/**/*.vue",
  ],
  theme: {
    extend: {
      colors:{
        'laranja':'#FF6B00',
      },
      backgroundImage: {
        'cine': "url('./img/movie.jpg')"
      }
    },
  },
  plugins: [],
}
