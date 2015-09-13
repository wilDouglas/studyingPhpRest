<?php
/**
 * Created by PhpStorm.
 * User: William
 * Date: 15/08/2015
 * Time: 09:05
 */

//require_once "config/autoload.php";

require "controller/PessoaController.class.php";
require "model/dao/DataBaseFactory.class.php";
require "model/dao/PessoaDao.class.php";
require "model/Pessoa.class.php";

include "vendor/autoload.php";

use \Psr\Http\Message\ServerRequestInterface;
use \Psr\Http\Message\ResponseInterface;


$app = new Slim\App();
$app->get("/listpessoas",function(ServerRequestInterface $request, ResponseInterface $response,$args) use ($app){

    $controller = new PessoaController();
    $pessoas = $controller->listPessoas();

    $response->write(json_encode($pessoas));


});

$app->post("/pessoa",function(ServerRequestInterface $request, ResponseInterface $response,$args) use ($app){
    $contrller = new PessoaController(json_decode($request->getBody()));
    $contrller->addPessoa();
});

$app->run();