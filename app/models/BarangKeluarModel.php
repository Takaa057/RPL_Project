<?php

class BarangKeluarModel
{
    private $db;

    public function __construct()
    {
        $this->db = new Database;
    }

    private $baseQuery = "SELECT bk.*, l.nama_lokasi
                          FROM barang_keluar bk
                          LEFT JOIN lokasi l ON bk.id_lokasi = l.id_lokasi
                          ";

    public function getAllBarangKeluar()
    {
        $this->db->query($this->baseQuery . ' ORDER BY bk.id_keluar DESC');
        return $this->db->resultSet();
    }

    public function getBarangKeluarById($id)
    {
        $this->db->query($this->baseQuery . ' WHERE bk.id_keluar = :id');
        $this->db->bind(':id', $id);
        return $this->db->single();
    }

    public function tambahBarangKeluar($data)
    {
        $query = "INSERT INTO barang_keluar 
                    (no_transaksi, tanggal_keluar, penerima, id_lokasi, id_user, keterangan) 
                  VALUES 
                    (:no_transaksi, :tanggal_keluar, :penerima, :id_lokasi, :id_user, :keterangan)";

        $this->db->query($query);
        $this->db->bind(':no_transaksi', $data['no_transaksi']);
        $this->db->bind(':tanggal_keluar', $data['tanggal_keluar']);
        $this->db->bind(':penerima', $data['penerima']);
        $this->db->bind(':id_lokasi', $data['id_lokasi']);
        $this->db->bind(':id_user', $data['id_user']);
        $this->db->bind(':keterangan', $data['keterangan']);
        $this->db->execute();

        return $this->db->rowCount();
    }

    public function updateDataBarangKeluar($data)
    {
        $query = "UPDATE barang_keluar SET 
                    no_transaksi = :no_transaksi, 
                    tanggal_keluar = :tanggal_keluar, 
                    penerima = :penerima, 
                    id_lokasi = :id_lokasi, 
                    id_user = :id_user, 
                    keterangan = :keterangan 
                  WHERE id_keluar = :id";

        $this->db->query($query);
        $this->db->bind(':no_transaksi', $data['no_transaksi']);
        $this->db->bind(':tanggal_keluar', $data['tanggal_keluar']);
        $this->db->bind(':penerima', $data['penerima']);
        $this->db->bind(':id_lokasi', $data['id_lokasi']);
        $this->db->bind(':id_user', $_SESSION['id_user'] ?? $data['id_user']);
        $this->db->bind(':keterangan', $data['keterangan']);
        $this->db->bind(':id', $data['id_keluar']);
        $this->db->execute();

        return $this->db->rowCount();
    }

    public function deleteBarangKeluar($id)
    {
        $this->db->query('DELETE FROM barang_keluar WHERE id_keluar = :id');
        $this->db->bind(':id', $id);
        $this->db->execute();

        return $this->db->rowCount();
    }

    public function cariBarangKeluar($keyword)
    {
        $this->db->query($this->baseQuery . ' WHERE bk.no_transaksi LIKE :keyword OR bk.penerima LIKE :keyword ORDER BY bk.id_keluar DESC');
        $this->db->bind(':keyword', '%' . $keyword . '%');
        return $this->db->resultSet();
    }
}