<?php
// link config
require_once "config.php";

$sql = "CREATE TABLE Customer (
    CustomerID INT PRIMARY KEY,
    CustomerEmail varchar(255),
    CustomerPassword varchar(255),
    CustomerPhoneNo varchar(255),
    CustomerAddress varchar(255)
    -- BookingID INT,
    -- FOREIGN KEY (BookingID) REFERENCES Booking(BookingID)
)";
// execute query
mysqli_query($conn, $sql);
?>