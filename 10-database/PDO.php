<?php

require_once 'User.php';

use Season\Model\User;

//$params = [PDO::ATTR_PERSISTENT => true];

try {
    //$connection = new PDO('mysql:dbname=test;host=127.0.0.1', 'php', 'senha');
    $connection = new PDO('sqlite::memory:');
    
} catch(PDOException $e) {
    echo $e->getMessage();
    
    die();
}
/*
var_dump($connection->exec('CREATE DATABASE test;'));
var_dump($connection->exec('USE DATABASE test;'));

var_dump($connection);

foreach ($connection->query('SHOW TABLES;', PDO::FETCH_OBJ) as $row){
    echo $row->Tables_in_test;
}


/*
$result = $stm->fetchAll(PDO::FETCH_OBJ);
//$result = $stm->fetchAll(PDO::FETCH_ASSOC);


foreach ($result as $row){
    
    //echo $row['Tables_in_test'];
    echo $row->Tables_in_test;
    
    //var_dump($row);
}*/

var_dump($connection->query('CREATE TABLE user (id integer not null, name varchar(25), idade integer);'));

$stment = $connection->prepare('INSERT INTO user VALUES (:id, :name, :idade);');
$stment->bindParam(':id', $id, PDO::PARAM_INT);
$stment->bindParam(':name', $name, PDO::PARAM_STR, 25);
$stment->bindParam(':idade', $idade, PDO::PARAM_INT);

$id = 1;
$name = 'Joao';
$idade = 18;

var_dump($stment->execute());

$stm = $connection->query('SELECT * FROM user;');

$users = $stm->fetchAll(PDO::FETCH_CLASS, User::class);

foreach ($users as $user) {
    echo $user;
}

$connection = null;
