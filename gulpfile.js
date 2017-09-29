// Dirs
var baseDir = '';
var sassDir = baseDir + 'sass/';
var imgDir = baseDir + 'img/';
var jsDir = baseDir + 'js/';

// Gulp
var gulp = require('gulp');

// Sass/CSS stuff
var sass = require('gulp-sass');
var cssnano = require('gulp-cssnano');
var prefix = require('gulp-autoprefixer');

// Images
var imagemin = require('gulp-imagemin');

// JS
var uglify = require('gulp-uglify');
var concat = require('gulp-concat');

//Others
var rename = require('gulp-rename');
var plumber = require('gulp-plumber');
var browserSync = require('browser-sync').create();

// compile all your Sass
gulp.task('styles', function (){
    gulp.src([sassDir + 'style.scss'])
        .pipe(plumber())
        .pipe(sass())
        .pipe(prefix(
            "last 1 version", "> 1%", "ie 8", "ie 7"
        ))
        .pipe(cssnano({
            discardComments:false
        }))
        .pipe(gulp.dest(baseDir + 'css/'))
        .pipe(browserSync.stream());
});

// uglify all JS
gulp.task('scripts', function (){
    gulp.src([jsDir + '**/*.js'])
        .pipe(plumber())
        .pipe(uglify())
        .pipe(rename({
            suffix: '.min'
        }))
        .pipe(gulp.dest(baseDir + jsDir + 'min'))
        .pipe(browserSync.stream());
});

// Minify images
gulp.task('images', function () {
    gulp.src(imgDir + '**/*')
        .pipe(plumber())
        .pipe(imagemin({
            progressive: true,
            optimizationLevel: 2
        }))
        .pipe(gulp.dest(baseDir + imgDir + 'min'))
        .pipe(browserSync.stream());
});

// Watch tasks
gulp.task('watch', function() {

    browserSync.init({
        proxy: "rsbk.site",
        notify: false,
        cors: true,
        open: false
    });

    /*gulp.watch(jsDir + '**!/!*.js', ['scripts']);*/
    gulp.watch(sassDir + '**/*.scss', ['styles']);
    /*gulp.watch(imgDir + '**!/!*', ['images']);*/
    gulp.watch(baseDir + '*.php').on('change', browserSync.reload);
});

// Default tasks
gulp.task('default', ['styles', 'watch']);
