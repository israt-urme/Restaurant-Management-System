<?php
//connectivity
$host="localhost";
$user="root";
$password="";
$db="rms";

$link=mysqli_connect("localhost","root","",$db);

if(isset($_POST['send']))
{
	$name=$_POST['name'];
    $email = $_POST['email'];
	$message=$_POST['message'];
	
	$sql="INSERT INTO `contact`(`name`, `emai`, `message`) VALUES ('".$name."','".$email."','".$message."')";
	$result=mysqli_query($link,$sql);
	if($result)
	{
		if(mysqli_affected_rows($link)>0)
		{
			echo "successfully ordered";
			header("location:contact.php");
		}else{ echo "error"; }
	}
	else
	{
		echo "try again";
	}
}
?>

<!DOCTYPE html>
<html>
<head>
	<title>contact.RMS</title>
	<meta name="viewport" content-type="width=device-width, initial-scale=1"/>
	<link rel="stylesheet" type="text/css" href="css/all.css">
	<link rel="stylesheet" type="text/css" href="css/contacT.css">
</head>
<body>
	<header>
	<a href="home.html" class="logo">RESTRO</a>
	<div class="contact-main">
	<nav>
	<ul>
		<li><a href="home.html">Home</a></li>
		<li><a href="food.html">Food</a>
			<ul>
				<li><a href="food.html">menu</a></li>
				<li><a href="order.php">order</a></li>
			</ul>
		</li>
		<li><a href="booking.php">Booking</a></li>
		<li><a href="history.php">History</a>
			<ul>
				<li><a href="#">payment</a></li>
				<li><a href="bill.php">rocord bill</a></li>
				<li><a href="#">rating judging system</a></li>
			</ul>
		</li>
		<li><a href="about.php">About</a></li>
		<li><a href="contact.php">Contact</a></li>
		<li><a href="login-holder1.php">Logout</a></li>
	</ul>
	</nav>
	</div>
	<div class="clearfix"></div>
	</header>
	
	<div class="main">
		<div class="left">
		<br><br><br>
			<div class="title"><h1>Leave a Message</h1><br></div>
			<form method="post" action="">
				<input type="text" placeholder="enter name" name="name"/>
				<input type="email" placeholder="enter email" name="email"/>
				<textarea type="message" placeholder="add text" name="message"></textarea>
				<br><br><button type="submit" name="send">Send</button>
			</form>
		</div>
		<div class="right">
		<br><br><br>
			<div class="title"><h1>Contact Us</h1><br></div>
			<div class="content">
			<p><i class="fas fa-map-marker-alt"></i>221B,Bekar Street,London W-1</p>
			<p><i class="fas fa-envelope"></i>restro@gmail.com</p>
			<p><i class="fas fa-phone-volume"></i>+8809312423</p>
			<p><i class="fab fa-facebook"></i>facebook.com/restro</p>
			</div>
		</div>
	</div>
</body>
</html>



