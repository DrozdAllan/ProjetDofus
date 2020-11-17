<?php

/**
 * Retourne une connexion à la base de données
 * 
 * @return PDO
 */

function getPdo(): PDO
{
    $servername = 'localhost';
    $username = 'root';
    $password = '';
    $dbname = "bddinscriptiondofousse";

    $pdo = new PDO("mysql:host=$servername;dbname=$dbname", $username, $password, [
        PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION,
        PDO::ATTR_DEFAULT_FETCH_MODE => PDO::FETCH_ASSOC
    ]);



    return $pdo;
}
