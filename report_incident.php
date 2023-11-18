<?php
include 'config.php';

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Retrieve and validate incident data

    $userID = $_SESSION['user_id']; // Assuming the user is authenticated
    $details = $_POST['details'];
    $severity = $_POST['severity'];
    $dateOccurred = $_POST['date_occurred'];
    $timeOccurred = $_POST['time_occurred'];
    $location = $_POST['location'];

    $sql = "INSERT INTO Incidents (UserID, Details, Severity, DateOccurred, TimeOccurred, Location) 
            VALUES ('$userID', '$details', '$severity', '$dateOccurred', '$timeOccurred', '$location')";

    $result = $conn->query($sql);

    if ($result) {
        echo "Incident reported successfully!";
    } else {
        echo "Error: " . $sql . "<br>" . $conn->error;
    }
}

$conn->close();
?>