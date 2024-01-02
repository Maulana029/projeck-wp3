<?php
    class Dosen extends CI_Controller{
        public function __construct()
        {   
            parent::__construct();
            $this->simple_login->cek_login();
            $this->load->model('M_model');
        }
        public function dashboard(){
            $data['judul'] = "Dashboard || Dosen";
            $dosen = $this->db->get_where('tbl_dosen');
            $v_dosen = $dosen->row();
            $nama_dosen = $v_dosen->nama_dosen;
            $nip = $v_dosen->nip;
            $nidn = $v_dosen->nidn;
            $jabatan = $v_dosen->jabatan_dosen;
            $this->session->set_userdata('nama_dosen',$nama_dosen);
            $this->session->set_userdata('nip',$nip);
            $this->session->set_userdata('nidn',$nidn);
            $this->session->set_userdata('jabatan_dosen',$jabatan);
            $data['profil']     = $this->M_model->get_profil();
            $data['pengumuman_dosen'] = $this->M_model->get_pengumuman_dosen();
            $this->dosen_menu->load('menu_dosen','dosen/dashboard',$data);
        }
    }
?>