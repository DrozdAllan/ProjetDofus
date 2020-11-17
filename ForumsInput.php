<?php
session_start();
require_once('libraries/database.php');

$Msg = htmlspecialchars($_POST['Message']);




$Pseudal = $_SESSION['pseudo'];
$pdo = getPdo();
    
    // $pdo->prepare('CREATE TABLE Chat (pseudo VARCHAR(255), message VARCHAR(255))');
    // $pdo->prepare('ALTER TABLE Chat ADD Id INT NOT NULL AUTO_INCREMENT PRIMARY KEY FIRST');
    
    
    // On ajoute une entrée dans la table Chat
    $inser = $pdo->prepare("INSERT INTO Chat (pseudo,message) VALUES ('$Pseudal', '$Msg')");
    $inser->execute();
    
    

$conn = null;



// REDIRECTION DIRECTE :
header('Location: Forums.php');
?>