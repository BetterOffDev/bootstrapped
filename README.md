# Bootstrapped

Version: 1.0.1

## Author:

Will Spencer ( [@wspencer428](http://twitter.com/wspencer428) )

## Summary

Bootstrapped is a WordPress starter theme that is built with Twitter Bootstrap and lots of other goodies. Bootstrapped uses Bower for package management and will download/install Twitter Bootstrap Official Sass version and FontAwesome. Grunt is used to initialize the Bower install, move FontAwesome font files but will also run automated tasks for the user like watching files for changes, jshint, image optimization, css minification and uglify. The Grunt file also uses rsync to deploy versions of the theme to development, staging and production servers (or whatever you'd like).

*NOTE: This theme is still in development! Most WP theme files are still being built!

## Usage

More detailed usage instruction are coming soon but here's a basic intro of how to get off the ground.

Once you have the theme files downloaded, make sure you have Node installed. Run `npm install` to have all needed Grunt modules installed. Run `grunt start` for Bower to download/install all needed packages into the assets folder (Twitter Bootstrap, FontAwesome, jQuery) and Copy to move the FontAwesome font files into the dist folder. Then run `grunt work` to watch your files for updates.

This is 100% open source and I fully support you taking this starter theme and running with it. Take the theme and customize it to your heart's desire! I'm open to pull requests and contributors as well.


### Credits 

A special thanks to these projects and tutorials for helping me get this going...

* [WordPress Starter Theme](https://github.com/mattbanks/WordPress-Starter-Theme)
* [WordPress Bootstrap](https://github.com/320press/wordpress-bootstrap)
* [Scotch Grunt Starter Guide](http://scotch.io/bar-talk/a-simple-guide-to-getting-started-with-grunt)

#### Helpful links
* [Official Sass port of Bootstrap](https://github.com/twbs/bootstrap-sass)
* [FontAwesome Sass](https://github.com/FortAwesome/font-awesome-sass)
* [GruntJS](http://www.gruntjs.com)
* [Bower](http://www.bower.io)
* [grunt-bower-task](https://github.com/yatskevich/grunt-bower-task)
* [grunt-contrib-copy](https://github.com/gruntjs/grunt-contrib-copy)
* [grunt-contrib-cssmin](https://github.com/gruntjs/grunt-contrib-cssmin)
* [grunt-contrib-jshint](https://github.com/gruntjs/grunt-contrib-jshint)
* [grunt-contrib-imagemin](https://github.com/gruntjs/grunt-contrib-imagemin)
* [grunt-contrib-sass](https://github.com/gruntjs/grunt-contrib-sass)
* [grunt-contrib-uglify](https://github.com/gruntjs/grunt-contrib-uglify)
* [grunt-contrib-watch](https://github.com/gruntjs/grunt-contrib-watch)
* [grunt-rsync](https://github.com/jedrichards/grunt-rsync)

#### Releases
* 10/18/14 - Release 1.0.1
   Now uses grunt-contrib-copy to move FontAwesome files upon install
   Grunt now has multiple tasks; grunt start and grunt devel (replaces default task)
   Starter styles included in .scss partial files
   Partials folder included to house partial template files (loops, etc)
   Basic structure given to WP template files
* 9/22/14 - Release 1.0.0
    Initial commit