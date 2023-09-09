<?php
class User extends Controller {
    public function index() {
        $data['judul'] = "User";
        $this->view("user/index");
    }

    public function profile($nama = "Achmad Rozaqi", $pekerjaan = "Pelajar") {
        $data['judul'] = "User" ;
        $data['nama'] = $nama;
        $data['pekerjaan'] = $pekerjaan;
        $this->view("templates/header", $data);
        $this->view('user/profile', $data);
        $this->view('templates/footer');
    }
}