<?php
$host = "localhost"; 
$dbname = "gestion_etudiants"; 
$user = "root"; 
$pass = ""; 
try { 
    $pdo = new PDO("mysql:host=$host;dbname=$dbname;charset=utf8", $user, $pass); 
    $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION); 
} catch (PDOException $e) { 
    die("Échec de la connexion : " . $e->getMessage()); 
}
?>