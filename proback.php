<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <style>
        body {
            background-color: black;
            color: white;
            font-family: Arial, sans-serif;
        }
    </style>
</head>
<body>
<?php
include "db.php";

if($_SERVER['REQUEST_METHOD'] == 'POST') {
    $question = $_POST['ques'];
    $a = $_POST['a'];
    $b = $_POST['b'];
    $c = $_POST['c'];
    $d = $_POST['d'];
    $ans = $_POST['ans'];
}

$id = 2;

$query = "INSERT INTO question (ques, option_a, option_b, option_c, option_d, answer)
 VALUES ('$question', '$a', '$b', '$c', '$d', '$ans')";
 if(mysqli_query($conn, $query)) {
    echo "Question added successfully";
    // sleep(5);
    // header("Location: project.php");
    // exit();

    echo "<script>
            setTimeout(() => {
                window.location.href = 'projectQueAdd.php';
            }, 1000);
          </script>";
 }
 else {
     echo "Error: ". $query. "<br>". mysqli_error($conn);
 }

 mysqli_close($conn);
 ?>
</body>
</html>