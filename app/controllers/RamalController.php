<?php
namespace app\controllers;
use app\models\Ramal;
class RamalController extends Controller {

    public function index(){
        $user = new Ramal;
        var_dump($user->all());
    }


}