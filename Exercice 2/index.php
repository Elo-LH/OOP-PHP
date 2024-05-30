<?php

require "Character.php";

$user1 = new Character(1);

echo $user1->getFullName();

echo $user1->setFirstName("Sarah");
echo $user1->setLastName("Connor");
echo "<br>";
echo $user1->getFullName();
