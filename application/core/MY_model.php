<?php
defined('BASEPATH') or exit('No direct script access allowed');

class MY_model extends CI_Model
{

    // Fungsi untuk menampilkan semua data
    public function view($table)
    {
        return $this->db->get($table)->result();
    }

    // Menampilkan banyak data (objek)
    public function view_by($table, $kolom, $id)
    {
        $this->db->where($kolom, $id);
        return $this->db->get($table)->result();
    }

    // Menampilkan satu data (objek)
    public function view_one($table, $kolom, $id)
    {
        $this->db->where($kolom, $id);
        return $this->db->get($table)->row();
    }

    // Fungsi untuk melakukan simpan data ke tabel
    public function save($table, $data)
    {
        $this->db->insert($table, $data); // Untuk mengeksekusi perintah insert data
        return true;
    }

    // Fungsi untuk melakukan ubah data berdasarkan identifier
    public function edit($table, $kolom, $id, $data)
    {

        $this->db->where($kolom, $id);
        $this->db->update($table, $data); // Untuk mengeksekusi perintah update data
        return true;
        // $this->session->set_flashdata('success', 'Data berhasil disunting!');
    }

    // Fungsi untuk menghapus data berdasarkan udentifier
    public function delete($table, $kolom, $id)
    {
        $this->db->where($kolom, $id);
        $this->db->delete($table); // Untuk mengeksekusi perintah delete data
        return true;
        // $this->session->set_userdata('danger', 'Data berhasil dihapus!');
    }
}
