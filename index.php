<?php

declare(strict_types=1);

namespace App;

use App\Exception\AppException;
use Throwable;

require_once("src/Debug/debug.php");
require_once("src/Controller.php");

$configuration = require_once("config/config.php");

$request = [
    'get' => $_GET,
    'post'=> $_POST
];

try {
    Controller::initConfiguration($configuration);
    (new Controller($request))->run();
}catch (AppException $e){
    echo "Wystąpił błąd w tej aplikacji";
    echo '<h3>'.$e->getMessage().'</h3>';
}catch (Throwable $e){
    echo "Wystąpił błąd w tej aplikacji";
}







