<?php
/*
 * Plugin Name: remove-controll-character
 * Plugin URI: 
 * Description: This plugin removes the controll characters that are in the post.
 * Author: Akihito Nakano
 * Version: 0.1
 * Author URI: http://github.com/ackintosh
 */

require_once dirname(__FILE__) . '/src/WPRemoveControllCharacter.php';

add_filter('the_content', array(new WPRemoveControllCharacter, 'remove'));

/* End of file wp-remove-controll-character.php */
