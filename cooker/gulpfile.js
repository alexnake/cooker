var gulp = require('gulp');
var sass = require('gulp-sass');
var concat = require('gulp-concat');

gulp.task('css', function () { 
    gulp.src('./resources/assets/sass/main.scss')
        .pipe(sass().on('error', sass.logError))
        .pipe(gulp.dest('./public/css/')); 
});

gulp.task('js', function () { 
    gulp.src('./resources/assets/js/**/*.js')
        .pipe(concat('main.js'))
        .pipe(gulp.dest('./public/js')); 
});


 // Default Task
gulp.task('default', ['css','js']);