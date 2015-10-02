<?php 

require 'vendor/autoload.php';

use Slim\Slim;

$app = new Slim([
	'debug' 		 => APP_DEBUG,
	'templates.path' => VIEW_PATH,
]);

require APP_PATH . '/routes.php';
require APP_PATH . '/database.php';
