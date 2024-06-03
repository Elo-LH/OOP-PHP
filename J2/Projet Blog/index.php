<?php


//Retrieve route from url
if (!array_filter($_GET)) {
    $route = null;
} else {
    if (isset($_GET['route'])) {
        $route = $_GET['route'];
    } else {
        $route = null;
    };
}

require_once "models/User.php";
require_once "models/Post.php";
require_once "models/Category.php";
require_once "managers/AbstractManager.php";
require_once "managers/UserManager.php";
require_once "managers/CategoryManager.php";
require_once "managers/PostManager.php";
require_once "templates/layout.phtml";
