const plugin = require( 'tailwindcss/plugin' );
// eslint-disable-next-line no-undef
module.exports = {
	purge: [
		'./test.php',
	],
	theme: {
		extend: {
			colors: {
				cyan: '#54c0d5',
				gray: {
					400: '#bfbfbf',
					500: '#9a9797',
					200: '#eff0f1',
					900: '#313030',
				},
				white: '#f8f8f8',
				'off-white': '#eff0f1',
				brown: {
					500: '#b67b57',
				},
			},
		},
		screens: {
			sm: '640px',
			md: '768px',
			lg: '1024px',
			xl: '1200px',
		},
		fontFamily: {
			main: [ 'Lato', 'Helvetica', 'Arial', 'sans-serif' ],
			heading: [ "'Baloo 2'", 'Lato' ],
		},
		borderWidth: {
			default: '1px',
			0: '0',
			3: '3px',
			2: '2px',
			4: '4px',
		},
		inset: {
			0: '0',
			'1/2': '50%',
			'1/3': '33.33333%',
			'2/3': '66.66666%',
			'1/4': '25%',
			'3/4': '75%',
			'3em': '3em',
			5: '5px',
			6: '6px',
			3: '3px',
			4: '4px',
			2: '2px',
		},
		zIndex: {
			'-1': '-1',
		},
	},
	variants: {
		transitionTimingFunction: [ 'responsive', 'hover', 'focus', 'odd' ],
	},
	plugins: [
		require( 'tailwindcss' ),
		require( 'autoprefixer' ),
	],
};

