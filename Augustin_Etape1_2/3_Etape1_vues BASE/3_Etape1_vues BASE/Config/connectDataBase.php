<?php

//En cas d'erreur, on affiche le message de l'erreur attrapée.
try{
    $strConnexion = "mysql/host=localhost;dbname=school";
    $pdo= new PDO($strConnexion,"root","root",[
        PDO::ATTR_ERRMODE=> PDO::ERRMODE_EXEPTION,
        PDO::ATTR_DEFAUT_FETCH_MODE => PDO::FETCH_OBJ
    ]);
}   catch (PDOException $e) {
    $message = $e->getMessage();
    die($message);
}