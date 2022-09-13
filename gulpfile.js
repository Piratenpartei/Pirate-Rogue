'use strict';
/* 
 * Gulp Builder for WordPress Theme 
 */
const
    {src, dest, watch, series, parallel} = require('gulp'),
    sass = require('gulp-sass')(require('sass')),
    postcss = require('gulp-postcss'),
    autoprefixer = require('autoprefixer'),
    babel = require('gulp-babel'),
    bump = require('gulp-bump'),
    semver = require('semver'),
    info = require('./package.json'),
    wpPot = require('gulp-wp-pot'),
    touch = require('gulp-touch-cmd'),
    header = require('gulp-header'),
    cssnano = require('cssnano'),
    concat = require('gulp-concat'),
    rename = require('gulp-rename'),
    cssvalidate = require('gulp-w3c-css'),
    map  = require('map-stream')
;



/**
 * Template for banner to add to file headers
 */

var banner = [
    '/*!',
    'Theme Name: <%= info.name %>',
    'Version: <%= info.version %>',
    'Requires at least: <%= info.compatibility.wprequires %>',
    'Tested up to: <%= info.compatibility.wptestedup %>',
    'Requires PHP: <%= info.compatibility.phprequires %>',
    'Description: <%= info.description %>',
    'Theme URI: <%= info.repository.url %>',
    'GitHub Theme URI: <%= info.repository.url %>',
    'GitHub Issue URL: <%= info.repository.issues %>',
    'Author: <%= info.author.name %>',
    'Author URI: <%= info.author.url %>',
    'License: <%= info.license %>',
    'License URI: <%= info.licenseurl %>',
    'Tags: <%= info.tags %>',
    'Text Domain: <%= info.textdomain %>',
    '*/'].join('\n');




/* 
 * SASS and Autoprefix CSS Files, without clean
 */
function sassautoprefixhelperfiles() {
    var plugins = [
        autoprefixer()
    ];
  return src([info.source.sass + 'admin.scss'])
    .pipe(sass().on('error', sass.logError))
    .pipe(postcss(plugins))
    .pipe(dest('./css'))
    .pipe(touch());
}

/* 
 * Compile all styles with SASS and clean them up 
 */
function buildhelperstyles() {
    var plugins = [
        autoprefixer(),
        cssnano()
    ];
  return src([info.source.sass + 'admin.scss'])
    .pipe(sass().on('error', sass.logError))
    .pipe(postcss(plugins))
    .pipe(dest('./css'))
    .pipe(touch());
}

/* 
 * Compile all styles with SASS and clean them up 
 */
function buildmainstyle() {
    var plugins = [
        autoprefixer(),
        cssnano()
    ];
  return src([info.source.sass + 'style.scss'])
   .pipe(header(banner, { info : info }))
    .pipe(sass().on('error', sass.logError))
    .pipe(postcss(plugins))
    .pipe(rename(info.maincss))
    .pipe(dest('./'))
    .pipe(touch());
}

/* 
 * Compile main style for dev without minifying
 */
function devbuildmainstyle() {
    var plugins = [
        autoprefixer()
    ];
  return src([info.source.sass + 'style.scss'])
   .pipe(header(banner, { info : info }))
    .pipe(sass().on('error', sass.logError))
    .pipe(postcss(plugins))
    .pipe(rename(info.maincss))
    .pipe(dest('./'))
    .pipe(touch());
}



function updatepot()  {
  return src(['**/*.php', '!vendor/**/*.php'])
  .pipe(
      wpPot({
        domain: info.textdomain,
        package: info.name,
	team: info.author,
 	bugReport: info.repository.issues,
	ignoreTemplateNameHeader: true
      })
    )
  .pipe(dest(`languages/${info.textdomain}.pot`))
  .pipe(touch());;
};

/*
 * Update Version on Patch-Level
 *  (All other levels we are doing manually; This level has to update automatically on each build)
 */
function upversionpatch() {
    var newVer = semver.inc(info.version, 'patch');
    return src(['./package.json', './' + info.maincss])
        .pipe(bump({
            version: newVer
        }))
        .pipe(dest('./'))
	.pipe(touch());
};


/*
 * Update DEV Version on prerelease level.
 *  Reason: in the Theme function, we will recognise the prerelease version by its syntax. 
 *  This will allow the theme automatically switch to the non-minified-files instead of
 *   the minified versions.
 *   In other words: If we use dev, the theme wil load script files without ".min.".  
 */
function devversion() {
    var newVer = semver.inc(info.version, 'prerelease');
    return src(['./package.json', './' + info.maincss])
        .pipe(bump({
            version: newVer
        }))
	.pipe(dest('./'))
	.pipe(touch());;
};



/* 
 * CSS Validator
 */
function validatecss() { 
  return src(['./'+info.maincss])
    .pipe(cssvalidate())
    .pipe(map(function(file, done) {
      if (file.contents.length == 0) {
        console.log('Success: ' + file.path);
        console.log('No errors or warnings\n');
      } else {
        var results = JSON.parse(file.contents.toString());
        results.errors.forEach(function(error) {
	    console.log('Error: ' + error.errorType + ', line ' + error.line);
	    console.log('  Kontext: ' + error.context);
	    console.log('  ' + error.message);
        });
       
      }
      done(null, file);
    }));
};



exports.devversion = devversion;
exports.validatecss = validatecss;
exports.buildmainstyle = buildmainstyle;

var dev = series(sassautoprefixhelperfiles, devbuildmainstyle, devversion, validatecss);

exports.cssdev = series(sassautoprefixhelperfiles, devbuildmainstyle, validatecss);
exports.dev = dev;
exports.build = series(buildhelperstyles, buildmainstyle, upversionpatch);
exports.pot = updatepot;
exports.default = dev;

