<?php

class Provision {

	public function getAll() {

		$files = [
		'Vagrantfile' => '',
		'project.bootstrap.sh' => 'provisions/',
		'vm.bootstrap.sh' => 'provisions/',
		'virtualhost.conf' => 'provisions/config/',
		'php.ini' => 'provisions/config/',
		'phpmyadmin.php' => 'provisions/config/',
		'default.sql' => 'provisions/databases/',
		'apache-web-log.php' => 'provisions/vendor/',
		'adminer.php' => 'provisions/vendor/'
		];

		$json = '{"branch_name": "master", "commit_message": "Premier commit", "actions": [';

		foreach ( $files as $name => $path ) {
			$content = base64_encode( file_get_contents( INC_ROOT.'/vagrant/'.$path.$name ) );
			$json .= '{
				"action": "create",
				"encoding": "base64",
				"file_path": "'.$path.$name.'",
				"content": "'.$content.'"
			},';
		}
		$json = rtrim($json, ",");
		$json .= ']}';

		return $json;


	}

}
