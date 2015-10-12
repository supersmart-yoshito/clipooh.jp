<?php

$gDirs = array(
	dirname(__FILE__) . '/../controllers',
	dirname(__FILE__) . '/../views',
	dirname(__FILE__) . '/../models',
	dirname(__FILE__) . '/../configs',
) ;

function autoload($class) {

	global $gDirs ;
	foreach ($gDirs as $dir) {
		if (is_file($dir . '/' . $class . '.php')) {
			require $dir . '/' . $class . '.php' ;
		}
	}
}

spl_autoload_register('autoload') ;

