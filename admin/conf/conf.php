<?php

// Create connection
$con = mysqli_connect("localhost", "user", "pass", "database");// za kirilica od baza
mysqli_query($con, "SET NAMES UTF8");
// Check connection
if (mysqli_connect_errno($con)) {
    echo "Failed to connect to MySQLI: " . mysqli_connect_error();
}
?>
