<?php

/* FINAL CLASS*/

final class Umum
{
    public string $namaUmum;

    public function __construct($nama)
    {
        $this->namaUmum = $nama;
    }
}

class Masyarakat extends Umum
{
}

$masyarakat = new Umum("budi");
echo $masyarakat->namaUmum . PHP_EOL;
