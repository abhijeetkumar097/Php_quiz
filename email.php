<?php
$check = mail("aabhijeet097@gmail.com", "Testing email", "This is a testing email from XAMPP server", "From: symbolise123@gmail.com");

if($check) {
    echo "Email sent successfully";
} else {
    echo "Email not sent successfully";
}
?>
