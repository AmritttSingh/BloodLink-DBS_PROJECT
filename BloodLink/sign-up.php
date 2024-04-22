<?php
// Include the file containing the database connection information
include('connection.php');

// Function to generate a random ID between 1 and 100
function generateRandomId() {
    return mt_rand(1, 100);
}

// Check if the form is submitted
if(isset($_POST['sub'])) {
    // Get the username and password from the form
    $un = $_POST['un'];
    $ps = $_POST['ps'];

    // Generate a random ID between 1 and 100
    $id = generateRandomId();

    // Check if the generated ID already exists in the admin table
    $check_query = $db->prepare("SELECT COUNT(*) AS count FROM admin WHERE id = :id");
    $check_query->bindParam(':id', $id);
    $check_query->execute();
    $count = $check_query->fetchColumn();

    // If the generated ID already exists, generate a new one until a unique ID is found
    while($count > 0) {
        $id = generateRandomId();
        $check_query->execute();
        $count = $check_query->fetchColumn();
    }

    // Insert new user into the database
    $insert_query = $db->prepare("INSERT INTO admin (id, uname, pass) VALUES (:id, :un, :ps)");
    $insert_query->bindParam(':id', $id);
    $insert_query->bindParam(':un', $un);
    $insert_query->bindParam(':ps', $ps);
    
    // Execute the insert query
    if($insert_query->execute()) {
        // If insertion is successful, set session variable
        $_SESSION['un'] = $un;
        // Show alert for successful registration
        echo "<script>alert('New user registration successful!')</script>";
        // Redirect to admin-home.php after 1 second
        echo "<script>setTimeout(function(){ window.location.href = 'index.php'; }, 1000);</script>";
        exit;
    } else {
        // If insertion fails, display error message
        echo "<script>alert('Failed to create new user. Please try again.')</script>";
    }
}
?>



<!DOCTYPE html>
<html>
<head>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <link rel="stylesheet" type="text/css" href="css/s2.css">
    <title>User Signup</title>
</head>
<body class="background-image">

<div class="center-box">
    <div class="login-box">
        <div id="header"> <h2>Welcome New User!</h2> </div>
        <div id="body">
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
    </div>
</div>

</body>
</html>



