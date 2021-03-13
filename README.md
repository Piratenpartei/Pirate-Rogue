# Pirate-Rogue

WordPress Theme for Pirate Parties round the world

Theme for pirate parties worldwide. This theme allows to chose between the mostly 
used color combinations (purple and orange) as main colors for designing elements. 
It uses several free to use pirate symbols and allows custom CSS. It was created
for the german pirate party as replacement for their prior wordpress theme.

## Theme autor

* xwolf (http://www.xwolf.de)

## Informations and download

* Theme home page: http://www.pirate-rogue.de
* Download: https://github.com/Piratenpartei/Pirate-Rogue/ 
- Clone: https://github.com/Piratenpartei/Pirate-Rogue.git
- Zip: https://github.com/Piratenpartei/Pirate-Rogue/archive/master.zip
* Changelog: https://github.com/Piratenpartei/Pirate-Rogue/commits/master


## Credits

* Theme design and some functions based on the wonderful work of Elmastudio (http://www.elmastudio.de/en/) on theme Uku.
* Underlying frameworks: Bootstrap, AwesomeFont, jQuery


## How To chance CSS and other things

Notice for developers:

Since 1.4.9 i moved the SASS-Code into /src/sass and added a gulpfile for 
- building CSS files 
    run with: `gulp dev` for an unminified dev version and 
    `gulp build` for the minified version for the productive website
- performing a css validation test
    `gulp dev`   will report the css validation; Or use
    `gulp validatecss`
- update version numbers
    - `gulp dev` or  `gulp devversion`  will update the version number to a 
      subpatch dev level number
    - `gulp dev` or  `gulp upversionpatch`  will update the version number to a 
      patch level number
-  upate the pot file
    `gulp pot`   will update the language index 

To make it work, you habe to install npm on your computer and make a 
   `npm install -save-dev`
    into the working directory of your theme files.

If you need to, you could add a css watcher or add also the the gulp script to
merge all js files. 

