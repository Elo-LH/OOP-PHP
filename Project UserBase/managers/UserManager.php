<?php

require "../models/User.php";

class UserManager
{

    private array $users = [];
    private PDO $db;

    public function __construct()
    {
        $this->db = new PDO(
            "mysql:host=localhost;port=3306;dbname=eloisele_hellard_userbase_poo",
            "root",
            ""
        );
    }

    public function getUsers(): array
    {
        return $this->users;
    }
    public function setUsers(array $users): void
    {
        $this->users = $users;
    }
    public function loadUsers(): void
    {
        return;
    }
    public function saveUser(): void
    {
        return;
    }
    public function deleteUsers(): void
    {
        return;
    }
}
