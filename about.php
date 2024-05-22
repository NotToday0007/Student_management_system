<?php
session_start();
include 'config.php'; 

$conn = mysqli_connect($host, $user, $password, $db); // Connect to the database using the variables from config.php

if (!$conn) {
    die("Connection failed: " . mysqli_connect_error());
}

if (isset($_POST['submit'])) {
    $email = $_POST['email'];
 
    
    $insert = "INSERT INTO about_us ( email) VALUES ('$email')";

    if (mysqli_query($conn, $insert)) {
        $_SESSION['message'] = "Your application was sent successfully.";
        header('Location: about.html');
        exit();
    } else {
        echo "Error: " . $insert . "<br>" . mysqli_error($conn);
    }
}

mysqli_close($conn);
