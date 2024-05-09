<?php
session_start(); // Start the session

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Store form data in session variables
    $_SESSION["nome"] = $_POST["nome"];
    $_SESSION["email"] = $_POST["email"];
    // Store other form fields similarly

    // Redirect to user_data.php
    header("Location: user_data.php");
    exit;
}
?>
