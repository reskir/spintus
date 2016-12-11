'use strict';

var gulp = require('gulp');
var sass = require('gulp-sass');
var imageop = require('gulp-image-optimization');
var imagemin = require('gulp-imagemin');
var image = require('gulp-image');

gulp.task('sass', function () {
  return gulp.src('css/sass/app.scss')
    .pipe(sass().on('error', sass.logError))
    .pipe(gulp.dest('./css'));
});

gulp.task('sass:watch', function () {
  gulp.watch('css/sass/*.scss', ['sass']);
});


gulp.task('images', function(cb) {
    gulp.src(['src/**/*.png','src/**/*.jpg','src/**/*.gif','src/**/*.jpeg']).pipe(imageop({
        optimizationLevel: 5,
        progressive: true,
        interlaced: true
    }))
    .pipe(imagemin([imagemin.jpegtran()]))
    .pipe(image())
    .pipe(gulp.dest('images')).on('end', cb).on('error', cb);
});


gulp.task('default', ['sass', 'sass:watch']);
