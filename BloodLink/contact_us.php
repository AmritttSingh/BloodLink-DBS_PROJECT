<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <title>Contact Us</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            margin: 0;
            padding: 0;
            background-color: #000;
            color: #fff;
        }
        .container {
            max-width: 800px;
            margin: 50px auto;
            background-color: #222;
            padding: 30px;
            border-radius: 15px;
            box-shadow: 0 4px 8px rgba(0,0,0,0.2);
        }
        h1 {
            text-align: center;
            color: #ff5733;
            animation: fadeIn 1s ease-in-out;
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
        .contact-info {
            margin-bottom: 30px;
            overflow: hidden;
            border-bottom: 1px solid #444;
            padding-bottom: 20px;
            animation: slideIn 1s ease-in-out;
        }
        .contact-info h2 {
            color: #ff5733;
            margin-bottom: 5px;
        }
        .contact-info p {
            margin: 5px 0;
            color: #fff;
        }
        .contact-info img {
            width: 100px;
            height: 100px;
            border-radius: 50%;
            margin-right: 10px;
            float: left;
            animation: rotateIn 1s ease-in-out;
        }
        .contact-info .details {
            margin-left: 120px;
        }

        @keyframes slideIn {
            0% {
                opacity: 0;
                transform: translateY(-50px);
            }
            100% {
                opacity: 1;
                transform: translateY(0);
            }
        }

        @keyframes rotateIn {
            0% {
                transform: rotateY(90deg);
            }
            100% {
                transform: rotateY(0);
            }
        }

        @keyframes fadeIn {
            0% {
                opacity: 0;
            }
            100% {
                opacity: 1;
            }
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


    <div class="container">
        <h1>Contact Us</h1>
        <div class="contact-info">
            <img src="img/girl.avif" alt="Ishita Deodhar">
            <div class="details">
                <h2>Ishita Deodhar</h2>
                <p>Contact: +91 9810762506</p>
                <p>Mail: ishita@gmail.com</p>
                <p>Location: Karnataka, Udupi</p>
            </div>
        </div>
        <div class="contact-info">
            <img src="img/guy.jpg" alt="Amritya Singh">
            <div class="details">
                <h2>Amritya Singh</h2>
                <p>Contact: +91 8088246223</p>
                <p>Mail: amritya2021@gmail.com</p>
                <p>Location: Karnataka, Udupi</p>
            </div>
        </div>
    </div>


    <!-- Bootstrap JS Bundle with Popper -->
<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.0/jquery.min.js" integrity="sha512-1KjoqZNJnYIFkS28UfYE2w38F5VhOatpl69MLZZj9emVhz+R7NhAe1b+eVNZ+BT+mRplVI3a31f1A9e66QTuxw==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.6/dist/umd/popper.min.js" integrity="sha384-Px/Xe6nFmxQVKlJ+jPxzDc5q8aunvoMTrhnkzE8PqPmv2Ws0XhF2GtR2OjJ0niF2" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/5.3.3/js/bootstrap.min.js" integrity="sha384-Tmdw4bsx6/Kh4oxx2X7ddQPh6OrQxal6HJhuRp0Kt2KLIwrV5Rla4KNEz1U8vxdE" crossorigin="anonymous"></script>

</body>
</html>