<?php
/*
Author: Ruhamah Kairat
Date: 22 March 2026
Unit: IS312 Web Application Development
*/

$conn = new mysqli("localhost", "root", "", "FRU10");

if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

$code = $_POST['ProgramCode'];
$name = $_POST['ProgramName'];

$sql = "INSERT INTO Program (ProgramCode, ProgramName)
        VALUES ('$code', '$name')";

if ($conn->query($sql) === TRUE) {
    echo "New program added successfully!";
} else {
    echo "Error: " . $conn->error;
}

$conn->close();
?>
