<?php
defined('BASEPATH') OR exit('No direct script access allowed');
class M_User extends CI_Model{
    public function tampil_data()
    {
        return $this->db->get('users');
    }

    public function input_data($data){
        $this->db->insert('users', $data);
    }

    public function detail_data($id = NULL){
        $query = $this->db->get_where('users',  array('id_user' => $id ))->row();
        return $query;
    }

    public function edit_data($id_user, $table){
        return $this->db->get_where($table, $id_user);
    }

    public function update_data($id_user, $data, $table){
        $this->db->where($id_user);
        $this->db->update($table, $data);
    }

    public function hapus_data($id_user, $table){
        $this->db->where($id_user);
        $this->db->delete($table);
    }
}