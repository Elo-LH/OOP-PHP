<?php

require 'User.php';
require 'connexion.php';


//query users from DB
$query = $db->prepare('SELECT * FROM users ');
$parameters = [];
$query->execute($parameters);
$users = $query->fetchAll(PDO::FETCH_ASSOC);

var_dump($users);

//enter fetched users from DB into instances array
foreach ($users as $user) {
    $name = new User($user['first_name'], $user['last_name'], $user['email']);
}

echo $name->getFirstName();

//Enter new user instances array
$newUser = new User("Clark", "Kent", "clark.kent@test.fr");

//query to insert user
$query = $db->prepare('INSERT INTO users(first_name, last_name, email) VALUES(:first_name, :last_name, :email)');
$parameters = [
    'first_name' => $newUser->getFirstName(),
    'last_name' => $newUser->getLastName(),
    'email' => $newUser->getEmail()
];
$query->execute($parameters);
$users = $query->fetch(PDO::FETCH_ASSOC);

//give DB ID to instances array
$newID = $db->lastInsertId();
echo $newID;
$newUser->setId($newID);

echo $newUser->getId();
