<?php

class Creatures
{
    protected string $name;

    public function  __construct($name)
    {
        $this->name = $name;
    }

    public function eat()
    {
        echo "{$this->name} sedang makan" . PHP_EOL;
    }

    public function breath(): void
    {
        echo "{$this->name} sedang bernapas" . PHP_EOL;
    }
}

interface Animal
{
    // tidak boleh ada properties
    public  function makeSound(): void;
}

class Cat extends Creatures implements Animal
{
    public  function  makeSound(): void
    {
        echo "Miaw..." . PHP_EOL;
    }
}

$garry = new Cat("garry");
$garry->eat() . PHP_EOL;
$garry->breath() . PHP_EOL;
$garry->makeSound() . PHP_EOL;
