<?php
    class Mahasiswa extends CI_Controller{
        public function __construct()
        {   
            parent::__construct();
            $this->simple_login->cek_login();
            $this->load->model('M_model');
        }
        public function dashboard(){
            $data['judul'] = "Dashboard || Mahasiswa";
            $mahasiswa = $this->db->get_where('tbl_mahasiswa');
            $v_mahasiswa = $mahasiswa->row();
            $nama_mahasiswa = $v_mahasiswa->nama_mahasiswa;
            $nim = $v_mahasiswa->nim;
            $jk = $v_mahasiswa->jenis_kelamin;
            $semester = $v_mahasiswa->semester;
            $prodi = $v_mahasiswa->program_studi;
            $kelas = $v_mahasiswa->kode_kelas;
            $tempat_lahir = $v_mahasiswa->tempat_lahir;
            $tanggal_lahir = $v_mahasiswa->tanggal_lahir;
            $this->session->set_userdata('nama_mahasiswa',$nama_mahasiswa);
            $this->session->set_userdata('nim',$nim);
            $this->session->set_userdata('jenis_kelamin',$jk);
            $this->session->set_userdata('semester',$semester);
            $this->session->set_userdata('prodi',$prodi);
            $this->session->set_userdata('kode_kelas',$kelas);
            $this->session->set_userdata('tempat_lahir',$tempat_lahir);
            $this->session->set_userdata('tanggal_lahir',$tanggal_lahir);
            $data['profil']     = $this->M_model->get_profil();
            $data['pengumuman'] = $this->M_model->get_pengumuman();
            $data['mahasiswa']  = $this->M_model->get_mahasiswa();
            $this->mahasiswa_menu->load('menu_mahasiswa','mahasiswa/dashboard',$data);
        }
        public function upd_mahasiswa(){
            $this->M_model->upd_user_mahasiswa($this->input->post());
            // redirect(base_url('mahasiswa/dashboard'));
        }
    }
?>