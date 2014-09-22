# Bootstrapped

Version: 1.0.0

## Author:

Will Spencer ( [@wspencer428](http://twitter.com/wspencer428) )

## Summary

Bootstrapped is a WordPress starter theme that is built with Twitter Bootstrap and lots of other goodies. The theme is still in it's infancy but is essentially the starting point for most of my work. Bootstrapped uses Bower for package management and will download/install Twitter Bootstrap Official SASS version and Font Awesome. Grunt is used to initialize the Bower install but will also run automated tasks for the user like watching files for changes, jshint, css minification and uglify. The Grunt file also uses rsync to deploy versions of the theme to development, staging and production servers (or whatever you'd like).

## Usage

More detailed usage instruction are coming soon but here's a basic intro of how to get off the ground.

Once you have the theme files downloaded, make sure you have Node installed. Run 'npm install' to have all needed Grunt modules installed. Run 'grunt bower' for Bower to download/install all needed packages into the assets folder (Twitter Bootstrap, FontAwesome, jQuery). Then run 'grunt' to watch your files for updates.



### Credits

A special thanks to these projects for helping me get this going...

* [WordPress Starter Theme](https://github.com/mattbanks/WordPress-Starter-Theme)
* [WordPress Bootstrap](https://github.com/320press/wordpress-bootstrap)
* [Official SASS port of Bootstrap](https://github.com/twbs/bootstrap-sass)
* [FontAwesome SASS](https://github.com/FortAwesome/font-awesome-sass)
* More coming soon!
