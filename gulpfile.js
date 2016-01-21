'use strict';

var gulp = require('gulp');
var rename = require('gulp-rename');
var sass = require('gulp-sass');
var concat = require('gulp-concat');
var autoprefixer = require('gulp-autoprefixer');
var imagemin = require('gulp-imagemin');
var uglify = require('gulp-uglify');
var del = require('del');

const ASSETS_PATH = "./resources/assets/";
const PUBLIC_PATH = "./public/";

var paths = {
    dev_styles: ASSETS_PATH + "sass/app.scss",
    dev_scripts: [ASSETS_PATH + "js/modernizr.js", ASSETS_PATH + "js/app.js"],
    pub_styles: PUBLIC_PATH + "css",
    pub_scripts: PUBLIC_PATH + "js"
};


/**
 * Cleans the build system by erasing public stylesheets and javascript files
 *
 * Make sure to run this command before deployment and build anew to make sure everything is running smoothly
 *
 */
gulp.task('clean', function () {
    return del([paths.pub_styles, paths.pub_scripts]);
});


/**
 * Builds the application's stylesheet files
 *
 * Compiles sass files, enables autoprefixing, renames them, and places them in the public directory
 */
gulp.task('styles', function () {
    gulp.src(paths.dev_styles)
        .pipe(sass().on('error', sass.logError))
        .pipe(autoprefixer('last 2 version'))
        .pipe(rename('app.css'))
        .pipe(gulp.dest(paths.pub_styles));
});


/**
 * Builds the application's javascript files
 *
 */
gulp.task('scripts', function () {
    gulp.src(paths.dev_scripts)
        .pipe(concat('app.js'))
        .pipe(gulp.dest(paths.pub_scripts));
});


/**
 * Build the application's image files
 *
 * Compresses, optimizes, and places images in the public directory
 */
gulp.task('images-opt', function () {
    return gulp.src('resources/assets/images/*.*')
        .pipe(imagemin({
            progressive: true,
            optimizationLevel: 5
        }))
        .pipe(gulp.dest(paths.public_dir + 'images'));
});


gulp.task('watch', function () {
    gulp.watch(ASSETS_PATH + "sass/**/*.scss", ['styles']);
    gulp.watch(ASSETS_PATH + "js/*.js", ['scripts']);
});