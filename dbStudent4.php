<?php
require 'dbStudent2.php';
$query = "insert into students values ('12212850' , 3)";

if(mysqli_query($conn, $query)) {
    echo "New record created successfully";
} else {
    echo "Error: " . $query . "<br>" . mysqli_error($conn);
}