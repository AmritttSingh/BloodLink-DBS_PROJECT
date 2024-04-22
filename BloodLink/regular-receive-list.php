<?php
include('connection.php');
session_start();
?>
<!DOCTYPE html>
<html>
<head>
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <title>Receiver List</title>
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
            <h1>Receiver List</h1>
            <center>
                <div id="form">
                    <table>
                        <tr>
                            <td><center><b><font color="gray">Name</font></b></center></td>
                            <td><center><b><font color="gray">Age</font></b></center></td>
                            <td><center><b><font color="gray">Address</font></b></center></td>
                            <td><center><b><font color="gray">City</font></b></center></td>
                            <td><center><b><font color="gray">E-Mail</font></b></center></td>
                            <td><center><b><font color="gray">Mobile Number</font></b></center></td>
                            <td><center><b><font color="gray">Blood Group</font></b></center></td>
                        </tr>
                        <?php
                        $q = $db->query("SELECT * FROM receive_reg");
                        while ($r1 = $q->fetch(PDO::FETCH_OBJ)) {
                            ?>
                            <tr>
                                <td><center><?= $r1->name; ?></center></td>
                                <td><center><?= $r1->age; ?></center></td>
                                <td><center><?= $r1->address; ?></center></td>
                                <td><center><?= $r1->city; ?></center></td>
                                <td><center><?= $r1->email; ?></center></td>
                                <td><center><?= $r1->contact; ?></center></td>
                                <td><center><?= $r1->bgroup; ?></center></td>
                            </tr>
                        <?php } ?>
                    </table>
                </div>
            </center>
        </div>
        <div id="footer"><h4 align="center">Made by Amrit and Ishita</h4>
            <p align="center"><a href="logout.php"><font color="white">logout</font></a></p>
        </div>
    </div>
</div>
</body>
</html>