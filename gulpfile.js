'use strict';

const gulp = require('gulp');
const sass = require('gulp-sass');
const imageop = require('gulp-image-optimization');
const imagemin = require('gulp-imagemin');
const image = require('gulp-image');
const autoprefixer = require('gulp-autoprefixer');

gulp.task('sass', function () {
  return gulp.src('css/sass/app.scss')
    .pipe(sass({outputStyle: 'compressed'}).on('error', sass.logError))
    .pipe(gulp.dest('./css'));
});

gulp.task('sass:watch', function () {
  gulp.watch('css/sass/**/*.scss', ['sass']);
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


gulp.task('autoprefixer', ['sass'], () =>
    gulp.src('css/app.css')
        .pipe(autoprefixer({
            browsers: ['last 1 versions'],
            cascade: false
        }))
        .pipe(gulp.dest('./css'))
);


gulp.task('default', ['autoprefixer', 'sass:watch']);
