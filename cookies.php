<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php
        echo "welcome to the world of cookies";
        echo time();
        setcookie("username ", "John Doe ", time() + (86400), "/"); // 86400 = 1 day
    ?>
</body>
</html>

