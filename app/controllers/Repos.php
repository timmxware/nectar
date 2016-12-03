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
      $this->view( 'repos/list', ['repos' => $reposList] );
    }
    else {
      header( 'Location: /login' );
    }

  }

  public function create() {
      $this->view( 'repos/create', ['repos' => 'coucou'] );
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
}
