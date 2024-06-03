<?php

require_once "../models/User.php";
require_once "../managers/AbstractManager.php";
require_once "../managers/UserManager.php";

$id  = $_GET['id'];

$instance = new UserManager();
$delete = $instance->delete($id);

header('Location: ../index.php?route=users');
