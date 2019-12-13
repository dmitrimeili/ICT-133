<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>"My Title"</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
<?php
$now = time();
$month = $_GET["month"];
$month = date("M", mktime(0, 0, 0, $month + 1, 0, 0));
$year = $_GET["year"];
echo "<div class=\"month\">
    <ul>
        <li>$month<br>$year</li>
    </ul>
</div>";
$date = strtotime("$year-$month");
$weekdays = array("Monday", "Tuesday", "Wednesday", "Thursday", "Friday", "Saturday", "Sunday");
echo "<ul class=\"weekdays\">";
for ($i = 0; $i < count($weekdays); $i++) {
    echo "<li>$weekdays[$i]</li>";
}
echo "</ul>";
echo "<ul class=\"days\">";
$dayweek = date("N", strtotime("first day of this month", $date));
$lastdayweek = date("N", strtotime("last day of this month", $date));
$prev = date("d", strtotime("last day of last month", strtotime("now")));
for ($i = $prev - $dayweek + 2; $i <= $prev; $i++) {
    echo "<li><span class='grey'>$i</li>";
}
for ($i = 1; $i < 32; $i++) {

    echo "<li>";
    if ($i == date("j", strtotime("now")) && $year == date("Y", strtotime("now")) && $month == date("m", strtotime("now"))) {
        echo "<span class='active'>";
    }
    echo "$i</li>";
}
for ($i = 1; $i <= 7 - $lastdayweek; $i++) {
    echo "<li><span class='grey'>$i</li>";
}
echo "</ul>";
?>


</ul>
</body>
</html>
