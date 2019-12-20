<?php
$content ="Accueil";
$action = $_GET["action"];
require_once("controller/controller.php");


$title = "Accueil";
switch ($action) {
    case "concerts":
        showConcerts();
        break;
    case "movies":
        require_once "view/movies.php";
        break;
    default:
        require_once "view/home.php";
        break;

}

?>
