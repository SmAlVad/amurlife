var gulp          = require('gulp'),
    gutil         = require('gulp-util' ),
    sass          = require('gulp-sass'),
    browserSync   = require('browser-sync'),
    concat        = require('gulp-concat'),
    uglify        = require('gulp-uglify'),
    cleancss      = require('gulp-clean-css'),
    rename        = require('gulp-rename'),
    autoprefixer  = require('gulp-autoprefixer'),
    notify        = require("gulp-notify");

gulp.task('browser-sync', function() {
    browserSync({
        proxy: 'amurlife.l',
        notify: false,
    })
});

gulp.task('styles', function() {
    return gulp.src('assets/scss/**/*.scss')
        .pipe(sass({ outputStyle: 'expand' }).on("error", notify.onError()))
        .pipe(autoprefixer(['last 15 versions']))
        .pipe(cleancss( {level: { 1: { specialComments: 0 } } })) // Opt., comment out when debugging
        .pipe(gulp.dest(''))
        .pipe(browserSync.reload({ stream: true }))
});

gulp.task('js', function() {
    return gulp.src([
        // 'app/libs/jquery/dist/jquery.min.js',
        // 'app/js/bootstrap.bundle.min.js',
        // 'app/js/bootstrap.min.js',
        'assets/js/common.js', // Always at the end
    ])
        .pipe(concat('custom.min.js'))
        .pipe(uglify()) // Mifify js (opt.)
        .pipe(gulp.dest('ind/js'))
        .pipe(browserSync.reload({ stream: true }))
});

gulp.task('watch', ['styles', 'js', 'browser-sync'], function() {
    gulp.watch('assets/scss/**/*.scss', ['styles']);
    gulp.watch(['assets/**/*.js'], ['js']);
    gulp.watch('**/*.php', browserSync.reload)
});

gulp.task('default', ['watch']);