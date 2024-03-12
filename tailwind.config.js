/** @type {import('tailwindcss').Config} */
module.exports = {
  content: ['./*/*.html','./*.html'],
  theme: {
    screens:{
      'xxl':{'max':'1440px'},
      'xl':{'max':'1200px'},
      'lg':{'max':'1024px'},
      'md':{'max':'768px'},
      'sm':{'max':'700px'},
      'xs':{'max':'500px'}
    },
    container:{
      center:true,
    },
    extend: {
      colors:{
        'dark-blue':'#0055A1',
        'black':'#000000',
        'white':'#FEFEFE',
        'red':'#FF0000',
        'dark':'#02192D',
        'gray':'#99989A',
        'light-gray':'#F2F2F2',
      }
    },
  },
  plugins: [],
}