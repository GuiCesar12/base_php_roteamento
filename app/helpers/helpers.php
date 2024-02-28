<?php
namespace app\helpers;
use Exception;
use League\Plates\Engine;
class Helpers {
    public function register(Engine $engine) {
        $engine->registerFunction('asset', [$this, 'asset']);
    }

    public static function asset($path) {
        return '../../public/' . $path;
    }
}