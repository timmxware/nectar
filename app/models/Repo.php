<?php

class Repo {

	public function getAll() {

		require_once PARAMS;

		$httpCode = 401;

		if ( isset( $_SESSION['access_token'] ) ) {
			$accessToken = $_SESSION['access_token'];
			$api = new RestClient(['base_url' => $apiUrl]);
			$response = $api->get("projects", ['access_token' => $accessToken]);
			$httpCode = $response->info->http_code;
		}
		if ($httpCode == 200) {
			$repos = $response->decode_response();
			return $repos;
		} else {
			return null;
		}
	}

}
