
const {src, dest, watch} = require('gulp');
const sass = require('gulp-sass')(require('sass'));
const concat = require('gulp-concat');
const uglify = require('gulp-uglify-es').default;
const autoprefixer = require('gulp-autoprefixer');
/*const browserSync = require('browser-sync').create();*/

/*import dartSass from 'sass';
import gulpSass from 'gulp-sass';
const sass = gulpSass(dartSass);*/

/*function browsersync(){
  browserSync.init({
    server:{
      baseDir: ''
    }
  })
}*/
function scripts(){
  return src([//файли які потрібно об'єднати та зжати
    'js/bootstrap.min.js',
    'js/off-canvas.js',
    'js/script.min.js',
    'js/menu.min.js',
    'js/jquery.nicescroll.min.js',
    'js/jquery.prettyPhoto.js',
    'js/jquery.nav.js',
    'js/jquery.totemticker.min.js',
    'js/waypoints.min.js',
    'js/jquery.animateNumber.min.js',
    'js/jquery.easypiechart.min.js',
    'js/jquery.sharrre.min.js',
    'js/page.js',
    'js/main.js',
    'js/youtube.js',
    'js/jquery.fancybox.min.js',
    'js/jquery.maskedinput.min.js',
    'js/js.js'//завжди останній, важлива послідовність
  ])
    .pipe(concat('main.min.js'))//ім'я згенерованого файлу
    .pipe(uglify())
    .pipe(dest('js/'))//шлях до зберігання
}

function styles(){
  return src('css/style.scss')//шлях до файлу який потрібно конвертувати
    .pipe(sass({outputStyle: 'compressed'}))
    .pipe(concat('style.min.css'))//Нова назва конвртованого та зжатого файлу
    .pipe(autoprefixer({//Автоматечне проставлення префіксів для кросбраузерності
      overrideBrowserslist: ['last 5 version'],
      grid: true
    }))
    .pipe(dest('css/'))//шлях куди зберігаємо файл
    /*.pipe(browserSync.stream())*/
}

function watching(){
  watch(['css/**/*.scss'], styles);
  watch(['js/js.js'], scripts);
}

exports.styles = styles;
exports.scripts = scripts;
exports.watching = watching;