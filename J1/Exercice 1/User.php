<?php

class User
{


    public function __construct(
        private int $id,
        private string $username,
        private string $password
    ) {
    }

    /* Le getter de l'attribut name */
    public function getId(): int
    {
        return $this->id;
    }

    /* Le setter de l'attribut name */
    public function setId(int $id): void
    {
        $this->id = $id;
    }

    /* Le getter de l'attribut name */
    public function getUsername(): string
    {
        return $this->username;
    }

    public function setUsername(string $username): void
    {
        $this->username = $username;
    }

    public function getPassword(): string
    {
        return $this->password;
    }
    public function setPassword(string $password): void
    {
        $this->password = $password;
    }
}
