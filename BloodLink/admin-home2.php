<!-- 
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Home Page</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <link rel="stylesheet" href="css/home.css"> <!-- Link to your custom CSS file -->
<!--</head>
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
                    <a class="nav-link active" aria-current="page" href="#">Home</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="aboutus.php">About us</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="contact_us.php">Contact us</a>
                </li>
                <li class="nav-item dropdown">
                    <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                        Lists
                    </a>
                    <ul class="dropdown-menu" aria-labelledby="navbarDropdown">
                        <li><a class="dropdown-item" href="ngo_list.php">NGO List</a></li>
                        <li><a class="dropdown-item" href="donor_list.php">Donor List</a></li>
                        <li><a class="dropdown-item" href="receiver_list.php">Receiver List</a></li>
                        <li><a class="dropdown-item" href="blood_transfusion_list.php">Blood Transfusion List</a></li>
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
</nav>

  
    <div class="container">
        <h1>Welcome to Blood-Link</h1>
        <h2>Please select an option:</h2>
        <ul class="list-unstyled">
            <li class="option">
                <a href="donor-reg.php">
                    <img src="https://www.google.com/url?sa=i&url=https%3A%2F%2Fwww.buzzrx.com%2Fblog%2Fwhat-happens-to-your-body-after-a-blood-transfusion&psig=AOvVaw3B7E9xlO_F9bbjVTVz7Ltb&ust=1713592178686000&source=images&cd=vfe&opi=89978449&ved=0CBIQjRxqFwoTCPig8c7KzYUDFQAAAAAdAAAAABAk" alt="Donor" class="img-fluid">
                    <div class="description">
                        <h3>Donor Registration</h3>
                        <p>Register here if you want to donate blood and save lives.</p>
                    </div>
                </a>
            </li>
            <li class="option">
                <a href="receiver-opt.php">
                    <img src="https://www.google.com/url?sa=i&url=https%3A%2F%2Fwww.alamy.com%2Fstock-photo%2Fblood-donation-illustration.html&psig=AOvVaw3B7E9xlO_F9bbjVTVz7Ltb&ust=1713592178686000&source=images&cd=vfe&opi=89978449&ved=0CBIQjRxqFwoTCPig8c7KzYUDFQAAAAAdAAAAABAq" alt="Receiver" class="img-fluid">
                    <div class="description">
                        <h3>Receiver</h3>
                        <p>Explore options for receiving blood donations here.</p>
                    </div>
                </a>
            </li>
            <li class="option">
                <a href="ngo-reg.php">
                    <img src="https://www.google.com/url?sa=i&url=https%3A%2F%2Fdribbble.com%2Ftags%2Fblood-donation&psig=AOvVaw3B7E9xlO_F9bbjVTVz7Ltb&ust=1713592178686000&source=images&cd=vfe&opi=89978449&ved=0CBIQjRxqFwoTCPig8c7KzYUDFQAAAAAdAAAAABAe" alt="NGO" class="img-fluid">
                    <div class="description">
                        <h3>NGO Registration</h3>
                        <p>Register your NGO to contribute to the cause of blood donation.</p>
                    </div>
                </a>
            </li>
        </ul>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-TDor5Wudjx0rnyTO3jzxcR3tbC4L/9pH9/TUDNn+HzidzM+1MzT4D4uHqcWsJz5Q" crossorigin="anonymous"></script>
</body>
</html>


 -->
