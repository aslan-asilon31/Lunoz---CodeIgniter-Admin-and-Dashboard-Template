const { series, src, dest, parallel, watch } = require("gulp");
const autoprefixer = require("gulp-autoprefixer");
const browsersync = require("browser-sync");
const concat = require("gulp-concat");
const CleanCSS = require("gulp-clean-css");
const npmdist = require("gulp-npm-dist");
const newer = require("gulp-newer");
const rename = require("gulp-rename");
const rtlcss = require("gulp-rtlcss");
const sourcemaps = require("gulp-sourcemaps");
const sass = require("gulp-sass")(require("sass"));
const uglify = require("gulp-uglify");

const paths = {
    baseSrc: "public/",
    baseDist: "public/",
    baseDistAssets: "public/",
    baseSrcAssets: "public/source/",
};


const vendor = function () {
    const out = paths.baseDistAssets + "libs/";
    return src(npmdist(), { base: "./node_modules" })
        .pipe(rename(function (path) {
            path.dirname = path.dirname.replace(/\/dist/, '').replace(/\\dist/, '');
        }))
        .pipe(dest(out));
};


const data = function () {
    const out = paths.baseDistAssets + "data/";
    return src([paths.baseSrcAssets + "data/**/*"])
        .pipe(dest(out));
};

const fonts = function () {
    const out = paths.baseDistAssets + "fonts/";
    return src([paths.baseSrcAssets + "fonts/**/*"])
        .pipe(newer(out))
        .pipe(dest(out));
};

const images = function () {
    var out = paths.baseDistAssets + "images";
    return src(paths.baseSrcAssets + "images/**/*")
        .pipe(newer(out))
        .pipe(dest(out));
};

const javascript = function () {
    const out = paths.baseDistAssets + "js/";

    src([
        paths.baseDistAssets + "libs/jquery/jquery.min.js",
        paths.baseDistAssets + "libs/bootstrap/js/bootstrap.bundle.min.js",
        paths.baseDistAssets + "libs/simplebar/simplebar.min.js",
        paths.baseDistAssets + "libs/node-waves/waves.min.js",
        paths.baseDistAssets + "libs/lucide/umd/lucide.min.js",
    ])
        .pipe(concat("vendor.js"))
        .pipe(dest(out))
        .pipe(uglify())
        .pipe(rename({ suffix: ".min" }))
        .pipe(dest(out));

    return src(paths.baseSrcAssets + "js/**/*.js")
        .pipe(uglify())
        .pipe(dest(out));
};


const scss = function () {
    const out = paths.baseDistAssets + "css/";

    src([paths.baseSrcAssets + "scss/**/*.scss",  '!' + paths.baseSrcAssets + "scss/icons.scss"])
        .pipe(sourcemaps.init())
        .pipe(sass.sync())
        .pipe(
            autoprefixer({
                overrideBrowserslist: ["last 2 versions"],
            })
        )
        .pipe(dest(out))
        .pipe(CleanCSS())
        .pipe(rename({ suffix: ".min" }))
        .pipe(sourcemaps.write("./"))
        .pipe(dest(out));

    // generate rtl
    return src([paths.baseSrcAssets + "scss/**/*.scss",  '!' + paths.baseSrcAssets + "scss/icons.scss"])
        .pipe(sourcemaps.init())
        .pipe(sass.sync())
        .pipe(
            autoprefixer({
                overrideBrowserslist: ["last 2 versions"],
            })
        )
        .pipe(rtlcss())
        .pipe(rename({ suffix: "-rtl" }))
        .pipe(dest(out))
        .pipe(CleanCSS())
        .pipe(rename({ suffix: ".min" }))
        .pipe(sourcemaps.write("./"))
        .pipe(dest(out));
};


const icons = function () {
    const out = paths.baseDistAssets + "css/";
    return src(paths.baseSrcAssets + "scss/icons.scss")
        .pipe(sourcemaps.init())
        .pipe(sass.sync())
        .pipe(
            autoprefixer({
                overrideBrowserslist: ["last 2 versions"],
            })
        )
        .pipe(dest(out))
        .pipe(CleanCSS())
        .pipe(rename({ suffix: ".min" }))
        .pipe(sourcemaps.write("./"))
        .pipe(dest(out));
};


const reloadBrowserSync = function (done) {
    browsersync.reload();
    done();
}

function watchFiles() {
    watch(paths.baseSrcAssets + "data/**/*", series(data, reloadBrowserSync));
    watch(paths.baseSrcAssets + "fonts/**/*", series(fonts, reloadBrowserSync));
    watch(paths.baseSrcAssets + "images/**/*", series(images, reloadBrowserSync));
    watch(paths.baseSrcAssets + "js/**/*", series(javascript, reloadBrowserSync));
    watch(paths.baseSrcAssets + "scss/icons.scss", series(icons, reloadBrowserSync));
    watch([paths.baseSrcAssets + "scss/**/*.scss", "!" + paths.baseSrcAssets + "scss/icons.scss", "!" + paths.baseSrcAssets + "scss/icons/*.scss"], series(scss, reloadBrowserSync));
}

// Producaton
exports.default = series(
    vendor,
    parallel(data, fonts, images, javascript, scss, icons),
    parallel(watchFiles)
);

// Build
exports.build = series(
    vendor,
    parallel(data, fonts, images, javascript, scss, icons)
);