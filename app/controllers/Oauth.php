<?php

/**
 * The default home controller, called when no controller/method has been passed
 * to the application.
 */
class Oauth extends Controller {
  /**
   * The default controller method.
   *
   * @return void
   */
  public function index() {

    $tokenModel = $this->model( 'token' );
    $authToken = $tokenModel->getOAuthToken();

    if ( $authToken ) {
      header( 'Location: /' );
    }
    else {
      die();
      header( 'Location: /login' );
    }

  }
}
