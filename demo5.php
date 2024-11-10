<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Student/Admin Form</title>
    <style>
        body {
            display: flex;
            justify-content: center;
            align-items: center;
            min-height: 100vh;
            margin: 0;
            font-family: Arial, sans-serif;
            background-color: black;
        }

        .form-container {
            background-color: darkgrey;
            /* border: 1px solid white; */
            padding: 30px;
            width: 350px;
            border-radius: 8px;
            box-shadow: 0px 4px 10px rgba(0, 0, 0, 0.1);
            text-align: center;
        }

        .form-container h2 {
            margin-bottom: 20px;
            color: #333;
        }

        .tab-buttons {
            display: flex;
            justify-content: center;
            gap: 10px;
            margin-bottom: 20px;
        }

        .tab-button {
            flex: 1;
            padding: 10px;
            font-size: 16px;
            cursor: pointer;
            background-color: #f0f2f5;
            border: none;
            border-radius: 20px;
            transition: background-color 0.3s;
        }

        .tab-button.active {
            background-color: #4CAF50;
            color: white;
        }

        .form-container input[type="text"],
        .form-container input[type="password"] {
            width: 90%;
            padding: 10px;
            margin-top: 10px;
            border: 1px solid #ccc;
            border-radius: 5px;
            font-size: 16px;
            outline: none;
        }

        .form-container button {
            width: 100%;
            padding: 10px;
            margin-top: 15px;
            border: none;
            border-radius: 5px;
            background-color: grey;
            color: white;
            font-size: 16px;
            cursor: pointer;
            transition: background-color 0.3s;
        }

        .form-container button:hover {
            background-color: green;
        }

        .form-container a {
            display: block;
            margin-top: 15px;
            color: #007bff;
            text-decoration: none;
        }

        .form-content {
            display: none;
        }

        .form-content.active {
            display: block;
        }
    </style>
</head>
<body>
    
    <?php
        session_start();
        if ($_SERVER['REQUEST_METHOD'] == 'POST') {
            $username = htmlspecialchars($_POST['username']);
            $_SESSION['username'] = $username;
            $_SESSION['regno'] = htmlspecialchars($_POST['regno']);
            header('Location: demo6.php');
            exit();
        }
    ?>

    <div class="form-container">
        <h2 id="form-title">Quiz App</h2>
        
        <div class="tab-buttons">
            <button class="tab-button active" onclick="showForm('student')">Student</button>
            <button class="tab-button" onclick="showForm('admin')">Admin</button>
        </div>

        <!-- Student Form -->
        <div class="form-content active" id="student">
            <form action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]); ?>" method="post">
                <input type="text" name="regno" placeholder="Registration Number" required>
                <input type="text" name="username" placeholder="Name" required>
                <button type="submit" style="background-color: #4CAF50">Submit</button>
            </form>
        </div>

        <!-- Admin Form -->
        <div class="form-content" id="admin">
            <form action="admin.php" method="post">
                <input type="text" name="username" placeholder="Username" required>
                <input type="password" name="password" placeholder="Password" required>
                <button type="submit" style="background-color: #4CAF50">Login</button>
            </form>
        </div>
    </div>

    <script>
        function showForm(formType) {
            // Toggle form visibility
            document.getElementById('student').classList.remove('active');
            document.getElementById('admin').classList.remove('active');
            document.getElementById(formType).classList.add('active');
            
            // Toggle tab button active state
            const tabButtons = document.querySelectorAll('.tab-button');
            tabButtons.forEach(button => button.classList.remove('active'));
            document.querySelector(`.tab-button[onclick="showForm('${formType}')"]`).classList.add('active');
            
            // Update form title
            document.getElementById('form-title').textContent = formType === 'student' ? 'Student Form' : 'Admin Form';
        }
    </script>

</body>
</html>
