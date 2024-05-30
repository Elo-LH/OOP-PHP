<?php

require 'User.php';
require 'connexion.php';


//query first user from DB
$query = $db->prepare('SELECT * FROM users ');
$parameters = [];
$query->execute($parameters);
$users = $query->fetchAll(PDO::FETCH_ASSOC);

var_dump($users);

foreach ($users as $user) {
    $name = new User($user['first_name'], $user['last_name'], $user['email']);
}


echo $name->getFirstName();
