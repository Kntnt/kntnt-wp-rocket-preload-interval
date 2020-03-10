<?php

/**
 * @wordpress-plugin
 * Plugin Name:       Kntnt Preload Interval for WP-Rocket
 * Plugin URI:        https://www.kntnt.com/
 * Description:       Sets the preload interval for WP-Rocket
 * Version:           1.0.1
 * Author:            Thomas Barregren
 * Author URI:        https://www.kntnt.com/
 * License:           GPL-3.0+
 * License URI:       http://www.gnu.org/licenses/gpl-3.0.txt
 */


add_filter( 'pre_get_rocket_option_sitemap_preload_url_crawl', function () {
    return 1000000; // 1 second
} );
