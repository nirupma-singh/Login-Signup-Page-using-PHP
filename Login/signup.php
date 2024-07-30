<!DOCTYPE html>
<?php
	include "connection.php";
	if(isset($_POST['save']))
	{
		$name=$_POST['user_name'];
		$email=$_POST['email'];
		$phone=$_POST['phone'];
		$password=$_POST['Password'];
		$sql="insert into user_reg(name,email,phone,password,status) 
		values('$name','$email','$phone','$password','1')";
		if($con->query($sql))
		{
			echo "You Have Registered";
		}
		else{
			echo "Contact To Admin";
		}

	}
?>

<html>
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title></title>
    <link rel="stylesheet" type="text/css" href="design.css">
</head>
<body>
    
    <form method="post">
        <div class="container">
            <div class="box"></div>
            <div class="box" id="box2">
                <div id="loginbox">

                  <center><h1>SignUp Here</h1>
                
                <input type="text" placeholder="Enter Name" name="user_name" >
               
                <input type="text" placeholder="Enter Email" name="email" >
                
                <input type="text" placeholder="Enter Phone No." name="phone" >
                
                <input type="text" placeholder="Enter Password" name="Password" ><br>
                <input type="text" placeholder="Enter Confirm Password" name="Password" >
                <button  name="save">Save</button><br><br>
                <a href="login.php" >Back</a>
                </center>
                </div>
            </div>
            <div class="box"></div>
        </div>
</form> 
            
</body>
</html>