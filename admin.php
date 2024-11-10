<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <style>
        body {
            display: flex;
            justify-content: center;
            min-height:100vh;
            background-color: black;
            color: white;
            align-items: center;
            margin: 0;
            flex-direction: column;
            gap: 10px;
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
    </style>
</head>
<body>
    <?php
    require "dbAdmin.php";
    $query = "SELECT * FROM INFO WHERE id = '". $_POST['username']."'";
    $result = mysqli_query($conn, $query);
    if(mysqli_num_rows($result) > 0) {
        $row = mysqli_fetch_assoc($result);
        if($row['PASSWORD'] == $_POST['password']) {
            header("Location: projectQueAdd.php");
        }
        else {
            echo "Invalid username or password";
        } 
    }
    else {
        echo "User not found!";
        echo "<form action='demo5.php'>
        <button type='sumbit'>Home</button>
        </form>";
    }

    mysqli_close($conn);
    ?>
</body>
</html>