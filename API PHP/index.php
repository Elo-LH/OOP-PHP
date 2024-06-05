<?php

require_once "./models/User.php";
require_once "./logic/user_functions.php";

$db = new PDO(
    "mysql:host=localhost;port=3306;dbname=eloisele_hellard_userbase_poo",
    "root",
    ""
);

if (!array_filter($_GET)) {
    echo "error";
} else {
    var_dump($_GET);
    if ($_GET['route'] === 'get_all_users') {
        echo "Get All Users";
        $users = getAllUsers($db);
        $array = [];
        foreach ($users as $user) {

            array_push($array, $user);
        }
        echo json_encode($array);
    } else if ($_GET['route'] === 'get_user_by_id') {
        echo "Get ONE user";

        if (!isset($_GET['id']) || $_GET['id'] == "") {
            echo "no id given";
        } else {
            $user = getUserById($_GET['id'], $db);

            if ($user) {
                var_dump($user);
                $array = $user->toArray();
            }
            echo json_encode($array);
        }
    }
    echo "End";
}
