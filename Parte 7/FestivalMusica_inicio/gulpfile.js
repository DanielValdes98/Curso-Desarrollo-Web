// Es un contenedor de las tareas

// function tarea( done ) {
//     console.log('mi primer tarea');

//     done(); // callback: es una funcion que se manda a llamar despues de otra funcion
//     // done() ---> Se ejecuta el codigo y si se manda a llamar la funcion done, entonces ya se sabe que llegamos a la parte final
// }

// exports.tarea = tarea;

// // en el terminal poner: npx gulp tarea o npm run tarea
// // NOTA: npx se instala con nodejs y permite ejeutar oaquetes sin instalarlos globalmente

// ------------------------------------------------------------
const { src, dest, watch, parallel} = require("gulp");

// CSS

const sass = require('gulp-sass')(require('sass'));
const plumber = require('gulp-plumber');
const autoprefixer = require('autoprefixer');
const cssnano = require('cssnano');
const postcss = require('gulp-postcss');
const sourcemaps = require('gulp-sourcemaps');

// Imagenes
const cache = require('gulp-cache');
const imagemin = require('gulp-imagemin');
const webp = require('gulp-webp');
const avif = require('gulp-avif');

// JAVASCRIPT
const terser = require('gulp-terser-js');

function css( done ) {

    src("src/scss/**/*.scss")     // Identificar el archivo de SASS. Con **/*.scss lee y compila todos los archivos scss
    .pipe(sourcemaps.init())
    .pipe( plumber() ) // PERMITE QUE NO DETENGA LA EJECUCION DEL DEV SI HAY UN ERROR
    .pipe( sass() )     // compilarlo
    .pipe( postcss([ autoprefixer(), cssnano() ]) )
    .pipe(sourcemaps.write('.'))
    .pipe( dest("build/css"))     // Almacenar

    done();
}

function imagenes( done ) { // Esta funcion aligerar y optimiza las imagenes para mejorar el flujo de la pagina
    const opciones = {
        optimizationLevel: 3
    }

    src('src/img/**/*.{png,jpg}')
        .pipe( cache(imagemin(opciones)))
        .pipe( dest('build/img'))

    done();
}


function versionWebp ( done ) {
    const opciones = {
        quality: 50
    };

    src('src/img/**/*.{png,jpg}')
        .pipe(webp(opciones))
        .pipe(dest('build/img')) // Donde se almacenas las img despues de convetirlas a webp

    done();
}

function versionAvif ( done ) {
    const opciones = {
        quality: 50
    };

    src('src/img/**/*.{png,jpg}')
        .pipe(avif(opciones))
        .pipe(dest('build/img')) // Donde se almacenas las img despues de convetirlas a webp

    done();
}

function javascript( done ) {
    src('src/js/**/*.js')
        .pipe(sourcemaps.init())
        .pipe( terser() )
        .pipe(sourcemaps.write('.'))
        .pipe(dest('build/js'));

        done();
}

function dev( done ) {
    watch("src/scss/**/*.scss", css);
    watch("src/js/**/*.js", javascript);


    done();
}

// Tareas:
exports.css = css;
exports.js = javascript;
exports.imagenes = imagenes;
exports.versionWebp = versionWebp;
exports.versionAvif = versionAvif;
exports.dev = parallel(imagenes, versionWebp, versionAvif, javascript, dev);
