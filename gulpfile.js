const { src, dest, series, parallel } = require('gulp');
const postcss = require('gulp-postcss');
const concat = require('gulp-concat');
const terser = require('gulp-terser');
const svgmin = require('gulp-svgmin');
const cheerio = require('gulp-cheerio');

// CSS Task
function styles() {
  return src('src/css/**/*.css')
    .pipe(postcss([
      require('postcss-import'),
      require('autoprefixer'),
      require('cssnano')
    ]))
    .pipe(concat('style.min.css'))
    .pipe(dest('public/css'));
}

// JS Task
function scripts() {
  return src('src/js/**/*.js')
    .pipe(concat('app.min.js'))
    .pipe(terser())
    .pipe(dest('public/js'));
}

// SVG Task
function svgs() {
  return src('src/svg/**/*.svg')
    .pipe(svgmin({
        multipass: true,
      full: true,
      plugins: [
        'removeDoctype',
        'removeComments',
        'removeXMLProcInst',
        'removeEditorsNSData',
        'cleanupEnableBackground',
        'convertStyleToAttrs',
        'removeUnusedNS',
        'cleanupIDs',
        'sortAttrs',
        'moveGroupAttrsToElems',
      ]
    }))
    .pipe(cheerio({
      run: function ($) {
        $('svg').attr('aria-hidden', 'true');
        $('svg').attr('focusable', 'false');
      },
      parserOptions: { xmlMode: true }
    }))
    .pipe(dest('public/svg'));
}

// Default task
exports.default = series(
  parallel(styles, scripts, svgs)
);

// Watch task

const { watch } = require('gulp');

function watchFiles() {
  watch('src/css/**/*.css', styles);
  watch('src/js/**/*.js', scripts);
  watch('src/svg/**/*.svg', svgs);
}

exports.watch = watchFiles;