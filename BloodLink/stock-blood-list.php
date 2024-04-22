<?php
include('connection.php');
session_start();

// Check if the session variable is not set or empty
if(!isset($_SESSION['un']) || empty($_SESSION['un'])) {
    // Redirect to index.php
    header("Location: index.php");
    exit; // Make sure to exit after redirecting
}

// Fetch overall blood stock list
$query = "SELECT bgroup, COUNT(*) AS quantity FROM donor_registration GROUP BY bgroup";
$stmt = $db->prepare($query);
$stmt->execute();
$results = $stmt->fetchAll(PDO::FETCH_ASSOC);

if(isset($_GET['city'])) {
    $city = $_GET['city'];
    // Query to fetch blood stock and NGO information for the entered city
    $query = "SELECT donor_registration.*, ngo.name AS ngo_name FROM donor_registration 
              LEFT JOIN ngo ON donor_registration.city = ngo.city 
              WHERE donor_registration.city = :city";
    $stmt = $db->prepare($query);
    $stmt->bindParam(':city', $city);
    $stmt->execute();
    $cityResults = $stmt->fetchAll(PDO::FETCH_ASSOC);
}
?>

<!DOCTYPE html>
<html>
<head>
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
<title>Blood Stock</title>
<style>
    body {
        background-color: black;
        color: white; /* Set text color to white */
    }

    /* Set navbar text color to white */
    .navbar-nav .nav-link {
        color: white;
    }

    table, th, td {
        color: white; /* Set table text color to white */
    }
</style>
</head>
<body>
<nav class="navbar navbar-expand-lg navbar-light navbar-red">
        <div class="container-fluid">
            <a class="navbar-brand" href="#">Blood-Link</a>
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
                        <a class="nav-link" href="donor-list.php">Donor List</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="ngo-list.php">NGO List</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="exchange-blood-list1.php">Blood Transfusion List</a>
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
<div id="full">
    <div id ="inner_full">
        <div id="body">
            <br>
            <?php
            // // Print out the value of $_SESSION['un']
            // echo "Session variable un: " . $_SESSION['un'];
            
            $un=$_SESSION['un']; 
            if(!$un)
            {
                header("Location:index.php");
            }
            ?>
            <h1 style="color: white;">Blood Stock</h1> <!-- Set heading text color to white -->
            <div class="container">
                <form class="form-inline my-2 my-lg-0" action="" method="GET">
                    <input class="form-control mr-sm-2" type="search" placeholder="Search by City" aria-label="Search" name="city">
                    <button class="btn btn-outline-success my-2 my-sm-0" type="submit">Search</button>
                </form>
            </div>
            <br>
            <div class="container">
                <h2 style="color: white;">Overall Blood Stock</h2> <!-- Set heading text color to white -->
                <table class="table table-striped">
                    <thead>
                        <tr>
                            <th>Blood Group</th>
                            <th>Quantity (ml)</th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php foreach($results as $row): ?>
                        <tr>
                            <td><?php echo $row['bgroup']; ?></td>
                            <td><?php echo $row['quantity']; ?></td>
                        </tr>
                        <?php endforeach; ?>
                    </tbody>
                </table>
            </div>
            <?php if(isset($cityResults) && !empty($cityResults)): ?>
            <div class="container">
                <h2 style="color: white;">Blood Stock and NGOs in <?php echo $city; ?></h2> <!-- Set heading text color to white -->
                <table class="table table-striped">
                    <thead>
                        <tr>
                            <th>Name</th>
                            <th>Address</th>
                            <th>Blood Group</th>
                            <th>NGO</th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php foreach($cityResults as $row): ?>
                        <tr>
                            <td><?php echo $row['name']; ?></td>
                            <td><?php echo $row['address']; ?></td>
                            <td><?php echo $row['bgroup']; ?></td>
                            <td><?php echo isset($row['ngo_name']) ? $row['ngo_name'] : 'No NGO available'; ?></td>
                        </tr>
                        <?php endforeach; ?>
                    </tbody>
                </table>
            </div>
            <?php elseif(isset($_GET['city'])): ?>
            <div class="container">
                <p>No blood stock or NGOs found in <?php echo $city; ?></p>
            </div>
            <?php endif; ?>
        </div>
    </div>
</div>
</body>
</html>
