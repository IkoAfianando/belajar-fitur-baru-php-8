<?php

class Product
{
     // manual property promotion
//    public string $id;
//    public string $name;
//    public int $price;
//    public int $quantity;
//
//    public function __construct(string $id, string $name, int $price, int $quantity)
//    {
//        $this->id = $id;
//        $this->name = $name;
//        $this->price = $price;
//        $this->quantity = $quantity;
//    }

    // dapat membuat property langsung di dalam parameter yang terdapat dalam constructor
    public function __construct(public string $id, public string $name, public int $price, public int $quantity,
    private bool $expensive = false)
    {

    }


}

$product = new Product("1", "Pisang", 1000000, 1,);
var_dump($product);

echo $product->name . PHP_EOL;