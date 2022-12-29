<?php

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

interface Jenis{
    public function jenis_keluarga();
    public function jenis_aktivitas();
}

class Kucing extends Hewan implements Jenis {
    public function __construct($nama, $jenis, $warna)
    {
        parent::__construct($nama, $jenis, $warna);
    }
    public function bersuara()
    {
        return "Meong Meong";
    }
    public function jenis_keluarga()
    {
        return "Felidae";
    }
    public function jenis_aktivitas()
    {
        return "Tidur";
    }
}
?>