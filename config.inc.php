<?php
$localUrl = 'http://nectar.gitlab.local';
$gitlabServer = 'http://preview.gitlab.local';

$clientId = '0f3809ef031737abb7445b491dff6cc8dd5604f33f1210eadf42f679797f2077';
$clientSecret = '2cdb2c9b5a52e8e3cad948a398aef280f288be45160ca7a1504a4c41f17ad992';


$authorizeUrl = $gitlabServer.'/oauth/authorize';
$accessTokenExchangeUrl = "oauth/token";

$apiUrl = $gitlabServer.'/api/v3';
$redirectUriPath = "/oauth";
$getDataRedirectUriPath = "index.php";

?>