<?php

$host="localhost";
$user="root";
$password="";
$db="rms";

/*using mysql
mysql_connect("localhost","root","");
mysql_select_db($db);

if(isset($_POST['name'])){ $uname=$_POST['name']; $mail=$_POST['email']; $pass=$_POST['password']; 
	$sql="select * from login where  name='".$uname."' AND email='".$mail."' AND password='".$pass."' limit 1";
	$result=mysql_query($sql);
	if(mysqli_num_rows($result)==1){ echo "You have successfully logged in";
	header("location:slider.html");
	exit();
	}else{ echo "try again";
	exit();
	}
	
}
*/
/*using mysqli*/
$link=mysqli_connect("localhost","root","",$db);

if(isset($_POST['name'])){ $uname=$_POST['name']; $mail=$_POST['email']; $pass=$_POST['password']; 
	$sql="select * from login where  name='".$uname."' AND email='".$mail."' AND password='".$pass."' limit 1";
	$result=mysqli_query($link,$sql);
	if(mysqli_num_rows($result)==1){ echo "You have successfully logged in";
	header("location:home.html");
	exit();
	}else{ echo "try again";
	exit();
	}
	
}

?>

<!DOCTYPE html>
<html>
<head>
	<title>Restaurant Management System</title>
	<link rel="stylesheet" type="text/css" href="css/logiN.css">
</head>
<body>
	<div class="login-title">
		<h1>RESTRO</h1>
		<h2>We are always ready to serve you!</h2>
	</div>
	<div class="login-form">
		<form id="login-form"method="post"action="#">
			<input name="name"type="text"class="form-control"placeholder="Your Name" required>
			<br>
			<input name="email"type="email"class="form-control"placeholder="Your Email" required>
			<br>
			<input name="password"type="password"class="form-control"placeholder="Enter Password" required>
			<br>
			<button type="login" name="submit">LOGIN</button> 
		</form>
	</div>
</body>
</html>