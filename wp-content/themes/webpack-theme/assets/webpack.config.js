const path = require('path');
//const MiniCssExtractPlugin = require( 'mini-css-extract-plugin' );

module.exports = {
	mode: 'development',
	entry: {
	  main: './src/js/main.js',
	},
	output: {
		filename: '[name].js',
		path: path.resolve(__dirname, 'build'),
		clean: true,
	},
	devServer: {
		static: './build',
		port: '3000',
		static: {
			directory: path.join(__dirname, 'public'),
		  },
	},	
	module: {
		rules: [
			{
				test: /\.css$/i,
				use: ['style-loader', 'css-loader'],
			},
			{
				test: /\.(woff|woff2|eot|ttf|otf)$/i,
				type: 'asset/resource',
			},
			{
				test: /\.js$/,
				include: [JS_DIR],
				exclude: /node_modules/,
				use: 'babel-loader',
			},
		],
	},
	plugins: [
	  ],
};