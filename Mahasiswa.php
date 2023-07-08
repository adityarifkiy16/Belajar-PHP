<?php

class Mahasiswa
{
    private string $name;
    private string $nim;

    public function __construct($nama = "", $nim = "")
    {
        $this->name = $nama;
        $this->nim = $nim;
    }

    public function __destruct()
    {
        echo "nama saya $this->name, dan nim saya $this->nim";
    }

    public function getName(): string
    {
        return $this->name;
    }

    public function setName($name): void
    {
        $this->name = $name;
    }

    public function getNim(): string
    {
        return $this->nim;
    }

    public function setNim($nim): void
    {
        $this->nim = $nim;
    }
}

$mahasiswaUsm = new Mahasiswa("Aditya Rifki", "G.231.22.0033");

var_dump($mahasiswaUsm instanceof Mahasiswa);
