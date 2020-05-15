<?php
include_once 'models/Database.php';
include_once 'models/Answer.php';
include_once 'models/Question.php';
include_once 'models/User.php';

$conn = new Database();
$answer = new Answer();
$question = new Question();
$user = new User();




//function that does security checks on form input
function test_input($data) {
    $data = trim($data);
    $data = stripslashes($data);
    $data = htmlspecialchars($data);
    return $data;
}
?>