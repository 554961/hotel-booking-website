<?php
// link config
require_once "config.php";

$sql = "CREATE TABLE Staff (
    StaffID INT PRIMARY KEY,
    StaffEmail varchar(255),
    StaffPassword varchar(255),
    StaffName varchar(255)
)";

// execute query
mysqli_query($conn, $sql);
?>