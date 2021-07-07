<?php
defined('BASEPATH') or exit('No direct script access allowed');
class Konsumen extends CI_Controller
{
    function __construct()
    {
        parent::__construct();
        $this->load->library(array('form_validation', 'cart', 'pagination'));
        $this->load->helper(array('url', 'form'));
        $this->load->model('Keranjang_Model'); //call model
    }
    public function index()
    {
        $this->load->view('templates/header');
        $this->load->view('shopping/v_home');
        $this->load->view('templates/footer');
    }

    public function list_produk()
    {
        //searching
        if ($this->input->post('submit')) {
            $data['keyword'] =  $this->input->post('search');
            $this->session->set_userdata('search', $data['keyword']);
        }else {
            $data['keyword'] =  $this->session->userdata('search');;
        }


        //pagination
        $config['base_url'] = base_url('toko/konsumen/list_produk');
        $this->db->like('nama_produk', $data['keyword']);
        $this->db->from('tbl_produk');
        $config['total_rows'] = $this->db->count_all_results();
        $data['total_rows'] = $config['total_rows'];
        $config['per_page'] = 3;
        $config['start'] = $this->uri->segment(4);

        // Agar bisa mengganti stylenya sesuai class2 yg ada dibootstrap
        $config['full_tag_open'] = '<nav><ul class="pagination">';
        $config['full_tag_close'] = '</ul></nav>';

        $config['cur_tag_open'] = '<li class="page-item active"><a class="page-link" href="">';
        $config['cur_tag_close'] = '</a></li>';
        $config['num_tag_open'] = '<li class="page-item">';
        $config['num_tag_close'] = '</li>';

        $config['attributes'] = array('class' => 'page-link');
        // End style pagination

        $this->pagination->initialize($config);


        $data['produk'] = $this->Keranjang_Model->getProduk($config['per_page'], $config['start'], $data['keyword']);
        $this->load->view('templates/header');
        $this->load->view('shopping/v_konsumen', $data);
        $this->load->view('templates/footer');
    }

    public function detail_produk($id)
    {
        $detail = $this->Keranjang_Model->detail_data($id);
        $data['detail'] = $detail;
        $data['kategori'] = $this->Keranjang_Model->get_kategori_all($id);
        $this->load->view('templates/header');
        $this->load->view('shopping/v_detail', $data);
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
        redirect('/toko/konsumen/list_produk');
    }

    public function tentang()
    {
        $this->load->view('templates/header');
        $this->load->view('shopping/v_tentang');
        $this->load->view('templates/footer');
    }

}
