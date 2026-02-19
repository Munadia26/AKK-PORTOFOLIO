<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Portfolio extends CI_Controller {

    public function __construct() {
        parent::__construct();
        $this->load->model('M_login'); 
        $this->load->model('M_data'); 
        $this->load->library('upload'); // Load library upload di awal
        $this->load->helper(['url', 'text']); // Load URL & Text Helper
    }

    // --- FRONTEND ---
    public function index() {
        $data['profil'] = $this->db->get('profil')->row_array();
        $data['divisi'] = $this->M_data->get_divisi(); 
        // Mengambil dokumentasi diurutkan dari yang terbaru
        $this->db->order_by('tgl_upload', 'DESC');
        $data['dokumentasi'] = $this->M_data->get_data('dokumentasi')->result_array(); 
        $this->load->view('frontend/v_home', $data);
    }

    public function list_dokumentasi() {
        $search   = $this->input->get('q');
        $kategori = $this->input->get('kategori');

        $this->db->order_by('tgl_upload', 'DESC');

        if (!empty($search)) {
            $this->db->group_start();
            $this->db->like('judul', $search);
            $this->db->or_like('deskripsi', $search);
            $this->db->or_like('kategori', $search);
            $this->db->group_end();
        }

        if (!empty($kategori)) {
            $this->db->where('kategori', $kategori);
        }

        $data['dokumentasi']     = $this->db->get('dokumentasi')->result_array();
        $data['dokumentasi_all'] = $this->db->order_by('tgl_upload', 'DESC')->get('dokumentasi')->result_array();
        $data['search']          = $search;
        $data['kategori']        = $kategori;

        $this->load->view('frontend/v_list_dokumentasi', $data);
    }

    public function detail_dokumentasi($id) {
        $data['profil'] = $this->db->get('profil')->row_array();
        
        // Get Main Doc
        $data['doc'] = $this->db->get_where('dokumentasi', ['id_dokumentasi' => $id])->row_array();
        
        if(!$data['doc']) show_404();
        
        // Get Sidebar Docs (exclude current)
        $this->db->where('id_dokumentasi !=', $id);
        $this->db->order_by('tgl_upload', 'DESC');
        $this->db->limit(5);
        $data['sidebar_docs'] = $this->db->get('dokumentasi')->result_array();
        
        $this->load->view('frontend/v_detail_dokumentasi', $data);
    }

    // --- ADMIN DASHBOARD & PROFIL ---
    public function dashboard() {
        if($this->session->userdata('status') != "login") redirect(base_url('login'));
        $data['program']     = $this->db->get('program')->result_array();
        $data['dokumentasi'] = $this->db->get('dokumentasi')->result_array();
        $this->load->view('admin/v_dashboard', $data);
    }

    public function profil() {
        if($this->session->userdata('status') != "login") redirect(base_url('login'));
        $data['profil'] = $this->db->get('profil')->row_array();
        $this->load->view('admin/v_profil', $data);
    }

    public function update_profil() {
        $data = ['sejarah' => $this->input->post('sejarah')];
        if (!empty($_FILES['foto_sejarah']['name'])) {
            $config['upload_path']   = './assets/img/profil';
            $config['allowed_types'] = 'jpg|jpeg|png';
            $config['file_name']     = 'sejarah_' . time();
            $this->upload->initialize($config);
            if ($this->upload->do_upload('foto_sejarah')) {
                $uploadData = $this->upload->data();
                $data['foto_sejarah'] = $uploadData['file_name'];
            }
        }
        $where = ['id' => 1];
        $this->M_data->update_data($where, $data, 'profil');
        $this->session->set_flashdata('pesan', 'Profil Berhasil Diperbarui!');
        redirect(base_url('portfolio/profil'));
    }

    public function divisi() {
        if($this->session->userdata('status') != "login") redirect(base_url('login'));
        $data['divisi'] = $this->M_data->get_divisi();
        $this->load->view('admin/v_divisi', $data);
    }

    public function tambah_divisi() {
        if($this->session->userdata('status') != "login") redirect(base_url('login'));
        $data = [
            'nama_divisi'      => $this->input->post('nama_divisi'),
            'deskripsi_singkat'=> $this->input->post('deskripsi_singkat')
        ];
        $this->M_data->insert_data('divisi', $data);
        $this->session->set_flashdata('pesan', 'Divisi berhasil ditambahkan!');
        redirect('portfolio/divisi');
    }

    public function update_divisi() {
        if($this->session->userdata('status') != "login") redirect(base_url('login'));
        $id   = $this->input->post('id_divisi');
        $data = [
            'nama_divisi'      => $this->input->post('nama_divisi'),
            'deskripsi_singkat'=> $this->input->post('deskripsi_singkat')
        ];
        $this->M_data->update_data(['id_divisi' => $id], $data, 'divisi');
        $this->session->set_flashdata('pesan', 'Divisi berhasil diperbarui!');
        redirect('portfolio/divisi');
    }

    public function hapus_divisi($id) {
        if($this->session->userdata('status') != "login") redirect(base_url('login'));
        $this->M_data->hapus_data(['id_divisi' => $id], 'divisi');
        $this->session->set_flashdata('pesan', 'Divisi berhasil dihapus!');
        redirect('portfolio/divisi');
    }

    // --- CRUD PROGRAM ---
    public function program() {
        if($this->session->userdata('status') != "login") redirect(base_url('login'));
        $data['divisi'] = $this->M_data->get_divisi();
        $this->db->select('program.*, divisi.nama_divisi');
        $this->db->from('program');
        $this->db->join('divisi', 'divisi.id_divisi = program.id_divisi');
        $data['program'] = $this->db->get()->result_array();
        $this->load->view('admin/v_program', $data);
    }

    public function tambah_program() {
        $config['upload_path']   = './assets/img/program/';
        $config['allowed_types'] = 'jpg|png|jpeg';
        $this->upload->initialize($config);
        if ($this->upload->do_upload('foto_program')) {
            $data = [
                'id_divisi' => $this->input->post('id_divisi'),
                'nama_program' => $this->input->post('nama_program'),
                'deskripsi_lengkap' => $this->input->post('deskripsi'),
                'foto_program' => $this->upload->data('file_name')
            ];
            $this->M_data->insert_data('program', $data);
            $this->session->set_flashdata('pesan', 'Program berhasil ditambahkan!');
        }
        redirect('portfolio/program');
    }

    public function hapus_program($id) {
        $program = $this->db->get_where('program', ['id_program' => $id])->row_array();
        if ($program['foto_program'] != 'default_program.jpg' && file_exists(FCPATH . 'assets/img/program/' . $program['foto_program'])) {
            unlink(FCPATH . 'assets/img/program/' . $program['foto_program']);
        }
        $this->M_data->hapus_data(['id_program' => $id], 'program');
        $this->session->set_flashdata('pesan', 'Program berhasil dihapus!');
        redirect('portfolio/program');
    }

    public function update_program() {
        $id = $this->input->post('id_program');
        $data = [
            'id_divisi' => $this->input->post('id_divisi'),
            'nama_program' => $this->input->post('nama_program'),
            'deskripsi_lengkap' => $this->input->post('deskripsi')
        ];
        if (!empty($_FILES['foto_program']['name'])) {
            $config['upload_path']   = './assets/img/program/';
            $config['allowed_types'] = 'jpg|png|jpeg';
            $this->upload->initialize($config);
            if ($this->upload->do_upload('foto_program')) {
                $old_program = $this->db->get_where('program', ['id_program' => $id])->row_array();
                if ($old_program['foto_program'] != 'default_program.jpg' && file_exists(FCPATH . 'assets/img/program/' . $old_program['foto_program'])) {
                    unlink(FCPATH . 'assets/img/program/' . $old_program['foto_program']);
                }
                $data['foto_program'] = $this->upload->data('file_name');
            }
        }
        $this->M_data->update_data(['id_program' => $id], $data, 'program');
        $this->session->set_flashdata('pesan', 'Program berhasil diperbarui!');
        redirect('portfolio/program');
    }

    // --- CRUD DOKUMENTASI ---
    public function dokumentasi() {
        if($this->session->userdata('status') != "login") redirect(base_url('login'));
        $data['dokumentasi'] = $this->M_data->get_data('dokumentasi')->result_array();
        $this->load->view('admin/v_dokumentasi', $data);
    }

    public function tambah_dokumentasi() {
        $foto = "";
        if (!empty($_FILES['foto']['name'])) {
            $config['upload_path'] = './assets/img/dokumentasi/';
            $config['allowed_types'] = 'jpg|jpeg|png|gif';
            $config['file_name'] = 'doc_' . time();
            $this->upload->initialize($config);
            if ($this->upload->do_upload('foto')) {
                $foto = $this->upload->data('file_name');
            }
        }

        $data = [
            'judul' => $this->input->post('judul'),
            'kategori' => $this->input->post('kategori'),
            'deskripsi' => $this->input->post('deskripsi'),
            'foto' => $foto
        ];

        $this->M_data->insert_data('dokumentasi', $data);
        $this->session->set_flashdata('pesan', 'Dokumentasi Berhasil Ditambahkan!');
        redirect('portfolio/dokumentasi');
    }

    public function update_dokumentasi() {
        $id = $this->input->post('id_dokumentasi');
        $data = [
            'judul' => $this->input->post('judul'),
            'kategori' => $this->input->post('kategori'),
            'deskripsi' => $this->input->post('deskripsi')
        ];

        if (!empty($_FILES['foto']['name'])) {
            $config['upload_path'] = './assets/img/dokumentasi/';
            $config['allowed_types'] = 'jpg|jpeg|png';
            $config['file_name'] = 'doc_' . time();
            $this->upload->initialize($config);

            if ($this->upload->do_upload('foto')) {
                // Hapus foto lama agar penyimpanan tidak penuh
                $old = $this->db->get_where('dokumentasi', ['id_dokumentasi' => $id])->row_array();
                if ($old['foto'] != '' && file_exists(FCPATH . 'assets/img/dokumentasi/' . $old['foto'])) {
                    unlink(FCPATH . 'assets/img/dokumentasi/' . $old['foto']);
                }
                $data['foto'] = $this->upload->data('file_name');
            }
        }

        $this->M_data->update_data(['id_dokumentasi' => $id], $data, 'dokumentasi');
        $this->session->set_flashdata('pesan', 'Dokumentasi Berhasil Diperbarui!');
        redirect('portfolio/dokumentasi');
    }

    public function hapus_dokumentasi($id) {
        if($this->session->userdata('status') != "login") redirect(base_url('login'));

        // Ambil data untuk hapus file fisik
        $old = $this->db->get_where('dokumentasi', ['id_dokumentasi' => $id])->row_array();
        if ($old['foto'] != '' && file_exists(FCPATH . 'assets/img/dokumentasi/' . $old['foto'])) {
            unlink(FCPATH . 'assets/img/dokumentasi/' . $old['foto']);
        }

        $where = ['id_dokumentasi' => $id];
        $this->M_data->hapus_data($where, 'dokumentasi');
        
        $this->session->set_flashdata('pesan', 'Dokumentasi Berhasil Dihapus!');
        redirect('portfolio/dokumentasi');
    }
}