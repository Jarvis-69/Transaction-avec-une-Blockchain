<?php


$cv = htmlspecialchars($_POST["cv"]);
$address = htmlspecialchars($_POST["address"]);
$cp = htmlspecialchars($_POST["cp"]);
$birth = htmlspecialchars($_POST["birth"]);
$name = htmlspecialchars($_POST["name"]);
$lastName = htmlspecialchars($_POST["lastName"]);
$email = htmlspecialchars($_POST["email"]);
$tel = htmlspecialchars($_POST["tel"]);


if (!empty($address) && !empty($cp)) {
    echo "Ta une adresse";
}

if (empty($name) || empty($lastName)) {

    echo "Veuillez renseignez votre  nom et prénom";
}



?>