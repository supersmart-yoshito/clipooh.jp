<?php


class ConfigUtil {

	public function __construct() {
	}

	public static function getRouting() {
		include 'routes.php' ;
		return $routing;
	}
}


