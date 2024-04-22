<?php
include('connection.php');
session_start();
?>
<!DOCTYPE html>
<html>
<head>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <title>Donor List</title>
    <style type="text/css">
        /* Custom CSS */
        body {
            background-color: #000; /* Set black background color for body */
            color: #fff; /* Set text color to white */
        }

        table {
            width: 100%; /* Set table width to 100% */
            color: #fff; /* Set text color to white */
        }

        th, td {
            text-align: center; /* Center-align table headers and data */
            padding: 10px; /* Add padding to table cells */
        }

        th {
            background-color: #222; /* Set background color for table headers */
        }

        td {
            background-color: #333; /* Set background color for table data cells */
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

    <div class="container mt-5">
        <div class="row">
            <div class="col">
                <h1 class="text-center mb-4">Donor Registration</h1>
                <table class="table table-dark table-striped">
                    <thead>
                        <tr>
                            <th>Name</th>
                            <th>Address</th>
                            <th>City</th>
                            <th>Age</th>
                            <th>Blood Group</th>
                            <th>E-Mail</th>
                            <th>Mobile Number</th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php
                        $q = $db->query("SELECT * FROM donor_registration");
                        while($r1 = $q->fetch(PDO::FETCH_OBJ)) {
                            ?>
                            <tr>
                                <td><?= $r1->name; ?></td>
                                <td><?= $r1->address; ?></td>
                                <td><?= $r1->city; ?></td>
                                <td><?= $r1->age; ?></td>
                                <td><?= $r1->bgroup; ?></td>
                                <td><?= $r1->email; ?></td>
                                <td><?= $r1->mno; ?></td>
                            </tr>
                        <?php
                        }
                        ?>
                    </tbody>
                </table>
            </div>
        </div>
    </div>

    <!-- Bootstrap JS Bundle with Popper -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.0/jquery.min.js" integrity="sha512-1KjoqZNJnYIFkS28UfYE2w38F5VhOatpl69MLZZj9emVhz+R7NhAe1b+eVNZ+BT+mRplVI3a31f1A9e66QTuxw==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.6/dist/umd/popper.min.js" integrity="sha384-Px/Xe6nFmxQVKlJ+jPxzDc5q8aunvoMTrhnkzE8PqPmv2Ws0XhF2GtR2OjJ0niF2" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/5.3.3/js/bootstrap.min.js" integrity="sha384-Tmdw4bsx6/Kh4oxx2X7ddQPh6OrQxal6HJhuRp0Kt2KLIwrV5Rla4KNEz1U8vxdE" crossorigin="anonymous"></script>
</body>
</html>
