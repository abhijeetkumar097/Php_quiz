<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <style>
        body {
            text-align: center;
            background-color: black;
            color: white;
        }
        button {
            width: 70%;
            font-size: 20px;
            border-radius: 10px;
            margin: 10px;
            cursor: pointer;
            background-color: #4CAF50;
            color: white;
            border: none;
            outline: none;
            transition: 0.3s;
        }

    </style>


</head>
<body>    

<?php
    require "db.php";
    session_start();

    if (!isset($_SESSION['count'])) {
        session_destroy();
        session_start();  // Restart the session
        $_SESSION['count'] = 0;  // Initialize only if not already set
    }

    if($_SERVER["REQUEST_METHOD"] == "POST") {
        if(isset($_POST['ans'])) {
            $check = intval($_SESSION['id'][$_SESSION['count']]);
            $c_query = "select answer from question where id = $check";
            $c_result = mysqli_fetch_assoc(mysqli_query($conn, $c_query));
            $_SESSION['count']++;
            if($_POST['ans'] == $c_result['answer']) {
                echo "Correct Answer!";
            } else {
                echo "Wrong Answer!";
            }
        }
    }
?>

<?php

$sql = "select * from question";
$result = mysqli_query($conn, $sql);
//mysqli_result Object ( [current_field] => 0 [field_count] => 7 [lengths] => [num_rows] => 4 [type] => 0 )

echo "<h1>Quiz App</h1>";
echo "<br/> <br/> <br/>";
echo "<i>Instructions: Click on the buttons to select the correct option, and click on the 'Submit' button to check your answers.</i>";
echo "<br/> <br/> <br/>";

$_SESSION['id'] = array();
if(mysqli_num_rows($result) > 0) {
    while($row = mysqli_fetch_assoc($result)) {
        array_push($_SESSION['id'], $row['id']);
}}

echo $_SESSION['id'][0] . "<br/> <br/> <br/>";

$insert = intval($_SESSION['id'][$_SESSION['count']]);
$query = "select * from question where id = $insert";
$result_1 = mysqli_query($conn, $query);
if(mysqli_num_rows($result_1) > 0 && count($_SESSION['id']) >= $_SESSION['count']) {
$row_1 = mysqli_fetch_assoc(mysqli_query($conn, $query));

echo "<form method='post' action=''>
    <p>" . $_SESSION['count'] + 1 . ". " . $row_1['ques'] . "</p>
    <label for='1'>" . $row_1['option_a'] . "</label>
    <input id='1' type='radio' name='ans' value='" . $row_1["option_a"] . "'><br/>
    
    <label for='2'>" . $row_1['option_b'] . "</label>
    <input id='2' type='radio' name='ans' value='" . $row_1["option_b"] . "'><br/>
    
    <label for='3'>" . $row_1['option_c'] . "</label>
    <input id='3' type='radio' name='ans' value='" . $row_1["option_c"] . "'><br/>
    
    <label for='4'>" . $row_1['option_d'] . "</label>
    <input id='4' type='radio' name='ans' value='" . $row_1["option_d"] . "'><br/>
    
    <button type='submit'>Submit</button>
</form>";
}
else {
    if(mysqli_num_rows($result) == 0) 
    echo "Please add Questions!";

    else if($_SESSION['count'] > count($_SESSION['id'])) {
        echo "Quiz completed!";
        echo "<br>";
        echo "Your score is: ". (100 - (count($_SESSION['id']) - $_SESSION['count']) * 10);
    }

    else {
        echo 'something went wrong';
    }

    session_destroy();
}
print_r($_SESSION);
echo count($_SESSION['id']);
echo "<br>";
// $check = intval($_SESSION['id'][$_SESSION['count']]);
//             $c_query = "select answer from question where id = $check";
//             $c_result = mysqli_fetch_assoc(mysqli_query($conn, $c_query));
//             echo $c_result['answer'] . "<br>";
            //print_r($c_result);
mysqli_close($conn);

?>



</body>
</html>