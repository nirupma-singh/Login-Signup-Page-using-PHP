<!DOCTYPE html>
<html>

<?php
session_start();
 include "connection.php";

 if(isset($_POST['login']))
 {
    $email=$_POST['email'];
    $password=$_POST['password'];
    $sql="select * from user_reg where email='$email' or phone='$email' and password='$password'";
    $total=$con->query($sql);
    $result=$total->fetch_assoc();
    if($total->num_rows>0)
    {
        
        echo "Login Successfully";
       // $_SESSION['name']=$result['name'];
        
       // header('Location:Form.php');
    }
    else
    {
        echo "<script>alert('You Have Enter Wrong Username and password');</script>";
       // echo "You Have Enter Wrong Username and password";
    }
 }
?>

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Login and Signup</title>
    <link rel="stylesheet" type="text/css" href="design.css">
</head>
<body>
    <form method="post">
        <div class="container">
            <div class="box"></div>
            <div class="box" id="box2">
                <div id="loginbox">

                    <center>
                 <h1>Login</h1>
                <input type="text" name="email" placeholder="Enter Username"><br>

                <input type="password" name="password" placeholder="Enter pasword" ><br>
                <button  name="login">Login</button><br>
                <p>If u have not register!<a href="signup.php">Signup here</a></p><br>
                <a href="forget_password.php">Forget Password</a>
                </center>
                </div>
            </div>
            <div class="box"></div>
        </div>
</form> 
</body>
</html>




