<?php
class Komli extends controller{
    public function index(){
        $data['judul']="Komli";
        $data['komli']=$this->model('Komli_model')->getAllKomli();
        $this->view('templates/header',$data);
        $this->view('komli/index',$data);
        $this->view('templates/footer');
    }

    public function tambah()
    {
        if( $this->model('Komli_model')->tambahDataKomli($_POST) > 0 ) {
            Flasher::setFlash('berhasil', 'ditambahkan', 'success');
            header('Location: ' . BASE_URL . '/komli');
            exit;
        } else {
            Flasher::setFlash('gagal', 'ditambahkan', 'danger');
            header('Location: ' . BASE_URL . '/komli');
            exit;
        }
    }
    public function hapus($id)
    {
        if( $this->model('Komli_model')->hapusDataKomli($id) > 0 ) {
            Flasher::setFlash('berhasil', 'dihapus', 'success');
            header('Location: ' . BASE_URL . '/komli');
            exit;
        } else {
            Flasher::setFlash('gagal', 'dihapus', 'danger');
            header('Location: ' . BASE_URL . '/komli');
            exit;
        }
    }
    public function getubah()
    {
        echo json_encode($this->model('Komli_model')->getKomliById($_POST['id']));
    }
    public function ubah()
    {
        if( $this->model('Komli_model')->ubahDataKomli($_POST) > 0 ) {
            Flasher::setFlash('berhasil', 'diubah', 'success');
            header('Location: ' . BASE_URL . '/komli');
            exit;
        } else {
            Flasher::setFlash('gagal', 'diubah', 'danger');
            header('Location: ' . BASE_URL . '/komli');
            exit;
        } 
    }

}   