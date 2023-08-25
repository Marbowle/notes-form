<?php

declare(strict_types=1);

namespace App;

use App\Exception\AppException;
use App\Exception\ConfigurationException;
use Throwable;

require_once("src/Debug/debug.php");
require_once("src/Controller.php");
require_once("src/Exception/AppException.php");

$configuration = require_once("config/config.php");

$request = [
    'get' => $_GET,
    'post'=> $_POST
];

try {
    Controller::initConfiguration($configuration);
    (new Controller($request))->run();
}catch(ConfigurationException $e){
    echo 'To jest błąd konfiguracji ';
    echo 'Problem z aplikacją może chwile potrwać';
}catch (AppException $e){
    echo 'Wystąpił błąd w tej aplikacji';
    echo '<h3>'.$e->getMessage().'</h3>';
}catch (Throwable $e){
    echo 'Wystąpił błąd w tej aplikacji';
}








