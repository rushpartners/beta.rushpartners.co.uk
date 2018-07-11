const mix = require('laravel-mix');
const build = require('./tasks/build.js');
const fs = require('fs')
const config = require('tailwindcss/defaultConfig')
const tailwind = require('tailwindcss')

fs.writeFileSync('./tailwind.json', JSON.stringify(config()))

mix.disableSuccessNotifications();
mix.setPublicPath('source/assets/');
mix.webpackConfig({
    plugins: [
        build.jigsaw,
        build.browserSync(),
        build.watch(['source/**/*.md', 'source/**/*.php', 'source/**/*.scss']),
    ]
});

mix.js('source/_assets/js/main.js', 'js')
    .sass('source/_assets/sass/main.scss', 'css/main.css')
    .options({
        processCssUrls: false,
        postCss: [
            tailwind('./tailwind.js'),
        ]
    })
    .version();
