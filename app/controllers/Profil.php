<?php
class Profil extends Controller {
    public function index() {
        $data['judul'] = "Tentang";
        $this->view('templates/header', $data);
        $this->view('profil/index');
        $this->view('templates/footer');
    }
}