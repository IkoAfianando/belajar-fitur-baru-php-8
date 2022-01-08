<?php

class ParentClass {
    public function method(string $name)
    {

    }
}

class childClass extends ParentClass
{
    public function method(string $name)
    {
        parent::method($name);
    }
}
