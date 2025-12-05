<?php
// link config
require_once "config.php";

$sql = "CREATE TABLE Hotel (
    HotelID INT PRIMARY KEY,
    HotelLocation varchar(255),
    HotelDescription varchar(500),
    HotelRating varchar(255),
    HotelImageFilePath varchar(255)
)";
// execute query
mysqli_query($conn, $sql);
?>