<?php

class Produk extends CI_Controller{
    function __construct()
    {
        parent::__construct();
        $this->load->library(array('form_validation'));
        $this->load->helper(array('url', 'form'));
        $this->load->model('M_produk'); //call model
    }   
    public function index(){
        $data['produk'] = $this->M_produk->tampil_data()->result();

        $this->load->view('templates/header');
        $this->load->view('templates/sidebar');
        $this->load->view('produk/v_produk', $data);
        $this->load->view('templates/footer');

    }

    public function tambah_aksi(){
        $this->load->model('M_produk');

        $nama = $this->input->post('nama');
        $harga = $this->input->post('harga');
        $kategori = $this->input->post('kategori');
        $gambar = $_FILES['foto'];
        if ($gambar='') {
            # code...
        }else{
            $config['upload_path']          = 'assets/gambar';
            $config['allowed_types']        = 'gif|jpg|png|jpeg';
            $config['max_size']             = 100;
            $config['max_width']            = 1024;
            $config['max_height']           = 768;
            $this->load->library('upload', $config);

            if (!$this->upload->do_upload('foto')) {
               echo "upload Gagal";
            } else {
                $gambar = $this->upload->data('file_name');
            }
        }

        $data = array(
            'nama_produk' => $nama,
            'harga'       => $harga,
            'kategori'    => $kategori,
            'gambar'      => $gambar
        );

        $this->M_produk->input_data($data);
        redirect('/login/produk/index');
    }

    public function detail($id){
        $detail = $this->M_produk->detail_data($id);
        $data['detail'] = $detail;
        $this->load->view('templates/header');
        $this->load->view('templates/sidebar');
        $this->load->view('produk/v_detail_produk', $data);
        $this->load->view('templates/footer');
    }
    public function hapus($id){
        $id_produk = array('id_produk'=> $id);
        $this->M_produk->hapus_data($id_produk, 'tbl_produk');
    }

    public function edit($id){
        $id_produk = array('id_produk' => $id );
        $data['produk'] = $this->M_produk->edit_data($id_produk, 'tbl_produk')->result();
        $this->load->view('templates/header');
        $this->load->view('templates/sidebar');
        $this->load->view('produk/v_edit_produk', $data);
        $this->load->view('templates/footer');
    }

    public function update(){
        $id = $this->input->post('id');
        $nama = $this->input->post('nama');
        $harga = $this->input->post('harga');
        $deskripsi = $this->input->post('deskripsi');
        $kategori = $this->input->post('kategori');

        $data = array(
            'nama_produk' => $nama,
            'harga'       => $harga,
            'kategori'    => $kategori,
            'deskripsi'      => $deskripsi
        );

        $id_produk = array(
            'id_produk' => $id
        );
        $this->M_produk->update_data($id_produk,$data,'tbl_produk');
        redirect('login/produk');
    }
}

?>