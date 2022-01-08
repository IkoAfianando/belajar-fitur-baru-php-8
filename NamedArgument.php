<?php

function sayHello(string $first, string $last = "", string $fullName): void
{
    echo "Hello $first, $last, $fullName" . PHP_EOL;
}

// withour named argument tidak bisa dibolah balik
sayHello("Iko", "Afianando", "Iko Afianando");
//sayHello("Iko", "Afianando"); // error

// with named argument
sayHello(last: "Afianando", first: "Iko", fullName: "Iko Afianando");
sayHello("Iko", fullName: "Iko Afianando"); // langsung saja
