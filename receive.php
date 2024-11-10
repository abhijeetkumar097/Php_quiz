<?php

$name=$_FILES['myfile']['name'];
//print_r($_FILES);
$tmp_name=$_FILES['myfile']['tmp_name'];
if(move_uploaded_file($tmp_name,$name))
{
    echo "file uploaded";
}
else
{
echo "file not uploaded";
}

?>


<!-- Array ( [myfile] => Array ( [name] => WhatsApp Image 2024-02-11 at 02.30.53_66e7f14b1.jpg [full_path] => WhatsApp Image 2024-02-11 at 02.30.53_66e7f14b1.jpg [type] => image/jpeg [tmp_name] => C:\xampp\tmp\php6C27.tmp [error] => 0 [size] => 158414 ) ) file uploaded -->