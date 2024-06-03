<?php

require_once "../models/Post.php";
require_once "../managers/AbstractManager.php";
require_once "../managers/PostManager.php";

$id = $_GET['id'];

$instance = new PostManager();
$delete = $instance->delete($id);

header('Location: ../index.php?route=posts');
