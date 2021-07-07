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

   
}

?>