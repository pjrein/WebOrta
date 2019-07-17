<?php

// Connect to MySQL
include("dbconnect.php");

$counter=1;

while (isset( $_GET["serial".$counter])) {
// Prepare the SQL statement
                     
    $SQL = "INSERT INTO orta1.temperature (sensor ,celsius) VALUES ('" . $_GET["serial".$counter] . "', '" . $_GET["temperature".$counter] . "')";

    // Execute SQL statement
    mysqli_query($dbh, $SQL);
    $counter++;
}
// Go to the review_data.php (optional)
header("Location: review_data2.php");

