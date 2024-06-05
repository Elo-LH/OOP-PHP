<?php

function getAllUsers(PDO $db): array
{
    $query = $db->prepare('SELECT * FROM users ');
    $parameters = [];
    $query->execute($parameters);
    $users = $query->fetchAll(PDO::FETCH_ASSOC);
    $loadedUsers = [];
    //enter fetched users from DB into instances array
    foreach ($users as $user) {
        new User($user['id'], $user['username'], $user['email'], $user['password'], $user['role'], $user['created_at']);
        array_push($loadedUsers, $user);
    };

    return $loadedUsers;
};


function getUserById(int $id, PDO $db): ?User
{
    $query = $db->prepare('SELECT * FROM users WHERE id = :id');
    $parameters = [
        'id' => $id,
    ];
    $query->execute($parameters);
    $user = $query->fetch(PDO::FETCH_ASSOC);
    //create new User with fetched user
    if ($user === '') {
        return null;
    } else {

        $user = new User($user['id'], $user['username'], $user['email'], $user['password'], $user['role'], $user['created_at']);

        return $user;
    }
}
