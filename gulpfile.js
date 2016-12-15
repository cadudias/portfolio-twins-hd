var elixir = require('laravel-elixir')

require('laravel-elixir-imagemin')
require('laravel-elixir-html-minify')

elixir(function(mix) {
  mix.sass(['*.sass'], 'resources/assets/css/custom.css')
  .styles([
    'skeleton.min.css',
    'jplayer.pink.flag.min.css',
    'particles.css',
    'resources/assets/css/custom.css'
  ], 'public/css/all.css')
  //'*.css'
  //.scripts('*.js')
  .scripts([
    'jquery-1.11.1.min.js', 'domready.js', 'cssrelpreload.js', 'loadCSS.js', 'jquery.jplayer.min.js', 'particles.min.js', 'particles-snow.js', 'home.js', 'profile.js'
  ])
  .imagemin()
  .html('**/*.php', 'public/views', 'resources/views', {quotes: true, loose: true, empty: true})
  .browserSync({
        proxy: 'localhost:8000'
    });
})
