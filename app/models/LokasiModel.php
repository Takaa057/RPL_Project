<?php

class LokasiModel
{
    private $table = 'lokasi';
    private $db;

    public function __construct()
    {
        $this->db = new Database;
    }

    public function getAllLokasi()
    {
        $this->db->query('SELECT * FROM ' . $this->table . ' ORDER BY id_lokasi DESC');
        return $this->db->resultSet();
    }

    public function getLokasiById($id)
    {
        $this->db->query('SELECT * FROM ' . $this->table . ' WHERE id_lokasi = :id');
        $this->db->bind('id', $id);
        return $this->db->single();
    }

    public function tambahLokasi($data)
    {
        $query = "INSERT INTO lokasi (nama_lokasi) VALUES (:nama_lokasi)";
        $this->db->query($query);
        $this->db->bind('nama_lokasi', $data['nama_lokasi']);
        $this->db->execute();
        return $this->db->rowCount();
    }

    public function updateDataLokasi($data)
    {
        $query = "UPDATE lokasi SET nama_lokasi = :nama_lokasi WHERE id_lokasi = :id";
        $this->db->query($query);
        $this->db->bind('id', $data['id_lokasi']);
        $this->db->bind('nama_lokasi', $data['nama_lokasi']);
        $this->db->execute();
        return $this->db->rowCount();
    }

    public function deleteLokasi($id)
    {
        $this->db->query('DELETE FROM ' . $this->table . ' WHERE id_lokasi = :id');
        $this->db->bind('id', $id);
        $this->db->execute();
        return $this->db->rowCount();
    }

    public function cariLokasi()
    {
        $key = $_POST['key'];
        $this->db->query('SELECT * FROM ' . $this->table . ' WHERE nama_lokasi LIKE :key');
        $this->db->bind('key', "%$key%");
        return $this->db->resultSet();
    }
}