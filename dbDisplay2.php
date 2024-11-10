<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <style>
        /* Base styling */
        body {
            background-color: black;
            color: white;
            font-family: Arial, sans-serif;
            margin: 0;
            padding: 0;
            display: flex;
            align-items: flex-start;
            min-height: 100vh;
        }

        /* Wrapper to organize navigation and content side by side */
        .container {
            display: flex;
            width: 100%;
            max-width: 1200px;
            padding-top: 60px; /* To prevent overlapping with fixed navigation */
            margin-left: 120px; /* Add space for fixed navigation */
            justify-content: center;
        }

        /* Navigation styling */
        .navi {
            display: flex;
            flex-direction: column; /* Keep buttons stacked */
            border: 1px solid white;
            width: 10%; /* Adjust width for navigation */
            height: 120px;
            margin: 10px;
            border-radius: 10px;
            position: fixed; /* Keeps it fixed on the left */
            text-align: center;
            top: 10px; /* Add some spacing from the top */
        }

        .navi a {
            
            text-decoration: none;
        }

        .navi button {
            width: 90%;
            border-radius: 5px;
            padding: 6px;
            cursor: pointer;
            background-color: #555;
            color: white;
            border: none;
            outline: none;
            transition: 0.3s;
            margin: 5px 0;
            overflow: hidden;
            white-space: nowrap;
            text-overflow: ellipsis;
        }

        /* Highlighting the active button */
        .navi button.active {
            background-color: #4CAF50;
        }

        .navi button:hover {
            background-color: #777;
        }

        /* Content area */
        .form-container {
            padding: 20px;
            width: 70%;
            margin-top: 20px;
        }

        /* Question styling */
        label {
            display: block;
            margin: 15px 0;
            padding: 15px;
            border: 1px solid white;
            border-radius: 10px;
            background-color: #222;
            cursor: pointer;
        }

        input[type="checkbox"] {
            margin-right: 10px;
            transform: scale(1.2);
        }

        .question-text {
            font-weight: bold;
            font-size: 18px;
            color: #FFD700;
        }

        .option-text {
            padding-left: 20px;
            font-size: 15px;
            color: #ccc;
        }

        .answer-text {
            color: #1a73e8;
            font-weight: bold;
            margin-top: 10px;
        }

        /* Confirm button styling */
        #confirm {
            background-color: #007BFF;
            padding: 10px 20px;
            font-size: 16px;
            margin-top: 20px;
            border-radius: 5px;
            border: none;
            cursor: pointer;
            color: white;
            width: 100%;
        }
    </style>
</head>
<body>

<div class="navi">
    <a href="dbView.php"><button title="View Questions">View</button></a>
    <a href="projectQueAdd.php"><button title="Add a New Question">Add</button></a>
    <a href="dbDisplay2.php"><button class="active" title="Delete Questions">Delete</button></a>
</div>

<div class="container">
    <div class="form-container">
        <?php
        require "db.php";

        // Handle deletion request
        if ($_SERVER['REQUEST_METHOD'] === 'POST') {
            foreach ($_POST as $key => $val) {
                $delete_id = intval($key); // Sanitize input
                $sql_delete = "DELETE FROM question WHERE id = $delete_id";
                if (mysqli_query($conn, $sql_delete)) {
                    echo "<p>Record with ID $delete_id deleted successfully.</p>";
                } else {
                    echo "<p>Error deleting record: " . mysqli_error($conn) . "</p>";
                }
            }
        }

        // Fetch questions from the database
        $sql = "SELECT * FROM question";
        $result = mysqli_query($conn, $sql);
        if (mysqli_num_rows($result) > 0) {
            echo "<form method='POST' action=''>";
            while ($row = mysqli_fetch_assoc($result)) {
                echo "<input id='".$row['id']."' type='checkbox' name='".$row['id']."' value='" . $row['id'] . "'>";
                echo "<label for='". $row['id'] ."'>".
                "<div class='question-text'>" . $row["id"] . ". " . $row["ques"] . "</div>" . 
                "<div class='option-text'>Option A: " . $row["option_a"] . "</div>" . 
                "<div class='option-text'>Option B: " . $row["option_b"] . "</div>" .
                "<div class='option-text'>Option C: " . $row["option_c"] . "</div>" .
                "<div class='option-text'>Option D: " . $row["option_d"] . "</div>" .
                "<div class='answer-text'>Answer: " . $row["answer"] . "</div>" . 
                "</label>";
            }
            echo "<button id='confirm' type='submit'>Confirm</button>";
            echo "</form>";
        } else {
            echo "<p>Add questions to view here.</p>";
        }

        mysqli_close($conn);
        ?>
    </div>
</div>

</body>
</html>
