var gulp = require('gulp'); //вызов библиотеки гулп
var less = require('gulp-less'); //вызов лесс

 
gulp.task('less', function () {
  return gulp.src('./css/*.less')
    .pipe(less())
    .pipe(gulp.dest('./css'));
});

gulp.task('default', function() {
    gulp.run('less');

    gulp.watch('./css/**', function(event) {
        gulp.run('less');
    })

})