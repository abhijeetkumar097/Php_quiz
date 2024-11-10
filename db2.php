<?php
$servername = "localhost";
$username = "root";
$password = "";
$conn = "";

try {
    $conn = mysqli_connect($servername, $username, $password);
}
catch (mysqli_sql_exception $e) {
    echo "Connection failed: ". $e->getMessage();
}

$sql = "CREATE DATABASE demo2";
if(mysqli_query($conn, $sql)) {
    echo "Database created successfully";
    mysqli_close($conn);
}
else {
    echo "Error creating database: ". mysqli_error($conn);
}