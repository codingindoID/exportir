<?php
defined('BASEPATH') or exit('No direct script access allowed');
class Home extends MY_Controller
{
    public function __construct()
    {
        parent::__construct();
        $this->load->model('M_home');
    }
    public function index()
    {
        $data = [
            'menu'      => $this->menu()
        ];
        // echo json_encode($data);
        $this->template->load('tema/index', 'index', $data);
    }

    function detilProduk($kategori)
    {
        $data = [
            'menu'         => $this->menu(),
            'produk'       => $this->M_home->getProdukByKategory($kategori)
        ];
        // echo json_encode($data);
        $this->template->load('tema/index', 'kategori_produk', $data);
    }
}
