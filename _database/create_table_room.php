<?php
// link config
require_once "config.php";

$sql = "CREATE TABLE Room (
   RoomID INT PRIMARY KEY,
   RoomPrice INT,
   RoomCapacity varchar(255),
   RoomDescription varchar(500),
   RoomImageFilePath varchar(255)
   -- HotelID INT,
   -- FOREIGN KEY (HotelID) REFERENCES Hotel(HotelID)
)";

// execute query
mysqli_query($conn, $sql);
?>