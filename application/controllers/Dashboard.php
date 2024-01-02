<?php 
    class Dashboard extends CI_Controller{
        public function __construct(){
            parent::__construct();
            $this->simple_login->cek_login();
            // $this->load->library('PHPExcel');
            $this->load->model('M_model');
        }
        public function index(){
            $data['judul'] = 'Dashboard';
            $data['mahasiswa'] = $this->M_model->jumlah_mahasiswa();
            $data['L'] = $this->M_model->gender('Laki - Laki');
            $data['P'] = $this->M_model->gender('Perempuan');
            $data['dosen'] = $this->M_model->jumlah_dosen();
            $data['prodi'] = $this->M_model->jumlah_prodi();
            $data['matkul'] = $this->M_model->jumlah_matkul();
            $data['profil'] = $this->M_model->get_profil();
            $data['pengumuman'] = $this->M_model->get_pengumuman();
            $data['pengumuman_dosen'] = $this->M_model->get_pengumuman_dosen();
            $data['log_aktivitas_login'] = $this->M_model->get_login('login');
            $data['log_aktivitas_logout'] = $this->M_model->get_logout('logout');
            $this->ujian->load('menu','dashboard',$data);
        }
        public function upd_pengumuman(){
            $this->M_model->upd_pengumuman($this->input->post());
            redirect(base_url('dashboard'));
        }
        public function upd_pengumuman_dosen(){
            $this->M_model->upd_pengumuman_dosen($this->input->post());
            redirect(base_url('dashboard'));
        }
        public function del_all_log(){
            $this->M_model->del_all_log();
            redirect(base_url('dashboard'));
        }
        public function dosen(){
            $data['judul'] = "Dashboard || Dosen";
            $this->load->view('dashboard/dosen',$data);
        }
        public function mahasiswa(){
            $data['judul'] = "Dashboard || Mahasiswa";
            $this->load->view('dashboard/mahasiswa',$data);
        }
    }
?>