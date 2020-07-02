const gulp  = require('gulp'),
    browserSync = require('browser-sync'),
    less = require('gulp-less'),
    autoprefixer = require('gulp-autoprefixer'),
    cleanCSS = require('gulp-clean-css'),
    uglify = require('gulp-uglify'),
    imagemin = require('gulp-imagemin'),
    file = require('gulp-file'),
    inject = require('gulp-inject'),
    rev = require('gulp-rev'),
    fs = require('fs'),
    clean = require('gulp-clean'),
    currentDateTime = new Date().toLocaleString();

const folder = {
    src: 'src/',
    dest: './'
};

const xamppFolderUrl = 'localhost/planetagracza';

function html() {
    return gulp.src(folder.src + 'php/**/*')
        .pipe(gulp.dest(folder.dest))
}

function style() {
    return gulp.src(folder.src + 'less/style.less')
        .pipe(less())
        .pipe(autoprefixer())
        .pipe(cleanCSS())
        .pipe(gulp.dest(folder.dest + 'css/'))
        .pipe(rev())
        .pipe(gulp.dest(folder.dest + 'css/'))
        .pipe(rev.manifest())
        .pipe(gulp.dest(folder.dest + 'css/'))
}

function images() {
    return gulp.src(folder.src + 'images/**/*.{jpg,jpeg,png,gif,svg,iso}')
        .pipe(imagemin())
        .pipe(gulp.dest(folder.dest + 'images'))
}

function scripts() {
    return gulp.src(folder.src + 'js/*')
        .pipe(uglify())
        .pipe(gulp.dest(folder.dest + 'js/'))
        .pipe(rev())
        .pipe(gulp.dest(folder.dest + 'js/'))
        .pipe(rev.manifest())
        .pipe(gulp.dest(folder.dest + 'js/'))
}

function injectStyle() {
    var jsonCss = JSON.parse(fs.readFileSync(folder.dest + 'css/rev-manifest.json'));
    var target = gulp.src(folder.dest + '*header.php');
    var source = gulp.src('./css/' + jsonCss['style.css'], { read: false, cwd: __dirname + '/' });

    return target
        .pipe(inject(source, {
            transform: function (filePath) {
                return '<link rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>' + filePath  + '" />';
            }
        }))
        .pipe(gulp.dest(folder.dest));
}

function injectScripts() {
    var jsonJs = JSON.parse(fs.readFileSync(folder.dest + 'js/rev-manifest.json'));
    var target = gulp.src(folder.dest + 'footer.php');
    var source = gulp.src('./js/' + jsonJs['main.js'], { read: false, cwd: __dirname + '/' });


    return target
        .pipe(inject(source, {
            transform: function (filePath) {
                return '<script src="<?php echo get_template_directory_uri(); ?>' + filePath  + '"></script>';
            }
        }))
        .pipe(gulp.dest(folder.dest));
}

function appVersion() {
    var packageSource = require('./package.json');

    return gulp.src(folder.src)
        .pipe(file(
            'version.txt', 'App version: '+ packageSource.version + ', Generated: ' + currentDateTime))
        .pipe(gulp.dest(folder.dest));
}

function watchFiles() {
    browserSync.init({
        proxy: xamppFolderUrl
    });

    gulp.watch(folder.src + 'php/**', gulp.series(html, style, injectStyle, scripts, injectScripts));
    gulp.watch(folder.src + 'js/*', gulp.series(scripts, injectScripts) );
    gulp.watch(folder.src + 'less/*.less', gulp.series(style, injectStyle) );
    gulp.watch(folder.src + 'images/**', images);
    gulp.watch(folder.src).on('change', browserSync.reload);
}

function cleaning() {
    return gulp.src([
            folder.dest + 'css/*', folder.dest + 'css/*.json',
            folder.dest + 'js/*', folder.dest + 'js/*.json'
        ])
        .pipe(clean());
}

exports.images = images;
exports.html = html;
exports.style = style;
exports.scripts = scripts;
exports.appVersion = appVersion;
exports.watchFiles = watchFiles;
exports.build  = gulp.series(html, cleaning, style, scripts, images, injectStyle, injectScripts, appVersion);
exports.watch = gulp.series(html, cleaning, style, scripts, images, injectStyle, injectScripts, watchFiles);
exports.default = gulp.series(html, cleaning, style, scripts, images, injectStyle, injectScripts, watchFiles);
