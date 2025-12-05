<?php
// link config
require_once "config.php";

$sql = "CREATE TABLE Booking (
    BookingID INT PRIMARY KEY,
    BookingDate DATE
    -- CustomerID INT,
    -- HotelID INT,
    -- RoomID INT,
    -- FOREIGN KEY (CustomerID) REFERENCES Customer(CustomerID),
    -- FOREIGN KEY (HotelID) REFERENCES Hotel(HotelID),
    -- FOREIGN KEY (RoomID) REFERENCES Room(RoomID)
)";
// execute query
mysqli_query($conn, $sql);
?>