<?php 

use Illuminate\Database\Capsule\Manager as Capsule;

$capsule = new Capsule;

$capsule->addConnection([
	'driver'	=> DB_DRIVER,
	'host'		=> DB_HOST,
	'database'	=> DB_DATABASE,
	'username'	=> DB_USERNAME,
	'password'  => DB_PASSWORD,
	'charset'   => 'utf8',
	'collation' => 'utf8_unicode_ci',
	'prefix'    => '',
]);

$capsule->bootEloquent();
