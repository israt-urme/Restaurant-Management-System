<?php

$host="localhost";
$user="root";
$password="";
$db="rms";

$link=mysqli_connect("localhost","root","",$db);

$food_id="";
$food_name="";
$food_price="";
$quantity="";

function getPosts()
{
	$posts=array();
	$posts[0]=$_POST['food_id'];
	$posts[1]=$_POST['food_name'];
	$posts[2]=$_POST['food_price'];
	return $posts;
}

if(isset($_POST['search']))
{
 	$data=getPosts();
	$sql="select * from items where food_id = '".$data[0]."'";
	$result=mysqli_query($link,$sql);
	if(mysqli_num_rows($result)==1)
	{ 
		while($row=mysqli_fetch_array($result))
		{
			$food_id=$row['food_id'];
			$food_name=$row['food_name'];
			$food_price=$row['food_price'];
		}
	}
	else{ echo "no data for the id";
	exit();
	}
	
}

$amount="";
if (isset($_POST['total'])) {
	$food_id=$_POST['food_id'];
	$food_name=$_POST['food_name'];
    $food_price = $_POST['food_price'];
    $quantity = $_POST['quantity'];
    $amount = $food_price*$quantity;
}

$ur_name="";
$email="";
$orderType="";
if(isset($_POST['order'])) {
	$food_id=$_POST['food_id'];
	$food_name=$_POST['food_name'];
    $food_price = $_POST['food_price'];
    $quantity = $_POST['quantity'];
    $amount = $food_price*$quantity;
	$ur_name=$_POST['ur_name'];
	$email=$_POST['email'];
	$phone=$_POST['phone'];
	$address=$_POST['address'];
	$orderType=$_POST['orderType'];
	$sql="insert into bill (food_id ,ur_name, email ,phone, address, food_name, quantity, amount, orderType) values('".$food_id."','".$ur_name."','".$email."','".$phone."','".$address."','".$food_name."','".$quantity."','".$amount."','".$orderType."')";
	$result=mysqli_query($link,$sql);
	if($result){
		if(mysqli_affected_rows($link)>0)
		{
			echo "successfully ordered";
		}else{ echo "not ordered yet!"; }
	}else{ echo "try again"; exit(); }
}
?>

<!DOCTYPE html>
<html>
<head>
	<title>order.RMS</title>
	<meta name="viewport" content-type="width=device-width, initial-scale=1"/>
	<link rel="stylesheet" type="text/css" href="css/all.css">
	<link rel="stylesheet" type="text/css" href="css/ordeR.css">
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

	<div class="title">
		<h1> ORDER NOW!! </h1>
	</div>
	<form method="post"action="">
		<div class="form1n">
		<h1> Search for Food Items </h1>
			<div class="form1">
				<input name="food_id" type="text"class="form1"placeholder="Item no" value="<?php echo $food_id; ?>" required>
				<button name="search" type="submit">Search</button><br>
				<input name="food_name" type="text"class="form1"placeholder="item name" value="<?php echo $food_name; ?>"><br>
				<input name="food_price"type="text"class="form1"placeholder="per item price" value="<?php echo $food_price;?>"><br>
				<input name="quantity"type="food_quantity"class="form1"placeholder="enter quantity"value="<?php echo $quantity;?>"><br>
				<button type="submit" name="total">Total Amount</button>
				<input name="amount"type="total"class="form1"placeholder="total amount" value="<?php echo $amount;?>"><br>
				<label> Choose The Method To Order: </label><br>
				<input name="orderType" type="radio" value="preOrder"/>PreOrder
				<input name="orderType" type="radio" value="homeDelivery"/>HomeDelivery
			</div>
		</div>
		
		<div class="form2n">
		<h1> Order System </h1>
			<div class="form1">
				<input name="ur_name"type="name"class="form1"placeholder="Your Name" ><br>
				<input name="email"type="email"class="form1"placeholder="Your Email" ><br>
				<input name="address"type="address" class="form1"placeholder="'house/road/area'" ><br>
				<input name="phone"type="phone"class="form1"placeholder="Phone no." ><br><br>
				<button type="submit" name="order">Payment</button><br>
			</div>
		</div>
	</form>
</body>
</html>