<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<style>
    body {
            display: flex;
            flex-direction: column;
            justify-content: center;
            align-items: center;
            min-height: 100vh;
            margin: 0;
            font-family: Arial, sans-serif;
            background-color: black;
            color: white;
        }
</style>
<body>
<?php
include 'dbStudent2.php';
session_start();
$query2 = "SELECT * FROM students where regno = '".$_SESSION['regno']."'";

$result2 = mysqli_query($con, $query2);
if(mysqli_num_rows($result2) > 0) {
    echo "Student ". $_SESSION['regno'] ." has already given the test.";
    session_destroy();
    exit();
}
else {
    header('Location: dbDisplay3.php');
}
?>
</body>
</html>