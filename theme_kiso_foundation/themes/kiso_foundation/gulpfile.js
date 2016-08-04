var gulp = require('gulp');
var $    = require('gulp-load-plugins')();
var dir = "";

var sassPaths = [
  'bower_components/foundation-sites/scss',
  'bower_components/motion-ui/src'
];

var copy_js = [
  'bower_components/foundation-sites/dist/foundation.min.js',
  'bower_components/jquery/dist/jquery.min.js',
  'bower_components/motion-ui/dist/motion-ui.min.js',
  'bower_components/what-input/what-input.min.js',
  'js/app.js',
];

var copy_css = [
'bower_components/motion-ui/dist/motion-ui.min.css',
];

gulp.task('copy', function () {
  gulp.src(copy_js)
   .pipe(gulp.dest(dir + 'assets/js'));
  gulp.src(copy_css)
   .pipe(gulp.dest(dir + 'assets/css'));
});

gulp.task('sass', function() {
  return gulp.src('scss/app.scss')
    .pipe($.sass({
      includePaths: sassPaths,
      outputStyle: 'compressed' // if css compressed **file size**
    })
      .on('error', $.sass.logError))
    .pipe($.autoprefixer({
      browsers: ['last 2 versions', 'ie >= 9']
    }))
    .pipe(gulp.dest(dir + 'css'))
});

gulp.task('default', ['sass'], function() {
  gulp.watch(['scss/**/*.scss'], ['sass']);
});
