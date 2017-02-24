<?php

$password = 'alguma_senha';

// $10 é referente ao cost, que nesse caso é 10
$hash = '$2y$10$Krgxmaon7n1gkK6fDmh3S.m3uX2XFVF7xB5rIZB88bzNbJNzNFoxO';

// Um cost mais alto foi utilizado
$options = ['cost' => 11];

// Verifica a senha com o hash
if (password_verify($password, $hash)) {

    echo 'autenticado' . PHP_EOL;

    // O Hash é o mais recente com base nas configs passadas?
    // Imagine que o PASSWORD_DEFAULT foi alterado...
    if (password_needs_rehash($hash, PASSWORD_DEFAULT, $options)) {

        // Se sim, crie um novo hash dessa senha
        echo $newHash = password_hash($password, PASSWORD_DEFAULT, $options);

        // Passos para atualizar o hash no banco
    }

    // Usuário logado
}