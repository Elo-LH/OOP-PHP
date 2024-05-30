<?php

require "managers/UserManager.php";
$instance = new UserManager();
$users = $instance->loadUsers();
