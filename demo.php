<!DOCTYPE html>
<html lang="en">
<head>
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
    
    <div class="box">
    <div class="ibox">
    <form action="demo1.php" method="post">
        <h1>Login form</h1>
        <label for="name">Name</label>
        <input type="text" id="name" name="name" title="nam likh bur ke baal">
        <br>
        <label for="email">Email</label>
        <input type="text" id="email" name="email">
        <br>
        <button type="submit">submit</button>
        <br>
        <button type="reset">reset</button>
    </form>
    </div>
    </div>
</body>
</html>