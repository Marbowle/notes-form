<?php

declare(strict_types=1);

namespace App;

require_once("src/Debug/debug.php");

if(!empty($_GET['action']))
{
    $action = $_GET['action'];
}else{
    $action = null;
}

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Moje notatki</title>
</head>
<body>
    <div class="header">
        <h1>Moje notatki</h1>
    </div>
        <div class="container">
            <div class="menu">
            <ul>
                <li>
                    <a href="/">Lista notatek</a>
                </li>
                <li>
                    <a href="/?action=create">Nowa notatka</a>
                </li>
            </ul>
        </div>
        <div>
            <?php
                if($action === 'create'):
                    echo 'Nowa notatka';
                else:
                    echo 'Lista notatek';
                endif;
                var_dump($action);
            ?>
        </div>
    </div>
    <div class="footer">

    </div>
</body>
</html>
