<?php

declare(strict_types=1);

namespace App;

require_once("src/Debug/debug.php");

//Jeśli istnieje ta zmienna to weź wartość która jest pod kluczem i przypisz jeśli nie to NULL
$action = $_GET['action'] ?? null;


if($action ==='list')
{
    include_once("templates/Pages/create.php");
}
else
{
    include_once("templates/Pages/list.php");
}


