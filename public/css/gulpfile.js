var gulp = require('gulp');
var sass = require('gulp-sass');
var concat = require('gulp-concat');
var mincss = require('gulp-clean-css');
var rename = require('gulp-rename');

/*
SASS
 */
gulp.task('sass', function(){
  gulp.src('sass/**/*.sass')
    .pipe(sass()) // Using gulp-sass
    .pipe(gulp.dest('production/'))
});

/*
CONCAT
 */
gulp.task('concat', function() {
    gulp.src('production/admin/**/*.css')
		.pipe(concat('../admin.css'))
		.pipe(gulp.dest('production/'));

    gulp.src('production/front-office/**/*.css')
        .pipe(concat('../front-office.css'))
        .pipe(gulp.dest('production/'));

    gulp.src('production/main/**/*.css')
        .pipe(concat('../main.css'))
        .pipe(gulp.dest('production/'));

    gulp.src('production/login/**/*.css')
        .pipe(concat('../login.css'))
        .pipe(gulp.dest('production/'));
});

/*
 MINCSS
 */
gulp.task('mincss', function () {
    gulp.src('production/default.css')
        .pipe(mincss({
            keepBreaks: false
        }))
        .pipe(rename({suffix: '.min'}))
        .pipe(gulp.dest('production'));
});

/*
DOALL
 */
gulp.task('admin', function () {
    gulp.src('sass/**/*.sass')
        .pipe(sass()) // Using gulp-sass
        .pipe(gulp.dest('production/'));

    gulp.src('production/admin/**/*.css')
        .pipe(concat('../admin.css'))
        .pipe(gulp.dest('production/'));
});

/*
WATCH
 */
gulp.task('watch', function(){
    gulp.watch('distr/**/*.sass', ['sass']);
    gulp.watch('production/blocks/**/*.css', ['concat']);
    //gulp.watch('production/default.css', ['mincss']);
});