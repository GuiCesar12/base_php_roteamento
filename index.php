<?php
require "bootstrap.php";
use app\classes\Routes;
use app\classes\Uri;
$routes = [
    '/'=>'controllers/index.php'
];

$uri = Uri::load();
// dd($routes);
require Routes::load($routes,$uri);