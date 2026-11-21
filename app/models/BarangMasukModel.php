<?php

class BarangMasukModel
{
    private $db;

    public function __construct()
    {
        $this->db = new Database;
    }

    private $baseQuery = "SELECT bm.*, s.nama_supplier
                          FROM barang_masuk bm
                          LEFT JOIN suppliers s ON bm.id_supplier = s.id_supplier
                          ";

    public function getAllBarangMasuk()
    {
        $this->db->query($this->baseQuery . ' ORDER BY bm.id_masuk DESC');
        return $this->db->resultSet();
    }

    public function getBarangMasukById($id)
    {
        $this->db->query($this->baseQuery . ' WHERE bm.id_masuk = :id');
        $this->db->bind(':id', $id);
        return $this->db->single();
    }

    public function tambahBarangMasuk($data)
    {
        $query = "INSERT INTO barang_masuk 
                    (no_transaksi, tanggal_masuk, id_supplier, id_user, keterangan) 
                  VALUES 
                    (:no_transaksi, :tanggal_masuk, :id_supplier, :id_user, :keterangan)";

        $this->db->query($query);
        $this->db->bind(':no_transaksi', $data['no_transaksi']);
        $this->db->bind(':tanggal_masuk', $data['tanggal_masuk']);
        $this->db->bind(':id_supplier', $data['id_supplier']);
        $this->db->bind(':id_user', $data['id_user']);
        $this->db->bind(':keterangan', $data['keterangan']);
        $this->db->execute();

        return $this->db->rowCount();
    }

    public function updateDataBarangMasuk($data)
    {
        $query = "UPDATE barang_masuk SET 
                    no_transaksi = :no_transaksi, 
                    tanggal_masuk = :tanggal_masuk, 
                    id_supplier = :id_supplier, 
                    id_user = :id_user, 
                    keterangan = :keterangan 
                  WHERE id_masuk = :id";

        $this->db->query($query);
        $this->db->bind(':no_transaksi', $data['no_transaksi']);
        $this->db->bind(':tanggal_masuk', $data['tanggal_masuk']);
        $this->db->bind(':id_supplier', $data['id_supplier']);
        $this->db->bind(':id_user', $_SESSION['id_user'] ?? 1);
        $this->db->bind(':keterangan', $data['keterangan']);
        $this->db->bind(':id', $data['id_masuk']);
        $this->db->execute();

        return $this->db->rowCount();
    }

    public function deleteBarangMasuk($id)
    {
        $this->db->query('DELETE FROM barang_masuk WHERE id_masuk = :id');
        $this->db->bind(':id', $id);
        $this->db->execute();

        return $this->db->rowCount();
    }

    public function cariBarangMasuk($keyword)
    {
        $this->db->query($this->baseQuery . ' WHERE bm.no_transaksi LIKE :keyword OR s.nama_supplier LIKE :keyword ORDER BY bm.id_masuk DESC');
        $this->db->bind(':keyword', '%' . $keyword . '%');
        return $this->db->resultSet();
    }
}