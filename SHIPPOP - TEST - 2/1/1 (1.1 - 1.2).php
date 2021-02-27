<?php

echo "1.1 Triangle<br>";
loopImage(5, "triangle");
echo "<hr>";
echo "1.2 Pyramid<br>";
loopImage(5, "pyramid");
echo "<hr>";

function loopImage($height, $type)
{
    $spacing = [
        "triangle" => "&emsp;",
        "pyramid" => "&nbsp;&nbsp;"
    ];

    for ($i=0; $i <= $height ; $i++) { 
        $space = str_repeat($spacing[$type], $height-$i);
        $text = str_repeat("O ", $i);
        echo $space.$text."<br>";
    }
}