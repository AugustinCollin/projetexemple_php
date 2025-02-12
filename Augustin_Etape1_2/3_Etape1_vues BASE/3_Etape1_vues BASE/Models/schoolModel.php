<?php

/*
Fonction selectAllSchools
-------------------------
BUT : aller rechercher ls caractéristiques de toutes les écoles dans la bas ede données
IN : $pdo reprenant toutes les informations de connexion
OUT : objet pdo contenant toutes les écoles de la base de données.
*/

function selectAllschools($pdo)
{
    try
    {
        //définition de la requête
        $query = "select * from school";
        //préparation de l'exécution de la requête
        $selectSchool = $pdo->prepare($query);
        //exécution
        $selectschool->execute();
        //récupération des données dans l'objet fetch
        $school = $selectschool->fetchall();
        //renvoi des données
        return $schools;
    } catch (PDOexeption $e)
    {
        $message = $e->getmessage();
        die($message);
    }
}