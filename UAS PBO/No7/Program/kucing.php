<?php
include "koneksi.php";

class Kucing extends Hewan implements Jenis {
    private $kaki;
    public function __construct($nama, $jenis, $warna, $kaki)
    {
        parent::__construct($nama, $jenis, $warna);
        $this->kaki = $kaki;
    }
    public function bersuara()
    {
        return "Meong";
    }
    public function jenis_keluarga()
    {
        return "Felidae";
    }
    public function jenis_aktivitas()
    {
        return "Tidur";
    }
    public function jumlah_kaki(){
        return $this->kaki;
    }
}
?>