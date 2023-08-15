<?php

declare(strict_types=1);

namespace App;

require_once("src/Debug/debug.php");
require_once("src/View.php");

//Jeśli istnieje ta zmienna to weź wartość która jest pod kluczem i przypisz jeśli nie to NULL
$action = $_GET['action'] ?? null;

$view = new View();
$view->render($action);



