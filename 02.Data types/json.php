<?php

// Encode an array
$teams = [
    'times' => [
        'Corinthians' => [
            'estadio' => 'itaquera',
        ],
        'São Paulo' => [
            'estadio' => 'morumbi',
        ],
        'Santos',
        'Portuguesa',
        'Palmeiras'
    ]
]; 

// convert to json
$jsonString = json_encode($teams);

var_dump($jsonString);

var_dump(json_decode($jsonString)); // stdClass
var_dump((object) json_decode($jsonString, true)); // stdClass
var_dump(json_decode($jsonString, true)); // array
var_dump((array) json_decode($jsonString)); // array
