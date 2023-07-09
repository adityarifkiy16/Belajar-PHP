<?php
class Umum
{
    public string $namaUmum;
    const KEWARGANEGARAAN = "Indonesia";

    public function __construct($nama)
    {
        $this->namaUmum = $nama;
    }
}

class Masyarakat extends Umum
{
    public function wargaNegara()
    {
        echo "saya berwarganegara " . self::KEWARGANEGARAAN . PHP_EOL;
    }
}

$masyarakat = new Masyarakat("budi");

// diakses menggunakan method
$masyarakat->wargaNegara();
// diakses secara langsung
echo Umum::KEWARGANEGARAAN;
