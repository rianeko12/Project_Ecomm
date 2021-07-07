<?php
defined('BASEPATH') or exit('No direct script access allowed');
class Keranjang extends CI_Controller
{
    function __construct()
    {
        parent::__construct();
        $this->load->library(array('form_validation', 'cart'));
        $this->load->helper(array('url', 'form'));
        $this->load->model('Keranjang_Model'); //call model
    }
    public function index()
    {
        $data['produk'] = $this->Keranjang_Model->tampil_data()->result();
        $this->load->view('shopping/v_keranjang');
        $this->load->view('templates/footer');
    }

    public function tambah_keranjang()
    {
        $data_produk = array(
            'id' => $this->input->post('id'),
            'name' => $this->input->post('nama'),
            'price' => $this->input->post('harga'),
            'gambar' => $this->input->post('gambar'),
            'qty' => $this->input->post('qty')
        );
        $this->cart->insert($data_produk);
        redirect('/toko/konsumen');
    }

    function hapus($rowid)
    {
        if ($rowid == "all") {
            $this->cart->destroy();
        } else {
            $data = array(
                'rowid' => $rowid,
                'qty' => 0
            );
            $this->cart->update($data);
        }
        redirect('/toko/keranjang');
    }

    public function check_out()
    {
        $data['kategori'] = $this->Keranjang_Model->get_kategori_all();
        $this->load->view('templates/header', $data);
        $this->load->view('shopping/check_out', $data);
        $this->load->view('templates/footer');
    }

    public function proses_order()
    {
        $this->load->model('Keranjang_Model');
        //-------------------------Input data pelanggan--------------------------
        $data_pelanggan = array(
            'nama_pelanggan' => $this->input->post('nama'),
            'email' => $this->input->post('email'),
            'alamat' => $this->input->post('alamat'),
            'telp_pelanggan' => $this->input->post('telp')
        );
        $id_pelanggan = $this->Keranjang_Model->tambah_pelanggan($data_pelanggan);
        //-------------------------Input data order------------------------------
        $data_order = array(
            'tanggal' => date('Y-m-d'),
            'id_pelanggan' => $id_pelanggan
        );
        $id_order = $this->Keranjang_Model->tambah_order($data_order);
        //-------------------------Input data detail order-----------------------		
        if ($cart = $this->cart->contents()) {
            foreach ($cart as $item) {
                $data_detail = array(
                    'id_order' => $id_order,
                    'id_produk' => $item['id'],
                    'qty' => $item['qty'],
                    'harga' => $item['price']
                );
                $proses = $this->Keranjang_Model->tambah_detail_order($data_detail);
            }
        }
        //-------------------------Hapus shopping cart--------------------------		
        $this->cart->destroy();
        $data['kategori'] = $this->Keranjang_Model->get_kategori_all();
        $this->load->view('templates/header', $data);
        $this->load->view('shopping/sukses', $data);
        $this->load->view('templates/footer');
    }

}
