<?php

//echo "witaj świecie";

$test = 'test';


function dump($data)
{

    echo '<div 
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
</div>';
}

dump($test);
