<?php
require 'environment.php';

define("BASE", "http://localhost/ead/");

global $config;
$config = array();
if(ENVIRONMENT == 'development') {
	$config['dbname'] = 'ead';
	$config['host'] = 'localhost';
	$config['dbuser'] = 'root';
	$config['dbpass'] = '';
} else {
	$config['dbname'] = 'ead';
	$config['host'] = '52.11.15.7/phpmyadmin/';
	$config['dbuser'] = 'root';
	$config['dbpass'] = 'bsm110693';
}
?>