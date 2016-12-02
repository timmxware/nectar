<?php

/**
 * The default home controller, called when no controller/method has been passed
 * to the application.
 */
class Login extends Controller {
/**
 * The default controller method.
 *
 * @return void
 */
public function index() {
        require_once INC_ROOT . '/config.inc.php';

   // Mitigates cross site request forgery attacks.
	$_SESSION['state'] = rand(0,999999999);

  // URL parameters used to request an authorization token
	$queryParams = array(
		'client_id' => $clientId,
		'redirect_uri' => $localUrl . $redirectUriPath,
		'response_type' => 'code',
		'state' => $_SESSION['state']);

  // Autohrisation query URL
	$loginUrl = $authorizeUrl . '?' . http_build_query($queryParams);

  // Display login form

	$this->view('login/index', ['class' => 'login', 'url' => $loginUrl]);

}

}