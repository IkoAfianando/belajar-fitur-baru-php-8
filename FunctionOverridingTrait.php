<?php

trait SampleTrait{
    public abstract function sampleFunction(string $name) : string;
}

class SampleClass {
    use sampleTrait;

    public function sampleFunction(string $name): string // sekarang error bila kita ingin mengubah dari traidnya
    {

    }
}
