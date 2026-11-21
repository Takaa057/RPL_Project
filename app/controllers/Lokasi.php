<?php

class lokasi extends Controller
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
        $data['title']    = 'Data Kategori';
        $data['lokasi'] = $this->model('LokasiModel')->getAllLokasi();

        $this->view('templates/header', $data);
        $this->view('templates/sidebar', $data);
        $this->view('lokasi/index', $data);
        $this->view('templates/footer');
    }

public function cari()
{
    $data['title']    = 'Data lokasi';
    $data['lokasi'] = $this->model('LokasiModel')->cariLokasi();
    $data['key']      = $_POST['key'];

    $this->view('templates/header', $data);
    $this->view('templates/sidebar', $data);
    $this->view('lokasi/index', $data);
    $this->view('templates/footer');
}
public function tambah()
{
    $data['title'] = 'Tambah lokasi';
    $this->view('templates/header', $data);
    $this->view('templates/sidebar', $data);
    $this->view('lokasi/create', $data);
    $this->view('templates/footer');
}
public function simpanLokasi()
{
    if ($this->model('LokasiModel')->tambahLokasi($_POST) > 0) {
        Flasher::setMessage('Berhasil', 'ditambahkan', 'success');
        header('location: ' . base_url . '/lokasi');
        exit;
    } else {
        Flasher::setMessage('Gagal', 'ditambahkan', 'danger');
        header('location: ' . base_url . '/lokasi');
        exit;
    }
}
public function edit($id)
{
    $data['title']    = 'Edit lokasi';
    $data['lokasi'] = $this->model('lokasiModel')->getLokasiById($id);
    $this->view('templates/header', $data);
    $this->view('templates/sidebar', $data);
    $this->view('lokasi/edit', $data);
    $this->view('templates/footer');
}

public function updateLokasi()
{
    if ($this->model('LokasiModel')->updateDataLokasi($_POST) > 0) {
        Flasher::setMessage('Berhasil', 'diupdate', 'success');
        header('location: ' . base_url . '/lokasi');
        exit;
    } else {
        Flasher::setMessage('Gagal', 'diupdate', 'danger');
        header('location: ' . base_url . '/lokasi');
        exit;
    }
}
public function hapus($id)
{
    if ($this->model('LokasiModel')->deleteLokasi($id) > 0) {
        Flasher::setMessage('Berhasil', 'dihapus', 'success');
    } else {
        Flasher::setMessage('Gagal', 'dihapus', 'danger');
    }
    header('location: ' . base_url . '/lokasi');
    exit;
}
}