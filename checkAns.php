<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login Page</title>
    <style>
        body {
            display: flex;
            justify-content: center;
            align-items: center;
            min-height: 100vh;
            margin: 0;
            font-family: Arial, sans-serif;
            background-image: url('yourname2.png');
            background-attachment: fixed;
            background-size: cover;
        }
        .form-container {
            background-color: #fff;
            padding: 20px 30px;
            border-radius: 8px;
            box-shadow: 0px 4px 10px rgba(0, 0, 0, 0.1);
            width: 300px;
            text-align: center;
        }
        .form-container h2 {
            margin-bottom: 15px;
            color: #333;
        }
        .form-container input[type="text"] {
            width: 90%;
            padding: 10px;
            margin-top: 10px;
            border: 1px solid #ccc;
            border-radius: 5px;
            font-size: 16px;
        }
        .form-container input[type="submit"] {
            background-color: #4CAF50;
            color: #fff;
            cursor: pointer;
            transition: background-color 0.3s;
        }
        .form-container input[type="submit"]:hover {
            background-color: #45a049;
        }

        button {
            width: 98%;
            margin-top: 15px;
            padding: 8px;
            border-radius: 5px;
            border: none;
            background-color: skyblue;
        }
    </style>
</head>
<body>
    <?php
    session_start();
    if ($_SERVER['REQUEST_METHOD'] == 'POST') {
        $username = htmlspecialchars($_POST['username']);
        $_SESSION['username'] = $username;
        header('Location: dbDisplay3.php');
        exit();
    }
    ?>

    <div class="form-container">
        <h2>Enter Your Username</h2>
        <form action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]); ?>" method="post">
            <input type="text" name="username" placeholder="Username" required>
            <button type='submit'>Submit</button>
        </form>
    </div>
</body>
</html>
