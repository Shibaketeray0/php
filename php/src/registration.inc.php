<?php
if(isset($_POST['submit'])){
    $name = $_POST['first_name'];
    $pwd = $_POST['pwd'];
    $email = $_POST['email'];
}
include 'database.connection.php';
include 'registration.classes.php';
include 'registration.controller.php';

$user = new UserRegistration($name, $pwd, $email);
$user->Signup();
