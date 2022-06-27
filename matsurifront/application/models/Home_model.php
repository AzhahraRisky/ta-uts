<?php defined('BASEPATH') or exit('No direct script access allowed');

class Home_model extends CI_Model
{

    private $_table = "menu";


    public $kd_barang;

    public $nm_barang;

    public $satuan;

    public $deskripsi;

    public $harga;

    public $harga_beli;

    public $stok;

    public $stok_min;

    public $gambar = "default.jpg";

    public function getById($id)
    {

        return $this->db->get_where($this->_table, ["kd_barang" => $id])->row();
    }

    public function getAll()
    {

        return $this->db->get($this->_table)->result();
    }
}
