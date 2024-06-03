<?php

require_once "../models/User.php";
require_once "../managers/AbstractManager.php";
require_once "../managers/UserManager.php";

$user = new User($_POST['userId'], $_POST['username'], $_POST['email'], $_POST['password'], $_POST['role'], $_POST['createdAt']);
$instance = new UserManager();
$add = $instance->create($user);

// header('Location: ../index.php?route=users');
