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
    public function loadUsers(): array
    {
        $query = $this->db->prepare('SELECT * FROM users ');
        $parameters = [];
        $query->execute($parameters);
        $users = $query->fetchAll(PDO::FETCH_ASSOC);
        $loadedUsers = [];
        //enter fetched users from DB into instances array
        foreach ($users as $user) {
            new User($user['username'], $user['email'], $user['password'], $user['role']);
            array_push($loadedUsers, $user);
        };

        $this->setUsers($loadedUsers);
        return $this->users;
    }
    public function saveUser(): void
    {
        return;
    }
    public function deleteUsers(): void
    {
        if (isset($_GET['id'])) {
            $id = $_GET['id'];
            $query = $this->db->prepare('DELETE FROM users WHERE id = :id');
            $parameters = [
                'id' => $id,
            ];
            $query->execute($parameters);
            $isUserDeleted = $query->fetch(PDO::FETCH_ASSOC);
        }
    }
}
