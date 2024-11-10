<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Delete Page</title>
    <style>
        body {
            text-align: center;
            background-color: black;
            color: white;
            display: flex;
            font-family: Arial, sans-serif;
            /* Set body to flex to arrange items in a row */
        }

form {
    margin-left: 15%; /* Add left margin to avoid overlap with navigation */
    width: 85%; /* Adjust width to fit the layout */
    background-color: #ffffff;
    padding: 30px;
    border-radius: 8px;
    box-shadow: 0px 4px 10px rgba(0, 0, 0, 0.1);
    width: 70%;
    margin-top: 50px;
}

form label {
    font-size: 14px;
    font-weight: bold;
    margin-top: 10px;
    display: block;
    color: #333333;
    text-align: left;
}

form input[type="text"] {
    width: 98%;
    padding: 8px;
    margin-top: 5px;
    margin-bottom: 15px;
    border: 1px solid #ccc;
    border-radius: 4px;
    font-size: 14px;
}

form button {
    width: 100%;
    padding: 10px;
    background-color: skyblue;
    color: white;
    font-size: 16px;
    border: none;
    border-radius: 4px;
    cursor: pointer;
    transition: background-color 0.3s;
}

a button {
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

form button:hover {
    background-color: #1e90ff;
}

a button:hover {
    background-color: #4CAF50;
    transition: 0.3s;
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


    </style>
</head>
<body>

    <div class='navi'>
        <a href="dbView.php"><button>View</button></a>
        <a href="projectQueAdd.php"><button style='background-color:skyblue;'>Add</button></a>
        <a href="dbDisplay2.php"><button>Delete</button></a>
    </div>

    <form action="proback.php" method='post'>
        <label for="ques">Question</label>
        <input type="text" id='ques' name="ques"><br/>
        <label for="opt1">Option 1</label>
        <input type="text" name="a" id="opt1"><br/>
        <label for="opt2">Option 2</label>
        <input type="text" name="b" id="opt2"><br/>
        <label for="opt3">Option 3</label>
        <input type="text" name="c" id="opt3"><br/>
        <label for="opt4">Option 4</label>
        <input type="text" name="d" id="opt4"><br/>
        <label for="answer">Answer</label>
        <input type="text" name="ans" id="answer"><br/><br/>
        <button type='submit'>submit</button>
    </form>
</body>
</html>