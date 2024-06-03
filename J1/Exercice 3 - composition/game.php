<?php

require "Character.php";

$user1 = new Character("Ragna");

$user1->getWeapon()->setName("Sword");
$user1->getWeapon()->setDamages(10);


echo $user1->getWeapon()->getName();
echo $user1->getWeapon()->getDamages();
echo $user1->fight();
