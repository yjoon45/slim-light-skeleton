<?php

/**
 * Render the login page.
*/
$app->get('/login', 'guest', function () use ($app) {
	echo 'Login first';
})->name('auth.login');
