<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Auth extends CI_Controller
{
    public function __construct()
    {
        parent::__construct();
        $this->load->library('form_validation');
    }

    public function index()
    {
        $this->form_validation->set_rules('username', 'Username', 'trim|required');
        $this->form_validation->set_rules('password', 'Password', 'trim|required');
        if ($this->form_validation->run() == false) {
            $data['title'] = 'Login';
            $this->load->view('templates/head', $data);
            $this->load->view('auth/login',);
            $this->load->view('templates/footer');
        } else {
            $this->_login();
        }
    }

    private function _login()
    {
        $username = $this->input->post('username');
        $password = $this->input->post('password');
        $leveladmin = '1';

        $user = $this->db->get_where('user', ['username' => $username])->row_array();

        if ($user) {
            //level admin
            if ($user['level'] == '1') {
                if (password_verify($password, $user['password'])) {
                    $data = [
                        'username' => $user['username'],
                        'name' => $user['name'],
                        'level' => $user['level']

                    ];
                    $this->session->set_userdata($data);
                    redirect('Datasiswa');
                } else {
                    $this->session->set_flashdata('message', '<div class="alert alert-danger" role="alert">Password anda salah </div>');
                    redirect('Auth');
                }
            } else {
                if (password_verify($password, $user['password'])) {
                    $data = [
                        'username' => $user['username'],
                        'name' => $user['name'],
                        'level' => $user['level']

                    ];
                    $this->session->set_userdata($data);
                    redirect('Datasiswa/siswa');
                } else {
                    $this->session->set_flashdata('message', '<div class="alert alert-danger" role="alert">Password anda salah </div>');
                    redirect('Auth');
                }
            }
        } else {
            $this->session->set_flashdata('message', '<div class="alert alert-danger" role="alert">Password anda salah </div>');
            redirect('Auth');
        }
    }

    public function register()
    {
        $this->form_validation->set_rules('name', 'Name', 'required|trim');
        $this->form_validation->set_rules('username', 'Username', 'required|is_unique[user.username]');
        $this->form_validation->set_rules('password', 'Password', 'required|trim|min_length[3]');

        if ($this->form_validation->run() == false) {
            $data['title'] = 'Register';
            $this->load->view('templates/head', $data);
            $this->load->view('auth/register');
            $this->load->view('templates/footer');
        } else {
            $data = [
                'name' => htmlspecialchars($this->input->post('name')),
                'username' => htmlspecialchars($this->input->post('username')),
                'password' => password_hash($this->input->post('password'), PASSWORD_DEFAULT),
                'level' => 2
            ];

            $this->db->insert('user', $data);
            redirect('auth');
        }
    }

    public function logout()
    {
        session_destroy();
        redirect('auth');
    }
}
