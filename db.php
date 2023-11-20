<?php
// Create a MySQLi connection
$con = mysqli_connect("localhost", "root", "", "hotel");

// Check if the connection was successful
if (mysqli_connect_errno()) {
    die("Failed to connect to MySQL: " . mysqli_connect_error());
}
?>
