<?php

require_once "../models/User.php";
require_once "../managers/UserManager.php";

$instance = new UserManager();
$delete = $instance->deleteUsers();

header('Location: ../index.php');
