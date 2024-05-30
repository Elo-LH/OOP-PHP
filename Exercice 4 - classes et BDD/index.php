<?php

require 'User.php';
require 'connexion.php';


//query first user from DB
$query = $db->prepare('SELECT * FROM users ');
$parameters = [];
$query->execute($parameters);
$user = $query->fetch(PDO::FETCH_ASSOC);

var_dump($user);


$name = new User($user['first_name'], $user['last_name'], $user['email']);

echo $name->getFirstName();
