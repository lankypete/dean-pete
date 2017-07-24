<?php
require_once( dirname( __FILE__ ) . '/config.php');

//page name function
function the_title() {
	global $title;

	echo $title;
}

//output the home url of site
function home_url($extension) {
	echo ABS_URL . $extension;
}

?>