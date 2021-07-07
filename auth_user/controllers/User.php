<?php
defined('BASEPATH') or exit('No direct script access allowed');
class User extends CI_Controller
{
    function __construct()
    {
        parent::__construct();
        $this->load->library(array('form_validation'));
        $this->load->helper(array('url', 'form'));
        $this->load->model('M_User'); //call model
    }   
    public function index()
    {
        $data['user'] = $this->M_User->tampil_data()->result();
        $this->load->view('templates/header');
        $this->load->view('templates/sidebar');
        $this->load->view('user/v_user', $data);
        $this->load->view('templates/footer');
    }

    public function tambah_aksi(){
        $this->load->model('M_User');

        $nama = $this->input->post('nama');
        $email = $this->input->post('email');
        $user = $this->input->post('username');
        $password = $this->input->post('password');

        $data = array(
            'nama'=>$nama,
            'email'=>$email,
            'username'=>$user,
            'password'=>$password
        );

        $this->M_User->input_data($data);
        redirect('/login/user/index');
    }

    public function detail($id){
        $this->load->model('M_User');
        $detail = $this->M_User->detail_data($id);
        $data['detail'] = $detail;
        $this->load->view('templates/header');
        $this->load->view('templates/sidebar');
        $this->load->view('user/v_detail_user', $data);
        $this->load->view('templates/footer');
    }

    public function edit($id){
        $id_user = array('id_user' => $id );
        $data['user'] = $this->M_User->edit_data($id_user, 'users')->result();
        $this->load->view('templates/header');
        $this->load->view('templates/sidebar');
        $this->load->view('user/v_edit_user', $data);
        $this->load->view('templates/footer');
    }

    public function update(){
        $id = $this->input->post('id');
        $nama = $this->input->post('nama');
        $email = $this->input->post('email');
        $user = $this->input->post('username');
        $password = $this->input->post('password');
        $jenis = $this->input->post('jenis');

        $data = array(
            'id_user' => $id,
            'nama' => $nama,
            'email' => $email,
            'username' => $user,
            'password' => $password,
            'jenis' => $jenis
        );

        $id_user = array('id_user' => $id );

        $this->M_User->update_data($id_user, $data, 'users');
        redirect('/login/user/index');
    }

    public function hapus($id){
        $id_user = array('id_user'=>$id);
        $this->M_User->hapus_data($id_user, 'users');
        redirect('/login/user/index');

    }
}
