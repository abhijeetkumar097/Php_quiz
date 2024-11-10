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
            display: flex;
            font-family: Arial, sans-serif;
            /* Set body to flex to arrange items in a row */
        }
        
        .item {
            padding: 10px;
            border: 1px solid #ddd;
            border-radius: 5px;
            margin-bottom: 10px;
            /* display: flex;
            align-items: center; */
            display: inline-block;
            margin-left: 10px;
            margin-right: 10px;
        }

        /* Checkbox styling */
        .item input[type="checkbox"] {
            width: 18px;
            height: 18px;
            cursor: pointer;
            margin-right: 10px;
        }

        /* Additional styling for checked state */
        .item input[type="checkbox"]:checked {
            accent-color: #4CAF50; /* Changes the checkbox color when checked */
        }

        .navi {
            display: flex;
            flex-direction: column; /* Keep buttons stacked */
            border: 1px solid white;
            width: 10%; /* Adjust width for navigation */
            height: 120px;
            margin: 10px;
            border-radius: 10px;
            position: fixed; /* Keeps it fixed on the left */
            left: 0; /* Aligns it to the left */
            top: 10px; /* Add some spacing from the top */
        }

        button {
        border-radius: 5px;
        padding: 6px;
        background-color: #555; /* Add a background color to buttons */
        color: white; /* Button text color */
        border: none; /* Remove border */
        margin: 5px 0; /* Space between buttons */
        cursor: pointer; /* Change cursor on hover */
        width: 90%; /* Make buttons fill the width of their container */
        text-overflow: ellipsis; /* Add ellipsis for overflow text */
        white-space: nowrap; /* Prevent text from wrapping */
        overflow: hidden; /* Hide overflow text */
        }
        
        button:hover {
            background-color: #777; /* Change color on hover */
        }
        
        .content {
            margin-left: 15%; /* Add left margin to avoid overlap with navigation */
            width: 85%; /* Adjust width to fit the layout */
            /* display: inline-block; */
            /* flex-direction: column; 
            align-items: center;  */
        }

        #confirm {
            background-color: #4CAF50;
            color: white;
            border: none;
            margin-top: 20px;
            cursor: pointer;
            width: 50%;
            text-align: center;
            text-decoration: none;
            font-size: 16px;
            border-radius: 5px;
            padding: 12px 20px;
        }
    </style>
</head>
<body>

<div class='navi'>
    <a href="dbView.php"><button style='background-color:#4CAF50;' title="View Questions">View</button></a>
    <a href="projectQueAdd.php"><button title="Add a New Question">Add</button></a>
    <a href="dbDisplay2.php"><button title="Delete Selected Question">Delete</button></a>
</div>

<div class="content">
    <?php
    require "dbStudent2.php";
    
    if($_SERVER['REQUEST_METHOD'] == 'POST') {
        foreach ($_POST as $regno => $value) {
            $sql = "DELETE FROM students WHERE regno='$regno'";
            if (mysqli_query($con, $sql)) {
                echo "Record deleted successfully";
            } else {
                echo "Error deleting record: ". mysqli_error($con);
            }
        }
    }
    // Fetch questions from the database
    $sql = "SELECT * FROM students";
    $result = mysqli_query($con, $sql);
    echo "<br/><br/><br/>";
    if (mysqli_num_rows($result) > 0) {
        echo "<form action='' method='post'>";
        while ($row = mysqli_fetch_assoc($result)) {
            echo "<div class='item'>";
            echo "<input type='checkbox' id='".$row['regno']."' name='".$row['regno']."' value='".$row['regno']."'/>";
            echo "<label for='".$row['regno']."'>";
            echo "</h3>" .$row["regno"] . ". " . $row["name"] . "</h3>" . "<br>" . " Scored: " . $row["score"] . "</label></div>";
        }
        echo "<div><button id='confirm' type='submit'>Confirm Deletion</button></div>";
        echo "</form>";
    } else {
        echo "0 results";
    }

    mysqli_close($con);
    ?>
</div>

</body>
</html>
