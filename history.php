<?php
//connectivity
$host="localhost";
$user="root";
$password="";
$db="rms";

$link=mysqli_connect("localhost","root","",$db);

$sql="SELECT `id`, `food_id`, `ur_name`, `email`, `phone`, `address`, `food_name`, `quantity`, `amount`, `orderType` FROM `bill`";
$result=mysqli_query($link,$sql);

$sql1="SELECT `tb_id`, `name`, `email`, `phone`, `table`, `foodType`, `purpose`, `date` FROM `booking`";
$result1=mysqli_query($link,$sql1);
?>



<!DOCTYPE html>
<html>
<head>
	<title>contact.RMS</title>
	<meta name="viewport" content-type="width=device-width, initial-scale=1"/>
	<link rel="stylesheet" type="text/css" href="css/all.css">
	<link rel="stylesheet" type="text/css" href="css/historY.css">
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

	<table align="center" border="1px" width=100%>
	<tr><th colspan="10"><h3>Bill Record</h3></th></tr>
	<t>
		<th>id</th>
		<th>food_id</th>
		<th>ur_name</th>	
		<th>email</th>	
		<th>phone</th>	
		<th>address</th>
		<th>food_name</th>
		<th>quantity</th>
		<th>amount</th>
		<th>orderType</th>
	</t>
	<?php
		while($rows = mysqli_fetch_assoc($result))
		{
	?>
		<tr>
			<td><?php echo $rows['id']; ?></td>
			<td><?php echo $rows['food_id']; ?></td>
			<td><?php echo $rows['ur_name']; ?></td>
			<td><?php echo $rows['email']; ?></td>
			<td><?php echo $rows['phone']; ?></td>
			<td><?php echo $rows['address']; ?></td>
			<td><?php echo $rows['food_name']; ?></td>
			<td><?php echo $rows['quantity']; ?></td>
			<td><?php echo $rows['amount']; ?></td>
			<td><?php echo $rows['orderType']; ?></td>
		</tr>
	<?php
		}
	?>
	</table>
	<table align="center" border="1px" width=100%>
	<tr><th colspan="10"><h4>Table Booking Record</h4></th></tr>
	<t>
		<th>tb_id</th>
		<th>name</th>	
		<th>email</th>	
		<th>phone</th>	
		<th>table</th>
		<th>foodType</th>
		<th>purpose</th>
		<th>date</th>
	</t>
	<?php
		while($rows = mysqli_fetch_assoc($result1))
		{
	?>
		<tr>
			<td><?php echo $rows['tb_id']; ?></td>
			<td><?php echo $rows['name']; ?></td>
			<td><?php echo $rows['email']; ?></td>
			<td><?php echo $rows['phone']; ?></td>
			<td><?php echo $rows['table']; ?></td>
			<td><?php echo $rows['foodType']; ?></td>
			<td><?php echo $rows['purpose']; ?></td>
			<td><?php echo $rows['date']; ?></td>
		</tr>
	<?php
		}
	?>
	</table>
	<br><br>
</body>
</html>