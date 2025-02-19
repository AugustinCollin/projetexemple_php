<?php 
require_once "Models/schoolModel.php";

$uri = $_SERVER["REQUEST_URI"];

if ($uri === "/mesEcoles"){
    $school = selectMySchools($pdo);

    $title = "Mes écoles";
    $template = "Views/pageAccueil.php";
    require_once("Views/base.php");
}
elseif ($uri === "/createSchool"){

}