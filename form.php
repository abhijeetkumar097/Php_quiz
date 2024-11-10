<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <style>
        h1 {
            color : red;
        }

        input {
            margin : 20px;
            padding : 10px;
        }
        
        .box {
            
            margin : 0 auto;
            text-align : center;
            padding : 20px;
            background-color: pink;
        }
        .ibox {
            display : inline-block;
            border : 1px solid red;
            text-align : center;
            padding : 20px;
            box-sizing : border-box;
            box-shadow : 2px 2px 2px orange;
        }
        button {
            margin: 20px;
            border: 1px solid red;
            background-color: red;
            color: white;
            border-radius: 10px;
            font-size: 1.9em;
        }
        button:hover {
            box-shadow: 2px 2px 3px red;
            font-size: 2em;
        }
        
        
    </style>
</head>
<body>
    <?php
    $nameErr = $emailErr = $genderErr = $websiteErr = "";
    $name = $email = $gender = $comment = $website = "";

    function test_input($data) {
        $data = trim($data);
        $data = stripslashes($data);
        $data = htmlspecialchars($data);
        return $data;
      }


    if($_SERVER['REQUEST_METHOD'] == 'POST') {
        if(empty($_POST['name'])) {
            $nameErr = "Name is required";
        } else {
            $name = test_input($_POST['name']);
            
        }

        if(empty($_POST["email"])) {
            $emailErr = "Email is required";
        }else {
            $email = test_input($_POST['email']);
        }

        if(empty($_POST["comment"])) {
            $comment = "";
        }else {
            $comment = test_input($_POST['comment']);
        }

        if(empty($_POST['gender'])) {
            $genderErr = "Gender is required";
        }
        else {
            $gender = test_input($_POST['gender']);
        }
    }
    ?>
    <div class="box">
    <div class="ibox">
    <h2>PHP Form Validation Example</h2>
<form method="post" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>">  
  Name: <input type="text" name="name">
  <br><br>
  E-mail: <input type="text" name="email">
  <br><br>
  Comment: <textarea name="comment" rows="5" cols="40"></textarea>
  <br><br>
  Gender:
  <input type="radio" name="gender" value="female">Female
  <input type="radio" name="gender" value="male">Male
  <input type="radio" name="gender" value="other">Other
  <br><br>
  <br>
        <button type="submit">submit</button>
        <br>
        <button type="reset">reset</button>
</form>
    </form>
    </div>
</div>

<?php
echo "<h2>Your Input:</h2>";
echo $name;
echo "<br>";
echo $email;
echo "<br>";
echo $website;
echo "<br>";
echo $comment;
echo "<br>";
echo $gender;
?>
</body>
</html>