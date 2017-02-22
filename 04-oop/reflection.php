<?php

$dateTime = new DateTime();

$reflection = new ReflectionClass($dateTime);

var_dump($reflection->getMethods()[3]);
