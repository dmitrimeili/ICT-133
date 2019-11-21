<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Title</title>
</head>
<body>

<?php
/**
 *Author : Dmitri Meili
 * Date : 21.11.2019
 * Project : Ex traduction C to PHP
 * Version : 1.0
 */
$value=20;
$step=3;
$i=0;
while($i<10){
    if($value >= 30){
        echo "le nombre vaut $value <br>";
    }
    else{
        echo"nombre trop petit <br>";
    }
    $value += $step;
    $i++;
}

?>
</body>
</html>