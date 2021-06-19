<?php
include "connect.php";

//create database
$sql = "CREATE DATABASE IF NOT EXISTS db_mahasiswa";
if ($conn->query($sql) === true) {
    echo "database created successfully";
}else {
    echo "error creating database: " . $conn->error;
}

$conn->close();
?>