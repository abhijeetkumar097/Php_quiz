<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php
        echo "1 question<br><hr>";
        function printFebonacci($n) {
            echo "0 ";
            $a = 0;
            $b = 1;
            if($n == 2) {
                echo $a;
            }
            if($n == 3) {
                echo "$a $b";
            }
            if($n > 3) {
                echo "$a $b ";
                for($i = 3; $i < $n; $i++) {
                    $ans = $a + $b;
                    echo "$ans ";
                    $a = $b;
                    $b = $ans;
                }
        }}

        printFebonacci(11);

        echo "<br><br> 2 question<br><hr>";

        $result = array(
            array("Manoj", 7.8, "pass"),
            array("Aditya", 8.5, "pass"),
            array("Anuj", 4.9, "fail")
        );

        foreach($result as $res) {
            echo "$res[0]".str_repeat("-", 4)."CGPA is: $res[1]". " and his status is $res[2]<br>";
        }
    ?>
</body>
</html>