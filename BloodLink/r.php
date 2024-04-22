

<?php
include('connection.php');
session_start();
?>
<!DOCTYPE html>
<html>
<head>
    <title>Blood Stock</title>
    <link rel="stylesheet" type="text/css" href="css/s1.css">
    <style type="text/css">
        td {
            width: 200px;
            height: 40px;
        }
    </style>
</head>
<body>
<div id="full">
    <div id="inner_full">
        <div id="header"><h2><a href="admin-home.php" style="text-decoration:none;color:white;">Blood-Link</a></h2></div>
        <div id="body">
            <br>
            <?php
            $un = $_SESSION['un'];
            if (!$un) {
                header("Location:index.php");
            }
            ?>
            <h1>Blood Stock</h1>
            <!-- Search form -->
            <nav class="navbar navbar-expand-lg navbar-light bg-light">
                <form class="form-inline my-2 my-lg-0" action="search.php" method="GET">
                    <input class="form-control mr-sm-2" type="search" placeholder="Search by City" aria-label="Search" name="city">
                    <button class="btn btn-outline-success my-2 my-sm-0" type="submit">Search</button>
                </form>
            </nav>
            <br>
            <div id="fo">
                <table>
                    <tr>
                        <td><center><b><font color="gray">Name</font></b></center></td>
                        <td><center><b><font color="gray">Quantity (ml)</font></b></center></td>
                    </tr>

                    <!-- Query to fetch blood stock from donor_registration table -->
                    <?php
                    $query = "SELECT * FROM donor_registration";
                    $stmt = $db->query($query);
                    while ($row = $stmt->fetch(PDO::FETCH_ASSOC)) {
                        ?>
                        <tr>
                            <td><center><?php echo $row['name']; ?></center></td>
                            <td><center><?php echo $row['quantity']; ?></center></td>
                        </tr>
                    <?php
                    }
                    ?>
                </table>
            </div>
        </div>
        <div id="footer"><h4 align="center">Made by Amrit and Ishita</h4>
            <p align="center"><a href="logout.php"><font color="white">logout</font></a></p>
        </div>
    </div>
</div>
</body>
</html>



__________________
OG:
<?php
include('connection.php');
session_start();
?>
<!DOCTYPE html>
<html>
<head>
	<title>Donor Registration</title>
	<link rel="stylesheet" type="text/css" href="css/s1.css">
    <style type="text/css">
        td{
            width:200px;
            height:40px;
        }
    </style>

</head>
<body>
<div id="full">
	<div id ="inner_full">
		<div id="header"><h2><a href="admin-home.php" style="text-decoration:none;color:white;">Blood-Link</a></h2></div>
		<div id="body">
			<br>
			<?php
			$un=$_SESSION['un'];	
		 	if(!$un)
		 	{
		 		header("Location:index.php");
		 	}
			?>
			<h1>Blood Stock</h1>
			<center><div id="fo">
                <table>
                    <tr>
                        <td><center><b><font color="gray">Name</font></b></center></td>
                        <td><center><b><font color="gray">Quantity(ml)</font></b></center></td>
                    </tr>

                    <tr>
                        <td><center>A+</center></td>
                        <td><center>
                            <?php
                            $q=$db->query(" SELECT * FROM donor_registration WHERE bgroup='A+' ");
                                echo $row=$q->rowcount();
                            ?>
                        </center>
                    </tr>

                    <tr>
                        <td><center>A-</center></td>
                        <td><center>
                            <?php
                            $q=$db->query(" SELECT * FROM donor_registration WHERE bgroup='A-' ");
                                echo $row=$q->rowcount();
                            ?>
                        </center>
                    </tr>

                    <tr>
                        <td><center>B+</center></td>
                        <td><center>
                            <?php
                            $q=$db->query(" SELECT * FROM donor_registration WHERE bgroup='B+' ");
                                echo $row=$q->rowcount();
                            ?>
                        </center>
                    </tr>

                    <tr>
                        <td><center>B-</center></td>
                        <td><center>
                            <?php
                            $q=$db->query(" SELECT * FROM donor_registration WHERE bgroup='B-' ");
                                echo $row=$q->rowcount();
                            ?>
                        </center>
                    </tr>

                    <tr>
                        <td><center>O+</center></td>
                        <td><center>
                            <?php
                            $q=$db->query(" SELECT * FROM donor_registration WHERE bgroup='O+' ");
                                echo $row=$q->rowcount();
                            ?>
                        </center>
                    </tr>

                    <tr>
                        <td><center>O-</center></td>
                        <td><center>
                            <?php
                            $q=$db->query(" SELECT * FROM donor_registration WHERE bgroup='O-' ");
                                echo $row=$q->rowcount();
                            ?>
                        </center>
                    </tr>

                    <tr>
                        <td><center>AB+</center></td>
                        <td><center>
                            <?php
                            $q=$db->query(" SELECT * FROM donor_registration WHERE bgroup='AB+' ");
                                echo $row=$q->rowcount();
                            ?>
                        </center>
                    </tr>

                    <tr>
                        <td><center>AB-</center></td>
                        <td><center>
                            <?php
                            $q=$db->query(" SELECT * FROM donor_registration WHERE bgroup='AB-' ");
                                echo $row=$q->rowcount();
                            ?>
                        </center>
                    </tr>
                </table>  
            </div></center>
	 	</div>
		<div id="footer"><h4 align="center">Made by Amrit and Ishita</h4>
			<p align="center"><a href="logout.php"><font color="white">logout</font></a></p>
		</div>
	</div>
</div>
</body>
</html>

_______________________
OG2

<?php
include('connection.php');
session_start();

