

<?php
include('connection.php');
//session_start();
?>

<!DOCTYPE html>
<html>
<head>
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
	<title>User Login</title>
	<link rel="stylesheet" type="text/css" href="css/s1.css">
</head>
<body>

<div id="full1">
	<div id ="inner_full">
		<div id="header"> <h2>Blood-Link</h2> </div>
		<div id="body">
			<br><br><br><br><br>
			<form action="" method="post">
			<table align="center">
				<tr>
					<td width="200px" height="70px"><b>Enter New Username</b></td>
					<td width="100px" height="50px"><input type="text" name="un" placeholder="Enter Username" style="width: 180px;height: 30px;border-radius: 10px;"></td>
				</tr>
				<tr>
					<td width="200px" height="70px"><b>Enter Password</b></td>
					<td width="100px" height="50px"><input type="text" name="ps" placeholder="Enter Password" style="width:180px;height: 30px;border-radius:10px;"></td>
				</tr>
				<tr>
					<td><input type ="submit" name="sub" value="Login" style="width:70px;height: 30px;border-radius: 5px;"></td>
				</tr>
			</table>
			</form>
			<?php
include('connection.php');
session_start();

if(isset($_POST['sub'])) {
    $un = $_POST['un'];
    $ps = $_POST['ps'];

    // Insert new user into the database
    $insert_query = $db->prepare("INSERT INTO ADMIN (uname, pass) VALUES (:un, :ps)");
    $insert_query->bindParam(':un', $un);
    $insert_query->bindParam(':ps', $ps);
    
    if($insert_query->execute()) {
        $_SESSION['un'] = $un;
        header("location:admin-home.php");
    } else {
        echo "<script>alert('Failed to create new user. Please try again.')</script>";
    }
}
?>

	 	</div>
		<div id="footer"><h4 align="center">Made by Amrit and Ishita</h4></div>
	</div>
</div>
</body>
</html>



_______________________









<?php
include('connection.php');
// session_start();

if(isset($_POST['sub'])) {
    $un = $_POST['un'];
    $ps = $_POST['ps'];

    // Insert new user into the database
    $insert_query = $db->prepare("INSERT INTO ADMIN (uname, pass) VALUES (:un, :ps)");
    $insert_query->bindParam(':un', $un);
    $insert_query->bindParam(':ps', $ps);
    
    if($insert_query->execute()) {
        // $_SESSION['un'] = $un;
        echo "<script>alert('New user created successfully!')</script>";
    } else {
        echo "<script>alert('Failed to create new user. Please try again.')</script>";
    }
}
?>

<!DOCTYPE html>
<html>
<head>
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <title>User Signup</title>
    <link rel="stylesheet" type="text/css" href="css/s2.css">
</head>
<body>

<div id="full1">
    <div id ="inner_full">
        <div id="header"> <h2>Welcome New User!</h2> </div>
        <div id="body">
            <br><br><br><br><br>
            <form action="" method="post">
            <table align="center">
                <tr>
                    <td width="200px" height="70px"><b>Enter New Username</b></td>
                    <td width="100px" height="50px"><input type="text" name="un" placeholder="Enter Username" style="width: 180px;height: 30px;border-radius: 10px;"></td>
                </tr>
                <tr>
                    <td width="200px" height="70px"><b>Enter Password</b></td>
                    <td width="100px" height="50px"><input type="password" name="ps" placeholder="Enter Password" style="width:180px;height: 30px;border-radius:10px;"></td>
                </tr>
                <tr>
                    <td colspan="2" align="center"><input type ="submit" name="sub" value="Sign Up" style="width:70px;height: 30px;border-radius: 5px;"></td>
                </tr>
            </table>
            </form>
        </div>
        <div id="footer"><h4 align="center">Made by Amrit and Ishita</h4></div>
    </div>
</div>
</body>
</html>
