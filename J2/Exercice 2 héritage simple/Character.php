<?php

class Character
{
    protected int $life;
    protected string $name;

    public function __construct()
    {
    }

    public function getLife(): string
    {
        return $this->life;
    }
    public function setLife(string $life): void
    {
        $this->life = $life;
    }

    public function getName(): string
    {
        return $this->name;
    }
    public function setName(string $name): void
    {
        $this->name = $name;
    }


    public function introduce(): string
    {
        return "Bonjour je m'appelle " . $this->name;
    }
}
