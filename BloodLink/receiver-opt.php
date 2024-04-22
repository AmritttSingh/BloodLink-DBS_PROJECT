<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Receiver Options</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <style>
        body {
            background-color: black;
            color: white;
        }
        .navbar {
            background-color: red; /* Red background */
            color: white;
        }
        .navbar-brand {
            color: white;
        }
        .navbar-toggler-icon {
            background-color: white;
        }
        .navbar-nav .nav-link {
    color: white; /* Set text color to white for all nav links */
}

.navbar-nav .nav-link.active {
    color: white; /* Set text color to white for active nav link */
}

        .navbar-nav .nav-link {
            color: white !important;
        }
        .card {
            border: none;
            border-radius: 15px;
            overflow: hidden; /* Hide overflow content */
        }
        .card-body {
            background-color: #f8f9fa; /* Light gray */
            color: black;
            text-align: center;
            padding: 20px; /* Added padding for better spacing */
            display: flex;
            flex-direction: column;
            justify-content: space-between; /* Adjusted to space between content */
            height: 100%; /* Make card body height 100% */
        }
        .card-title {
            color: black;
            margin-top: 15px; /* Added margin for spacing */
        }
        .card-text {
            color: black;
        }
        /* .card-img-top {
            object-fit: contain; /* Ensure image fits within the card */
            max-height: 50%; /* Adjusted max height of the image */
        /*} */
        .card-img-top {
    object-fit: cover; /* Ensure image covers the entire card */
    height: 100px !important; /* Adjusted height of the image */
    width: 100%; /* Ensure image fills the entire width of the card */
}

.card .card-img-top {
    height: 300px; /* Adjusted height of the image */
}

        .card-content {
            flex-grow: 1; /* Allow content to grow */
            display: flex;
            flex-direction: column;
            justify-content: center;
        }
        .card-description {
            color: white;
            text-align: center;
            margin-top: 10px;
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
    <div id="inner_full">
        <div id="header">
            <!-- <h2><a href="admin-home.php" style="text-decoration:none;color:white;">Blood-Link</a></h2> -->
        </div>
        <div id="body" class="container">
            <h1 class="mb-4 text-center">Receiver Options</h1> <!-- Centered the title -->
            <div class="row justify-content-center"> <!-- Centered the row -->
                <div class="col-md-6">
                    <div class="card mb-4">
                        <img src="img/rec.png" class="card-img-top img-fluid" alt="Regular Receiving Image"> <!-- Image inside the card -->
                        <div class="card-body">
                            <div class="card-content">
                                <h5 class="card-title mt-3">Regular Receiving</h5>
                                <p class="card-text">Manage regular blood receiving.</p>
                                <a href="regular_receive-reg.php" class="btn btn-primary">Go to Regular Receiving</a>
                            </div>
                        </div>
                        
                    </div>
                </div>
                <div class="col-md-6">
                    <div class="card mb-4">
                        <img src="img/trans.png" class="card-img-top img-fluid" alt="Blood Transfusion Image"> <!-- Image inside the card -->
                        <div class="card-body">
                            <div class="card-content">
                                <h5 class="card-title mt-3">Blood Transfusion</h5>
                                <p class="card-text">Manage blood transfusion requests.</p>
                                <a href="exchange-blood-list.php" class="btn btn-primary">Go to Blood Transfusion</a>
                            </div>
                        </div>
                        
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

</body>
</html>
