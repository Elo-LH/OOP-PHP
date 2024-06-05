<?php

class User
{

    public function __construct(
        private ?int $id,
        private string $username,
        private string $email,
        private string $password,
        private string $createdAt,
        private string $role = "USER",

    ) {
    }

    public function getId(): ?int
    {
        return $this->id;
    }
    public function setId(?int $id): void
    {
        $this->id = $id;
    }

    public function getUsername(): string
    {
        return $this->username;
    }

    public function setUsername(string $username): void
    {
        $this->username = $username;
    }


    public function getEmail(): string
    {
        return $this->email;
    }
    public function setEmail(string $email): void
    {
        $this->email = $email;
    }

    public function getPassword(): string
    {
        return $this->password;
    }
    public function setPassword(string $password): void
    {
        $this->password = $password;
    }


    public function getRole(): string
    {
        return $this->role;
    }
    public function setRole(string $role): void
    {
        $this->role = $role;
    }

    public function getCreatedAt(): string
    {
        return $this->createdAt;
    }
    public function setCreatedAt(string $createdAt): void
    {
        $this->createdAt = $createdAt;
    }

    public function toArray(): array
    {
        $user = [
            "id" => $this->getId(),
            "username" => $this->getUsername(),
            "email" => $this->getEmail(),
            "password" => $this->getPassword(),
            "role" => $this->getRole(),

        ];
        return $user;
    }
}
