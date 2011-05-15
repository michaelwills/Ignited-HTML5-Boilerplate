<?php
/**
 * Groups configuration for default Minify implementation
 * @package Minify
 */

/**
 * You may wish to use the Minify URI Builder app to suggest
 * changes. http://yourdomain/min/builder/
 **/

return array(
    'style' => array(
		// Global reset
		'../css/reset.css',
		// Concatenation emulation
		'../css/style.combined.css',
		'../css/style.helpers.css',
		'../css/style.media.css',
		'../css/style.iefixes.css'
	),
	'script' => array(
		//'../js/plugins.js',
		'../js/script.js'
	)
);