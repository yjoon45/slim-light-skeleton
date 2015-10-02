<?php 

/**
 * Render the home page
*/
$app->get('/', function() use ($app) {
	$app->render('home.php');
})->name('home');