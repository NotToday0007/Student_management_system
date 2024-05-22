<?php
session_start();

$host = "localhost";
$user = "root";
$password = "";
$db = "student_management_system";
$conn = mysqli_connect($host, $user, $password, $db);

if (!$conn) {
    die("Connection failed: " . mysqli_connect_error());
}

if (isset($_POST['submit'])) {
    $name = mysqli_real_escape_string($conn, $_POST['name']);
    $email = mysqli_real_escape_string($conn, $_POST['email']);
    $pass = md5($_POST['password']);
    $cpass = md5($_POST['cpassword']);
    $user_type = $_POST['user_type'];

    $select = "SELECT * FROM user_form WHERE email = '$email' && password = '$pass'";
    $result = mysqli_query($conn, $select);

    if (mysqli_num_rows($result) > 0) {
        $error[] = 'User already exists!';
    } else {
        if ($pass != $cpass) {
            $error[] = 'Passwords do not match!';
        } else {
            $insert = "INSERT INTO user_form (name, email, password, user_type) VALUES ('$name', '$email', '$pass', '$user_type')";
            mysqli_query($conn, $insert);
            header('Location: login.html');
            exit(); // Ensure that the script stops execution after redirection
        }
    }
}
mysqli_close($conn);
