<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $fullname = $_POST['fullname'];
    $email = $_POST['email'];
    $password = $_POST['password'];

    // Here you can add code to save the data to a database
    // For example, using MySQLi or PDO

    echo "Account created successfully!";
}
?>
