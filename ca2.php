

<html>
<body>
    <?php
    $name=$email=$website=$comment=$gender="";
    $errname=$email=$gender="";
    if($_SERVER['REQUEST_METHOD'] == 'POST') {
        if(empty($_POST['name'])) {
            $errname="This is a required field";
        }
        else {
            $name = $_POST['name'];
        }
    
        if(empty($_POST['gender'])) {
            $errgender="This is a required field";
        }
        else {
            $gender = $_POST['gender'];
        }

        if(empty($_POST['email'])) {
            $erremail="This is a required field";
        }
        else {
            if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
                $erremail = "Invalid email format";
            }
            else {
                $email = $_POST['email'];
            }
        }

        $website = $_POST['website'];
        $comment = $_POST['comment'];
    }
    ?>
    <form action='<?php $_SERVER['PHP_SELF'] ?>' method='post'>
        Name:<input type="text" name="name"/>
        <br>
        Email:<input type="text" name="email"/>
        <br>
        Website:<input type="text" name="website"/> 
        <br>
        comment: <textarea type="text" name="comment" rows="5" col="3"></textarea>
        <br>
        Gender:
        <input type="radio" name='gender' value='male'> male
        <input type="radio" name='gender' value='female'> female
        <input type="radio" name='gender' value='others'> others
        <span>$errgender</span>
        <button type="submit"> Submit</button>
    </form>
    <h3>Your Input</h3>
    <?php
    echo "name: " . $name . "<br>";
    echo "email: " . $email . "<br>";
    echo "website: " . $website . "<br>";
    echo "comment: " . $comment . "<br>";
    echo "gender: " . $gender . "<br>";
    echo "error name: " . $errname . "<br>";
    echo "err email: " . $erremail . "<br>";
    ?>
</body>
</html>