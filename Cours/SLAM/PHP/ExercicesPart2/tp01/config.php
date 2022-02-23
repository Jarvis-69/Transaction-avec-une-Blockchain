<?php 
try {
$pdo = new PDO("mysql:host=localhost;port=3309;dbname=tp", "root");
}
catch(PDOException $e) {
    echo $e->getMessage();
}

