<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Pembayaran extends CI_Controller
{

    public function index()
    {
        $data['title'] = 'Data Siswa';
        $this->load->view('templates/head', $data);
        $this->load->view('templates/navbar');
        $this->load->view('templates/sidebar');
        $this->load->view('pembayaran/index');
        $this->load->view('templates/footer');
    }
}
