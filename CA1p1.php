<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php
    // echo "1st question<br><hr>";
    // $sections = array("section1" => array("Manoj", 7.8, "Pass"), "section2" => array("Aditya", 8.5, "Pass"), "section3" => array("Anuj", 4.9, "Fail"));
    
    // foreach($sections as $key => $value) {
    //     echo "$key<br>";
    //     //echo str_repeat("&nbsp;", 10). "$value[0]<br>";
    //     echo '<span style="padding-left:20px;"></span>'."$value[0]<br>";
    //     echo '<span style="padding-left:20px;"></span>'."$value[1]<br>";
    //     echo '<span style="padding-left:20px;"></span>'."$value[2]<br><br>";
    // }

    echo "<hr>2nd question<br><hr>";
    $courses = array("C++" => array("name" => "beginning with c++", "copies" => 8), "php" => array("name" => "basics of php", "copies" => 5));
    foreach($courses as $course => $detail) {
        echo "Course Name: $course<br>";
        echo "Course Description: $detail[name]<br>";
        echo "Copies Available: $detail[copies]<br><br>";
    }

    echo "<hr>3rd question<br><hr>";
    for($i = 1; $i < 6; $i++) {
        echo str_repeat('*&nbsp;', $i) . "<br>";
    }

    echo "<hr>4th question<br><hr>";
    // $numbers = array(4, 6, 2, 22, 11);
    // //rsort($numbers);
    // sort($numbers);
    // $arrlength = count($numbers);
    // for($x = 0; $x < $arrlength; $x++) {
    // echo $numbers[$x];
    // echo "<br>";
    // }
    // echo "<pre>";
    // print_r($numbers);
    // echo "</pre>";
    // echo "largest : " . $numbers[count($numbers)-1];

    echo "<hr>5th question<br><hr>";
    $a = [1, 3 ,4 , 5, 6, 7, 8, 9, 10, 11, 3, 3];
    $unique_numbers = array_unique($a);
    $arrlength = count($unique_numbers);
    for($x = 0; $x < $arrlength; $x++) {
    echo $unique_numbers[$x];
    echo "<br>";
    }

    echo "<hr>6th question<br><hr>";
// Define the number of rows
$rows = 5;

// Outer loop to handle the number of rows
for ($i = 1; $i <= $rows; $i++) {
    // Inner loop to print characters in each row
    for ($j = 1; $j <= $i; $j++) {
        // Convert $j to its corresponding ASCII character (starting from 'A')
        echo chr(64 + $j) . " ";
    }
    // Print a new line after each row
    echo "<br>";
}

    echo "<hr>7th question<br><hr>";
    for($i = 1; $i <= 5; $i++) {
        for($j = 1; $j <= $i; $j++) {
            echo $j . " ";
        }
        echo "<br>";
    }

    ?>


</body>
</html>