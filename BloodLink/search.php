<?php
include('connection.php');

if(isset($_GET['city'])) {
    $city = $_GET['city'];
    
    $query = "SELECT donor_registration.*, ngo.name AS ngo_name 
              FROM donor_registration 
              INNER JOIN ngo ON donor_registration.city = ngo.city 
              WHERE donor_registration.city = :city";
    
    $stmt = $db->prepare($query);
    $stmt->bindParam(':city', $city);
    $stmt->execute();
    
    // Check if any records were found
    if($stmt->rowCount() > 0) {
        echo "<h2>Blood Stock in $city</h2>";
        echo "<table>";
        echo "<tr><th>Name</th><th>Quantity (ml)</th><th>NGO</th></tr>";
        
        while($row = $stmt->fetch(PDO::FETCH_ASSOC)) {
            echo "<tr>";
            echo "<td>{$row['name']}</td>";
            echo "<td>{$row['quantity']}</td>";
            echo "<td>{$row['ngo_name']}</td>";
            echo "</tr>";
        }
        
        echo "</table>";
    } else {
        echo "No blood stock available in $city";
    }
}
?>