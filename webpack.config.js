const webpack = require('webpack');
const CleanWebpackPlugin = require('clean-webpack-plugin');
const ExtractTextPlugin = require('extract-text-webpack-plugin');
const UglifyJsPlugin = require('uglifyjs-webpack-plugin');
const OptimizeCssAssetsPlugin = require('optimize-css-assets-webpack-plugin');
const DEBUG = process.env.NODE_ENV !== 'production';
const { ImageminWebpackPlugin } = require("imagemin-webpack");

const CleanWebpack = new CleanWebpackPlugin(['static/css/', 'static/js/', 
	'static/sourcemaps/', 'static/fonts/', 'static/img/']);
/* Dev */
const ExtractText = new ExtractTextPlugin(
{
	filename: 'css/main.css',
	disable: false,
	allChunks: true,
});
/*end dev */

/*Production*/

const WebpackDefine = new webpack.DefinePlugin({
	'process.env': {
		NODE_ENV: JSON.stringify('production'),
	},
});
const WebpackOptimezeOccurence =  new webpack.optimize.OccurrenceOrderPlugin();
// > Minimize JS
const WebpackOptimezeUglifyJs = new UglifyJsPlugin({});
// > CSS Bundle
const ExtractTextCss = new ExtractTextPlugin({
	filename: 'css/main.css',
	disable: false,
	allChunks: true,
});
// > Minimize CSS
const OptimizeCss = new OptimizeCssAssetsPlugin({
	assetNameRegExp: /\.(css)?$/,
	cssProcessor: require('cssnano'),
	cssProcessorOptions: {
		discardComments: { removeAll: true },
	},
	canPrint: true,
});


/*end production*/ 
const imageminManifest = {};
const ImagenMin = new ImageminWebpackPlugin({
	cache: true,
	bail: false, 
	loader: false,
	manifest: imageminManifest,
	name: "./static/img/[name].[ext]",
	test: /\.(jpe?g|png|gif|svg)$/i,
	include: undefined,
	exclude: undefined
})


const config = {
	mode: 'development',
	entry: './src/index.js',
	output:
	{
		path:`${__dirname}/static`,
		filename:'js/main.js',
		sourceMapFilename: 'sourcemaps/[file].map' 
	},
	resolve: {
		modules: ['node_modules', './src/'],
		extensions: ['.js', '.json', '.css', '.scss', 'sass'],
		descriptionFiles: ['package.json'],
	},
	module:
	{
		rules:
		[
		{
			test: /\.(js)?$/,
			loader: 'babel-loader',
			include: ['./src/'],
			exclude: /(node_modules)/,
			options: {
				presets: ['es2015', 'stage-2'],
			},
		},
		{
			test: /\.(css|scss|sass)?$/,
			use: ExtractTextPlugin.extract({
				fallback: 'style-loader/url!file-loader',
				use: ['css-loader', 'sass-loader'],
			}),
		},
		{
			test: /\.(woff(2)?|ttf|eot|svg)(\?v=\d+\.\d+\.\d+)?$/,
			use: [{
				loader: 'file-loader',
				options: {
					name: '[name].[ext]',
					outputPath: 'fonts/'
				}
			}]
		},
		{
			test: /\.(gif|png|jpe?g|svg|jpg)$/i,
			use: 
			[
			{
				loader: 'file-loader',
				options: 
				{
					mozjpeg: {
						progressive: true,
						quality: 65
					},
					optipng: {
						enabled: false,
					},
					pngquant: {
						quality: '65-90',
						speed: 4
					},
					gifsicle: {
						interlaced: false,
					},
					webp: {
						quality: 75
					},
					/*emitFile: true, */
					name:'img/[hash].[ext]',
					publicPath: '../'
				},
			},
			],
		}
		]
	},
	devtool: DEBUG ? 'source-map' : '',
	context: __dirname,
	target: 'web',
	plugins:
	DEBUG ? 
	[
	// CleanWebpack,
	ExtractText,
	ImagenMin
	]:
	[
	CleanWebpack,
	ImagenMin,
	WebpackDefine,
	WebpackOptimezeOccurence,
	WebpackOptimezeUglifyJs,
	ExtractTextCss,
	OptimizeCss
	],
	cache: true,
};

module.exports = config;