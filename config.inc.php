<?php
$localUrl = 'http://nectar.gitlab.local';
$gitlabServer = 'http://preview.gitlab.local';

$clientId = '383e8ad8db54f40d10519051f56c30252eac61b97a6b2e1f2a8773dee367563d';
$clientSecret = 'd6022802a59f627d875384924765aaeaa90ea01a22b10f58031f26f1edd321d7';


$authorizeUrl = $gitlabServer.'/oauth/authorize';
$accessTokenExchangeUrl = "oauth/token";

$apiUrl = $gitlabServer.'/api/v3';
$redirectUriPath = "/oauth";
$getDataRedirectUriPath = "index.php";

?>