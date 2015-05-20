# [JAMA TEST](http://jamanetwork.org)

This is a stripped down version of our current collections application we are developing online.  This is a WordPress Theme based on [Roots](http://roots.io/) version 7.0.3.

This theme uses `grunt` to compile LESS assets, the instructions are below

Any tasks related to this exam can be accomplished by modifying the following files

* `_home.less` - Please place all additional LESS/CSS work in this file
* `extras.php` - This file has 4 functions which are just HTML snippets for each 'widget' on the home page.
* `front-page.php` - This is just a 'container' for the widgets from the previous file.

You may clone this repo to your own dev environment.  We suggest using [Varying Vagrant Vagrants](https://github.com/Varying-Vagrant-Vagrants/VVV) to create a local VM instance.  An online dev environment can be provided to you if you have difficulty setting one up.

After you are complete with your tasks, please send a pull request to this repo with your changes for review.

# [Roots Starter Theme](http://roots.io/)

Roots is a WordPress starter theme based on [HTML5 Boilerplate](http://html5boilerplate.com/) & [Bootstrap](http://getbootstrap.com/) that will help you make better themes.

* Source: [https://github.com/roots/roots](https://github.com/roots/roots)
* Homepage: [http://roots.io/](http://roots.io/)
* Documentation: [http://roots.io/docs/](http://roots.io/docs/)
* Twitter: [@rootswp](https://twitter.com/rootswp), [@retlehs](https://twitter.com/retlehs), [@swalkinshaw](https://twitter.com/swalkinshaw), [@Foxaii](https://twitter.com/Foxaii), [@c2foryou](https://twitter.com/c2foryou)
* Newsletter: [Subscribe](http://roots.io/subscribe/)
* Forum: [http://discourse.roots.io/](http://discourse.roots.io/)


## Installation

Clone the git repo - `git clone git://github.com/roots/roots.git` - or [download it](https://github.com/roots/roots/zipball/master) and then rename the directory to the name of your theme or website.

If you don't use [Bedrock](https://github.com/roots/bedrock), you'll need to add the following to your `wp-config.php` on your development installation:

```php
define('WP_ENV', 'development');
```

## Theme development

Roots uses [Grunt](http://gruntjs.com/) for compiling LESS to CSS, checking for JS errors, live reloading, concatenating and minifying files, versioning assets, and generating lean Modernizr builds.

If you'd like to use Bootstrap Sass, look at the [Roots Sass](https://github.com/roots/roots-sass) fork.

### Install Grunt and Bower

**Unfamiliar with npm? Don't have node installed?** [Download and install node.js](http://nodejs.org/download/) before proceeding.

From the command line:

1. Install `grunt-cli` and `bower` globally with `npm install -g grunt-cli bower`.
2. Navigate to the theme directory, then run `npm install`. npm will look at `package.json` and automatically install the necessary dependencies. It will also automatically run `bower install`, which installs front-end packages defined in `bower.json`.

When completed, you'll be able to run the various Grunt commands provided from the command line.

**N.B.**
You will need write permission to the global npm directory to install `grunt-cli` and `bower`. You will also likely have to be using an elevated terminal or prefix the command with `sudo`, i.e., `sudo npm install -g grunt-cli bower`.

We also advise against running as root user. NPM deliberately uses limited privileges when executing certain commands such as those included in the Roots post-install process, and when this happens to the root user, any file system objects that are not expressly writable by the root user will fail to write during the execution of the command. These might include directories such as `/var/www` or `/home/someotheruser`. If you're running as root and have problems, don't say we didn't warn you.

### Available Grunt commands

* `grunt dev` — Compile LESS to CSS, concatenate and validate JS
* `grunt watch` — Compile assets when file changes are made
* `grunt build` — Create minified assets that are used on non-development environments

## Documentation

* [Roots 101](http://roots.io/roots-101/) — A guide to installing Roots, the files, and theme organization
* [Theme Wrapper](http://roots.io/an-introduction-to-the-roots-theme-wrapper/) — Learn all about the theme wrapper
* [Build Script](http://roots.io/using-grunt-for-wordpress-theme-development/) — A look into how Roots uses Grunt
* [Roots Sidebar](http://roots.io/the-roots-sidebar/) — Understand how to display or hide the sidebar in Roots
