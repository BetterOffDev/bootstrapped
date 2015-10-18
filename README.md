# Bootstrapped

Version: 2.0.0

## Author:

Will Spencer ( [@BetterOffDev](http://twitter.com/BetterOffDev) )

## Summary

Bootstrapped is a WordPress starter theme that is built with Twitter Bootstrap and lots of other goodies. Bootstrapped uses Bower for package management and will download/install Twitter Bootstrap Official Sass version and FontAwesome. Gulp is used to move FontAwesome font files but will also run automated tasks for the user like watching files for changes, jshint, image optimization, css minification and uglify. 

*NOTE: This theme is still in development! Most WP theme files are still being built!

## Usage

Bootstrapped now uses Gulp instead of Grunt. However, the Grunt file and old package.json file are still included. Here are the instructions for using each.

## Gulp

Once you have the theme files downloaded, make sure you have Node installed. To get started, run `npm install` to have all the needed Gulp modules installed. Once that is complete, run `bower install` to pull in the latest versions of Bootstrap and Font Awesome. 

## Grunt

First, you'll need to replace `package.json` with `package.json.old`. The included `package.json` file is for Gulp only.

Run `npm install` to have all needed Grunt modules installed. Run `grunt start` for Bower to download/install all needed packages into the assets folder (Twitter Bootstrap, FontAwesome, jQuery) and Copy to move the FontAwesome font files into the dist folder. Then run `grunt work` to watch your files for updates.

This is 100% open source and I fully support you taking this starter theme and running with it. Take the theme and customize it to your heart's desire! I'm open to pull requests and contributors as well.


#### Helpful links
* [Official Sass port of Bootstrap](https://github.com/twbs/bootstrap-sass)
* [FontAwesome Sass](https://github.com/FortAwesome/font-awesome-sass)
* [GulpJS](http://gulpjs.com)
* [GruntJS](http://www.gruntjs.com)
* [Bower](http://www.bower.io)

#### Releases
* 10/18/15 - Release 2.0.0
   Now uses Gulp as primary task runner instead of Grunt
* 10/18/14 - Release 1.0.1
   Now uses grunt-contrib-copy to move FontAwesome files upon install
   Grunt now has multiple tasks; grunt start and grunt devel (replaces default task)
   Starter styles included in .scss partial files
   Partials folder included to house partial template files (loops, etc)
   Basic structure given to WP template files
* 9/22/14 - Release 1.0.0
    Initial commit