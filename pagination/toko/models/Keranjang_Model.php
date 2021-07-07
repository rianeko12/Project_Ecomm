<?php
if (!defined('BASEPATH')) exit('No direct script access allowed');
class Keranjang_model extends CI_Model
{
    public function tampil_data()
    {
        return $this->db->get('tbl_produk');
    }
    public function find($id)
    {
        $result = $this->db->where('id_produk', $id)
            ->limit(1)
            ->get('tbl_produk');

        if ($result->num_rows() > 0) {
            return $result->row();
        } else {
            return array();
        }
    }

    public function detail_data($id = NULL)
    {
        $query = $this->db->get_where('tbl_produk', array('id_produk' => $id))->row();
        return $query;
    }

    public function get_kategori_all()
    {
        $query = $this->db->get('tbl_kategori');
        return $query->result_array();
    }

    public function tambah_order($data)
    {
        $this->db->insert('tbl_order', $data);
        $id = $this->db->insert_id();
        return (isset($id)) ? $id : FALSE;
    }

    public function tambah_detail_order($data)
    {
        $this->db->insert('tbl_detail_order', $data);
    }

    public function tambah_pelanggan($data)
    {
        $this->db->insert('tbl_pelanggan', $data);
        $id = $this->db->insert_id();
        return (isset($id)) ? $id : FALSE;
    }

    public function getProduk($limit, $start, $keyword = null)
    {

        if ($keyword) {
            $this->db->like('nama_produk', $keyword);
        }

        return $this->db->get('tbl_produk', $limit, $start)->result();
    }


}
