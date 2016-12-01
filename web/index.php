<?php

//*******************
//
// ** Config
//
//*******************

require __DIR__ . '/../vendor/autoload.php';

 // Load Twig in dev
  // TODO : remove options in production
use twig\twig;
$loader = new Twig_Loader_Filesystem('../views');
$twig = new Twig_Environment($loader, array(
  'cache' => '/dev/shm',
  'debug' => true));

// Get config file
include "../config.inc.php";


//*******************
//
// ** Session check
//
//*******************

session_start();

$httpCode = 401;

if (isset($_SESSION['access_token'])) {
  $accessToken = $_SESSION['access_token'];
  $api = new RestClient(['base_url' => $apiUrl]);
  $result = $api->get("projects", ['access_token' => $accessToken]);
  $httpCode = $result->info->http_code;
}

//*******************
//
// ** List repos
//
//*******************

if ($httpCode == 200) {
  // Display repos
  $repos = $result->decode_response();
  echo $twig->render('commons/header.html');
  echo $twig->render('list.html', array('repos' => $repos));
  echo $twig->render('commons/footer.html');
}

//****************
//
// ** Login form
//
//****************

else {
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
  echo $twig->render('commons/header.html', array('class' => 'login'));
  echo $twig->render('login.html', array('url' => $loginUrl));
  echo $twig->render('commons/footer.html');
}


  //require __DIR__ . '/vendor/autoload.php';
  // use AdamBrett\ShellWrapper\Runners\Exec;
  // use AdamBrett\ShellWrapper\Command\Builder as CommandBuilder;
  // $shell = new Exec();
  // $command = new CommandBuilder('/usr/bin/git');
  // $command->addSubCommand('init')
  //    ->addArgument('bare','/home/kursus/websites/git/gitcreator/coco');
  // $shell->run($command);
?>



