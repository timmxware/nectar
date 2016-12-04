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
    $newRepo = $repoModel->create( $_GET['projectname'] );
    echo $newRepo;

  }

  public function commit() {
    $repoModel = $this->model( 'repo' );
    $firstCommit = $repoModel->commit( $_GET['projectid'] );
     ?>
      <pre>
        <?php
         print_r($firstCommit);
        ?>
        </pre>
       <?php
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

    require_once PARAMS;
    $httpCode = 401;

    if ( isset( $_SESSION['access_token'] ) ) {
      $accessToken = $_SESSION['access_token'];
      $api = new RestClient( ['base_url' => $apiUrl] );
      $response = $api->get( "groups", ['search' => 'preview', 'access_token' => $accessToken] );
      $group =  $response->decode_response();
      echo $group[0]->id;


    }
    if ( $httpCode == 200 ) {
      $test = $response->decode_response();
      return $test;
    } else {
      return null;
    }
    echo $test;



  }


}
