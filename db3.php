<?php
$servername = "localhost";
$username = "root";
$password = ""; 
$dbname = "demo";
$conn = "";

try {
    $conn = mysqli_connect($servername, $username, $password, $dbname);
}
catch(mysqli_sql_exception) {
    echo "could not connect to server";
}

$sql = "CREATE TABLE question (
    id INT AUTO_INCREMENT PRIMARY KEY,
    ques TEXT NOT NULL,
    option_a VARCHAR(255) NOT NULL,
    option_b VARCHAR(255) NOT NULL,
    option_c VARCHAR(255) NOT NULL,
    option_d VARCHAR(255) NOT NULL,
    answer VARCHAR(255) NOT NULL)";

if(mysqli_query($conn, $sql)) {
    echo "table created successfully";
}
?>
