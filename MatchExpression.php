<?php

$value = "A";
$result = "";

// menggunakan match expression untuk code yang lebih sederhana dibandingkan dengan switch statement mirip ternary operator pada if else
$resultMatch = match ($value) {
    "A", "B", "C" => "Anda lulus",
    "D" => "Anda tidak lulus",
    "E" => "Mungkin anda salah jurusan",
    default => "Nilai apa itu?"
};
echo $resultMatch . PHP_EOL;

// mirip dengan if tetapi dengan kondisi yang lebih banyak
$value = 80;

$result = match (true) {
    $value >= 80 => "Anda lulus dengan sangat baik",
    $value >= 70 => "Anda lulus dengan baik",
    $value >= 60 => "Anda lulus dengan cukup",
    $value >= 50 => "Anda tidak lulus",
    default => "Anda mungkin salah jurusan"
};

echo $result . PHP_EOL;

$name = "Mr. Iko";

$resultFunction = match (true) {
    str_contains($name, "Mr.") => "Hello Sir",
    str_contains($name, "Mrs.") => "Hello Maam",
    default => "Hello"
};

echo $resultFunction . PHP_EOL;

$value = "F";
// menggunakan switch case
switch ($value) {
    case "A":
    case "B":
    case "C":
        $result = "Anda Lulus";
        break;
    case "D":
        $result = "Anda tidak lulus";
        break;
    case "E":
        $result = "Mungkin anda salah jurusan";
        break;
    default:
        $result = "Nilai apa itu?";
}

echo $result;


