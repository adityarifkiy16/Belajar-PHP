<?php

trait berkembangBiak
{
    public function melahirkan()
    {
        echo "{$this->name} melahirkan" . PHP_EOL;
        $mamal = true;
    }

    public function bertelur()
    {
        echo "{$this->name} bertelur" . PHP_EOL;
        $mamal = false;
    }
}

class Creatures
{
    use berkembangBiak;

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

$human = new Creatures("bedu");
$human->melahirkan();
