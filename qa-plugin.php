<?php

/*
	Plugin Name: Show More
	Plugin URI: https://github.com/HelioChun/q2a-read-more
	Plugin Update Check URI: https://raw.githubusercontent.com/HelioChun/q2a-read-more/master/qa-plugin.php
	Plugin Description: Collapses tall blocks of text (questions/answers/comments) and adds a "read more" button
	Plugin Version: 1.1
	Plugin Date: 2015-05-06
	Plugin Author: Chun
	Plugin Author URI: https://github.com/heliochun
	Plugin License: GPLv2
	Plugin Minimum Question2Answer Version: 1.5
*/

if (!defined('QA_VERSION')) { // don't allow this page to be requested directly from browser
	header('Location: ../../');
	exit;
}

qa_register_plugin_layer('qa-show-more-layer.php', 'Show More Layer');