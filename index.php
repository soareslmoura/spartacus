<?php 

require_once("vendor/autoload.php");

use \Slim\Slim;
use Spartacus\Page;
use Spartacus\PageAluno;

$app = new \Slim\Slim();

$app->config('debug', true);

$app->get('/', function() {

    $page = new Page();
    $page->setTpl('index');

});

$app->get('/std', function() {

    $page = new PageAluno();
    $page->setTpl('index');

});

$app->run();

 ?>