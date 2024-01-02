<?php
class Download extends CI_Controller{
    public function __construct(){
        parent::__construct();
        $this->load->helper('download');
        $this->simple_login->cek_login();
    }
    public function dosen(){
        force_download('dist/file/data dosen.xlsx',NULL);
    }
    public function mahasiswa(){
        force_download('dist/file/data mahasiswa.xlsx',NULL);
    }
}