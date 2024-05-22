<?php
session_start();
include 'config.php'; 

$conn = mysqli_connect($host, $user, $password, $db); // Connect to the database using the variables from config.php

if (!$conn) {
    die("Connection failed: " . mysqli_connect_error());
}

if (isset($_POST['submit'])) {
    $firstname = $_POST['firstname'];
    $lastname = $_POST['lastname'];
    $email = $_POST['email'];
    $phone = $_POST['phone'];
    $message = $_POST['message'];
    
    $insert = "INSERT INTO contact_us (firstname, lastname, email, phone, message) VALUES ('$firstname', '$lastname', '$email', '$phone', '$message')";

    if (mysqli_query($conn, $insert)) {
        $_SESSION['message'] = "Your application was sent successfully.";
        header('Location: contact.html');
        exit();
    } else {
        echo "Error: " . $insert . "<br>" . mysqli_error($conn);
    }
}

mysqli_close($conn);
