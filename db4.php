<?php
include "db.php";

$question = "Where are you from?";
$a = "India";
$b = "Belarus";
$c = "Canada";
$d = "Germany";
$ans = "India";

$id = 1;


$query = "INSERT INTO question VALUES ('$id', '$question', '$a', '$b', '$c', '$d', '$ans')";
 if(mysqli_query($conn, $query)) {
     echo "Question added successfully";
 }
 else {
     echo "Error: ". $query. "<br>". mysqli_error($conn);
 }

 mysqli_close($conn);
 ?>