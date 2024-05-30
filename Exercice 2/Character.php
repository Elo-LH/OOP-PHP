<?php

class Character
{

    private string $firstName = "Alex";
    private string $lastName = "Traordinaire";

    public function __construct(private int $id)
    {
    }

    /* Le getter de l'attribut id */
    public function getId(): int
    {
        return $this->id;
    }

    /* Le setter de l'attribut id*/
    public function setId(int $id): void
    {
        $this->id = $id;
    }

    public function getFirstName(): string
    {
        return $this->firstName;
    }

    public function setFirstName(string $firstName): void
    {
        $this->firstName = $firstName;
    }

    public function getLastName(): string
    {
        return $this->lastName;
    }
    public function setLastName(string $lastName): void
    {
        $this->lastName = $lastName;
    }

    public function getFullName(): string
    {
        return "{$this->firstName} {$this->lastName}";
    }
}
