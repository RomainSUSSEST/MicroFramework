<?php

$pdo = new PDO('mysql:host=localhost;dbname=microframework','romain','');

//$pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

$pdo->exec('INSERT INTO articles SET titre ="Mon titre", date ="' . date('Y-m-d H:i:s') .'"');

var_dump($pdo);