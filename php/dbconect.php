<?php
$servername = "mysql.hostinger.com.ua";
$username = "u453903246_nevid";
$password = "zoer66469";
$mydb="u453903246_nevid";
// Create connection
$conn = new mysqli($servername, $username, $password,$mydb);

// Check connection
if ($conn->connect_error) {
    echo("Connection failed: " . $conn->connect_error);
} ?>
