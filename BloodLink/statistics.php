<?php
include('connection.php');
session_start();

// Query for blood type with most donations
$bloodTypeQuery = "SELECT bgroup, COUNT(*) AS count FROM donor_registration GROUP BY bgroup ORDER BY count DESC LIMIT 1";
$bloodTypeStmt = $db->query($bloodTypeQuery);
$mostDonatedBloodType = $bloodTypeStmt->fetch(PDO::FETCH_ASSOC);

// Query for average age of donors
$avgAgeQuery = "SELECT AVG(age) AS avg_age FROM donor_registration";
$avgAgeStmt = $db->query($avgAgeQuery);
$avgAge = $avgAgeStmt->fetch(PDO::FETCH_ASSOC)['avg_age'];

// Query for city with most donations
$citiesQuery = "SELECT city, COUNT(*) AS count FROM donor_registration GROUP BY city ORDER BY count DESC LIMIT 1";
$citiesStmt = $db->query($citiesQuery);
$cityMostDonations = $citiesStmt->fetch(PDO::FETCH_ASSOC);

// Query for city with most NGOs
$ngosQuery = "SELECT city, COUNT(*) AS count FROM ngo GROUP BY city ORDER BY count DESC LIMIT 1";
$ngosStmt = $db->query($ngosQuery);
$cityMostNgos = $ngosStmt->fetch(PDO::FETCH_ASSOC);
?>

<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Statistics Page</title>
  <link rel="stylesheet" href="https://unpkg.com/bootstrap@5.3.2/dist/css/bootstrap.min.css">
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.2/font/bootstrap-icons.min.css">
  <link rel="stylesheet" href="https://unpkg.com/bs-brain@2.0.3/components/cards/card-1/assets/css/card-1.css">
  
  <style>
    /* Custom CSS for card size */
    .widget-card {
      height: 100%; /* Adjust the height as needed */
    }

    html, body {
      background-image: url('img/bg2.jpg'); /* Specify the URL of your image */
      background-size: cover; /* Cover the entire background */
      background-position: center; /* Center the background image */
      background-repeat: no-repeat; /* Do not repeat the background image */
      color: white; /* Set text color to white for better visibility */
    }

    .card {
      background-color: whitesmoke;
      border-color: red;
    }

    .card-subtitle {
      color: white; /* Change text color to white for better visibility */
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

<section class="py-3 py-md-5">
  <div class="container">
    <div class="row justify-content-center"> <!-- Center alignment -->
      <div class="col-12 col-lg-10 col-xl-8 col-xxl-7">
        <div class="row gy-4">
          <div class="col-12 col-sm-6">
            <div class="card widget-card border-light shadow-sm">
              <div class="card-body p-4">
                <div class="row">
                  <div class="col-8">
                    <h5 class="card-title widget-card-title mb-3">Blood Type with Most Donations</h5>
                    <h4 class="card-subtitle text-body-secondary m-0"><?php echo $mostDonatedBloodType['bgroup']; ?></h4>
                  </div>
                </div>
              </div>
            </div>
          </div>
          <div class="col-12 col-sm-6">
            <div class="card widget-card border-light shadow-sm">
              <div class="card-body p-4">
                <div class="row">
                  <div class="col-8">
                    <h5 class="card-title widget-card-title mb-3">Average Age of Donors</h5>
                    <h4 class="card-subtitle text-body-secondary m-0"><?php echo round($avgAge); ?></h4>
                  </div>
                </div>
              </div>
            </div>
          </div>
          <div class="col-12 col-sm-6">
            <div class="card widget-card border-light shadow-sm">
              <div class="card-body p-4">
                <div class="row">
                  <div class="col-8">
                    <h5 class="card-title widget-card-title mb-3">City with Most Donations</h5>
                    <h4 class="card-subtitle text-body-secondary m-0"><?php echo $cityMostDonations['city']; ?></h4>
                  </div>
                </div>
              </div>
            </div>
          </div>
          <div class="col-12 col-sm-6">
            <div class="card widget-card border-light shadow-sm">
              <div class="card-body p-4">
                <div class="row">
                  <div class="col-8">
                    <h5 class="card-title widget-card-title mb-3">City with Most NGOs</h5>
                    <h4 class="card-subtitle text-body-secondary m-0"><?php echo $cityMostNgos['city']; ?></h4>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
</section>

</body>
</html>
