<?php

/*
	Plugin Name: Show More Text Button
	Plugin URI: https://github.com/rxchun/q2a-read-more
	Plugin Update Check URI: https://raw.githubusercontent.com/rxchun/q2a-read-more/master/qa-plugin.php
	Plugin Description: Collapses tall blocks of text (questions/answers/comments) and adds a "read more" button
	Plugin Version: 1.1
	Plugin Date: 2015-05-06
	Plugin Author: Chun
	Plugin Author URI: https://rxchun.github.io/
	Plugin License: GPLv2
	Plugin Minimum Question2Answer Version: 1.5
*/

if (!defined('QA_VERSION')) { // don't allow this page to be requested directly from browser
	header('Location: ../../');
	exit;
}

qa_register_plugin_layer('qa-show-more-layer.php', 'Show More Layer');