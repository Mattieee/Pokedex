<?php
include 'pdo.php';

function readuser(pdo $con) {
    $sql ='SELECT * FROM user';

    $stmt =$con->prepare($sql);
    $stmt->execute();

    $users = $stmt->fetchAll();

    return $users;
}


function createUser(PDO $con, array $user) {
    $sql = 'INSERT INTO user(username, age, permission) VALUES (:username, :age, :permission)';

    $stmt = $con->prepare($sql);
    $stmt->execute($user);
}

function createPokemon(PDO $con, array $pokemon) {
    $sql = 'INSERT INTO pokemon (name, type, strength, vitality, user_id) VALUES (:name, :type, :strength, :vitality, :user_id)';

    $stmt = $con->prepare($sql);
    $stmt->execute($pokemon);
}
?>


