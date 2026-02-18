<?php
class M_data extends CI_Model {

    // --- FUNGSI UMUM (Bisa dipakai semua tabel) ---

    // Menambahkan fungsi yang hilang tadi
    public function get_data($table) {
        return $this->db->get($table);
    }

    public function insert_data($table, $data) {
        $this->db->insert($table, $data);
    }

    public function update_data($where, $data, $table) {
        $this->db->where($where);
        $this->db->update($table, $data);
    }

    public function hapus_data($where, $table) {
        $this->db->where($where);
        $this->db->delete($table);
    }

    // --- FUNGSI SPESIFIK ---

    public function get_divisi() {
        return $this->db->get('divisi')->result_array();
    }

    public function get_program_by_divisi($id_divisi) {
        return $this->db->get_where('program', ['id_divisi' => $id_divisi])->result_array();
    }
}