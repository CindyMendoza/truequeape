const mix = require('laravel-mix');

/*
 |--------------------------------------------------------------------------
 | Mix Asset Management
 |--------------------------------------------------------------------------
 |
 | Mix provides a clean, fluent API for defining some Webpack build steps
 | for your Laravel application. By default, we are compiling the Sass
 | file for the application as well as bundling up all the JS files.
 |
 */

mix.js('resources/js/app.js', 'public/js')
  .sass('resources/sass/app.scss', 'public/css')
  .sourceMaps();
mix.browserSync('http://127.0.0.1:8000');

//Third party packages
const ImageminPlugin     = require('imagemin-webpack-plugin').default;
const CopyWebpackPlugin  = require('copy-webpack-plugin');
const imageminMozjpeg    = require('imagemin-mozjpeg');

//Only in production, you can remove if you want to use "npm run dev"
// if(mix.inProduction()) {
    mix.webpackConfig({
        plugins: [
            //Compress images
            new CopyWebpackPlugin([{
                from: 'resources/img', // FROM
                to: 'images/', // TO
            }]),
            new ImageminPlugin({
                test: /\.(jpe?g|png|gif|svg)$/i,
                pngquant: {
                    quality: '65-80'
                },
                plugins: [
                    imageminMozjpeg({
                        quality: 65,
                        //Set the maximum memory to use in kbytes
                        maxmemory: 1000 * 512
                    })
                ]
            })
        ],
    });
// }

