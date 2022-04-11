module.exports = {
    content: [
      "./resources/**/*.blade.php",
      "./resources/**/*.js",
      "./resources/**/*.vue",
    ],
    theme: {
        extend: {

            fontFamily: {
                poppins: 'Poppins, sans-serif',
                roboto: 'Roboto, sans-serif',
                rubik: 'Rubik, sans-serif',
            },

            animation: {
                backdrop: 'backdrop 20s infinite',
            },

            keyframes: {
                backdrop: {
                    '0%': {
                        backgroundColor: '#FF0000',
                    },
                    '25%': {
                        backgroundColor: '#008AFF',
                    },
                    '50%': {
                        backgroundColor: '#303030',
                    },
                    '75%': {
                        backgroundColor: '#14CC60',
                    },
                    '100%': {
                        backgroundColor: '#FF0000',
                    },
                },
            },

            height: {
                '1/12':  '8.333333%',
                '2/12':	'16.666667%',
                '3/12':	'25%',
                '4/12':	'33.333333%',
                '5/12':	'41.666667%',
                '6/12':	'50%',
                '7/12':	'58.333333%',
                '8/12':  '66.666667%',
                '9/12':  '75%',
                '10/12':	'83.333333%',
                '11/12':	'91.666667%',
            },

            margin: {
                '1/12':  '8.333333%',
                '2/12':	'16.666667%',
                '3/12':	'25%',
                '4/12':	'33.333333%',
                '5/12':	'41.666667%',
                '6/12':	'50%',
                '7/12':	'58.333333%',
                '8/12':  '66.666667%',
                '9/12':  '75%',
                '10/12':	'83.333333%',
                '11/12':	'91.666667%',
            },

            padding: {
                '25': '7.25rem',
                '26': '7.5rem',
                '27': '7.75rem',
                '1/12':  '8.333333%',
                '2/12':	'16.666667%',
                '3/12':	'25%',
                '4/12':	'33.333333%',
                '5/12':	'41.666667%',
                '6/12':	'50%',
                '7/12':	'58.333333%',
                '8/12':  '66.666667%',
                '9/12':  '75%',
                '10/12':	'83.333333%',
                '11/12':	'91.666667%',
            },

            colors: {
                red: {
                    'custom':'#E30022',
                },
                green: {
                    'custom':'#70E000',
                },
                gray: {
                    'dark':'#090909',
                    'old':'#252425',
                    'medium':'#1C1D21',
                    'light':'#535253',
                },
                black: {
                    'custom':'#000000',
                    'lighter':'#171717',
                },
                own: {
                    'darkgray':'#444444',
                    'lightgray':'#B9B9B9',
                    'red':'#FF2A2A',
                    'orange':'#FF4C29',
                },
                gradient: {
                    'red': '#DA0037',
                    'black': '#171717',
                    'lightG':'#494949',
                    'darkG':'#3d3d3d',
                },
                blue: {
                    'light':'#00d9ff',
                    'dark':'#0011ff',
                    'glass':'#577AB4',
                    'new':'#099bdd',
                },
            },

            boxShadow: {
                inset: 'inset 7px 7px 48px #2c2c2c, inset -7px -7px 48px #5c5c5c',
                out :         '7px 7px 48px #2c2c2c, -7px -7px 48px #5c5c5c',
            },

        },
    },
    plugins: [
        require('@tailwindcss/aspect-ratio'),

      ],

}










