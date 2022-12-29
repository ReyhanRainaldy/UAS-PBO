<?php
include "koneksi.php";

class Anjing extends Hewan implements Jenis {
    private $kaki;
    public function __construct($nama, $jenis, $warna, $kaki)
    {
        parent::__construct($nama, $jenis, $warna);
        $this->kaki = $kaki;
    }
    public function bersuara()
    {
        return "Gukguk";
    }
    public function jenis_keluarga()
    {
        return "Canidae";
    }
    public function jenis_aktivitas()
    {
        return "Bermain";
    }
    public function jumlah_kaki(){
        return $this->kaki;
    }
}
?>