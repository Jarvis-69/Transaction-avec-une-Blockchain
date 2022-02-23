<?php

@$name = htmlspecialchars($_POST["name"]);
@$lastName = $_POST["lastName"];
@$email = $_POST["email"];
@$tel = $_POST["tel"];

echo $name . " " . $lastName . " Email :  " . $email . " Tel : " . $tel;

if (empty($name)) {
 echo "Veuillez renseignez votre prénom" . "<br>";
}
if (empty($lastName)) {
    echo "Veuillez renseignez votre nom" . "<br>";
   }