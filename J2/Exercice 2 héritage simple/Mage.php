<?php
require_once "Character.php";

class Mage extends Character
{
    private int $mana;

    public function __construct(int $life, string $name, int $mana)
    {
        $this->life = $life;
        $this->name = $name;
        $this->mana = $mana;
    }

    public function getMana(): string
    {
        return $this->mana;
    }
    public function seMana(string $mana): void
    {
        $this->mana = $mana;
    }

    public function fullIntroduction(): string
    {
        return "Bonjour je m'appelle " . $this->name . "j'ai " . $this->life . " points de vie et " . $this->mana . " points de mana !";
    }
}
