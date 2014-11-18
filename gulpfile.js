var gulp         = require( 'gulp' ),
    sass         = require( 'gulp-ruby-sass' ),
    autoprefixer = require( 'gulp-autoprefixer' ),
    minify       = require( 'gulp-minify-css' );

gulp.task( 'styles', function() {
    return gulp.src( 'app/assets/sass/styles.scss' )
        .pipe( sass( { style: 'nested' } ) )
        .pipe( autoprefixer( 'last 10 version' ) )
        .pipe( minify() )
        .pipe( gulp.dest( 'public/css' ) );
});

gulp.task( 'watch', function() {
    gulp.watch( 'app/assets/sass/**/*.scss', [ 'styles' ] );
});

gulp.task( 'default', [ 'styles', 'watch' ]);