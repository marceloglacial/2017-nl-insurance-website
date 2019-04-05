// Load Gulp packages from package.json
const gulpPackages = require('./package.json');
const gulpDependencies = Object.keys(gulpPackages.devDependencies);
for (const key in gulpDependencies) {
    if (gulpDependencies.hasOwnProperty(key)) {
        const element = gulpDependencies[key];
        let str = element.replace('gulp-', '').replace('-', '_') + ' = require("' + element + '");';
        eval(str);
    }
}

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
            baseDir: frontend.src
        }
    });
    gulp.watch(frontend.sass).on('change', styles);
    gulp.watch(frontend.src + '**/*.*').on('change', frontendReload);
}
gulp.task('gulp', frontendWatch)
