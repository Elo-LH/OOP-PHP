<?php

$host = "localhost";
$port = "3306";
$dbname = "eloisele_hellard_pooj1";
$connexionString = "mysql:host=$host;port=$port;dbname=$dbname";

$user = "root";
$password = "root";

$db = new PDO(
    $connexionString,
    $user,
    $password
);
