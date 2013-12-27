<?php
/**
 * @package sqz-template
 * @version 0.1
 */
/*
Plugin Name: Sqz-Template
Plugin URI:
Description: Plugin template for future projects
Author: Tyler Souza
Version: 0.1
Author URI: http://tylermade.it/
*/

function sqz() {
	$message = "Hello! From Plugin!";
	echo '<p id="sqz">' . $message . ' </p>';

	//just echos style...will make spereate css file. Just for demonstration
	echo '<style type="text/css">
			#sqz {color: red;}		
		</style>';
}

add_action('admin_notices', 'sqz');

?>