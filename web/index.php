<!doctype html>
<html class="no-js" lang="fr">
<head>
  <meta charset="UTF-8">
  <title>Creator</title>
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="stylesheet" href="assets/css/knacss.css" media="all">
 <link href="https://fonts.googleapis.com/css?family=Lato:400,400i,700,700i" rel="stylesheet">   <link rel="stylesheet" href="assets/css/basefields.css" media="all">
  <link rel="stylesheet" href="assets/css/font-awesome.css" media="all">
  <link rel="stylesheet" href="assets/css/modal.css" media="all">
  <link rel="stylesheet" href="assets/css/styles.css" media="all">
</head>
<body>
<?php



 // header('Location: '.$_SERVER['REQUEST_URI']);



include "ClientCredentials.php";

session_start();

if (empty($_SESSION['access_token'])) {

// Generate random value for use as the 'state'.  Mitigates
// cross site request forgery attacks.
$_SESSION['state'] = rand(0,999999999);


// This is the Microsoft authentication service URL used to initiate the OAuth authentication flow
$authorizationUrlBase = 'http://preview.gitlab.local/oauth/authorize';

// URL parameters used to request an authorization token
$queryParams = array(
    'client_id' => $clientId,
    'redirect_uri' => 'http://localhost/~kursus/git/nectar/web' . $redirectUriPath,
    'response_type' => 'code',
    'state' => $_SESSION['state']
);

// Microsoft Authentication service url and params
$goToUrl = $authorizationUrlBase . '?' . http_build_query($queryParams);
?>

<h2>Bing Ads OAuth Demo</h2>

<p>This application would like to manage your Bing Ads data. Click below to login and authorize this application.</p>

<p>When you click OK below, you'll be redirected to the following URI:</p>
<p><?php echo $goToUrl ?></p>

<input type="button" onClick="return window.location='<?php echo $goToUrl;?>';" value="OK" />

<?php

}
else {
  $accessToken = $_SESSION['access_token'];

  printf("Implement code to retrieve data with access token: %s", $accessToken);
}

 ?>

  </body>
  </html>






