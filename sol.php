<?php
$host = 'localhost';
$dbname = 'classe_emsi';
$username = 'root';
$password = '';

try{
    $pdo = new PDO("mysql:host=$host;dbname=$dbname", $username, $password);
    $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    echo 'Connexion réussie';
}

catch(PDOException $e){
    echo 'Connexion échouée : ' . $e->getMessage();
}
