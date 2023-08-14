<?php
namespace KanbanBoard;

// var_dump(__DIR__);
// var_dump(realpath(dirname(dirname(__DIR__))));
// die();

// $dotenv = Dotenv\Dotenv::createImmutable(realpath(dirname(dirname(__DIR__))));
// $dotenv->load();

class Utilities
{
	private function __construct() {
	}

	public static function env($name, $default = NULL) {
		$value = $_ENV[$name];
		if($default !== NULL) {
			if(!empty($value))
				return $value;
			return $default;
		}
		return (empty($value) && $default === NULL) ? die('Environment variable ' . $name . ' not found or has no value') : $value;
	}

	public static function hasValue($array, $key) {
		return is_array($array) && array_key_exists($key, $array) && !empty($array[$key]);
	}

	public static function dump($data) {
		echo '<pre>';
		var_dump($data);
		echo '</pre>';
	}
}