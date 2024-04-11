<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $username = $_POST["username"];
    $email = $_POST["email"];
    $password = $_POST["password"];
    
    $data = "Username: $username\nEmail: $email\nPassword: $password\n\n";
    
    // Append the data to a text file
    $file = fopen("registrations.txt", "a");
    fwrite($file, $data);
    fclose($file);
    
    // Redirect to the second page
    header("Location: page2.html");
    exit;
}
?>
