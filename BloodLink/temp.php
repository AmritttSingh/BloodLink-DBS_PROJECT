

<?php
include('connection.php');
session_start();
?>
<!DOCTYPE html>
<html>
<head>
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
	<title>User Login</title>
	<link rel="stylesheet" type="text/css" href="css/s1.css">
</head>
<body>

<div id="full">
	<div id ="inner_full">
		<div id="header"><h2><a href="admin-home.php" style="text-decoration:none;color:white;">Blood-Link</a></h2></div>
		<div id="body">
			<br>
			<?php
			$un=$_SESSION['un'];	
		 	if(!$un)
		 	{
		 		header("Location:index.php");
		 	}  
			?>
			
			<h1>Welcome</h1><br><br>
			<ul>
				<li><a href="donor-reg.php">Donor Registration</a></li>
				<li><a href="donor-list.php">Donor List</a></li>
				<li><a href="stock-blood-list.php">Stock Blood List</a></li>
			</ul><br><br><br><br><br>

			<ul>
				<li><a href="ngo-reg.php">NGO Registration</a></li>
				<li><a href="ngo-list.php">NGO List</a></li>
				<li><a href="exchange-blood-list.php">Blood Transfusion Registration</a></li>
				<li><a href="exchange-blood-list1.php">Blood Transfusion List</a></li>
			</ul>



	 	</div>
		<div id="footer"><h4 align="center">Made by Amrit and Ishita</h4>
			<p align="center"><a href="logout.php"><font color="white">logout</font></a></p>
		</div>
	</div>
</div>
</body>
</html>
