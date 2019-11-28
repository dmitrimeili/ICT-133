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
date_default_timezone_set("europe/zurich");
echo "1)".date("D d F Y")."<br>";
echo "2)".date("M jS Y")."<br>";
echo "3)".date("d/m/y  G:i a")."<br>";
echo "4)".date("d M o, G:i:s")."<br>";
echo "5)".date("D d M o, G:i:s O")."<br><br>";

$date=strtotime("   12 March 2027 10:10:10");
echo "1)".date("D d F Y",$date)."<br>";
echo "2)".date("M jS Y", $date)."<br>";
echo "3)".date("d/m/y  G:i a",$date)."<br>";
echo "4)".date("d M o, G:i:s",$date)."<br>";
echo "5)".date("D d M o, G:i:s O",$date)."<br>";




?>
