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

		$tokenModel = $this->model( 'token' );
		$authUrl = $tokenModel->getOAuthUrl();

		// Display login form
		$this->view( 'login/index', ['class' => 'login', 'url' => $authUrl]);

	}

}
