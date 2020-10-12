const { merge } = require('webpack-merge');
const common = require('./webpack.config.common');
const BrowserSyncPlugin = require('browser-sync-webpack-plugin');
const webpack = require('webpack');

module.exports = merge(common, {
    mode: "development",
    output: {
        pathinfo: true,
        publicPath: 'http://localhost:8080/js/',
        filename: '[name].js'
    },
    devServer: {
        headers: {
            'Access-Control-Allow-Origin': '*'
        },
        proxy: {
            '/': {
                target: "http://ath.test/", // local server
                changeOrigin: true,
                secure: false
            }
        }
    },
    plugins: [
        new webpack.NamedModulesPlugin(),
        new webpack.HotModuleReplacementPlugin(),
        new BrowserSyncPlugin({
            proxy: 'http://ath.test/',
            files: [{
                match: [
                    '**/*.php',
                    '**/*.html',
                    '**/*.css',
                    '**/*.js',
                ],
                fn: function(event, file) {
                    if (event === "change") {
                        const bs = require('browser-sync').get('bs-webpack-plugin');
                        bs.reload();
                    }
                }
            }]
        }, {
            reload: false
        })
    ],
    watch: true,
});