if(isset($_GET['city'])) {
    $city = $_GET['city'];
    // Query to fetch blood stock and NGO information for the entered city
    $query = "SELECT donor_registration.*, ngo.name AS ngo_name FROM donor_registration 
              LEFT JOIN ngo ON donor_registration.city = ngo.city 
              WHERE donor_registration.city = :city";
    $stmt = $db->prepare($query);
    $stmt->bindParam(':city', $city);
    $stmt->execute();
    $results = $stmt->fetchAll(PDO::FETCH_ASSOC);
}
?>

<!DOCTYPE html>
<html>
<head>
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
<title>Blood Stock</title>
<link rel="stylesheet" type="text/css" href="css/s1.css">
</head>
<body>
<div id="full">
    <div id ="inner_full">
        <div id="header"><h2><a href="admin-home.php" style="text-decoration:none;color:white;">Blood-Link</a></h2></div>
        <div id="body">
            <br>
            <?php
            $un=$_SESSION['un']; 
            if(!$un)
            {
                header("Location:index.php");
            }
            ?>
            <h1>Blood Stock</h1>
            <div class="container">
                <form class="form-inline my-2 my-lg-0" action="" method="GET">
                    <input class="form-control mr-sm-2" type="search" placeholder="Search by City" aria-label="Search" name="city">
                    <button class="btn btn-outline-success my-2 my-sm-0" type="submit">Search</button>
                </form>
            </div>
            <br>
            <?php if(isset($results) && !empty($results)): ?>
            <div id="fo" class="container">
                <h2>Blood Stock and NGOs in <?php echo $city; ?></h2>
                <table class="table">
                    <thead>
                        <tr>
                            <th>Name</th>
                            <th>Address</th>
                            <th>Blood Group</th>
                            <th>NGO</th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php foreach($results as $row): ?>
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
        <div id="footer"><h4 align="center">Made by Amrit and Ishita</h4>
            <p align="center"><a href="logout.php"><font color="white">logout</font></a></p>
        </div>
    </div>
</div>
</body>
</html>

__________________reg-msg_receive
<?php
include('connection.php');
session_start();
?>
<!DOCTYPE html>
<html>
<head>
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <title>Receiver Registration</title>
    <link rel="stylesheet" type="text/css" href="css/s1.css">
</head>
<body>
<div id="full">
    <div id ="inner_full">
        <div id="header"><h2><a href="admin-home.php" style="text-decoration:none;color:white;">Blood-Link</a></h2></div>
        <div id="body">
            <br>
            <?php
            $un=$_SESSION['un'];    
            if(!$un)
            {
                header("Location:index.php");
            }
            ?>
            <h1>Receiver Registration</h1>
            <center><div id="form">
                <form action="" method="post">
                <table>
                    <tr>
                        <td width="200px" height="50px">Enter Name</td>
                        <td width="200px" height="50px"><input type="text" name="name" placeholder="Enter Name"></td>
                    </tr>    
                    <tr>
                        <td width="200px" height="50px">Enter Age</td>
                        <td width="200px" height="50px"><input type="text" name="age" placeholder="Enter Age"></td>
                    </tr>
                    <tr>
                        <td width="200px" height="50px">Enter Address</td>
                        <td width="200px" height="50px"><textarea name="address" placeholder="Enter Address"></textarea></td>
                    </tr>
                    <tr>
                        <td width="200px" height="50px">Enter City</td>
                        <td width="200px" height="50px"><input type="text" name="city" placeholder="Enter City"></td>
                    </tr>
                    <tr>
                        <td width="200px" height="50px">Enter E-Mail</td>
                        <td width="200px" height="50px"><input type="text" name="email" placeholder="Enter E-Mail"></td>
                    </tr>
                    <tr>
                        <td width="200px" height="50px">Enter Mobile No.</td>
                        <td width="200px" height="50px"><input type="text" name="mno" placeholder="Enter Mobile No"></td>
                    </tr>
                    <tr>
                        <td width="200px" height="50px">Select Blood Group</td>
                        <td width="200px" height="50px">
                            <select name="bgroup">
                                <option>O+</option>
                                <option>O-</option>
                                <option>AB+</option>
                                <option>AB-</option>
                                <option>A+</option>
                                <option>A-</option>
                                <option>B+</option>
                                <option>B-</option>
                            </select>
                        </td>
                    </tr>
                    <tr>
                        <td><input type="submit" name="sub" value="Save"></td>
                    </tr>
                </table>
            </form>
            <?php
            if(isset($_POST['sub']))
            {
                $name=$_POST['name'];
                $age=$_POST['age'];
                $address=$_POST['address'];
                $city=$_POST['city'];
                $email=$_POST['email'];
                $mno=$_POST['mno'];
                $bgroup=$_POST['bgroup'];
                
                $q=$db->prepare("INSERT INTO receive_reg (name, age, address, city, email, contact, bgroup) VALUES (:name, :age, :address, :city, :email, :contact, :bgroup)");
                $q->bindValue(':name', $name);
                $q->bindValue(':age', $age);
                $q->bindValue(':address', $address);
                $q->bindValue(':city', $city);
                $q->bindValue(':email', $email);
                $q->bindValue(':contact', $mno);
                $q->bindValue(':bgroup', $bgroup);
                
                if($q->execute())
                {
                    echo "<script>alert('Receiver Registration Successful')</script>";
                }
                else
                {
                    echo "<script>alert('Receiver Registration Failed')</script>";
                }
            }
            ?>
            </div></center>
        </div>
        <div id="footer"><h4 align="center">Made by Amrit and Ishita</h4>
            <p align="center"><a href="logout.php

____________________________
reg rec







