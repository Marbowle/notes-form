<!DOCTYPE html>
<html lang="pl ">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="./public/style.css">
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
                    <a href="./">Lista notatek</a>
                </li>
                <li>
                    <a href="./?action=create">Nowa notatka</a>
                </li>
            </ul>
        </div>
        <div>
               <?php
                        require_once("templates/Pages/$page.php");
               ?>
        </div>
    </div>
    <div class="footer">
        Stopka
    </div>
</body>
</html>