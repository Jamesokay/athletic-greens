/* eslint-disable jsdoc/valid-types */
/** @type {import('tailwindcss').Config} */
module.exports = {
	content: [ './*.php', './template-parts/*.php' ],
	theme: {
		extend: {
			colors: {
				'vitality-grey': '#d1d5db',
				'vitality-grey-light': '#f7f8f7',
				'vitality-grey-medium': '#b2b3b2',
				'vitality-grey-dark': '#6b7280',
				'vitality-beige': '#edebe4',
				'vitality-green': '#0c3d3d',
				'vitality-green-hover': '#1ad976',
			},
		},
	},
	plugins: [],
};
