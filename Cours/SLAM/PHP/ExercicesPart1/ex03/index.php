<?php

$jour = "lundi";

switch($jour) {
    case "lundi" : echo("c'est Lundi"); break;
    case "mardi" : echo("c'est mardi"); break;

    default : echo "c'est les vacances";
}

echo "<br>";

for($i=0; $i<4; $i++) {
    echo "<br>";
    echo $i;
    echo "<br>";
    echo "hello";
    
}

$i = 0;

while($i < 4) {
    echo "Hello";
    $i++;
}

