// gulpプラグインの読み込み
const gulp = require("gulp");
// Sassをコンパイルするプラグインの読み込み
const sass = require("gulp-sass");
// postcssプラグインの読み込み
const postcss = require("gulp-postcss");
const autoprefixer = require("gulp-autoprefixer");
const mqpacker = require("css-mqpacker");
const bs = require("browser-sync").create();

// style.scssの監視タスクを作成する
gulp.task("sass", function () {
  return (
    gulp
      .src("./sass/**/*.scss")
      // Sassのコンパイルを実行
      .pipe(
        sass({
          outputStyle: "expanded",
        }).on("error", sass.logError)
      )
      // postcssプラグインの実行
      .pipe(autoprefixer())
      .pipe(postcss([mqpacker()]))
      // cssフォルダー以下に保存
      .pipe(gulp.dest("./css"))
      .pipe(bs.stream())
  );
});

gulp.task("watch", function (cb) {
  gulp.watch(["./sass/**/*.scss"], gulp.task("sass"));
  cb();
});

gulp.task("reload", function (cb) {
  bs.reload();
  cb();
});

gulp.task("sync", function (cb) {
  bs.init({
    server: {
      baseDir: "./",
      index: "index.html",
    },
    notify: false,
  });
  cb();
});

gulp.task("default", gulp.series("sync", "sass", "watch", "reload"));
