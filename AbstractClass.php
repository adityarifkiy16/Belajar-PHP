<?php
abstract class Umum
{
    public string $namaUmum;

    public function __construct($nama)
    {
        $this->namaUmum = $nama;
    }

    abstract protected function wargaNegara($negara);
}

class Masyarakat extends Umum
{
    private int $umur;
    public function __construct($umur, $nama)
    {
        parent::__construct($nama);
        $this->umur = $umur;
    }

    public function wargaNegara($negara, $kota = "Semarang"): void
    {
        echo "saya berwarganegara " . $negara . " kota " . $kota . PHP_EOL;
    }
}

$masyarakat = new Masyarakat(18, "budi");

// diakses menggunakan method
$masyarakat->wargaNegara("indonesia");
