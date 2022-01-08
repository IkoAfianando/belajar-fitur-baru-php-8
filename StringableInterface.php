<?php

function sayHello(Stringable $stringable) : void {
    echo "Hello {$stringable->__toString()}" . PHP_EOL;
}

class Person implements \Stringable
{
    public function __toString(): string
    {
        return "Person";
    }
}

sayHello(new Person());
