<?php 

require_once("vendor/autoload.php");

use \Slim\Slim;
use Spartacus\Page;
use Spartacus\PageAluno;
use Spartacus\Model\User;

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

$app->post('/std/login', function() {

    User::login($_POST["email"],$_POST["pass"]);

    header("location:/spartacus/std");
    exit;


});

$app->run();

 ?>