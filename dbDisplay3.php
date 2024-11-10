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
        .form-container {
            background-color: #fff;
            padding: 20px 30px;
            border-radius: 8px;
            box-shadow: 0px 4px 10px rgba(0, 0, 0, 0.1);
            width: 70%;
            text-align: left;
            color: black;
            font-size: 20px;
        }
        button {
            width: 80px;
            font-size: 15px;
            border: 2px solid green;
            border-radius: 10px;
            margin: 5px;
            padding: 5px;
            cursor: pointer;
            background-color: #4CAF50;
            color: white;
            border: none;
        }
        button:hover {
            background-color: lightgreen;
            transition: 0.3px;
            font-size: 15px;
        }
    </style>
<body>
<?php
require "db.php";
session_start();


print_r($_SESSION['username']);
if (!isset($_SESSION['count'])) {
    $_SESSION['count'] = 0; 
    $_SESSION['correct'] = 0;
}

// Check if question IDs are already loaded in session
if (!isset($_SESSION['id'])) {
    $_SESSION['id'] = [];
    $sql = "SELECT id FROM question";
    $result = mysqli_query($conn, $sql);

    if (mysqli_num_rows($result) > 0) {
        while ($row = mysqli_fetch_assoc($result)) {
            $_SESSION['id'][] = $row['id'];
        }
        shuffle($_SESSION['id']); 
    } else {
        echo "No questions available!";
        session_destroy();  // Destroy session if no questions are available
        mysqli_close($conn);  // Close the database connection
        exit();  // Exit to ensure the rest of the code doesn’t run
    }
}

// Process form submission
if ($_SERVER["REQUEST_METHOD"] == "POST" && isset($_POST['ans'])) {
    $check = intval($_SESSION['id'][$_SESSION['count']]);
    $c_query = "SELECT answer FROM question WHERE id = $check";
    $c_result = mysqli_fetch_assoc(mysqli_query($conn, $c_query));

    if ($_POST['ans'] == $c_result['answer']) {
        //echo "Correct Answer!";
        $_SESSION['correct']++;
    } else {
        //echo "Wrong Answer!";
    }

    $_SESSION['count']++; 
}

// Display quiz question
if ($_SESSION['count'] < count($_SESSION['id'])) {
    $questionId = $_SESSION['id'][$_SESSION['count']];
    $query = "SELECT * FROM question WHERE id = $questionId";
    $result = mysqli_query($conn, $query);

    if (mysqli_num_rows($result) > 0) {
        $row = mysqli_fetch_assoc($result);

        echo "<div class='form-container'>
        <form method='post' action=''>
            <p>" . ($_SESSION['count'] + 1) . ". " . $row['ques'] . "</p>
            <label><input type='radio' name='ans' value='" . $row["option_a"] . "'> " . $row["option_a"] . "</label><br/>
            <label><input type='radio' name='ans' value='" . $row["option_b"] . "'> " . $row["option_b"] . "</label><br/>
            <label><input type='radio' name='ans' value='" . $row["option_c"] . "'> " . $row["option_c"] . "</label><br/>
            <label><input type='radio' name='ans' value='" . $row["option_d"] . "'> " . $row["option_d"] . "</label><br/><br/>
            <button type='submit'>Submit</button>
        </form>
        </div>";
    }
} else {
    echo "<h2>Quiz completed!</h2>";
    echo "<p>Your score: ". $_SESSION['correct'] . "/" . count($_SESSION['id']) . "</p>";
    
    require 'dbStudent2.php';
    
    // $query2 = "SELECT * FROM students where id = '". $_SESSION['username'] ."'";
    // $result2 = mysqli_query($con, $query2);
    // if(mysqli_num_rows($result2) > 0) {
    //     echo "Student ". $_SESSION['username'] ." have already given the test.";
    // }
    // else {
    $sql = "INSERT INTO students VALUES ('". $_SESSION['regno']. "', '". $_SESSION['username']."', '". $_SESSION['correct']. '/'. count($_SESSION['id']) . "')";
    if(mysqli_query($con, $sql)) {
        echo "Score saved successfully";
    }
    else {
            echo "problem in adding your score";
        echo mysqli_error($con);
    }
    //}
    
    mysqli_close($con);
    session_destroy();
}


mysqli_close($conn);
?>

</body>
</html>