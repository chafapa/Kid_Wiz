<?php
session_start();
function userLogin()
{
    if (!($_SESSION['personid'])) {
        header("Location: ../login/login_view.php");
        die();
    }
    return true;
}

function userId()
{
    if (!isset($_SESSION['role'])) {
        return false;
    }
    return $_SESSION['role'];
}

function userAvailable()
{
    if ($_SESSION['role'] == 1) {
        return;
    } else {
        // projects page for users !! create!!
        header("Location: ../view/user_home.php");
    }
}