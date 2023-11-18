<?php
include 'config.php'; // Include the database connection script

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Retrieve user input and perform necessary validation

    $username = $_POST['username'];
    $email = $_POST['email'];
    $password = password_hash($_POST['password'], PASSWORD_BCRYPT);

    $sql = "INSERT INTO Users (Username, Email, HashedPassword) VALUES ('$username', '$email', '$password')";
    $result = $conn->query($sql);

    if ($result) {
        echo "Registration successful!";
    } else {
        echo "Error: " . $sql . "<br>" . $conn->error;
    }
}

$conn->close();
?>
