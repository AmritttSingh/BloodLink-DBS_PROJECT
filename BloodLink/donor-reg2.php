<?php
include('connection.php');
session_start();
?>
<!DOCTYPE html>
<html>
<head>
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
	<title>Donor Registration</title>
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
			<h1>Donor Registration</h1>
			<center><div id="form">
                <form action="" method="post">
                <table>
                    <tr>
                        <td width="200px" height="50px">Enter Name</td>
                        <td width="200px" height="50px"><input type="text" name="name" placeholder="Enter Name"></td>
                    </tr>    
                    <tr>
                        <td width="200px" height="50px">Enter Address</td>
                        <td width="200px" height="50px"><textarea name="address"></textarea></td>
                        <td width="200px" height="50px">Enter City</td>
                        <td width="200px" height="50px"><input type="text" name="city" placeholder="Enter City"></td>
                    </tr>
                    <tr>
                        <td width="200px" height="50px">Enter Age</td>
                        <td width="200px" height="50px"><input type="text" name="age" placeholder="Enter Age"></td>
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
                        <td width="200px" height="50px">Enter E-Mail</td>
                        <td width="200px" height="50px"><input type="text" name="email" placeholder="Enter E-Mail"></td>
                        <td width="200px" height="50px">Enter Mobile No.</td>
                        <td width="200px" height="50px"><input type="text" name="mno" placeholder="Enter Mobile No"></td>
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
            </div></center>
	 	</div>
		<div id="footer"><h4 align="center">Made by Amrit and Ishita</h4>
			<p align="center"><a href="logout.php"><font color="white">logout</font></a></p>
		</div>
	</div>
</div>
</body>
</html>