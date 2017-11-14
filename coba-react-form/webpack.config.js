const path = require('path')
module.exports = {
    entry: path.resolve(__dirname, 'src/app/index.js'),
    output: {
        path: path.resolve(__dirname, 'dist/app'),
        filename: 'bundle.js',
        publicPath: '/app/'
    },
    module: {
        loaders: [{
                test: /\.js$/,
                loader: 'babel-loader',
                exclude: /node_modules/,
                query: {
                    presets: ['react', 'es2015']
                }
            },
            {
                test: /\.jsx$/,
                loader: 'babel-loader',
                exclude: /node_modules/,
                query: {
                    presets: ['react', 'es2015']
                }
            },
            { 	test: /\.(png|woff|woff2|eot|ttf|svg|jpg)$/, 
           		loader: 'url-loader' 
           	},
           	{
                test: /\.css$/,
                loader: 'style-loader!css-loader'
            }
        ]
    }
}