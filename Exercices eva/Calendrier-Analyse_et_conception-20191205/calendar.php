<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>"My Title"</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
<?php
$now =time();
$month = $_GET["month"];
$month = date("M", mktime(0, 0, 0, $month, 0, 0));
$year = $_GET["year"];
echo "<div class=\"month\">
    <ul>
        <li>$month<br>$year</li>
    </ul>
</div>";
$weekdays = array("Monday", "Tuesday", "Wednesday", "Thursday", "Friday", "Saturday", "Sunday");
echo "<ul class=\"weekdays\">";
for ($i = 0; $i < count($weekdays); $i++) {
    echo "<li>$weekdays[$i]</li>";
}
echo "</ul>";
echo "<ul class=\"days\">";
for ($i = 1; $i < 32; $i++) {

    echo "<li>";
    if($i==date("j",$now)){
        echo"<span class='active'>";
    }
    echo"$i</li>";
}
echo "</ul>";
?>


</ul>
</body>
</html>
