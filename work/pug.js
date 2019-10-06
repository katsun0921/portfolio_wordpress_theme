// パッケージをインストール
const $ = require('../plugin');
const paths = require('../config');

// setting : Pug Options
const pugOptions = {
  pretty: true,
};

// pugコンパイル
$.gulp.task('pug', done => {
  $.gulp
    .src([paths.src.pug + '*.pug','!' + paths.src.pug + '_*.pug'])
    .pipe(
      $.plumber({ errorHandler: $.notify.onError('Error: <%= error.message %>') })
    )
    .pipe($.pug(pugOptions))
    .pipe($.gulp.dest(paths.dest.html));
  done();
});
