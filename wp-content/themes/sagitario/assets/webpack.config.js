const path = require( 'path' );
const MiniCssExtractPlugin = require( 'mini-css-extract-plugin' );
const { CleanWebpackPlugin } = require( 'clean-webpack-plugin' );
//const OptimizeCssAssetsPlugin = require( 'optimize-css-assets-webpack-plugin');
const cssnano = require( 'cssnano' );
//const UglifyJsPlugin = require( 'Uglify-webpack-plugin' );
//const { argv } = require('process');
const CopyPlugin = require('copy-webpack-plugin'); // https://webpack.js.org/plugins/copy-webpack-plugin/

const JS_DIR = path.resolve( __dirname, 'src/js' );
const IMG_DIR = path.resolve( __dirname, 'src/img' );
const BOOT_DIR = path.resolve( __dirname, 'src/bootstrap' );
const BUILD_DIR = path.resolve( __dirname, 'build' );

const entry = {
	main: JS_DIR + '/main.js',
	single: JS_DIR + '/single.js',
	'clock-widget': JS_DIR + '/clock-widget.js',
};
const output = {
	path: BUILD_DIR,
	filename: 'js/[name].js',
};

const rules = [
	{
		test: /\.js$/,
		include: [JS_DIR],
		exclude: /node_modules/,
		use: 'babel-loader',
	},
	{
		test: /\.scss$/,
		exclude: /node_modules/,
		use: [
			MiniCssExtractPlugin.loader,
			'css-loader',
			'sass-loader',
		],
	},
	{
		test: /\.(png|jpg|svg|jpeg|gif|ico)$/,
		use: [
			{
				loader: 'file-loader',
				options: {
					name: '[path][name].[ext]',
					publicPath: 'production' === process.env.NODE_ENV ? '../' : '../../',
				},
			},
		],
	},
	{
		test: /\.(ttf|otf|eot|svg|woff(2)?)(\?[a-z0-9]+)?$/,
		type: 'asset/resource',
		exclude: [ IMG_DIR, /node_modules/ ],
/* 		use: [
			{
				loader: 'file-loader',
				options: {
					name: '[path][name].[ext]',
					publicPath: 'production' === process.env.NODE_ENV ? '../' : '../../'
				}
			}
		], */
		generator: {
			filename: '[path][name][ext]',
		},
	}

];

const plugins = ( argv ) => [
	new CleanWebpackPlugin( {
		cleanStaleWebpackAssets: ( 'production' === argv.mode)
	} ),
	new MiniCssExtractPlugin( {
		filename: 'css/[name].css'
	}),
	new CopyPlugin( {
		patterns: [
			{ from: BOOT_DIR, to: BUILD_DIR + '/bootstrap' }
		]
	} ),

];

module.exports = ( env, argv ) => ({
	entry: entry,
	output: output,
	devtool: 'source-map',
	module: {
		rules: rules,
	},
	optimization: {
		minimizer: [
/* 			new OptimizeCssAssetsPlugin( {
				cssProcessor: cssnano
			} ),
			new UglifyJsPlugin( {
				cache: false,
				parallel: true,
				sourceMap: false
			} )
 */		]
	},
	plugins: plugins( argv ),
	externals: {
		jquery: 'jQuery'
	},
});