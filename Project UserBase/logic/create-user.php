<?php

require_once "../models/User.php";
require_once "../managers/UserManager.php";

if (!array_filter($_POST)) {
    header('Location: ../index.php');
} else {
    // Format POST data from form
    $username = $_POST['username'];
    $email = $_POST['email'];
    $password = $_POST['password'];
    $role = $_POST['role'];
}

$instance = new UserManager();
$create = $instance->saveUser($username, $email, $password, $role);
var_dump($create);
header('Location: ../index.php');
