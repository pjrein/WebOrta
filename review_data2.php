<?php
// Start MySQL Verbinding
include('dbconnect.php');
?>

<html>
    <head>
        <title>Arduino Temperature Log</title>
        <style type="text/css">           
            body { font-family: "Trebuchet MS", Arial; }
        </style>
        <link rel="stylesheet" href="css/tabel-style.css">
    </head>

    <body>
        <!--<h1>Arduino Temperature Log</h1>-->
        <table class="fixed_headers">
            <thead>
                <tr>
                    <th>ID</th>
                    <th>Date and Time</th>
                    <th>tambor</th>
                    <th>buis</th>
                    <th>libra</th>
                    <th>ambient</th>
                </tr>
            </thead>
            <tbody>
                <?php
                // Retrieve all records and display them
//                $result = mysqli_query($dbh, "SELECT * FROM temperature ORDER BY id ASC");
                $result = mysqli_query($dbh, "SELECT * FROM temp2 ORDER BY id ASC");

                while ($row = mysqli_fetch_array($result)) {
                    echo '<tr>';
                    echo '   <td>' . $row["id"] . '</td>';
                    echo '   <td>' . $row["event"] . '</td>';
                    echo '   <td>' . $row["tambor"] . '</td>';
                    echo '   <td>' . $row["buis"] . '</td>';
                    echo '   <td>' . $row["libra"] . '</td>';
                    echo '   <td>' . $row["ambient"] . '</td>';   
                    echo '</tr>';
                }
                ?>
            </tbody>
        </table>
    </body>
</html>