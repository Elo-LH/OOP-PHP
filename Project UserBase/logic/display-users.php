<?php

require "../managers/UserManager.php";

$instance = new UserManager();
$test = $instance->loadUsers();
var_dump($test);
