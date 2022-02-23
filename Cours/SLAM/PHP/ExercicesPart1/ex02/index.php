<?php

$a = 1;



if ($a == 1) {
    $resultat = "un";
} elseif ($a == 2) {
    $resultat = "deux";
} elseif ($a == 3) {
    $resultat = "trois";
} elseif ($a == 4) {
    $resultat = "quatre";
} elseif ($a == 5) {
    $resultat = "cinq";
} else {
    $resultat= "Coucou";
}

echo $resultat;

echo ($a<0) ? ("negatif"):("positif");