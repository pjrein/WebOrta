<?php

// Connect to MySQL
include("dbconnect.php");

if(isset($_GET["tambor"])){
$tambor = $_GET["tambor"];
//print "<pre>";
//var_dump($tambor);
//print "<pre>";
}

if(isset($_GET["buis"])){
$buis = $_GET["buis"];
//print "<pre>";
//var_dump($buis);
//print "<pre>";
}

if(isset($_GET["libra"])){
$libra = $_GET["libra"];
//print "<pre>";
//var_dump($libra);
//print "<pre>";
}

if(isset($_GET["ambient"])){
$ambient = $_GET["ambient"];
//print "<pre>";
//var_dump($ambient);
//print "<pre>";
}

$SQL = "INSERT INTO orta1.temp2 (tambor, buis, libra, ambient) VALUES ('".$tambor."', '".$buis."' , '".$libra."' , '".$ambient."'  )";//, '".."'

mysqli_query($dbh, $SQL);

// Go to the review_data.php (optional)
header("Location: review_data2.php");

