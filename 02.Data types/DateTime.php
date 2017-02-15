<?php

$data = strtotime('-1 day -1 month');
echo date('d/m/Y H:i:s', $data) . PHP_EOL;

$data = strtotime('24/06/2016');
var_dump($data); // false, invalid date
echo date('d/m/Y H:i:s', $data) . PHP_EOL;

// DateTime Construct doewnot accept unix timestamp by default
// Use @ + timestamp , or 'now'
$dateTime = new DateTime('@' . strtotime('-1 day -1 month'));

$dateTime->modify('+1 day -1 month +20 year');

echo $dateTime->format('d/m/Y H:i:s') . PHP_EOL;

$dataInput = '2016-06-15';

// Not so cool
$dataExplode = explode('-', $dataInput);
$data = $dataExplode[2] . '/' . $dataExplode[1] . '/' . $dataExplode[0];

echo $data . PHP_EOL;;

// A little better
if ($dataValida = strtotime($dataInput)) {
    echo date('d/m/Y H:i:s', $dataValida) . PHP_EOL;;
} else {
    echo 'formato invalido' . PHP_EOL;;
}

// Using DateTime
$dateTimeToday = DateTimeImmutable::createFromFormat('Y-m-d', $dataInput);

$a = 123;
$b = $a;

$dateTimeToday = clone $dateTime;
// see for DateInterval details: http://php.net/manual/en/dateinterval.construct.php
$dateTime->add(new DateInterval('P4D'));

/*
// Instead clone, we can use DateTimeImmutable PHP 5.5 +

$dateTimeToday = new DateTimeImmutable('-1 days');
$dateTime = $dateTimeToday->add(new DateInterval('P4D'));

*/

echo $dateTime->format('d/m/Y H:i:s') . PHP_EOL;

$interval = $dateTimeToday->diff($dateTime);
echo $interval->format('%R%a days') . PHP_EOL;

// DateTime Object can be comparable
var_dump($dateTimeToday->format('W') == $dateTime->format('W'));
var_dump($dateTimeToday < $dateTime);
var_dump($dateTimeToday > $dateTime);

var_dump($dateTimeToday <=> $dateTime);
