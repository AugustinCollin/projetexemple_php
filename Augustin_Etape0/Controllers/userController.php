<?php

$uri = $_SERVER["REQUEST_URI"];
if($uri === "/deconnection")
{

}
elseif($uri ==="/inscription")
{
    $title = "/incription";
    $template = "Views/Users/inscriptionOrEditProfile.php";
    require_once("Views/base.php");
}
elseif($uri ==="/connexion")
{
    $title = "/connexion";
    $template = "Views/Users/connexion.php";
    require_once("Views/base.php");
}
?>
