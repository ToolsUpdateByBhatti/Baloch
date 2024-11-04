<?php
// Check if the form is submitted
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Retrieve username and password from the form
    $username = $_POST["username"];
    $password = $_POST["password"];

    // Replace this with your actual authentication logic
    // For demonstration purposes, let's assume the credentials are correct
    $correctUsername = "admin";
    $correctPassword = "admin1133";

    if ($username == $correctUsername && $password == $correctPassword) {
        // Redirect to welcome.php if the login is successful
        header("Location: wellcome.php");
        exit();
    } else {
        // If credentials are incorrect, you might want to handle this differently
        echo "Incorrect username or password. Please try again.";
    }
}
?>