<!--
 <!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Home Page</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <style>
        /* Body Styles */
        body {
            background-color: black;
            color: white;
            font-family: Arial, sans-serif;
        }

        /* Navbar Styles */
        .navbar {
            background-color: red;
        }

        .navbar .navbar-brand,
        .navbar-nav .nav-link {
            color: white;
        }

        /* Set active link color */
        .navbar-nav .nav-link.active {
            color: white !important;
        }

        /* Container Styles */
        .container {
            padding: 50px;
            position: relative; /* Make the container relative */
            overflow: hidden; /* Hide overflow */
        }

        .container h1,
        .container h2 {
            color: red;
            text-align: center;
        }

        .container ul {
            list-style-type: none;
            padding: 0;
            margin: 0; /* Remove default margin */
        }

        .container li {
            margin-bottom: 20px;
        }

        .container li .option {
            display: flex;
            flex-direction: column;
            align-items: center;
        }

        .container li .option img {
            width: 100%;
            height: auto;
            margin-bottom: 10px; /* Adjust spacing between image and description */
        }

        /* Description Styles */
        .description {
            text-align: center;
            color: white;
        }

        /* Scrollbar Styles */
        .container {
            max-height: calc(100vh - 150px); /* Adjust max height based on viewport height */
        }

        /* Corner scrollbar */
        .container::-webkit-scrollbar {
            width: 10px;
            height: 10px;
        }

        .container::-webkit-scrollbar-track {
            background: transparent;
        }

        .container::-webkit-scrollbar-thumb {
            background-color: rgba(255, 255, 255, 0.5);
            border-radius: 10px;
            border: 2px solid transparent;
        }

        .container::-webkit-scrollbar-thumb:hover {
            background-color: rgba(255, 255, 255, 0.7);
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
                    <a class="nav-link active" aria-current="page" href="#">Home</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="aboutus.php">About us</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="contact_us.php">Contact us</a>
                </li>
                <li class="nav-item dropdown">
                    <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                        Lists
                    </a>
                    <ul class="dropdown-menu" aria-labelledby="navbarDropdown">
                        <li><a class="dropdown-item" href="ngo_list.php">NGO List</a></li>
                        <li><a class="dropdown-item" href="donor_list.php">Donor List</a></li>
                        <li><a class="dropdown-item" href="receiver_list.php">Receiver List</a></li>
                        <li><a class="dropdown-item" href="blood_transfusion_list.php">Blood Transfusion List</a></li>
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
</nav>

<div class="hero bg-dark text-white py-5">
    <div class="container">
        <h1>Welcome to Blood-Link</h1>
        <h2>Please select an option:</h2>
        <ul class="list-unstyled">
            <li class="option">
                <a href="donor-reg.php">
                    <img src="path/to/donor-image.jpg" alt="Donor" class="img-fluid">
                    <div class="description">
                        <h3>Donor Registration</h3>
                        <p>Register here if you want to donate blood and save lives.</p>
                    </div>
                </a>
            </li>
            <li class="option">
                <a href="receiver-opt.php">
                    <img src="path/to/receiver-image.jpg" alt="Receiver" class="img-fluid">
                    <div class="description">
                        <h3>Receiver</h3>
                        <p>Explore options for receiving blood donations here.</p>
                    </div>
                </a>
            </li>
            <li class="option">
                <a href="ngo-reg.php">
                    <img src="path/to/ngo-image.jpg" alt="NGO" class="img-fluid">
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
</html>
    -->

    <!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Home Page</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <link rel="stylesheet" href="css/home.css"> <!-- Link to your custom CSS file -->
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
                    <a class="nav-link active" aria-current="page" href="#">Home</a>
                </li>
               <!-- <!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Home Page</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <link rel="stylesheet" href="css/home.css"> <!-- Link to your custom CSS file -->
    <!--<style>
        /* Adjustments to CSS */
        .hero h1 {
            text-align: left;
            font-weight: bold;
            font-size: 36px; /* Adjust font size as needed */
            font-family: "Arial Black", Arial, sans-serif; /* Aesthetic font family */
            margin-bottom: 20px; /* Adjust margin as needed */
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
                    <a class="nav-link active" aria-current="page" href="#">Home</a>
                </li>-->
                <li class="nav-item">
                    <a class="nav-link" href="aboutus.php">About us</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="contact_us.php">Contact us</a>
                </li>
                <li class="nav-item dropdown">
                    <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                        Lists
                    </a>
                    <ul class="dropdown-menu" aria-labelledby="navbarDropdown">
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

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-TDor5Wudjx0rnyTO3jzxcR3tbC4L/9pH9/TUDNn+HzidzM+1MzT4D4uHqcWsJz5Q" crossorigin="anonymous"></script>
</body>
</html>
