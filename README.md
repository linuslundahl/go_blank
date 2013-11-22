# Instructions

## This is a blank starter theme for Drupal 7.

1. Run `$ chmod 755 install.sh && ./install.sh YOUR_THEME_NAME`.
2. Start creating your theme.

## Running Grunt

1. Follow Grunt installation instrunctions here [http://gruntjs.com/getting-started](http://gruntjs.com/getting-started)
2. Then install pngquant to optimize images. (`brew install pngquant`).
3. Run `grunt watch` to listen for changes in JavaScripts, SASS/Compass and Images.

## Default Grunt configuration

### JavaScripts

Grunt is configured to concatinate all javascripts under `javascripts/custom` into `javascripts/scripts.js` and then minify that file into `javascripts/scripts.min.js`.

### SASS/Compass

The standard directory structure of a `compass init` command is used. Folders `sass` for scss-files `stylesheets` for css-files. Additional folder is `fonts`.

### Images

Images that will be optimzed are stored under `images/dist` and the optimized versions are saved to `images/src`.
