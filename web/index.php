<!doctype html>
<html class="no-js" lang="fr">
<head>
  <meta charset="UTF-8">
  <title>Creator</title>
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="stylesheet" href="assets/css/knacss.css" media="all">
 <link href="https://fonts.googleapis.com/css?family=Lato:400,400i,700,700i" rel="stylesheet">   <link rel="stylesheet" href="assets/css/basefields.css" media="all">
  <link rel="stylesheet" href="assets/css/font-awesome.css" media="all">
  <link rel="stylesheet" href="assets/css/modal.css" media="all">
  <link rel="stylesheet" href="assets/css/styles.css" media="all">
</head>
<body>

  <?php
  require __DIR__ . '/../vendor/autoload.php';
  use twig\twig;
  $loader = new Twig_Loader_Filesystem('../blocks');
  $twig = new Twig_Environment($loader, array(
    'cache' => '/dev/shm',
    'debug' => true));
    ?>

    <?php
    echo $twig->render('forms/form.html', array('the' => 'vargiables', 'go' => 'here'));
    ?>

    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>
    <script src="assets/js/jquery.modal.min.js"></script>
    <script src="assets/js/main.js"></script>
  </body>
  </html>






  <!-- <div id="login-form" class="w50" style="display:none;"> -->

<!--
<section class="flex-container">
  <span class="flex-item-center">
    <p>I am centered</p>
  </span>
</section>
-->


<!-- Link to open the modal -->

<!-- <section class="grid test">

  <div class="push center three-quarters">.push</div>

</section> -->

<?php
	//require __DIR__ . '/vendor/autoload.php';

	// use AdamBrett\ShellWrapper\Runners\Exec;
	// use AdamBrett\ShellWrapper\Command\Builder as CommandBuilder;

	// $shell = new Exec();
	// $command = new CommandBuilder('/usr/bin/git');
	// $command->addSubCommand('init')
	// 		->addArgument('bare','/home/kursus/websites/git/gitcreator/coco');
	// $shell->run($command);
?>

