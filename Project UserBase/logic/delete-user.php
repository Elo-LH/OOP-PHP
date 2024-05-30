<?php

require "../managers/UserManager.php";
$instance = new UserManager();
$delete = $instance->deleteUsers();

header('Location: ../index.php');
