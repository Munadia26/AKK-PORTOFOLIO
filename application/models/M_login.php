<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class M_login extends CI_Model {

    public function cek_login($table, $where) {
        return $this->db->get_where($table, $where);
    }

    // Fungsi sakti untuk update data apa saja
    public function update_data($where, $data, $table) {
        $this->db->where($where);
        $this->db->update($table, $data);
    }
}