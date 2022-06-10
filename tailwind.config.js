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
        'principal':'#1E272E'
      },
      backgroundImage: {
        'cine': "url('C:/Users/Cassio/Desktop/Arquivos/Unipampa/Aulas/Programação Web/PampaFlix/public/img/movie.jpg')",
      }
    },
  },
  plugins: [],
}
