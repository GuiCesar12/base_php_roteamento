<?php
require '../vendor/autoload.php';
require '../routes/routes.php';
require '../app/helpers/helpers.php';
// require 'bootstrap.php';


try{
    $uri = parse_url($_SERVER["REQUEST_URI"])['path'];
    $request = $SERVER["REQUEST_METHOD"];
    if(!isset($route[$request])){
        throw new Exception("A rota não existe");

    }
    if(!array_key_exists($uri,$route[$request])){
        
    }
    $route[$request][$uri];



}catch(Exception $e){
    $e->getMessage();
}