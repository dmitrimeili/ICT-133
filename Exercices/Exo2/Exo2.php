<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Title</title>
    <script src="js/script.js"></script>
</head>
<body>
<?php
// TODO : Ecrire le php qui remplace le html dans la balise ul ci-dessous
echo "<ul>";
$name = "";
for ($i = 1; $i < 9; $i++) {

    switch ($i) {
        case 1;
            $name = "Fabien";
            break;
        case 2;
            $name = "David";
            break;
        case 3;
            $name = "Miguel";
            break;
        case 4;
            $name = "Benoît";
            break;
        case 5;
            $name = "Jhonny";
            break;
        case 6;
            $name = "Kevin";
            break;
        case 7;
            $name = "Christopher";
            break;
        case 8;
            $name = "Dmitri";
            break;
        case 9;
            $name = "etc..";
            break;
    }
    echo "<li id='div$i'>$name</li>";
}
echo "<ul>";
echo"<br><br><br>";
$tab = array("Joe","Jack","William","Averell");
for ($i = 0; $i < 4; $i++) {
    echo "<li id='div$i'>$tab[$i]</li>";

}
?>

<h1>SI-CMI2a</h1>
<ul>
    <li id="div1">Fabien</li>
    <li id="div2">David</li>
    <li id="div3">Miguel</li>
    <li id="div4">Benoît</li>
    <li id="div5">Johnny</li>
    <li id="div6">Kevin</li>
    <li id="div7">Christopher</li>
    <li id="div8">Dmitri</li>
    <li id="div9">etc...</li>
</ul>
</body>
</html>