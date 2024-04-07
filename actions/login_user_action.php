<?php
error_reporting(E_ALL);
ini_set("display_errors", 1);
session_start();
include "../settings/connection.php";

if (isset($_POST['submit'])) {
    function validate($data)
    {
        $data = trim($data);
        $data = stripslashes($data);
        $data = htmlspecialchars($data);
        return  $data;
    }


    $email = validate($_POST['email']);
    $password = validate($_POST['password']);
    if (empty($email)) {
        header("Location: ../login/login_view.php?error=User name is required!");
        exit();
    } else if (empty($password)) {
        header("Location: ../login/login_view.php?error=Password is required!");
        exit();
    } else {

         $sql = "Select * from `Users` where email = '$email' ";

 
        $result = mysqli_query($conn, $sql);
 
        if (mysqli_num_rows($result) === 1) {
 
            $row = mysqli_fetch_assoc($result);
            var_dump($row);
            if (password_verify($password, $row['password_hash'])) {
                $_SESSION['personid'] = $row['user_id'];
                $_SESSION['email'] = $row['email'];
                $_SESSION['firstn'] = $row['first_name'];
                $_SESSION['role'] = $row['role_id'];

                if ($_SESSION['role'] == 1) {
                    header("Location: ../admin/admin_dash.php");
                    exit();
                } else {
                    header("Location: ../view/user_home.php");
                    // create  a page that displays the projects 
                    exit();
                }
                
            } else {
                header("Location: ../login/login_view.php?error=Incorrect password");
                exit();
            }
        } else {
            header("Location: ../login/login_view.php?error=User does not exist");
            exit();
        }
    }
} 
