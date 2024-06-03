<?php

require "Warrior.php";
require "Mage.php";

// Instanciez un `Character`, un `Warrior` et un `Mage` et faites les se présenter.

$character = new Character();
$character->setLife(100);
$character->setName('personnage');

$mage = new Mage(80, 'Gandalf', 60);

$warrior = new Warrior(140, 'Xena', 100);

// Puis pour le `Warrior`, faites le se présenter et annoncer son niveau de vie et d'énergie.

echo $warrior->fullIntroduction();

// Puis pour le `Mage`, faites le se présenter et annoncer son niveau de vie et de mana.

echo $mage->fullIntroduction();
