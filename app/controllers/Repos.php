<?php

/**
 * The default home controller, called when no controller/method has been passed
 * to the application.
 */
   use AdamBrett\ShellWrapper\Runners\Exec;
   use AdamBrett\ShellWrapper\Command\Builder as CommandBuilder;

class Repos extends Controller {
  /**
   * The default controller method.
   *
   * @return void
   */
  public function index() {

    $repoModel = $this->model( 'repo' );
    $reposList = $repoModel->getAll();

    if ( isset( $reposList ) ) {
      $this->view( 'repo-list', ['repos' => $reposList] );
    }
    else {
      header( 'Location: /login' );
    }

  }

  public function new() {
    $this->view( 'repo-new', [] );
  }

  public function create() {
    $repoModel = $this->model( 'repo' );
    $repoId = $repoModel->create( $_GET['projectname'] );
    echo $repoId;
  }

  public function commit() {

    $provisionModel = $this->model( 'provision' );
    $files = $provisionModel->getAll();

    $repoModel = $this->model( 'repo' );
    $firstCommit = $repoModel->commit( $_GET['projectid'], $files );

  }


  public function setUpRepo() {

   $shell = new Exec();
   $command = new CommandBuilder('/usr/bin/git');
   $command->addSubCommand('clone');
   $command->addParam('https://github.com/teqneers/PHP-Stream-Wrapper-for-Git.git');
   $command->addParam('/var/www/html/test');
   $shell->run($command);
   echo 'ok';
  }






  public function test() {


$vagrant = file_get_contents(INC_ROOT.'/vagrant/Vagrantfile');


      $dd = '{
  "branch_name": "master",
  "commit_message": "some commit message",
  "actions": [
    {
      "action": "create",
      "file_path": "thisworks.php",
      "content": "'.$vagrant.'"
    }]}';


echo $dd;

  }


}
