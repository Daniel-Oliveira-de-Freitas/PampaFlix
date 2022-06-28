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
        'cine': 'url("C:/Users/danie/Desktop/5º Semestre/Programação Web/PampaFlix/public/img/movie.jpg")',
  
      },
      margin: {
        '25%': '25%',
        '5%': '5%',
        '2%': '2%',
        '1%':'1%'
      },
       screens: {
        'custom' :'820px'
      },
    },
  },
  plugins: [],
}
