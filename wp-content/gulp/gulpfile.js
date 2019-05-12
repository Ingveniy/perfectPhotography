var gulp         = require('gulp'),
    sass         = require('gulp-sass'),
    autoprefixer = require('gulp-autoprefixer'),
    browserSync  = require('browser-sync').create();

gulp.task('browser-sync', [], function() {
    browserSync.init({
        proxy: 'http://wordpress.test', //ссылка на локальный сайт
        notify: false
    });	
});

gulp.task('styles', function () {
    return gulp.src('../themes/wordpress/assets/sass/**/*.sass')  //Название папки вашей темы (your-theme)
    .pipe(sass({
        includePaths: require('node-bourbon').includePaths
    }).on('error', sass.logError))
    .pipe(autoprefixer({browsers: ['last 15 versions'], cascade: false}))
    .pipe(gulp.dest('../themes/wordpress/assets/css')) //Название папки вашей темы
    .pipe(browserSync.stream());
});


gulp.task('watch', function () {
    gulp.watch('../themes/wordpress/assets/sass/**/*.sass', ['styles']); //Название папки вашей темы (your-theme)
    gulp.watch('../themes/wordpress/*.php').on("change", browserSync.reload); //Название папки вашей темы (your-theme)
});

gulp.task('default', ['browser-sync', 'watch']);
