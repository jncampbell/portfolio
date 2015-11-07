var elixir = require('laravel-elixir');
var autoprefixer = require('gulp-autoprefixer');
var imagemin = require('gulp-imagemin');
var gulp = require('gulp');

/*
 |--------------------------------------------------------------------------
 | Elixir Asset Management
 |--------------------------------------------------------------------------
 |
 | Elixir provides a clean, fluent API for defining some basic Gulp tasks
 | for your Laravel application. By default, we are compiling the Sass
 | file for our application, as well as publishing vendor resources.
 |
 */

gulp.task('images-opt', function() {
   return gulp.src('resources/assets/images/*.*')
       .pipe(imagemin(
           { progressive: true }
       ))
       .pipe(gulp.dest('public/images'));
});

elixir(function (mix) {
    mix.sass('app.scss');

    mix.scripts([
        'app.js',
        'addProject.js'
    ], 'public/javascript/scripts.js');

    mix.scripts([
        'modernizr.js'
    ], 'public/javascript/modernizr.js');

    mix.task('images-opt');
});

