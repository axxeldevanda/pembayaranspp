<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Datasiswa extends CI_Controller
{

	public function index()
	{
		$data['title'] = 'Data Siswa';
		$data['name'] = $this->session->userdata('name');
		$this->load->view('templates/head', $data);
		$this->load->view('templates/navbar');
		$this->load->view('templates/sidebar');
		$this->load->view('datasiswa/index');
		$this->load->view('templates/footer');
	}
	public function siswa()
	{
		$data['title'] = 'Siswa';
		$data['name'] = $this->session->userdata('name');
		$this->load->view('templates/head', $data);
		$this->load->view('templates/navbar');
		$this->load->view('templates/sidebar');
		$this->load->view('datasiswa/index');
		$this->load->view('templates/footer');
	}
}
