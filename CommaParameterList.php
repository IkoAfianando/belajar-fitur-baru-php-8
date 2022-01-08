<?php

function sayHello(string $first, string $last)
{
    echo "$first $last" . PHP_EOL;
}

function sum(int ...$values)
{
    echo $values[0]. PHP_EOL;
}

sayHello(
    "iko",
    "afianando",
);

sum(1,2,3,4,5,6,7);

$array = [
    "firstName" => "Iko",
    "lastName" => "Iko",
    "houseName" => "Iko",
    "cityName" => "Iko",
    "provinceName" => "Iko",
];

echo implode($array);