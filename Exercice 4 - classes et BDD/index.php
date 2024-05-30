<?php

require 'User.php';

$superman = [
    "first_name" => "Clark",
    "last_name" => "Kent",
    "email" => "clark.kent@test.fr"
];

$name = new User($superman['first_name'], $superman['last_name'], $superman['email']);

echo $name->getFirstName();
