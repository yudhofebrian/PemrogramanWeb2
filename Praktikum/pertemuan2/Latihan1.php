<?php
class Latihan1 extends CI_Controller
{
	public function index() 
	{
		echo "Welcome to web programming class 5C...";
	}

	public function penjumlahan($n1, $n2)
	{
		$this->load->model('Model1');
		$hasil = $this->Model1->jumlah($n1, $n2);
		echo "Hasil Penjumlahan dari ".$n1." + ".$n2." = ".$hasil;
	}
}