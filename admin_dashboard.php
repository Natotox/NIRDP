<?php
session_start();
include 'config.php';

// Check if the user is an admin
if ($_SESSION['user_role'] !== 'admin') {
    header("Location: login.php"); // Redirect to login if not an admin
    exit();
}

// Admin dashboard content here
?>