<?php

// Un Commentaire sur une seule ligne

/* Un Commentaire
sur plusieurs lignes 
*/
$mm = 

$message="Hello World";

echo($message);

$a = 10;
$b = $a+1;
$d = $c+1;

echo($a . " ,sdfdsdss " . $b . " , " . $d);

?>
<br>

<p><?= $a ?></p>

<?php

define("constante", 2);


echo constante;

?>
<br>
<?php

$nb = "Nombre positif";

if ($a < 0) {
    $nb = "Nombre négatif";
}

echo $nb;


?>