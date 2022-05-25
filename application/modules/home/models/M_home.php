<?php
defined('BASEPATH') or exit('No direct script access allowed');
class M_home extends CI_Model
{

    function getProduk($id)
    {
        if ($id) {
            return $this->db->get_where('produk', ['id_produk'   => $id])->row();
        } else {
            return $this->db->get('produk')->result();
        }
    }

    function getProdukByKategory($id_kategori)
    {
        return $this->db->get_where('produk', ['id_kategori'   => $id_kategori])->result();
    }
}
