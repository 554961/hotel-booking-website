<?php
// WARNING: This file will produce an error because
// database "hotel" already exists.

// Creating a connection to xampp mysql & checking connection
$conn = mysqli_connect("localhost", "root", "");

if ($conn === false) die("ERROR: Could not connect.");

// Executing create query
$sql = "CREATE DATABASE hotel_system";

mysqli_query($conn, $sql);

?>