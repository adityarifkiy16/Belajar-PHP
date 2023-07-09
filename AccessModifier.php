<?php

/* ACCESS MODIFIER DAN INHERINTANCE*/

class Umum
{
    public string $namaUmum;

    public function __construct($nama)
    {
        $this->namaUmum = $nama;
    }
}

class Security
{
    protected string $namaSecure;

    public function __construct($nama)
    {
        $this->namaSecure = $nama;
    }
}

class Satpol extends Security
{
    public int $umur;
    public function __construct($umur, $nama)
    {
        parent::__construct($nama);
        $this->umur = $umur;
    }

    public function __destruct()
    {
        echo "nama saya $this->namaSecure, umur saya $this->umur, dan saya Satpol";
    }
}

class Introvert
{
    private string $namaWibu;

    public function __construct($nama)
    {
        $this->namaWibu = $nama;
    }
}

class WibuBanget extends Introvert
{
    public int $umur;
    public function __construct($umur, $nama)
    {
        parent::__construct($nama);
        $this->umur = $umur;
    }

    public function __destruct()
    {
        echo "nama saya $this->namaWibu, umur saya $this->umur, dan saya Satpol";
    }
}

$masyarakat = new Umum("budi");
echo $masyarakat->namaUmum . PHP_EOL;

$satpam = new Satpol(20, "pujo");

$wibu = new WibuBanget(18, "nopal");
