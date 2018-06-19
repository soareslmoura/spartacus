<?php 

require_once("vendor/autoload.php");

$app = new \Slim\Slim();

$app->config('debug', true);

$app->get('/', function() {
    
	$sql= new Spartacus\DB\Sql();

	$results = $sql->select("SELECT * FROM st_user");

	echo json_encode($results);



});

$app->run();

 ?>