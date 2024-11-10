<?php
require "dbStudent2.php";

$query = "create table students (
    id VARCHAR(20) PRIMARY KEY,
    grade INT)";

if (mysqli_query($con, $query)) {
    echo "Table students created successfully";
} else {
    echo "Error creating table: " . mysqli_error($con);
}