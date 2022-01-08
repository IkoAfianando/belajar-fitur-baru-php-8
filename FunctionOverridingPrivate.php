<?php

class Manager
{
    private function test() : void
    {

    }
}

class VicePrecident extends Manager
{
    public function test(string $name) : string // sekarang diperbolehkan untuk membuat nama function dengan parent pada private
    {
        return $name;
    }
}
