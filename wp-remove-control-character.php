<?php
/*
 * Plugin Name: remove-control-character
 * Plugin URI: 
 * Description: This plugin removes the control characters that are in the post.
 * Author: Akihito Nakano
 * Version: 0.1
 * Author URI: http://github.com/ackintosh
 */

require_once dirname(__FILE__) . '/src/WPRemoveControlCharacter.php';

add_filter('the_content', array(new WPRemoveControlCharacter, 'remove'));

/* End of file wp-remove-control-character.php */
