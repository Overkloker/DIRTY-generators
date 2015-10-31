<?php
header('Content-type: text/html; charset=utf-8');
require 'Names/NCL.NameCase.ua.php';

$vidm = strtolower($_GET['v']);
$name = $_GET['n'];

$v = [
    'називний' => 0,
    'родовий' => 1,
    'давальний' => 2,
    'знахідний' => 3,
    'орудний' => 4,
    'місцевий' => 5,
    'кличний' => 6
];

$nc = new NCLNameCaseUa();
$text = 'Я, {me_n} урочисто заявляю що {me_z}';
echo $nc->q($name)[$v[$vidm]];