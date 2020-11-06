// Variables gull and Sass
var gulp = require('gulp');
var sass = require('gulp-sass');

// Task with gulp to convert Sass to CSS
gulp.task('sass', function () {
    // Caminho dos arquivos que serão convertidos
    return gulp.src(['node_modules/bootstrap/scss/*.scss', 'src/scss/*.scss']).pipe(sass()).pipe(gulp.dest('src/css'));
});

// Move the javascript files into our /src/js folder
gulp.task('js', function () {
    return gulp.src(['node_modules/bootstrap/dist/js/bootstrap.min.js', 'node_modules/jquery/dist/jquery.min.js', 'node_modules/popper.js/dist/umd/popper.min.js'])
        .pipe(gulp.dest("src/js"));
});

// Static Server + watching scss/html files
gulp.task('serve', gulp.series('sass', function () {
    gulp.watch(['node_modules/bootstrap/scss/bootstrap.scss', 'src/scss/*.scss'], gulp.series('sass'));
}));

gulp.task('default', gulp.parallel('js', 'serve'));