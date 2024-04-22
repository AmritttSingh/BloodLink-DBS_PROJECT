<!-- <!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Home Page</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <link rel="stylesheet" href="css/home.css"> <!-- Link to your custom CSS file -->
<!--</head>
<body>-->
<!-- <nav class="navbar navbar-expand-lg navbar-light navbar-red">
    <div class="container-fluid">
        <a class="navbar-brand" href="#">Blood-Link</a>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                <li class="nav-item">
                    <a class="nav-link active" aria-current="page" href="#">Home</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="aboutus.php">About us</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="contact_us.php">Contact us</a>
                </li>
                <li class="nav-item dropdown">
    <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false" data-bs-target="#navbarDropdownMenu">
        Lists
    </a>
    <ul class="dropdown-menu" aria-labelledby="navbarDropdown" id="navbarDropdownMenu">
        <li><a class="dropdown-item" href="donor-list.php">Donor List</a></li>
        <li><a class="dropdown-item" href="ngo-list.php">NGO List</a></li>
        <li><a class="dropdown-item" href="exchange-blood-list1.php">Blood Transfusion List</a></li>
    </ul>
</li>

                <li class="nav-item">
                    <a class="nav-link" href="stock-blood-list.php">Stock</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="statistics.php">Statistics</a>
                </li>
            </ul>
        </div>
    </div>
</nav> -->
<!--
<nav class="navbar navbar-expand-lg navbar-light navbar-red">
    <div class="container-fluid">
        <a class="navbar-brand" href="#">Blood-Link</a>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                <li class="nav-item">
                    <a class="nav-link active" aria-current="page" href="#">Home</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="aboutus.php">About us</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="contact_us.php">Contact us</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="list.php">Lists</a> <!-- Redirect to list.php -->
                <!--</li>
                <li class="nav-item">
                    <a class="nav-link" href="stock-blood-list.php">Stock</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="statistics.php">Statistics</a>
                </li>
            </ul>
        </div>
    </div>
</nav>

<div class="hero bg-dark text-white py-5">
    <div class="container">
        <h1>Welcome to Blood-Link</h1>
        <ul class="list-unstyled">
            <li class="option">
                <a href="donor-reg.php">
                    <img src="img/don.jpeg" alt="Donor" class="img-fluid">
                    <div class="description">
                        <h3>Donor Registration</h3>
                        <p>Register here if you want to donate blood and save lives.</p>
                    </div>
                </a>
            </li>
            <li class="option">
                <a href="receiver-opt.php">
                    <img src="img/rec.jpeg" alt="Receiver" class="img-fluid">
                    <div class="description">
                        <h3>Receiver</h3>
                        <p>Explore options for receiving blood donations here.</p>
                    </div>
                </a>
            </li>
            <li class="option">
                <a href="ngo-reg.php">
                    <img src="img/ngo1.jpeg" alt="NGO" class="img-fluid">
                    <div class="description">
                        <h3>NGO Registration</h3>
                        <p>Register your NGO to contribute to the cause of blood donation.</p>
                    </div>
                </a>
            </li>
        </ul>
    </div>
</div>

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-TDor5Wudjx0rnyTO3jzxcR3tbC4L/9pH9/TUDNn+HzidzM+1MzT4D4uHqcWsJz5Q" crossorigin="anonymous"></script>
</body>
</html> -->


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Home Page</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <link rel="stylesheet" href="css/home.css"> <!-- Link to your custom CSS file -->
    <style>
        /* Adjustments to CSS */
        .hero h1 {
            text-align: left;
            font-weight: bold;
            font-size: 36px;
            font-family: "Arial Black", Arial, sans-serif;
            margin-bottom: 20px;
        }
        /* Adjustments to CSS */
/* Adjustments to CSS */
.option {
    margin-bottom: 20px;
    height: 100%; /* Set height to 100% */
}

.option img {
    width: 100%;
    height: 200px; /* Set a fixed height for the images */
    object-fit: cover; /* Ensure images cover the entire space */
}

.option .description {
    height: 100%; /* Set height to 100% */
    display: flex;
    flex-direction: column;
    justify-content: space-between; /* Align content vertically */
}

/* Description Styles */
.description {
    padding: 20px;
    background-color: #f8f9fa;
    border: 1px solid #dee2e6;
    border-radius: 5px;
    height: 100%; /* Set height to 100% */
    display: flex;
    flex-direction: column;
    justify-content: space-between; /* Align content vertically */
}

/* Description Content Styles */
.option .description h3 {
    font-size: 18px;
    font-weight: bold; /* Make headings bold */
    margin-top: 0;
    margin-bottom: 10px;
}

.option .description p {
    font-size: 14px;
    margin-bottom: 0;
    flex-grow: 1; /* Allow paragraph to grow and occupy remaining space */
    text-decoration: none; /* Remove underline from paragraph text */
}

.dropdown-menu {
            background-color: #fff; /* Set background color for dropdown menu */
        }

        .dropdown-item {
            color: #000; /* Set text color for dropdown items */
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
<div class="hero bg-dark text-white py-5">
    <div class="container">
        <div class="row">
            <div class="col-md-6">
                <h1>Welcome to Blood-Link</h1>
            </div>
        </div>
        <div class="row">
            <div class="col-md-4">
                <div class="option">
                    <a href="donor-reg.php">
                        <img src="img/don.jpeg" alt="Donor" class="img-fluid">
                        <div class="description">
                            <h3>Donor Registration</h3></a>
                            <p>Register here if you want to donate blood and save lives.</p>
                        </div>
                    
                </div>
            </div>
            <div class="col-md-4">
                <div class="option">
                    <a href="receiver-opt.php">
                        <img src="img/rec.jpeg" alt="Receiver" class="img-fluid">
                        <div class="description">
                            <h3>Receiver</h3></a>
                            <p>Explore options for receiving blood donations here.</p>
                        </div>
                    
                </div>
            </div>
            <div class="col-md-4">
                <div class="option">
                    <a href="ngo-reg.php">
                        <img src="img/ngo1.jpeg" alt="NGO" class="img-fluid">
                        <div class="description">
                            <h3>NGO Registration</h3></a>
                            <p>Register your NGO to contribute to the cause of blood donation.</p>
                        </div>
                    
                </div>
            </div>
        </div>
    </div>
</div>

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-TDor5Wudjx0rnyTO3jzxcR3tbC4L/9pH9/TUDNn+HzidzM+1MzT4D4uHqcWsJz5Q" crossorigin="anonymous"></script>
</body>
</html>
