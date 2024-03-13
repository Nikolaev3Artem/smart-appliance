/** @type {import('tailwindcss').Config} */
module.exports = {
  content: ['./*/*.html','./*.html'],
  theme: {
    screens:{
      'xl':{'max':'1280px'},
      'lg':{'max':'1024px'},
      'md':{'max':'744px'},
      'sm':{'max':'425px'},
      'xs':{'max':'375px'}
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
    container: {
      center: true,
      padding: {
        DEFAULT: '0px 80px',
        sm: '2rem',
        lg: '0px 48px',
        xl: '5rem',
        '2xl': '6rem',
      },

    },
  },
  plugins: [],
}