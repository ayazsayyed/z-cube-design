var gulp  = require('gulp'),
    sass = require('gulp-dart-sass'),
    sourcemaps = require('gulp-sourcemaps'),
    cleanCss = require('gulp-clean-css'),
    rename = require('gulp-rename'),
    postcss  = require('gulp-postcss'),
    minify = require('gulp-minify'),
    cleanjs = require('gulp-clean'),
    wait = require('gulp-wait'),
    autoprefixer = require('autoprefixer')

    function buildCss() {
      return gulp.src(['assets/css/*.css'])
        .pipe(wait(200))
        .pipe(sourcemaps.init())
        .pipe(sass().on('error', sass.logError))
        .pipe(postcss([ autoprefixer() ]))
        .pipe(sourcemaps.write('.'))
        .pipe(gulp.dest('build/css/'))
        .pipe(cleanCss())
        .pipe(rename({suffix: '.min'}))
        .pipe(gulp.dest('build/css/'))
    }	

    function watcher() {
      gulp.watch(['assets/css/*.css'], gulp.series(buildCss));
    }

  exports.watch = gulp.series(buildCss,watcher);
  exports.default = gulp.series(buildCss);