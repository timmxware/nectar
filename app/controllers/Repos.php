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


  public function setUpRepo() {


exec('cd /home/web/public && touch coucou.txt', $outputArray1);
exec('pwd', $outputArray);
print_r($outputArray1);


   echo 'ok';
  }


}
