<?php
//connectivity
$host="localhost";
$user="root";
$password="";
$db="rms";

$link=mysqli_connect("localhost","root","",$db);

if(isset($_POST['save']))
{
	$name=$_POST['name'];
    $email = $_POST['email'];
	$phone=$_POST['phone'];
	$table=$_POST['table'];
	$foodType=$_POST['foodType'];
	$purpose=$_POST['purpose'];
	$date=$_POST['date'];
	
	$sql="INSERT INTO `booking`(`name`, `email`, `phone`, `table`, `foodType`, `purpose`, `date`) VALUES ('".$name."','".$email."','".$phone."','".$table."','".$foodType."','".$purpose."','".$date."')";
	$result=mysqli_query($link,$sql);
	if($result)
	{
		if(mysqli_affected_rows($link)>0)
		{
			//echo "successfully ordered";
			$msg= "<font color='blue'>Reserved successfully</font>";
			header("location:booking.php");
		}else{ $msg= "<font color='blue'>sorry!</font>"; }
	}
	else
	{
		$msg= "<font color='blue'>try again</font>";
	}
}
?>
<!DOCTYPE html>
<html>
<head>
	<title>Table Booking System</title>
	<meta name="viewport" content-type="width=device-width, initial-scale=1"/>
	<link rel="stylesheet" type="text/css" href="css/all.css">
	<link rel="stylesheet" type="text/css" href="css/bookinG.css">
</head>
<body>
	<header>
	<a href="home.html" class="logo">RESTRO</a>
	<div class="main">
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
	
	<div class="category">
		<h1> Restro Dinning Hall </h1><br>
	</div>
	<img src="images/tableimg.jpg" alt=""><br><br>
	<!--resrevation-->
	<div class="category">
		<h1>Reservation Form</h1>
	</div>
	<form method="post" action="">
	<table align=center width=60% border="1">
	 <tr>
		<td colspan="2"><?php echo @$msg; ?></td>
	 </tr>
	  <tr >
		<td width="159">Your Name</td>
		<td width="418"><input type="text" placeholder="enter name"  name="name" id="x" required /></td>
	  </tr>
	  <tr>
		<td>Your Email</td>
		<td><input type="email" placeholder="enter email" name="email" id="x" /></td>
	  </tr>
	  <tr>
		<td>Phone no.</td>
		<td><input type="phone" placeholder="enter number" name="phone" id="x" /></td>
	  </tr>
	  <tr>
		<td>Table no</td>
		<td><input type="table" placeholder="enter" name="table" id="x" /></td>
	  </tr>
	  <tr>
		<td>Purpose</td>
		<td>
			meeting<input type="checkbox" value="meeting" name="purpose"/>
			casual<input type="checkbox" value="casual" name="purpose"/>
			party<input type="checkbox" value="party" name="purpose"/>
		</td>
	  </tr>
	  <tr>
		<td>Food type</td>
		<td>
			breakfast<input type="checkbox" value="breakfast" name="foodType"/>
			lunch<input type="checkbox" value="lunch" name="foodType"/>
			snacks<input type="checkbox" value="snacks" name="foodType"/>
			dinner<input type="checkbox" value="dinner" name="foodType"/>
		</td>
	  </tr>
	  <tr>
		<td>Date</td>
		<td><input type="date" name="date" id="x"/></td>
	  </tr>
	  <tr>
		<td colspan="2" align="center">
		<button type="submit" name="save">Reserve</button>
		<div class="r"><button type="reset" name="reset">Reset</button></div>
		</td>
	  </tr>
	</table>
	<br>
	<br>
	</form>
	<p>*any further query check contact details to inform us.thank you!</p><br><br><br>
</body>
</html>