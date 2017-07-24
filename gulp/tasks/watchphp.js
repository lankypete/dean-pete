var gulp = require("gulp"),
watch = require("gulp-watch"),
php = require("gulp-connect-php"),
browserSync = require("browser-sync").create();

gulp.task('watchphp', ['phpServer'], function(){
	browserSync.init({
		notify: false,
		proxy: '127.0.0.1:8010',
		snippetOptions: {
		        rule: {
		            match: /$/
		        }
		    },
		// port: 8080,
		open: true
	});

	//syntax watch('file to be watched', what it will do)
	//this watches the index file for saves and then refreshes browser
	// watch('./app/index.html', function (){
	// 	browserSync.reload();
	// });
	
	//watches css files for reload and calls the gulp styles task above
	watch('./app/assets/styles/**/*.css', function(){
		gulp.start('cssInjectphp');
	});

	//watch for changes to javascript files
	watch('./app/assets/scripts/**/*.js', function() {
		gulp.start('scriptsRefreshphp'); //calls the gulp task that will then refresh the page
	});

	//and now to reload browsersync on any change to a php file
	watch('./app/**/*.php', function(){
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

gulp.task('cssInjectphp', ['styles']/*<--dependencies*/, function() {
	console.log('here'); 
	return gulp.src('./app/temp/styles/styles.css')
	.pipe(browserSync.stream()); //injects the css directly into browser (without refresh)
});

gulp.task('scriptsRefreshphp', ['scripts'], function(){
	browserSync.reload();
});






