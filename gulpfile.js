// Load Gulp packages
const gulp = require('gulp'),
      browserSync = require('browser-sync')

// Paths
const frontend = new function () {
    this.root = './front-end/';
    this.all = this.root + '**/*.*';
};

// ===================================================
// 1. Front-end
// ===================================================

// 1.1 - Live Server
function frontendReload() {
    browserSync.reload();
}

function frontendWatch() {
    browserSync.init({
        server: {
            baseDir: frontend.root
        }
    });
    gulp.watch(frontend.all).on('change', frontendReload);
}
gulp.task('default', frontendWatch)
