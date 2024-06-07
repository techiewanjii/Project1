<?php
// Fetch data from the database (Assuming you have a database connection)
// $conn = new mysqli('hostname', 'username', 'password', 'database');
// $users = $conn->query("SELECT * FROM users");
// $requests = $conn->query("SELECT * FROM transportation_requests");
// $conn->close();
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Dashboard</title>
    <link rel="stylesheet" href="styles.css">
</head>
<body>
    <h2>Dashboard</h2>
    
    <h3>User Profiles</h3>
    <table>
        <tr>
            <th>Name</th>
            <th>Email</th>
        </tr>
        <?php
        // while($row = $users->fetch_assoc()) {
        //     echo "<tr><td>".$row['name']."</td><td>".$row['email']."</td></tr>";
        // }
        ?>
    </table>
    
    <h3>Transportation Requests</h3>
    <table>
        <tr>
            <th>Pickup Location</th>
            <th>Delivery Location</th>
            <th>Quantity</th>
            <th>Vehicle</th>
            <th>Status</th>
        </tr>
        <?php
        // while($row = $requests->fetch_assoc()) {
        //     echo "<tr><td>".$row['pickup_location']."</td><td>".$row['delivery_location']."</td><td>".$row['quantity']."</td><td>".$row['vehicle']."</td><td>".$row['status']."</td></tr>";
        // }
        ?>
    </table>
</body>
</html>
