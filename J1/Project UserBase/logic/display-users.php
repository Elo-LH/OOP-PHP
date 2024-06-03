<?php

require_once "managers/UserManager.php";

$instance = new UserManager();
$users = $instance->loadUsers();
