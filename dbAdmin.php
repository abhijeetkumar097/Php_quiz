<?php
$servername = 'localhost';
$username = 'root';
$password = '';
$dbname = 'demoAdmin';
$conn = "";
try {
    $conn = mysqli_connect($servername, $username, $password, $dbname);
}catch(mysqli_sql_exception $e) {
    echo "Connection failed: ". $e->getMessage();
}

if(!$conn) {
    echo "Connection failed";
}

// $query = 'CREATE DATABASE demoAdmin';

// if (mysqli_query($conn, $query)) {
//     echo "Database created successfully";
// } else {
//     echo "Error creating database: " . mysql_error();
// }

//CREATE TABLE INFO ( ID VARCHAR(50) PRIMARY KEY, PASSWORD VARCHAR(50) NOT NULL);
//INSER INTO INFO VALUES ( "aabhijeet097@gmail.com", "abhijeet');
?>