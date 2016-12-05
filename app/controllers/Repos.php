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


  private function setUpRepo() {
    //require __DIR__ . '/vendor/autoload.php';
    // use AdamBrett\ShellWrapper\Runners\Exec;
    // use AdamBrett\ShellWrapper\Command\Builder as CommandBuilder;
    // $shell = new Exec();
    // $command = new CommandBuilder('/usr/bin/git');
    // $command->addSubCommand('init')
    //    ->addArgument('bare','/home/kursus/websites/git/gitcreator/coco');
    // $shell->run($command);
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
