# Novuso WP Common

Registers common libraries to allow plugins and themes to share a common dependency in WordPress.

## Goal

Register CSS and JavaScript libraries that are not available in WordPress core.

## Installation

If you use Composer to manage WordPress dependencies, simply add the following
line to your composer.json file:

    "novuso/novuso-wp-common": "~0.2"

And run `composer update` and this plugin will be installed in your configured
plugin folder using the [composer/installers](https://github.com/composer/installers)
project.

If you are not using Composer, you can download this project and place the
entire contents in a `novuso-wp-common` folder in your plugins folder. In that
case, you will need to periodically update manually (which sort of defeats the purpose).

## Usage

Just use the normal process to enqueue [scripts](http://codex.wordpress.org/Function_Reference/wp_enqueue_script)
and [styles](http://codex.wordpress.org/Function_Reference/wp_enqueue_style) in WordPress.

The handle names listed below are registered once the plugin is active.

Here are some examples of how to load the assets in a theme `functions.php` file:

    // functions.php
    function mytheme_load_assets() {
        wp_enqueue_script('bootstrap');
        wp_enqueue_style('bootstrap');
        wp_enqueue_script('marionette');
    }
    add_action('wp_enqueue_scripts', 'mytheme_load_assets');

## Project Maintained CSS

* [bootstrap](http://getbootstrap.com/)
* [bootstrap-theme](http://getbootstrap.com/)
* [datatables-bootstrap](https://github.com/DataTables/Plugins/)
* [font-awesome](http://fortawesome.github.io/Font-Awesome/)
* [swipebox](http://brutaldesign.github.io/swipebox/)
* [videojs](http://www.videojs.com/)

## Project Maintained JavaScript

* [backstretch](http://srobbin.com/jquery-plugins/backstretch/)
* [bootstrap](http://getbootstrap.com/)
* [datatables](http://www.datatables.net/)
* [datatables-bootstrap](https://github.com/DataTables/Plugins/)
* [jquery-spin](http://fgnass.github.io/spin.js/)
* [marionette](http://marionettejs.com/)
* [markdown](https://github.com/evilstreak/markdown-js)
* [modernizr](http://modernizr.com/)
* [moment](http://momentjs.com/)
* [moment-intl](http://momentjs.com/) (includes locales)
* [respond](https://github.com/scottjehl/Respond)
* [spin](http://fgnass.github.io/spin.js/)
* [swipebox](http://brutaldesign.github.io/swipebox/)
* [videojs](http://www.videojs.com/)

## License

MIT
