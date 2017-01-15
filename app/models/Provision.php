<?php

class Provision {


	// Return a JSON containg first commit
	public function getAll() {

		// Prepare json commit
		$json = '{"branch_name": "master", "commit_message": "Premier commit", "actions": [';

		// Get files and their path
		$files = $this->getSampleFiles();

		// Include each file in commit
		foreach ( $files as $name => $path ) {

			$json .= '{
				"action": "create",
				"encoding": "base64",
				"file_path": "'.$path.$name.'",
				"content": "'.$this->getFileContent($name).'"
			},';
		}

		// Clean json
		$json = rtrim( $json, "," );
		$json .= ']}';

		return $json;


	}

	// Return project default files
	private function getSampleFiles() {
		$samples = [
		// VM
		'Vagrantfile'   		=> '',
		'vm-boot.sh'   			=> 'vagrant/config/vm/',
		'vm-configure.sh'  		=> 'vagrant/config/vm/',
		'vm-install.sh'  		=> 'vagrant/config/vm/',

		// Project
		'project-settings.rb'  	=> 'vagrant/config/',
		'project-install.sh' 	=> 'scripts/',
		'project-restart.sh'  	=> 'scripts/',

		// Server
		'adminer.php'    		=> 'vagrant/vendor/',
		'apache-web-log.php'  	=> 'vagrant/vendor/',
		'virtualhost.conf'   	=> 'vagrant/config/',
		'php.ini'     			=> 'vagrant/config/',
		'phpmyadmin.php'   		=> 'vagrant/config/',

		// Web
		'index.php'   			=> 'web/',
		'default.sql'   		=> 'databases/',

		// Gitlab
		'README.md'   			=> '',
		'.gitlab-ci.yml'   		=> '',
		];

		return $samples;
	}


	// Get file content
	private function getFileContent($fileName) {

		// Generate project settings
		if ( $fileName == 'project-settings.rb' ) {
			$content = $this->settingsContent();
		}

		else if ( $fileName == '.gitlab-ci.yml' ) {
			// Remove the dot in filename
			$content = file_get_contents( INC_ROOT.'/samples/'.ltrim($fileName, '.') ) ;
		}

		// Get content from the "samples" directory for every other files
		else {
			$content = file_get_contents( INC_ROOT.'/samples/'.$fileName ) ;
		}

		// Change tokens in README file
		if ( $fileName == 'README.md' ) {
			$content = str_replace('%PROJECTNAME%', $_GET['projectname'], $content);
		}

		// Ecode to base64
		$content = base64_encode($content);

		// Return content
		return $content;
	}


	private function gitlabCiContent() {




	}


	// Return settings
	private function settingsContent() {

		// prepare settings from query
		$settings = 'PROJECTNAME="'.$_GET['projectname'].'"
		PHPVERSION="'.$_GET['phpver'].'"
		DATABASE="default.sql"
		PASSWORD="'.$_GET['password'].'"
		IPADRESS="'.$_GET['customip'].'"
		PMAVERSION="'.$_GET['pmaver'].'"
		TYPE="'.$_GET['projecttype'].'"
		TIMEZONE="'.$_GET['timezone'].'"
		';

		// Remove tabs
		$settings = trim(preg_replace('/\t+/', '', $settings));
		return $settings;
	}

}
