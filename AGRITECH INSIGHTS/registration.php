<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Capture form data
    $name = $_POST['name'];
    $email = $_POST['email'];
    $password = $_POST['password'];
    
    // Hash the password
    $hashed_password = password_hash($password, PASSWORD_DEFAULT);
    
    // Insert into database (Assuming you have a database connection)
    // $conn = new mysqli('hostname', 'username', 'password', 'database');
    // $sql = "INSERT INTO users (name, email, password) VALUES ('$name', '$email', '$hashed_password')";
    // $conn->query($sql);
    // $conn->close();

    echo "Registration successful!";
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>User Registration</title>
    <link rel="stylesheet" href="styles.css">
</head>
<body>
    <h2>User Registration</h2>
    <form method="post" action="registration.php">
        <label for="name">Name:</label>
        <input type="text" id="name" name="name" required><br>
        
        <label for="email">Email:</label>
        <input type="email" id="email" name="email" required><br>
        
        <label for="password">Password:</label>
        <input type="password" id="password" name="password" required><br>
        
        <button type="submit">Register</button>
    </form>
</body>
</html>
