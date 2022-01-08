<?php

function sayHello(?string $name) {
    if(is_null($name)) {
        throw new Exception("Tidak boleh null");
    }

    echo "Hello $name" . PHP_EOL;
}

// fitur baru throw expression pada php 8
function sayHelloExpression(?string $name) {

    $result = $name != null ? "Hello $name" : throw new Exception("Tidak boleh null");
    echo "Hello $name" . PHP_EOL;
}

try {
    sayHello(null);
} catch (Exception $e) {
}
try {
    sayHelloExpression(null);
} catch (Exception $e) {
}
