var elixir = require('laravel-elixir')

require('laravel-elixir-imagemin')
//require('laravel-elixir-minify-html')
require('laravel-elixir-html-minify')

elixir(function(mix) {
  mix.sass('*.sass')
  .styles('*.css')
  //.scripts('*.js')
  .scripts([
    'domready.js', 'cssrelpreload.js', 'loadCSS.js', 'jquery.jplayer.min.js', 'particles.min.js', 'particles-snow.js', 'home.js', 'profile.js'
  ])
  // .rollup('all.js')
  .imagemin()
  //.html('resources/views/*', 'public/views/*', {collapseWhitespace: true, removeAttributeQuotes: true, removeComments: true})
  .html('**/*.php', 'public/views', 'resources/views', {quotes: true, loose: true, empty: true, minifyJS: true})
  .browserSync({
        proxy: 'localhost:8000'
    });
})

// var gulp = require('gulp');
// var gulpif = require('gulp-if');
// var sprity = require('sprity');
 
// // generate sprite.png and _sprite.scss 
// gulp.task('sprites', function () {
//   return sprity.src({
//     src: './public/images/logos/*.{png,jpg}',
//     style: './sprite.css',
//     // ... other optional options 
//     // for example if you want to generate scss instead of css 
//     processor: 'sass', // make sure you have installed sprity-sass 
//   })
//   .pipe(gulpif('*.png', gulp.dest('./public/images/logos/'), gulp.dest('./public/css/')))
// });