<?php
class Pengaturan extends CI_Controller
{
    public function __construct()
    {
        parent::__construct();
        $this->load->model('M_model');
        $this->simple_login->cek_login();
    }
    public function profil()
    {
        $data['judul'] = "Pengturan Profil";
        $data['profil'] = $this->M_model->get_profil();
        $data['user'] = $this->M_model->get_user();
        $this->ujian->load('menu', 'pengaturan/profil', $data);
    }
    public function upd_profil()
    {
        $this->M_model->upd_profil($this->input->post());
        redirect(base_url('pengaturan/profil'));
    }
    public function del_data()
    {
        if ($this->input->post('hapus')) {
            $hapus_tabel = $this->input->post('hapus');
            foreach ($hapus_tabel as $nama_tabel) {
                $this->M_model->del_all_data($nama_tabel);
            }
            redirect(base_url('pengaturan/profil'));
        } else {
            redirect(base_url('pengaturan/profil'));
        }
    }
    public function mahasiswa(){
        $data['judul'] = "Dashboard || Mahasiswa";
        $data['profil']     = $this->M_model->get_profil();
        $data['pengumuman'] = $this->M_model->get_pengumuman();
        $data['mahasiswa']  = $this->M_model->get_mahasiswa();
        $this->mahasiswa_menu->load('menu_mahasiswa','pengaturan/mahasiswa',$data);
    }
}
