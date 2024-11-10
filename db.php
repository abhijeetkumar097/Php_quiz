<?php
$servername = "localhost";
$username = "root";
$password = ""; 
$dbname = "demo2";
$conn = "";

try {
    $conn = mysqli_connect($servername, $username, $password, $dbname);
}
catch(mysqli_sql_exception) {
    echo "could not connect to server";
}

if (!$conn) {
    echo "Error in connecting to DB" . "<br/>";
    // mysqli_close($conn);
}
?>
