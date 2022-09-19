<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Latihan1 extends CI_Controller 
{

	public function index()
	{
		echo "<h1>Selamat Datang.. selamat belajar Web Programming II<h1>";
	}
    public function penjumlahan($n1, $n2)
    {
        $this->load->model('Model_latihan');
        $data['nilai1'] = $n1;
        $data['nilai2'] = $n2;
        $data['hasil'] = $this->Model_latihan->jumlah($n1, $n2);

        $this->load->view('view_latihan', $data);
        // $hasil = $this->Model_latihan->jumlah($n1, $n2);
        // echo "Hasil Penjumlahan dari". $n1 ." + ". $n2 ." = ".$hasil;
    }
}
