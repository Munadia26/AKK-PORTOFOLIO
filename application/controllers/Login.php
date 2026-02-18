<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Login extends CI_Controller {

    public function __construct() {
        parent::__construct();
        $this->load->model('M_login');
    }

    public function index() {
        // Jika sudah login, langsung lempar ke dashboard admin
        if($this->session->userdata('status') == "login") {
            redirect(base_url("Portfolio/dashboard"));
        }
        $this->load->view('v_login');
    }

    public function aksi_login() {
        $username = $this->input->post('username');
        $password = $this->input->post('password');

        $where = array(
            'username' => $username,
            'password' => md5($password) // Login menggunakan MD5
        );

        $cek = $this->M_login->cek_login("users", $where)->row_array();

        if ($cek) {
            $data_session = array(
                'id'     => $cek['id'],
                'nama'   => $cek['nama_lengkap'],
                'status' => "login"
            );
            $this->session->set_userdata($data_session);
            redirect(base_url("Portfolio/dashboard"));
        } else {
            $this->session->set_flashdata('pesan', 'Username atau Password salah!');
            redirect(base_url('login'));
        }
    }
    // application/models/M_login.php

public function update_data($where, $data, $table) {
    $this->db->where($where);
    $this->db->update($table, $data);
}

    public function logout() {
        $this->session->sess_destroy();
        redirect(base_url('login'));
    }
}