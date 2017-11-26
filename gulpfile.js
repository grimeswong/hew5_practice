var gulp = require('gulp');
var sass = require("gulp-sass");
var bourbon = require("node-bourbon").includePaths;
var neat = require("node-neat").includePaths;
var browserSync = require("browser-sync");
var plumber = require('gulp-plumber');
var uglify = require('gulp-uglify');

gulp.task('js-watch', ['compress'], browserSync.reload);

gulp.task("sass", function() {
  gulp.src("/var/www/hew5/hew5/public/css/*.scss")
      .pipe(plumber())
      .pipe(sass({
        includePaths: bourbon,
        includePaths: neat
      }))
      .pipe(gulp.dest("/var/www/hew5/hew5/public/css/"))
      .pipe(browserSync.reload({
        stream: true
      }))
});

// Spin up a server
// gulp.task("browserSync", function() {
//   browserSync({
//     server: {
//       baseDir: "dist"
//     }
//   })
// });

gulp.task("watch", ["sass"], function() {
  gulp.watch("/hew5/public/css*.scss", ["sass"]);

});

// Default Task
gulp.task("default");
