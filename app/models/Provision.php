<?php

class Provision {

	// Return a JSON containg first commit
	public function getAll() {

		// Get files and define their path
		$files = [
		// VM
		'Vagrantfile' 			=> '',
		'vm-boot.sh' 		=> 'vagrant/config/vm/',
		'vm-configure.sh' 	=> 'vagrant/config/vm/',
		'vm-install.sh' 	=> 'vagrant/config/vm/',

		// Project
		'project-install.sh' 	=> 'scripts/',
		'project-restart.sh' 	=> 'scripts/',

		// Server
		'adminer.php' 			=> 'vagrant/vendor/',
		'apache-web-log.php' 	=> 'vagrant/vendor/',
		'virtualhost.conf' 		=> 'vagrant/config/',
		'php.ini' 				=> 'vagrant/config/',
		'phpmyadmin.php' 		=> 'vagrant/config/',

		// Web
		'index.php'			=> 'web/',
		'default.sql'			=> 'databases/',
		];

		// Prepare commit json
		$json = '{"branch_name": "master", "commit_message": "Premier commit", "actions": [';

		// Apply config to files and include them in commit
		foreach ( $files as $name => $path ) {
			$content = base64_encode( file_get_contents( INC_ROOT.'/samples/'.$name ) );
			$json .= '{
				"action": "create",
				"encoding": "base64",
				"file_path": "'.$path.$name.'",
				"content": "'.$content.'"
			},';
		}

		// Clean commit json
		$json = rtrim($json, ",");
		$json .= ']}';

		return $json;


	}

}
