const gulp = require('gulp');
const sass = require('gulp-sass')(require('sass'));
const uglify = require('gulp-uglify');
const browserSync = require('browser-sync').create();

// Compile SCSS to CSS
function buildStyles() {
  return gulp.src('./src/scss/**/*.scss')
    .pipe(sass().on('error', sass.logError))
    .pipe(gulp.dest('./public/resources/css/'))
    .pipe(browserSync.stream());
}

// Optimize images
async function images() {
  const imagemin = (await import('gulp-imagemin')).default;
  return gulp.src('./src/images/**/*')
    .pipe(imagemin())
    .pipe(gulp.dest('./public/resources/images/'))
    .pipe(browserSync.stream());
}

// Compress JavaScript
function compress() {
  return gulp.src('./src/js/**/*.js')
    .pipe(uglify())
    .pipe(gulp.dest('./public/resources/js/'))
    .pipe(browserSync.stream());
}

// Clean output directory
async function clean() {
  const del = (await import('del')).deleteAsync;
  return del(['./public/resources/*']);
}

// Watch files and reload with BrowserSync
function browserSyncTask() {
  browserSync.init({
    server: {
      baseDir: 'public/'
    }
  });
  gulp.watch('./src/scss/**/*.scss', buildStyles);
  gulp.watch('./src/images/**/*', images);
  gulp.watch('./src/js/**/*.js', compress);
  gulp.watch('./public/**/*.php').on('change', browserSync.reload);
  gulp.watch('./public/**/*.html').on('change', browserSync.reload);
}

// Define complex tasks
const build = gulp.series(clean, gulp.parallel(buildStyles, images, compress));
const watch = gulp.series(build, browserSyncTask);

// Export tasks
exports.clean = clean;
exports.build = build;
exports.default = watch;
