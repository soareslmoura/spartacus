<?php 
session_start();
require_once("vendor/autoload.php");

use \Slim\Slim;
use Spartacus\Page;
use Spartacus\PageAluno;
use Spartacus\PageAdm;
use Spartacus\Model\User;

$app = new \Slim\Slim();

$app->config('debug', true);

$app->get('/', function() {

    $page = new Page();
    $page->setTpl('index');

});

$app->get('/std', function() {

    USER::verifyLoginStd();
    $page = new PageAluno();
    $page->setTpl('index');

});

$app->post('/std/login', function() {


    $user = User::login($_POST["email"],$_POST["pass"]);

    header("location:/spartacus/std");
    exit;
});

$app->get('/std/logout',function (){

    User::logout();
    header("location:/spartacus");
    exit;
});



/*--------------------------------------------------  ADM  --------------------------------------------------------*/

$app->get('/adm', function() {

    USER::verifyLoginAdm();
    $page = new PageAdm();
    $page->setTpl('index');

});

$app->get('/adm/login', function() {


    $page = new PageAdm([
        "header"=>false,
        "footer"=>false
        ]
    );
    $page->setTpl('login');

});


$app->post('/adm/login', function() {

    User::login($_POST["email"],$_POST["pass"],1);
    header("location:/spartacus/adm");
    exit;
});

$app->run();

 ?>