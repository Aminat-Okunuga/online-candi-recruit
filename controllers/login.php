<?php
session_start();
include_once "../auto_load.php";


if (isset($_POST['login'])) {
    $username = $_POST['username'];
    $password = $_POST['password'];

    if (empty($_POST['username'])) {
        $_SESSION['errorMessage'] = "Username field required";
        header('location: ../login.php');
    }
    if (empty($_POST['password'])) {
        $_SESSION['errorMessage'] = "Password field required";
        header('location: ../login.php');
    } else {
        if ($user->signInUser($username, $password)) {
            $_SESSION['user_id'] = $user->getUserId();
            header('location: ../test-instruction.php');
//            }
        } else {
            $_SESSION['errorMessage'] = "Wrong username or password";
            header('location: ../login.php');
        }
    }
}
?>