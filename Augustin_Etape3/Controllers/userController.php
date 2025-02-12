<?php   // code php qui décide de ce qu'il faut donner comme valeur à la variable $template

// on ajoutera par la suite les require aux modèles

// récupération du chemin désiré
$uri = $_SERVER["REQUEST_URI"];
var_dump($uri);
if ($uri === "/connexion") {
    var_dump("coucou");
    $title = "Connexion";                  //titre à afficher dans l'onglet de la page du navigateur
    $template = "Views/Users/connexion.php";        //chemin vers la vue demandée
    require_once("Views/base.php");             //appel de la page de base qui sera remplie avec la vue demandée
}
elseif ($uri === "/deconnexion") {      // on anticipe pour la suite
    // a voir plus tard
}
elseif ($uri ==="/inscription") {
    $title = "Inscription";                  //titre à afficher dans l'onglet de la page du navigateur
    $template = "Views/Users/inscriptionOrEditProfile.php";        //chemin vers la vue demandée
    require_once("Views/base.php");             //appel de la page de base qui sera remplie avec la vue demandée
}