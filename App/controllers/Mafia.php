<?php

class Mafia extends Controller
{
    public function index()
    {
        $data['judul'] = 'Daftar Mafia';
        $data['maf'] = $this->model('Mafia_model')->getAllMafia();
        $this->view('templates/header', $data);
        $this->view('mafia/index', $data);
        $this->view('templates/footer');
    }

    public function detail($id)
    {
        $data['judul'] = 'Detail Mafia';
        $data['maf'] = $this->model('Mafia_model')->getMafiaById($id);
        $this->view('templates/header', $data);
        $this->view('mafia/detail', $data);
        $this->view('templates/footer');
    }

    public function tambah()
    {
        if ($this->model('Mafia_model')->tambahDataMafia($_POST) > 0) {
            Flasher::setFlash('berhasil', 'ditambahkan', 'success');
            header('Location: ' . BASEURL . '/mafia');
            exit;
        } else {
            Flasher::setFlash('gagal', 'ditambahkan', 'danger');
            header('Location:' . BASEURL . '/mafia');
        }
    }

    public function hapus($id)
    {
        if ($this->model('Mafia_model')->hapusDataMafia($id) > 0) {
            Flasher::setFlash('berhasil', 'dihapus', 'success');
            header('Location: ' . BASEURL . '/mafia');
            exit;
        } else {
            Flasher::setFlash('gagal', 'dihapus', 'danger');
            header('Location:' . BASEURL . '/mafia');
        }
    }

    public function getubah()
    {
        echo json_encode($this->model('Mafia_model')->getMafiaById($_POST['id']));
    }

    public function ubah()
    {
        if ($this->model('Mafia_model')->ubahDataMafia($_POST) > 0) {
            Flasher::setFlash('berhasil', 'diubah', 'success');
            header('Location: ' . BASEURL . '/mafia');
            exit;
        } else {
            Flasher::setFlash('gagal', 'diubah', 'danger');
            header('Location:' . BASEURL . '/mafia');
        }
    }

    public function cari()
    {
        $data['judul'] = 'Daftar Mafia';
        $data['maf'] = $this->model('Mafia_model')->cariDataMafia();
        $this->view('templates/header', $data);
        $this->view('mafia/index', $data);
        $this->view('templates/footer');
    }
}
