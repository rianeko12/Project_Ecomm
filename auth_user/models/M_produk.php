<?php

class M_produk extends CI_Model{
    public function tampil_data(){

        return $this->db->get('tbl_produk');
    }

    public function input_data($data){
        $this->db->insert('tbl_produk', $data);
    }

    public function find($id){
        $result = $this->db->where('id_produk', $id)
                           ->limit(1)
                           ->get('tbl_produk');
        
    if ($result->num_rows() > 0) {
            return $result->row();
        }else {
            return array();
        }
    }

    public function detail_data($id = NULL){
        $query = $this->db->get_where('tbl_produk',array('id_produk' => $id))->row();
        return $query;
    }

    public function hapus_data($id_produk, $table){
        $this->db->where($$id_produk);
        $this->db->delete($table);
    }

    public function edit_data($id_produk, $table){
        return $this->db->get_where($table, $id_produk);
    }

    public function update_data($id_produk, $data,$table){
        $this->db->where($id_produk);
        $this->db->update($table, $data);
    }

}

?>