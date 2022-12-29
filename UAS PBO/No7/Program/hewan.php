<?php
include "koneksi.php";

abstract class Hewan {
    protected $nama;
    protected $jenis;
    protected $warna;

    public function __construct($nama, $jenis, $warna)
    {
        $this->nama = $nama;
        $this->jenis = $jenis;
        $this->warna = $warna;
    }

    abstract public function bersuara();
}
?>