<?php
include('connection.php');
session_start();

if(isset($_POST['sub'])) {
    $name=$_POST['name'];
    $address=$_POST['address'];
    $city=$_POST['city'];
    $age=$_POST['age'];
    $bgroup=$_POST['bgroup'];
    $email=$_POST['email'];
    $mno=$_POST['mno'];

    $q=$db->prepare("INSERT INTO receive_reg (name, age, address, city, email, contact, bgroup) VALUES (:name, :age, :address, :city, :email, :contact, :bgroup)");
    $q->bindValue(':name', $name);
    $q->bindValue(':age', $age);
    $q->bindValue(':address', $address);
    $q->bindValue(':city', $city);
    $q->bindValue(':email', $email);
    $q->bindValue(':contact', $mno);
    $q->bindValue(':bgroup', $bgroup);

    if($q->execute()) {
        $countQuery = $db->prepare("SELECT COUNT(*) AS count FROM receive_reg WHERE city = :city AND bgroup = :bgroup");
        $countQuery->bindValue(':city', $city);
        $countQuery->bindValue(':bgroup', $bgroup);
        $countQuery->execute();
        $result = $countQuery->fetch(PDO::FETCH_ASSOC);
        $bloodCount = $result['count'];
        echo "<p>In $city, there are $bloodCount units of blood available for receivers with your blood group.</p>";
    } else {
        echo "<script>alert('Receiver Registration Failed')</script>";
    }
}
?>

<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Receiver Registration</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <!--<link rel="stylesheet" type="text/css" href="css/s1.css">-->
    <style>
        body {
            background-color: black !important;
            color: white;
        }
        .navbar {
            background-color: red; /* Change navbar background color to red */
            margin-bottom: 0; /* Remove margin bottom */
        }
        /* Apply black background to form container */
        .container {
            background-color: black !important; /* Add !important to override other styles */
            color: white; /* Change text color to white */
            padding: 20px;
            border-radius: 10px;
            margin-top: 20px; /* Add margin to separate from navbar */
        }
        /* Change navbar button text color to white */
        .navbar .navbar-brand,
        .navbar-nav .nav-link {
            color: white;
        }
        /* Set active link color */
        .navbar-nav .nav-link.active {
            color: white !important;
        }
    </style>
</head>
<body>
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
<div id="full">
    <div id="inner_full">
        <div id="body">
            <?php
            $un=$_SESSION['un'];    
            if(!$un)
            {
                header("Location:index.php");
            }
            ?>
            <h1>Receiver Registration</h1> <!-- Title added -->
            <!-- Apply black background to form container -->
            <div class="container">
                <form action="" method="post">
                    <div class="mb-3">
                        <label for="name" class="form-label">Enter Name</label>
                        <input type="text" class="form-control" id="name" name="name" placeholder="Enter Name">
                    </div>
                    <div class="mb-3">
                        <label for="address" class="form-label">Enter Address</label>
                        <textarea class="form-control" id="address" name="address" placeholder="Enter Address"></textarea>
                    </div>
                    <div class="row mb-3">
                        <div class="col">
                            <label for="city" class="form-label">Enter City</label>
                            <input type="text" class="form-control" id="city" name="city" placeholder="Enter City">
                        </div>
                        <div class="col">
                            <label for="age" class="form-label">Enter Age</label>
                            <input type="text" class="form-control" id="age" name="age" placeholder="Enter Age">
                        </div>
                    </div>
                    <div class="row mb-3">
                        <div class="col">
                            <label for="bgroup" class="form-label">Select Blood Group</label>
                            <select class="form-select" id="bgroup" name="bgroup">
                                <option>O+</option>
                                <option>O-</option>
                                <option>AB+</option>
                                <option>AB-</option>
                                <option>A+</option>
                                <option>A-</option>
                                <option>B+</option>
                                <option>B-</option>
                            </select>
                        </div>
                        <div class="col">
                            <label for="email" class="form-label">Enter E-Mail</label>
                            <input type="text" class="form-control" id="email" name="email" placeholder="Enter E-Mail">
                        </div>
                    </div>
                    <div class="mb-3">
                        <label for="mno" class="form-label">Enter Mobile No.</label>
                        <input type="text" class="form-control" id="mno" name="mno" placeholder="Enter Mobile No">
                    </div>
                    <button type="submit" class="btn btn-primary" name="sub">Save</button>
                </form>
            </div>
            <?php
            if(isset($_POST['sub']))
            {
                $name=$_POST['name'];
                $address=$_POST['address'];
                $city=$_POST['city'];
                $age=$_POST['age'];
                $bgroup=$_POST['bgroup'];
                $email=$_POST['email'];
                $mno=$_POST['mno'];
                
                $q=$db->prepare("INSERT INTO donor_registration(name,address,city,age,bgroup,email,mno) VALUES(:name,:address,:city,:age,:bgroup,:email,:mno)");
                $q->bindValue('name',$name);
                $q->bindValue('address',$address);
                $q->bindValue('city',$city);
                $q->bindValue('age',$age);
                $q->bindValue('bgroup',$bgroup);
                $q->bindValue('email',$email);
                $q->bindValue('mno',$mno);
                if($q->execute())
                {
                    echo "<script>alert('Donor Registration Successful')</script>";
                }
                else{
                    echo "<script>alert('Donor Registration Fail')</script>";
                }
            }
            ?>
        </div>
    </div>
</div>

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-TDor5Wudjx0rnyTO3jzxcR3tbC4L/9pH9/TUDNn+HzidzM+1MzT4D4uHqcWsJz5Q" crossorigin="anonymous"></script>
</body>
</html>
