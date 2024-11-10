<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php
    // function add(int $a, int $b = 0) {
    //     echo $a + $b;
    // }

    // add(2);

    // function mul($a, $b) {
    //     echo "MUl of $a * $b = ";
    //     return $a * $b;
    // }

    // echo "5 * 4 = " . mul(5, 4);

    function mul(float $a, float $b) {
        return (int) ($a + $b);
    }

    echo mul(5.13, 4.93);
    ?>
    
</body>
</html>