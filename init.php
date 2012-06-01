<?php defined('SYSPATH') or die('No direct script access.');

// Disable in CLI
if (Kohana::$is_cli)
	return;

Route::set('logdelete', 'logviewer/delete/<year>/<month>/<logfile>', array('logfile' => '.*'))
    ->subdomains(array('sem'))
	->defaults(array(
		'controller' => 'logviewer',
		'action'     => 'delete',
	));

Route::set('logviewer', 'logviewer/(<year>(/<month>(/<day>(/<level>))))')
    ->subdomains(array('sem'))
	->defaults(array(
		'controller' => 'logviewer',
		'action'     => 'index',
	));
