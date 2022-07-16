/** @type {import('tailwindcss').Config} */
module.exports = {
  mode: 'jit',
  content: ["./index.html"],
  theme: {
    extend: {
        colors: {
            'blue-custom': '#662e17',
            'green-border': '#7bc793',
            'white-background':'#fcfce4',
            'orange-text': '#f8a54e',
            'orange-background':'#ffa56b',
            'yellow-text':'#fafdc3',
            'blue-dark-custom': '#1B254F',
            'yellow-custom': '#ff8530',
            'brown-custom': '#61302C',
            'green-custom': '#CDE6D0',
            'green-button': '#77d19a',
            'green-buttondark': '#55b672',
            'inner-green': '#afdcbd',
            'ranking-grey': '#e4d2be',
        },
        backgroundImage: {
            'wooden': "url('assets/background.png')",
            'wooden2': "url('assets/background3.png')"        }
    },
},
  plugins: [],
}
