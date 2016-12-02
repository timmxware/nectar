<?php

/**
 * The default home controller, called when no controller/method has been passed
 * to the application.
 */
class Repos extends Controller {

/**
 * The default controller method.
 *
 * @return void
 */
public function index($name = 'alex', $mood = 'normal') {
        require_once INC_ROOT . '/config.inc.php';

        // $user = $this->model('user');
        // $user->name = $name;
    $httpCode = 401;

    if (isset($_SESSION['access_token'])) {
      $accessToken = $_SESSION['access_token'];
      $api = new RestClient(['base_url' => $apiUrl]);
      $result = $api->get("projects", ['access_token' => $accessToken]);
      $httpCode = $result->info->http_code;
  }

  if ($httpCode == 200) {
          // Display repos
      $repos = $result->decode_response();
                  // 'name' => $name->name,
      $this->view('repos/list', ['repos' => $repos, 'apiUrl' => $apiUrl, 'access_token' => $accessToken ]);
  }
  else {
    header('Location: /login');
}


}
}
