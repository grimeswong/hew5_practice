var gulp = require('gulp');
var sass = require("gulp-sass");
var bourbon = require("node-bourbon").includePaths;
var neat = require("node-neat").includePaths;
var browserSync = require("browser-sync");
var plumber = require('gulp-plumber');
var uglify = require('gulp-uglify');

gulp.task('js-watch', ['compress'], browserSync.reload);

gulp.task("sass", function() {
  gulp.src("../wp-content/themes/Divi-Child/**/*.scss")
      .pipe(plumber())
      .pipe(sass({
        includePaths: bourbon,
        includePaths: neat
      }))
      .pipe(gulp.dest("../wp-content/themes/Divi-Child/"))
      .pipe(browserSync.reload({
        stream: true
      }))
});

// Spin up a server
gulp.task("browserSync", function() {
  browserSync({
    server: {
      baseDir: "dist"
    }
  })
});

gulp.task("watch", ["sass"], function() {
  gulp.watch("../wp-content/themes/Divi-Child/*.scss", ["sass"]);

});

// Default Task
gulp.task("default");
