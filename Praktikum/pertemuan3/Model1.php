<?php
class Model1 extends CI_Model
{
    //variabel
    public $nilai1, $nilai2, $hasil;

    //method penjumlah
    Public function jumlah($nil1=null, $nil2=null)
    {
        $this->nilai1 = $nil1;
        $this->nilai2 = $nil2;
        $this->hasil = $this->nilai1 + $this->nilai2;
        return $this->hasil;
    }
}