<?php
    // Connect to MySQL
    include("dbconnect.php");

    // Prepare the SQL statement
    $SQL = "INSERT INTO orta1.temperature (sensor ,celsius) VALUES ('".$_GET["serial"]."', '".$_GET["temperature"]."')";     

    // Execute SQL statement
    mysql_query($SQL);

    // Go to the review_data.php (optional)
   header("Location: review_data2.php");
//vanuit mili-11 toegevoegd
