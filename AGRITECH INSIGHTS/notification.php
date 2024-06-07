<?php
// Assuming you have a way to fetch user phone numbers and the status of their deliveries
function sendSMS($phone, $message) {
    // Implement SMS sending functionality here
    // This could be an integration with an SMS API
}

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Fetch delivery details
    $delivery_id = $_POST['delivery_id'];
    $status = $_POST['status'];
    
    // Fetch user's phone number based on delivery_id
    // $conn = new mysqli('hostname', 'username', 'password', 'database');
    // $result = $conn->query("SELECT phone FROM users WHERE delivery_id='$delivery_id'");
    // $user = $result->fetch_assoc();
    // $phone = $user['phone'];
    
    $phone = "user's phone number";  // Placeholder
    $message = "Your delivery with ID $delivery_id has been marked as $status.";
    
    sendSMS($phone, $message);
    
    echo "Notification sent!";
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Send Notification</title>
    <link rel="stylesheet" href="styles.css">
</head>
<body>
    <h2>Send Delivery Notification</h2>
    <form method="post" action="notification.php">
        <label for="delivery_id">Delivery ID:</label>
        <input type="text" id="delivery_id" name="delivery_id" required><br>
        
        <label for="status">Status:</label>
        <select id="status" name="status" required>
            <option value="delivered">Delivered</option>
            <option value="cancelled">Cancelled</option>
        </select><br>
        
        <button type="submit">Send Notification</button>
    </form>
</body>
</html>
