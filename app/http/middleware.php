<?php 

/**
 * Redirect to login page if user is not authenticate
 *
 * @param null
 * @return mixed
*/
function authMiddleware() {
	global $app;
	if (!isset($_SESSION['user_id']))
		return $app->redirect($app->urlFor('login'));
}

/**
 * Prevent to show login/register page if user is authenticate (redirectIfAuthenticate)
*/
function guest() {
	global $app;
	if (isset($_SESSION['user_id']))
		return $app->redirect($app->urlFor('home'));
}
