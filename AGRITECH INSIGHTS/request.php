<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Capture form data
    $pickup_location = $_POST['pickup_location'];
    $delivery_location = $_POST['delivery_location'];
    $quantity = $_POST['quantity'];
    $vehicle = $_POST['vehicle'];
    
    // Insert into database (Assuming you have a database connection)
    // $conn = new mysqli('hostname', 'username', 'password', 'database');
    // $sql = "INSERT INTO transportation_requests (pickup_location, delivery_location, quantity, vehicle) VALUES ('$pickup_location', '$delivery_location', '$quantity', '$vehicle')";
    // $conn->query($sql);
    // $conn->close();

    echo "Request submitted successfully!";
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Transportation Request</title>
    <link rel="stylesheet" href="styles.css">
</head>
<body>
    <h2>Transportation Request</h2>
    <form method="post" action="request.php">
        <label for="pickup_location">Pickup Location:</label>
        <input type="text" id="pickup_location" name="pickup_location" required><br>
        
        <label for="delivery_location">Delivery Location:</label>
        <input type="text" id="delivery_location" name="delivery_location" required><br>
        
        <label for="quantity">Quantity:</label>
        <input type="number" id="quantity" name="quantity" required><br>
        
        <label for="vehicle">Vehicle:</label>
        <select id="vehicle" name="vehicle" required>
            <option value="small_truck">Small Truck</option>
            <option value="large_truck">Large Truck</option>
        </select><br>
        
        <button type="submit">Submit Request</button>
    </form>
</body>
</html>
