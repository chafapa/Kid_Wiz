<?php
error_reporting(E_ALL);
ini_set("display_errors", 1);
include "../settings/connection.php";
if(isset($_POST['submit'])){
    $fname = mysqli_real_escape_string($conn, $_POST['firstname']);
    echo 1;
    $lname = mysqli_real_escape_string($conn, $_POST['lastname']);
    echo 2;
    $gender = mysqli_real_escape_string($conn, $_POST['gender']);
    echo 3;
    $dob = mysqli_real_escape_string($conn, $_POST['birthday']);
    echo 4;
    $phone = mysqli_real_escape_string($conn, $_POST['number']);
    echo 5;
    $email = mysqli_real_escape_string($conn, $_POST['email']);
    echo 6;
    $password = mysqli_real_escape_string($conn, $_POST['password']);
    echo 7;
    $hash = password_hash($password, PASSWORD_DEFAULT); 
    echo 8;
    $sql = "INSERT INTO `Users`(`first_name`, `last_name`, `gender`, `email`, `password_hash`, `date_of_birth`, `role_id`, `phone_number`) 
    VALUES ('$fname', '$lname', '$gender', '$email', '$hash', '$dob', '1', '$phone ' )";
    echo 't';
    $result = mysqli_query($conn, $sql);
    echo 9;
    if($result) {
        header("Location: ../login/login_view.php");
    } else {
        echo "Connection failed";
    }
}

?>