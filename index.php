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
switch($action)
{
    case 'create': 
        $page = 'create';
        $created = false;

    if(!empty($_POST))
    {
        $created = true;
        $viewParams = [
        'title' => $_POST['title'],
        'description' => $_POST['description'],
    ];
    } 
     $viewParams['created'] = $created; 
    break;
    case 'show': 
        $viewParams = [
            'title' => 'Moja notatka',
            'descrpition' => 'Opis'
        ];
    break;
    default: 
        $page === 'list';
        $viewParams['resultList'] = "Wyświetlamy notatki";
    break;
}

$view->render($action, $viewParams );



