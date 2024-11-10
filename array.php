<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php
    
    // $sub = array("php", "html", "webTech");
    // echo "<pre>";
    // print_r($sub);
    // echo"</pre>"

    // $subject= array(40, 34, 90, 80, 70);
    // for($x = 0; $x <= 4; $x++) {
    //     echo $subject."<br>";
    // } 

    $subject = array("Php", "laravel", "php", "html", "webTech");
    // echo "I like ". $subject[0]." , ".  $subject[1]." , ". $subject[2]." , ". $subject[3];
    // echo "<br>";
    // echo count($subject);

    $length = count($subject);

    $courses = array("Int220" => "PHP", "Int221" => "Laravel", "Int222" => "Node");

    $university = array(
        array("A", "Lpu", "45"),
        array("B", "MMS", "40"),
        array("C", "IIT", "70"),
    );

    //print_r($university);
    // echo (is_array($subject));

    for($x = 0; $x < count($university); $x++) {
        for($i = 0; $i < count($university[0]); $i++) {
            print_r ($university[$x][$i] . " ");
            echo "<br>";
        }
    }

    $sub = ["php", "laravel", "php", "html", "webTech"];
    $a = [1, 3 ,4 , 5, 6, 7, 8, 9, 10, 11, 3, 3];
    // unset($sub[2]);
    // array_push($sub, "sunil");
    // print_r($sub);
    // echo "<br>";
    // array_pop($sub);
    // print_r($sub);
    // echo "<br>";
    // print_r(array_keys($courses));
    // echo "<br>";
    // echo implode($sub);
    // $str = "Hello how are you";
    // echo "<br>";
    // echo $str;
    // echo "<br>";
    // print_r(explode($str, " "));
    // echo "<br>";
    // print_r(explode(" ", $str));
    // echo "<br>";
    // print_r(explode("o", $str));
    // echo "<br>";
    print_r(array_unique($sub));
    echo "<br>";
    print_r(array_merge($sub, $a));
    print_r(array_unique($a));
    ?>
</body>
</html>