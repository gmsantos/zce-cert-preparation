<?php

try {
    $connection = new PDO('sqlite:mysqlitedb.db');    
} catch(PDOException $e) {
    echo $e->getMessage();
}

$connection->query('CREATE TABLE user (id integer not null, name varchar(25), idade integer);');

$connection->beginTransaction();

    $stment = $connection->prepare('INSERT INTO user VALUES (:id, :name, :idade);');
    $stment->bindParam(':id', $id, PDO::PARAM_INT);
    $stment->bindParam(':name', $name, PDO::PARAM_STR, 25);
    $stment->bindParam(':idade', $idade, PDO::PARAM_INT);

    $id = 1;
    $name = 'Joao';
    $idade = 18;

    $stment->execute();

$connection->commit();

$connection->beginTransaction();

    $stment = $connection->prepare('INSERT INTO user VALUES (:id, :name, :idade);');
    $stment->bindParam(':id', $id, PDO::PARAM_INT);
    $stment->bindParam(':name', $name, PDO::PARAM_STR, 25);
    $stment->bindParam(':idade', $idade, PDO::PARAM_INT);

    $id = 1;
    $name = 'Joao';
    $idade = 18;

    $stment->execute();

$connection->rollBack();

$stm = $connection->query('SELECT * FROM user;');
$users = $stm->fetchAll(PDO::FETCH_ASSOC);

echo count($users);
//var_dump($connection->exec('DELETE FROM user'));
