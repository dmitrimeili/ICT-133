<?php
function showConcerts()
{
    require_once("Model/concerts.php");
    //Logique
    for ($i = 0; $i < count($concerts); $i++){
        if ($concerts[$i]["date"] < date("Y-m-d")) {
            unset($concerts[$i]);
        }
    }
    require_once("view/concerts.php");
}

?>
