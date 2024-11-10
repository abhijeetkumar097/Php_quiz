<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
     <?php
        // $age=array("P"=>"35","B"=>"37","J"=>"43","H"=>"50");
        // print_r(array_chunk($age,2,true));

    
        // $a=array("A","Dog", "Cat","Dog","A","Dog");
        // print_r(array_count_values($a));
    

        // $a1=array("a"=>"red","b"=>"green","c"=>"blue","d"=>"yellow");
        // $a2=array("e"=>"red","f"=>"green","g"=>"blue");

        // $result=array_diff($a1,$a2);
        // print_r($result);

        // $a1=array("a"=>"red","b"=>"green","c"=>"blue","d"=>"yellow");
        // $result=array_flip($a1);
        // print_r($result);

        // $a1=array("a"=>"red","b"=>"green","c"=>"blue","d"=>"yellow");
        // $a2=array("e"=>"red","f"=>"green","g"=>"blue");

        // $result=array_intersect($a1,$a2);
        // print_r($result);

        // $a1=array("red","green");
        // $a2=array("blue","yellow");
        // $a3 = array("pink", "purple");
        // print_r(array_merge($a1,$a2,$a3));

        $a=array("red","green","blue","yellow","brown");
        print_r(array_slice($a,2));

    ?>
</body>
</html>