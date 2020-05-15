<?php
session_start();
include_once '../auto_load.php';


//for user registration
if (isset($_POST['register'])) {
    $username = test_input($_POST['username']);
    $password = test_input($_POST['password']);


    if (empty($_POST['username'])) {
        $_SESSION['errorMessage'] = "Username field required";
        header('location: ../sign_in_form.php');
    }
    if (empty($_POST['password'])) {
        $_SESSION['errorMessage'] = "Password field required";
        header('location: ../sign_in_form.php');
    } else {

        if ($user->addUser($username, $password)) {
            $user->addUser($username, $password);
            header('location: ../login.php');
        }
    }
}

