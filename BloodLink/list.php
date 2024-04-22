<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>List Page</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <style>
        body {
            background-color: #f8f9fa;
            padding-top: 60px; /* Adjust for the fixed navbar */
        }

        .container {
            max-width: 800px;
            margin: 0 auto;
        }

        .option {
            background-color: #fff;
            border-radius: 10px;
            padding: 20px;
            margin-bottom: 20px;
            box-shadow: 0 4px 6px rgba(0, 0, 0, 0.1);
        }

        .option h3 {
            margin-top: 0;
        }

        .option p {
            margin-bottom: 0;
        }
    </style>
</head>
<body>
<nav class="navbar navbar-expand-lg navbar-light navbar-red fixed-top">
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
                    <a class="nav-link" href="list.php">Lists</a>
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
    <h1>Lists</h1>
    <div class="option">
        <h3>Donor List</h3>
        <p>View the list of donors.</p>
        <a href="donor-list.php" class="btn btn-primary">Go to Donor List</a>
    </div>
    <div class="option">
        <h3>NGO List</h3>
        <p>View the list of NGOs.</p>
        <a href="ngo-list.php" class="btn btn-primary">Go to NGO List</a>
    </div>
    <div class="option">
        <h3>Blood Transfusion List</h3>
        <p>View the list of blood transfusions.</p>
        <a href="exchange-blood-list1.php" class="btn btn-primary">Go to Blood Transfusion List</a>
    </div>
</div>

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-TDor5Wudjx0rnyTO3jzxcR3tbC4L/9pH9/TUDNn+HzidzM+1MzT4D4uHqcWsJz5Q" crossorigin="anonymous"></script>
</body>
</html>