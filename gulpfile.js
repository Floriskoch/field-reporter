//------------------------------------//
// INCLUDES
//------------------------------------//

// Base and utilities
const gulp = require('gulp');
const gutil = require('gulp-util');

// Misc
const sourcemaps = require('gulp-sourcemaps');
const source = require('vinyl-source-stream');
const buffer = require('vinyl-buffer');
const rename = require('gulp-rename');
const notify = require('gulp-notify');
const browserSync = require('browser-sync');
const reload = browserSync.reload;

// JS
const browserify = require('browserify');
const babelify = require('babelify');
const watchify = require('watchify');
const uglify = require('gulp-uglify');

// CSS
const autoprefixer = require('autoprefixer');
const cleanCss = require('gulp-clean-css');
const postcss = require('gulp-postcss');
const sass = require('gulp-sass');

// Images
const imagemin = require('gulp-imagemin');
const pngquant = require('imagemin-pngquant');

//------------------------------------//
// PATHS
//------------------------------------//

const paths = {
  scripts: {
    input: 'assets/js/main.js',
    output: 'assets/build/js',
    dist: 'assets/build/js/dist'
  },
  styles: {
    base: 'assets/sass',
    input: 'assets/sass/main.scss',
    output: 'assets/build/css',
    dist: 'assets/build/css/dist'
  },
  images: {
    base: 'assets/images',
    input: 'assets/images/**',
    output: 'assets/build/images'
  },
  fonts: {
    base: 'assets/fonts',
    input: 'assets/fonts/**',
    output: 'assets/build/fonts'
  },
};

//------------------------------------//
// IMAGES
//------------------------------------//

// Optimise images and move them to build folder
gulp.task('images', function() {
  gulp.src(paths.images.input)
    .pipe(imagemin({
      progressive: true,
      svgoPlugins: [
        {removeViewBox: false},
        {cleanupIDs: false},
        {removeTitle: true}
      ],
      use: [pngquant()]
    }))
    .pipe(gulp.dest(paths.images.output))
});

//------------------------------------//
// FONTS
//------------------------------------//

// Move fonts to build folder
gulp.task('fonts', function() {
  gulp.src(paths.fonts.input)
    .pipe(gulp.dest(paths.fonts.output))
});

//------------------------------------//
// STYLES
//------------------------------------//

gulp.task('styles', function() {
  const processors = [
    autoprefixer({ browsers: ['last 2 versions'] }),
  ];

  return gulp.src(paths.styles.input)
    .pipe(sourcemaps.init())
    .pipe(sass())
    .on('error', handleErrors)
    .pipe(postcss(processors))
    .pipe(sourcemaps.write())
    .pipe(rename('style.css'))
    .pipe(gulp.dest(paths.styles.output))
    .pipe(rename('style.min.css'))
    .pipe(cleanCss({ compatibility: 'ie10' }))
    .pipe(gulp.dest(paths.styles.dist))
    .pipe(reload({ stream: true }));
});

//------------------------------------//
// BROWSERSYNC
//------------------------------------//

gulp.task('browser-sync', function() {
  browserSync({
    // proxy: 'local.dev',
    browser: 'google chrome'
  });
});

//------------------------------------//
// ERROR HANDLER
//------------------------------------//

function handleErrors() {
  const args = Array.prototype.slice.call(arguments);
  notify.onError({
    title: 'Compile Error',
    message: '<%= error.message %>'
  }).apply(this, args);
  this.emit('end'); // Keep gulp from hanging on this task
}

//------------------------------------//
// SCRIPTS
//------------------------------------//

function buildScript(file, watch) {
  const props = {
    entries: [file],
    debug: true,
    transform: [babelify.configure({ presets: ['es2015'] })]
  };

  // watchify() if watch requested, otherwise run browserify() once
  const bundler = watch ? watchify(browserify(props)) : browserify(props);

  function rebundle() {
    const stream = bundler.bundle();
    return stream
      .on('error', handleErrors)
      .pipe(source(file))
      .pipe(rename('app.js'))
      .pipe(gulp.dest(paths.scripts.output))
      .pipe(buffer()) // Convert stream to buffer for gulp-uglify
      .pipe(uglify())
      .pipe(rename('app.min.js'))
      .pipe(gulp.dest(paths.scripts.dist))
      .pipe(reload({ stream: true }));
  }

  // listen for an update and run rebundle
  bundler.on('update', function() {
    rebundle();
    gutil.log('Rebundle...');
  });

  // run it once the first time buildScript is called
  return rebundle();
}

gulp.task('scripts', function() {
  return buildScript(paths.scripts.input, false); // this will run once because we set watch to false
});

//------------------------------------//
// DEFAULT TASK
//------------------------------------//

// run 'scripts' task first, then watch for future changes
gulp.task('default', ['images', 'fonts', 'browser-sync'], function() {
  gulp.watch(paths.styles.base + '/**/*', ['styles']); // gulp watch for CSS changes
  gulp.watch(paths.images.base + '/**/*', ['images']); // gulp watch for image changes
  gulp.watch(paths.fonts.base + '/**/*', ['fonts']); // gulp watch for fonts changes
  return buildScript(paths.scripts.input, true); // browserify watch for JS changes
});