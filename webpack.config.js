const webpack = require('webpack');
const path = require('path');
const ExtractTextPlugin = require("extract-text-webpack-plugin");

const extractSass = new ExtractTextPlugin({
    filename: "./css/app.css",
    disable: process.env.NODE_ENV === "development"
});

module.exports = {
    entry: path.resolve(__dirname + '/assets/main.js'),
    output: {
        path: path.resolve(__dirname, 'public'),
        filename: './js/app.js'
    },
    module: {
        rules: [
            {
                test: /\.vue$/,
                loader: 'vue-loader'
            },
            {
                test: /\.scss$/,
                loader: extractSass.extract({
                    loader: [{
                        loader: "css-loader"
                    }, {
                        loader: "sass-loader"
                    }],
                    // use style-loader in development
                    fallbackLoader: "style-loader"
                })
            }
        ]
    },
    plugins: [
	extractSass
    ],
    watch: true,
    /** Non included dependencies */
    externals: {
        express: 'express'
    },
    /** Running standalone vue */
    resolve: {
        alias: {
            'vue$': 'vue/dist/vue.common.js'
        }
    }
};
