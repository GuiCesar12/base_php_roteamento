<?php
function load(string $controller,string $action){
    try{

        $controllerNamespace = "app\\controllers\\{$controller}";
        if(!class_exists($controllerNamespace)){
            throw new Exception("O controller ".$controller." nao existe");
        }
        
        $controllerInstance = new $controllerNamespace();
        if(!method_exists($controllerInstance,$action)){
            throw new Exception("O método ".$action." nao existe");
        }
        $controllerInstance->$action();
    }catch(Exception $e){
        echo $e->getMessage();
    }
}


 $route = [
    "GET"=>[
        "/ramal"=>  load("RamalController","index")
    ]
];