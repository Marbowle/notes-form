<?php

declare(strict_types=1);

error_reporting(E_ALL); // wyświetla wszystkie błedy
ini_set('display_errors', '1');

function dump($data)
{

    echo '
    <br/><div 
        style="
    background: yellow;
    text: pink;
    display: inline-block;
    padding: 0 10px;
    border: 1px solid pink;
    "
>
<pre>';
print_r($data);
echo '</pre>
</div>
<b/r>';
}
