<?php
// global constants
$host = "localhost";
$user = "root";
$password = "";
$database = "hotel_system";


// connect to hotel database & checking connection
$conn = mysqli_connect($host, $user, $password, $database);
if ($conn === false) die ("ERROR: Could not connect to database. " . mysqli_connect_error());


?>
