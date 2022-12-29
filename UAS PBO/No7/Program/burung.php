<?php
include "koneksi.php";

class Burung extends Hewan implements Jenis {
    private $kaki;
    public function __construct($nama, $jenis, $warna, $kaki)
    {
        parent::__construct($nama, $jenis, $warna);
        $this->kaki = $kaki;
    }
    public function bersuara()
    {
        return "Berkicau";
    }
    public function jenis_keluarga()
    {
        return "Aves";
    }
    public function jenis_aktivitas()
    {
        return "Berkicau";
    }
    public function jumlah_kaki(){
        return $this->kaki;
    }
}
?>