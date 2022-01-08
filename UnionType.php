<?php

class Example
{
    public string|int|bool|array $data; // dapat untuk memilih lebih dari satu tipe data yang kita inginkan
}

$example = new Example();
$example->data = "Iko";
$example->data = false;
$example->data = [];
$example->data = 1;

// bisa juga di dalam sebuah function
function sampleFunction(string|array $data) : string | array // bisa juga diletakkan di dalam sebuah return value
{
    if (is_array($data)) {
        return ["Array"];
    } else if (is_string($data)) {
        return "String";
    }
}

var_dump(sampleFunction("Iko"));
var_dump(sampleFunction([]));