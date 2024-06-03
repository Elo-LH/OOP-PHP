<?php

class Weapon
{
    public function __construct(
        private string $name,
        private int $damages
    ) {
    }

    public function getName(): string
    {
        return $this->name;
    }

    public function setName(string $name): void
    {
        $this->name = $name;
    }

    public function getDamages(): string
    {
        return $this->damages;
    }

    public function setDamages(string $damages): void
    {
        $this->damages = $damages;
    }

    public function strike(): string
    {
        return "Mais aïeuh! <br>";
    }
}
