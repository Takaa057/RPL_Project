<?php

class BarangMasuk extends Controller
{

    public function __construct() {  
        if($_SESSION['session_login'] != 'sudah_login') { 
        Flasher::setMessage('Login','Tidak ditemukan.','danger'); 
        header('location: '. base_url . '/login'); 
        exit; 
        } 
    }

    public function index()
    {
        $data['title']        = 'Data Barang Masuk';
        $data['barang_masuk'] = $this->model('BarangMasukModel')->getAllBarangMasuk();

        $this->view('templates/header', $data);
        $this->view('templates/sidebar', $data);
        $this->view('barangmasuk/index', $data);
        $this->view('templates/footer');
    }

    public function cari()
    {
        $data['title']        = 'Data Barang Masuk';
        $data['barang_masuk'] = $this->model('BarangMasukModel')->cariBarangMasuk($_POST['key']);
        $data['key']          = $_POST['key'];

        $this->view('templates/header', $data);
        $this->view('templates/sidebar', $data);
        $this->view('barangmasuk/index', $data);
        $this->view('templates/footer');
    }

    public function tambah()
    {
        $data['title']    = 'Tambah Barang Masuk';
        $data['supplier'] = $this->model('SupplierModel')->getAllSupplier();

        $this->view('templates/header', $data);
        $this->view('templates/sidebar', $data);
        $this->view('barangmasuk/create', $data);
        $this->view('templates/footer');
    }

    public function simpanBarangMasuk()
    {
            $_POST['id_user'] = $_SESSION['id_user'];

        if ($this->model('BarangMasukModel')->tambahBarangMasuk($_POST) > 0) {
            Flasher::setMessage('Berhasil', 'ditambahkan', 'success');
            header('location: ' . base_url . '/barangmasuk');
            exit;
        } else {
            Flasher::setMessage('Gagal', 'ditambahkan', 'danger');
            header('location: ' . base_url . '/barangmasuk');
            exit;
        }
    }

    public function edit($id)
    {
        $data['title']        = 'Edit Barang Masuk';
        $data['supplier']     = $this->model('SupplierModel')->getAllSupplier();
        $data['barang_masuk'] = $this->model('BarangMasukModel')->getBarangMasukById($id);

        $this->view('templates/header', $data);
        $this->view('templates/sidebar', $data);
        $this->view('barangmasuk/edit', $data);
        $this->view('templates/footer');
    }

    public function updateBarangMasuk()
    {
            $_POST['id_user'] = $_SESSION['id_user'];
            
        if ($this->model('BarangMasukModel')->updateDataBarangMasuk($_POST) > 0) {
            Flasher::setMessage('Berhasil', 'diupdate', 'success');
            header('location: ' . base_url . '/barangmasuk');
            exit;
        } else {
            Flasher::setMessage('Gagal', 'diupdate', 'danger');
            header('location: ' . base_url . '/barangmasuk');
            exit;
        }
    }

    public function hapus($id)
    {
        if ($this->model('BarangMasukModel')->deleteBarangMasuk($id) > 0) {
            Flasher::setMessage('Berhasil', 'dihapus', 'success');
        } else {
            Flasher::setMessage('Gagal', 'dihapus', 'danger');
        }
        header('location: ' . base_url . '/barangmasuk');
        exit;
    }
}