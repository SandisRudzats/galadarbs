<?php
require_once 'helper.php';

$errors = [];

if(!isset($_POST['email'])) {
    $errors[] ='Email is required';
}
if (!filter_var($_POST['email'], FILTER_VALIDATE_EMAIL)) {
    $errors[] ='Email is not valid email adress';
    
}
if(strlen($_POST['password']) < 8) { //so izmantot lai username parbauditu ka ir kkas ierakstits
    $errors[] = 'Password must be at least 8 symbols long';
}
if($_POST['password'] !=$_POST['password2']) {
    $errors[] = 'Passwords do not match';

}
if(strlen($_POST['first_name']) <= 0) { //so izmantot lai username parbauditu ka ir kkas ierakstits
    $errors[] = 'Please enter your First name';
}
if(strlen($_POST['first_name']) <= 0) { //so izmantot lai username parbauditu ka ir kkas ierakstits
    $errors[] = 'Please enter your User name';
}
if (count($errors) > 0) {

    $_SESSION['registration_errors'] = $errors;
    header("Location: index.php?page=registration");
    exit;
}
