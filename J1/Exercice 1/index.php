<?php

require "User.php";


$user1 = new User(1, "Mari", "leGOAT");
$user2 = new User(2, "Hughes", 'cssLover');

echo $user1->getId();
echo $user1->getUsername();
echo $user1->getPassword();
echo "<br>";
echo $user2->getId();
echo $user2->getUsername();
echo $user2->getPassword();
