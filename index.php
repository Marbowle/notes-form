<?php

declare(strict_types=1);

namespace App;

require_once("src/Debug/debug.php");
require_once("src/View.php");

error_reporting(0); // wyświetla wszystkie błedy
ini_set('display_errors', '0');

const DEFAULT_ACTION = 'list';

//Jeśli istnieje ta zmienna to weź wartość która jest pod kluczem i przypisz jeśli nie to NULL
$action = $_GET['action'] ?? DEFAULT_ACTION;

$view = new View();

$viewParams = [];
if($action ==='create')
{
    $page = 'create';

    if(!empty($_POST))
    {
        $viewParams = [
        'title' => $_POST['title'],
        'desrpition' => $_POST['description'],
    ];
    }  
} else{
    $page === 'list';
    $viewParams['resultList'] = "Wyświetlamy notatki";
}

$view->render($action, $viewParams );



