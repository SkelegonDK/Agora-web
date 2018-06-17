var gulp = require('gulp');
var sass = require('gulp-sass');
var browserSync = require('browser-sync').create();
var uglify = require('gulp-uglify');
var pump = require('pump');
var cssnano = require('gulp-cssnano');
var imagemin = require('gulp-imagemin');
var runSequence = require('run-sequence');
var del = require('del');
var autoprefixer = require('gulp-autoprefixer');

var autoprefixerOptions = {
  browsers: ['last 2 versions', '> 5%', 'Firefox ESR']
};

// Enable browserSync to a given destination.
gulp.task('browserSync', function() {
    browserSync.init({
        proxy: 'http://agora:8888/',
        open: 'external'
    });
});

// Compiles scss/sass syntax to css.
gulp.task('sass', function() {
    return gulp.src('app/scss/**/*.scss')
        .pipe(sass()) // Using gulp-sass
        .pipe(autoprefixer(autoprefixerOptions))
        .pipe(gulp.dest('app/css'))
        .pipe(browserSync.reload({
            stream: true
        }));
});

// Watchers - on save, changes happens without having to reload yourself.
gulp.task('watch', ['browserSync', 'sass'], function () {
    gulp.watch('app/scss/**/*.scss', ['sass']);
    gulp.watch('app/**/*.html', browserSync.reload);
    gulp.watch('app/**/*.php', browserSync.reload);
    gulp.watch('app/**/*.svg', browserSync.reload);
    gulp.watch('app/js/**/*.js', browserSync.reload);
    // Other watchers
});

// Grab js folder + files to deploy and optimizes them
gulp.task('minify-js', function (cb) {
    pump([
            gulp.src('app/js/**/*.js'),
            uglify(),
            gulp.dest('deploy/js')
        ],
        cb
    );
});

// Grab css folder + files to deploy and optimizes them
gulp.task('minify-css', function() {
    return gulp.src('app/css/*.css')
        .pipe(cssnano())
        .pipe(gulp.dest('deploy/css'));
});

// Grab fonts folder + files to deploy and optimizes them
gulp.task('images', function(){
    return gulp.src('app/img/**/*.+(png|jpg|gif|svg)')
        .pipe(imagemin({
            progressive: true,
            interlaced: true
        }))
        .pipe(gulp.dest('deploy/img'));
});

// Grab fonts folder + files to deploy
gulp.task('fonts', function() {
    return gulp.src('app/fonts/**/*')
        .pipe(gulp.dest('deploy/fonts'));
});

// Grab async folder + files to deploy
gulp.task('async', function() {
    return gulp.src('app/async/**/*')
        .pipe(gulp.dest('deploy/async'));
});

// Grab layout folder + files to deploy
gulp.task('layout', function() {
    return gulp.src('app/layout/**/*')
        .pipe(gulp.dest('deploy/layout'));
});

// Grab all root files + hidden to deploy
gulp.task('root-files', function() {
    gulp.src(['app/*', 'app/.*', '!app/scss'])
        .pipe(gulp.dest('deploy'));
});

// Delete deploy
gulp.task('clean:dist', function() {
    return del.sync('deploy');
});

// Deploy function
gulp.task('deploy', function (callback) {
    runSequence('clean:dist', ['sass', 'minify-js', 'minify-css', 'images', 'fonts', 'layout', 'root-files', 'async'], callback);
});
