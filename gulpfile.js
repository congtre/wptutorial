'use strict';

const gulp = require('gulp');
const sass = require('gulp-sass')(require('sass'));
const sourcemaps = require('gulp-sourcemaps');
const postcss = require('gulp-postcss');
const psmq = require('postcss-sort-media-queries');
const flatten = require('gulp-flatten');
const cleanCSS = require('gulp-clean-css');
const javascriptObfuscator = require('gulp-javascript-obfuscator');
const browserSync = require('browser-sync').create();

const DIR = {
    srcSass: './src/scss/**/*.scss',
    srcJs: './src/js/*.js',
    destSass: './dist/css',
    destJs: './dist/js',
    pathPhp: 'http://localhost/00_jweb/00_dcyoung/wptutorial/',
};

gulp.task('scss', function () {
    return gulp
        .src(DIR.srcSass)
        .pipe(sourcemaps.init())
        .pipe(sass())
        .pipe(postcss([psmq]))
        .pipe(flatten())
        .pipe(cleanCSS({ compatibility: 'ie8' }))
        .pipe(sourcemaps.write('.'))
        .pipe(gulp.dest(DIR.destSass));
});

gulp.task('js', function () {
    return gulp
        .src(DIR.srcJs)
        .pipe(sourcemaps.init())
        .pipe(
            javascriptObfuscator({
                compact: true,
            })
        )
        .pipe(sourcemaps.write('.'))
        .pipe(gulp.dest(DIR.destJs));
});

gulp.task('browser-sync', function () {
    browserSync.init({
        proxy: DIR.pathPhp,
        notify: false,
    });

    gulp.watch(DIR.srcSass, gulp.series('scss')).on(
        'change',
        browserSync.reload
    );
    gulp.watch(DIR.srcJs, gulp.series('js')).on('change', browserSync.reload);
    gulp.watch('./*.php').on('change', browserSync.reload);
});

gulp.task('default', gulp.series('browser-sync'));
