<?php
include('connection.php');
session_start();
?>
<!DOCTYPE html>
<html>
<head>
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
	<title>NGO Registration</title>
	<style>
		body {
			background-color: black;
			color: white;
		}
		.container {
			background-color: black;
			color: white;
			padding: 20px;
			border-radius: 10px;
			margin-top: 20px;
		}
		.navbar {
			background-color: red;
			margin-bottom: 0;
		}
		.navbar .navbar-brand,
		.navbar-nav .nav-link {
			color: white;
		}
		.navbar-nav .nav-link.active {
			color: white !important;
		}
	</style>
</head>
<body>
<div id="full">
	<div id ="inner_full">
		<nav class="navbar navbar-expand-lg navbar-light navbar-red">
			<div class="container-fluid">
				<a class="navbar-brand" href="admin-home.php">Blood-Link</a>
				<button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
					<span class="navbar-toggler-icon"></span>
				</button>
				<div class="collapse navbar-collapse" id="navbarSupportedContent">
					<ul class="navbar-nav me-auto mb-2 mb-lg-0">
						<li class="nav-item">
							<a class="nav-link active" aria-current="page" href="admin-home.php">Home</a>
						</li>
						<li class="nav-item">
							<a class="nav-link" href="aboutus.php">About us</a>
						</li>
						<li class="nav-item">
							<a class="nav-link" href="contact_us.php">Contact us</a>
						</li>
						<li class="nav-item">
							<a class="nav-link" href="list.php">Lists</a>
						</li>
						<li class="nav-item">
							<a class="nav-link" href="stock-blood-list.php">Stock</a>
						</li>
						<li class="nav-item">
							<a class="nav-link" href="statistics.php">Statistics</a>
						</li>
					</ul>
					<p><a href="logout.php" class="btn btn-danger">Logout</a></p>
				</div>
			</div>
		</nav>
		<div id="body">
			<br>
			<?php
			$un=$_SESSION['un'];	
		 	if(!$un)
		 	{
		 		header("Location:index.php");
		 	}
			?>
			<h1>NGO Registration</h1>
			<center>
				<div class="container">
	                <form action="" method="post">
	                    <div class="mb-3">
	                        <label for="name" class="form-label">Enter Name</label>
	                        <input type="text" class="form-control" id="name" name="name" placeholder="Enter Name">
	                    </div>
	                    <div class="mb-3">
	                        <label for="address" class="form-label">Enter Address</label>
	                        <textarea class="form-control" id="address" name="address"></textarea>
	                    </div>
	                    <div class="row mb-3">
	                        <div class="col">
	                            <label for="city" class="form-label">Enter City</label>
	                            <input type="text" class="form-control" id="city" name="city" placeholder="Enter City">
	                        </div>
	                        <div class="col">
	                            <label for="contact" class="form-label">Enter Contact No.</label>
	                            <input type="text" class="form-control" id="contact" name="contact" placeholder="Enter Contact No">
	                        </div>
	                    </div>
	                    <button type="submit" class="btn btn-primary" name="sub">Save</button>
	                </form>
	            </div>
            </center>
	 	</div>
		<!-- <div id="footer">
			<h4 align="center">Made by Amrit and Ishita</h4>
			<p align="center"><a href="logout.php"><font color="white">logout</font></a></p>
		</div> -->
	</div>
</div>
</body>
</html>
