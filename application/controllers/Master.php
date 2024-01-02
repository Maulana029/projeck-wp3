<?php 
    use PhpOffice\PhpSpreadsheet\IOFactory;
    class Master extends CI_Controller{
    
        public function __construct(){
            parent::__construct();
            $this->load->model('M_model');
            // $this->load->model('M_import');
            // $this->load->library('excel');
            $this->simple_login->cek_login();
        }
        // --------------------------------------------------------------------------
        // OOP DATA MAHASISWA
        // --------------------------------------------------------------------------
        public function mahasiswa(){
            $data['judul']      = 'Data Mahasiswa';
            $data['mahasiswa']  = $this->M_model->get_mahasiswa();
            $data['prodi']      = $this->M_model->get_prodi();
            $data['tingkat']    = $this->M_model->get_tingkat();
            $data['profil']     = $this->M_model->get_profil();
            $this->ujian->load('menu','master/data_mahasiswa',$data);
        }
        public function add_mahasiswa(){
            $this->M_model->add_mahasiswa($this->input->post());
            redirect(base_url('master/mahasiswa'));
        }
        public function upd_mahasiswa(){
            $this->M_model->upd_mahasiswa($this->input->post());
            redirect(base_url('master/mahasiswa'));
        }
        public function del_mahasiswa(){
            $this->M_model->del_mahasiswa($this->input->post());
            redirect(base_url('master/mahasiswa'));
        }
        public function akses_mahasiswa(){
            $this->M_model->upd_akses_mahasiswa($this->input->post());
            redirect(base_url('master/mahasiswa'));
        }
        // --------------------------------------------------------------------------
        // OOP DATA MATA KULIAH
        // --------------------------------------------------------------------------
        public function mata_kuliah(){
            $data['judul']  = 'Data Mata Kuliah';
            $data['matkul'] = $this->M_model->get_matkul();
            $data['dosen']  = $this->M_model->get_dosen();
            $data['profil'] = $this->M_model->get_profil();
            $this->ujian->load('menu','master/data_mata_kuliah',$data);
        }
        public function add_mata_kuliah(){
            $this->M_model->add_mata_kuliah($this->input->post());
            redirect(base_url('master/mata_kuliah'));
        }
        public function upd_mata_kuliah(){
            $this->M_model->upd_mata_kuliah($this->input->post());
            redirect(base_url('master/mata_kuliah'));
        }
        public function del_mata_kuliah(){
            $this->M_model->del_mata_kuliah($this->input->post());
            redirect(base_url('master/mata_kuliah'));
        }
        // --------------------------------------------------------------------------
        // OOP DATA DOSEN
        // --------------------------------------------------------------------------
        public function dosen(){
            $data['judul']  = 'Data Dosen';
            $data['dosen']  = $this->M_model->get_dosen();
            $data['profil'] = $this->M_model->get_profil();
            $this->ujian->load('menu','master/data_dosen',$data);
        }
        public function add_dosen(){
            $this->M_model->add_dosen($this->input->post());
            redirect(base_url('master/dosen'));
        }
        public function upd_dosen(){
            $this->M_model->upd_dosen($this->input->post());
            redirect(base_url('master/dosen'));
        }
        public function del_dosen(){
            $this->M_model->del_dosen($this->input->post());
            redirect(base_url('master/dosen'));
        }
        public function akses_dosen(){
            $data = $this->M_model->upd_akses_dosen($this->input->post());
            redirect(base_url('master/dosen',$data));
        }
        // public function import_dosen(){
        //     $config['upload_path'] = './uploads/';
        //     $config['allowed_types'] = 'xlsx|xls';
        //     $config['max_size'] = 2048;

        //     $this->load->library('upload', $config);

        //     if (!$this->upload->do_upload('file_excel')) {
        //         $error = array('error' => $this->upload->display_errors());
        //         print_r($error);
        //     } else {
        //         $data = array('upload_data' => $this->upload->data());
        //         $file_path = './uploads/' . $data['upload_data']['file_name'];

        //         $spreadsheet = IOFactory::load($file_path);
        //         $data = $spreadsheet->getActiveSheet()->toArray(null, true, true, true);

        //         // Proses data dan simpan ke database menggunakan model
        //         $this->M_import->importData($data);

        //         // Hapus file setelah impor
        //         unlink($file_path);

        //         echo "Data berhasil diimpor ke database.";
        //     }
        // }
        // --------------------------------------------------------------------------
        // OOP DATA FAKULTAS & PRODI
        // --------------------------------------------------------------------------
        public function fakultas(){
            $data['judul'] = 'Data Fakultas & Prodi';
            $data['fakultas'] = $this->M_model->get_fakultas();
            $data['prodi'] = $this->M_model->get_prodi();
            $data['profil'] = $this->M_model->get_profil();
            $this->ujian->load('menu','master/data_fakultas',$data);
        }
        public function add_fakultas(){
            $this->M_model->add_fakultas($this->input->post());
            redirect(base_url('master/fakultas'));
        }
        public function upd_fakultas(){
            $this->M_model->upd_fakultas($this->input->post());
            redirect(base_url('master/fakultas'));
        }
        public function del_fakultas(){
            $this->M_model->del_fakultas($this->input->post());
            redirect(base_url('master/fakultas'));
        }
        public function add_prodi(){
            $this->M_model->add_prodi($this->input->post());
            redirect(base_url('master/fakultas'));
        }
        public function upd_prodi(){
            $this->M_model->upd_prodi($this->input->post());
            redirect(base_url('master/fakultas'));
        }
        public function del_prodi(){
            $this->M_model->del_prodi($this->input->post());
            redirect(base_url('master/fakultas'));
        }
        // --------------------------------------------------------------------------
        // OOP DATA TINGKAT
        // --------------------------------------------------------------------------
        public function tingkat(){
            $data['judul'] = 'Data Tingkat';
            $data['tingkat'] = $this->M_model->get_tingkat();
            $data['profil'] = $this->M_model->get_profil();
            $this->ujian->load('menu','master/data_tingkat',$data);
        }
        public function add_tingkat(){
            $this->M_model->add_tingkat($this->input->post());
            redirect(base_url('master/tingkat'));
        }
        public function upd_tingkat(){
            $this->M_model->upd_tingkat($this->input->post());
            redirect(base_url('master/tingkat'));
        }
        public function del_tingkat(){
            $this->M_model->del_tingkat($this->input->post());
            redirect(base_url('master/tingkat'));
        }
    }
?>