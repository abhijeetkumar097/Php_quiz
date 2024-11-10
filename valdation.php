<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php
        $arr = array(
            "name" => "John Doe",
            "age" => 25,
            "email" => "abhi@gmail.com",
        );
        $filters = array(
            "name" =>  FILTER_SANITIZE_STRING,
            "age" => array("filter" => FILTER_VALIDATE_INT, "options" => array("min_range")),
            "email" => FILTER_VALIDATE_EMAIL
        );
        print_r(filter_var_array($arr, $filters));

    ?>

<!-- if (!preg_match("/^[a-zA-Z-' ]*$/",$name)) {
      $nameErr = "Only letters and white space allowed";
    } -->
</body>
</html>