<?php
$servername = "localhost";
$username = "root";
$password = "";
$database = "demoStudent";
$con = "";

try {
    $con = mysqli_connect($servername, $username, $password, $database);
}
catch(mysqli_sql_exception) {
    echo "Could not connect to server";
}

if (!$con) {
    echo "could not Connect successfully" . "<br/>";
}

