<?php
require_once "Character.php";

class Warrior extends Character
{
    private int $energy;

    public function __construct(int $life, string $name, int $energy)
    {
        $this->life = $life;
        $this->name = $name;
        $this->energy = $energy;
    }

    public function getEnergy(): string
    {
        return $this->energy;
    }
    public function setEnergy(string $energy): void
    {
        $this->energy = $energy;
    }

    public function fullIntroduction(): string
    {
        return "Bonjour je m'appelle " . $this->name . "j'ai " . $this->life . " points de vie et " . $this->energy . " points d'énergie !";
    }
}
