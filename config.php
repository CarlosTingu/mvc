<?php
require './environment.php';

define('BASE_URL', 'http://localhost/mvc');

global $config;

$config = [];

if (ENVIRONMENT == 'development') {

	$config['host'] = 'localhost';
	$config['dbname'] = 'new_struct';
	$config['dbuser'] = 'root';
	$config['dbpass'] = '';
} else {

	$config['host'] = 'localhost';
	$config['dbname'] = '';
	$config['dbuser'] = 'root';
	$config['dbpass'] = '';
}
?>
