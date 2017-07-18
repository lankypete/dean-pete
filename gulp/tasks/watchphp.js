var gulp = require("gulp"),
watch = require("gulp-watch"),
php = require('gulp-connect-php'),
browserSync = require("browser-sync").create();

gulp.task('watchphp', ['phpServer'], function(){
	browserSync.init({
		notify: false,
		proxy: '127.0.0.1:8010',
		port: 8080,
		open: true
	});

	//syntax watch('file to be watched', what it will do)
	//this watches the index file for saves and then refreshes browser
	watch('./app/index.html', function (){
		browserSync.reload();
	});
	//watches css files for reload and calls the gulp styles task above
	watch('./app/assets/styles/**/*.css', function(){
		gulp.start('cssInject');
	});

	//watch for changes to javascript files
	watch('./app/assets/scripts/**/*.js', function() {
		gulp.start('scriptsRefresh'); //calls the gulp task that will then refresh the page
	});

	//and now to reload browsersync on any change to a php file
	watch('./app/*.php', function(){
		browserSync.reload();
	});
});

//This task will create a php server at localhost:8010
gulp.task('phpServer', function(){
	php.server({
		base: 'app',
		port: 8010,
		keepalive: 'true'
	})
});

gulp.task('cssInject', ['styles']/*<--dependencies*/, function() {
	return gulp.src('./app/temp/styles/styles.css')
	.pipe(browserSync.stream()); //injects the css directly into browser (without refresh)
});

gulp.task('scriptsRefresh', ['scripts'], function(){
	browserSync.reload();
});