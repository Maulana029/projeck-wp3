<?php
class M_model extends CI_Model
{
    public function __construct()
    {
        parent::__construct();
        $this->load->database();
    }
    public function get_user()
    {
        return $this->db->get('tbl_user')->result();
    }
    // --------------------------------------------------------------------------
    // OOP DATA DOSEN
    // --------------------------------------------------------------------------
    public function get_dosen()
    {
        return $this->db->get('tbl_dosen')->result();
    }
    public function jumlah_dosen()
    {
        return $this->db->count_all('tbl_dosen');
    }
    public function add_dosen($add_dosen)
    {
        $username = 'UBSI_' . rand(10000, 99999) . 'U';
        $password = 'UBSI_' . rand(10000, 99999) . 'P';
        $data = array(
            'nama_dosen'        => $add_dosen['nama_dosen'],
            'nip'               => $add_dosen['nip'],
            'nidn'              => $add_dosen['nidn'],
            'jabatan_dosen'     => $add_dosen['jabatan'],
            'username_dosen'    => $username,
            'password_dosen'    => $password,
        );
        $this->db->where('tbl_dosen', $add_dosen['id_dosen']);
        $this->db->insert('tbl_dosen', $data);
    }
    public function import_dosen($file_path)
    {
        $input_file_type = PHPExcel_IOFactory::identify($file_path);
        $objReader = PHPExcel_IOFactory::createReader($input_file_type);
        $objPHPExcel = $objReader->load($file_path);
        $sheetData = $objPHPExcel->getActiveSheet()->toArray(null, true, true, true, true);
        foreach ($sheetData as $row) {
            $username = 'UBSI_' . rand(10000, 99999) . 'U';
            $password = 'UBSI_' . rand(10000, 99999) . 'P';
            $data = array(
                'nama_dosen' => $row['nama dosen'],
                'nip' => $row['nip'],
                'nidn' => $row['nidn'],
                'jabatan' => $row['jabatan'],
                'username_dosen' => $username,
                'password_dosen' => $password
            );
            $this->db->insert('tbl_dosen', $data);
        }
    }
    public function upd_dosen($upd_dosen)
    {
        $data = array(
            'nama_dosen'        => $upd_dosen['nama_dosen'],
            'nip'               => $upd_dosen['nip'],
            'nidn'              => $upd_dosen['nidn'],
            'jabatan_dosen'           => $upd_dosen['jabatan'],
        );
        $this->db->where('id_dosen', $upd_dosen['id_dosen']);
        $this->db->update('tbl_dosen', $data);
    }
    public function del_dosen($del_dosen)
    {
        $this->db->where('id_dosen', $del_dosen['id_dosen']);
        $this->db->delete('tbl_dosen');
    }
    public function upd_akses_dosen()
    {
        $data_dosen = $this->db->get('tbl_dosen')->result();
        foreach ($data_dosen as $data_unik) {
            $username = 'UBSI_' . rand(10000, 99999) . 'U';
            $password = 'UBSI_' . rand(10000, 99999) . 'P';
            $data = array(
                'username_dosen'    => $username,
                'password_dosen'    => $password,
            );
            $this->db->where('id_dosen', $data_unik->id_dosen);
            $this->db->update('tbl_dosen', $data);
        }
    }
    // --------------------------------------------------------------------------
    // OOP DATA FAKULTAS
    // --------------------------------------------------------------------------
    public function get_fakultas()
    {
        return $this->db->get('tbl_fakultas')->result();
    }
    public function add_fakultas($add)
    {
        $data = array(
            'nama_fakultas' => $add['fakultas'],
        );
        $this->db->where('id_fakultas', $add['id_fakultas']);
        $this->db->insert('tbl_fakultas', $data);
    }
    public function upd_fakultas($add)
    {
        $data = array(
            'nama_fakultas' => $add['fakultas'],
        );
        $this->db->where('id_fakultas', $add['id_fakultas']);
        $this->db->update('tbl_fakultas', $data);
    }
    public function del_fakultas($del)
    {
        $this->db->where('id_fakultas', $del['id_fakultas']);
        $this->db->delete('tbl_fakultas');
    }
    // --------------------------------------------------------------------------
    // OOP DATA PROGRAM STUDI
    // --------------------------------------------------------------------------
    public function get_prodi()
    {
        return $this->db->get('tbl_prodi')->result();
    }
    public function jumlah_prodi()
    {
        return $this->db->count_all('tbl_prodi');
    }
    public function add_prodi($add)
    {
        $data = array(
            'program_studi' => $add['prodi'],
            'fakultas'      => $add['pilih_fakultas'],
        );
        $this->db->where('id_prodi', $add['id_prodi']);
        $this->db->insert('tbl_prodi', $data);
    }
    public function upd_prodi($add)
    {
        $data = array(
            'program_studi' => $add['prodi'],
            'fakultas' => $add['pilih_fakultas'],
        );
        $this->db->where('id_prodi', $add['id_prodi']);
        $this->db->update('tbl_prodi', $data);
    }
    public function del_prodi($del_prodi)
    {
        $this->db->where('id_prodi', $del_prodi['id_prodi']);
        $this->db->delete('tbl_prodi');
    }
    // --------------------------------------------------------------------------
    // OOP DATA PROGRAM TINGKAT
    // --------------------------------------------------------------------------
    public function get_tingkat()
    {
        return $this->db->get('tbl_tingkat')->result();
    }
    public function add_tingkat($add)
    {
        $data = array(
            'tingkat' => $add['tingkat'],
            'deskripsi'      => $add['deskripsi'],
        );
        $this->db->where('id_tingkat', $add['id_tingkat']);
        $this->db->insert('tbl_tingkat', $data);
    }
    public function upd_tingkat($add)
    {
        $data = array(
            'tingkat' => $add['tingkat'],
            'deskripsi'      => $add['deskripsi'],
        );
        $this->db->where('id_tingkat', $add['id_tingkat']);
        $this->db->update('tbl_tingkat', $data);
    }
    public function del_tingkat($del_tingkat)
    {
        $this->db->where('id_tingkat', $del_tingkat['id_tingkat']);
        $this->db->delete('tbl_tingkat');
    }
    // --------------------------------------------------------------------------
    // OOP DATA PROGRAM MAHASISWA
    // --------------------------------------------------------------------------
    public function get_mahasiswa()
    {
        return $this->db->get('tbl_mahasiswa')->result();
    }
    public function jumlah_mahasiswa()
    {
        return $this->db->count_all('tbl_mahasiswa');
    }
    public function gender($gender)
    {
        return $this->db->where('jenis_kelamin', $gender)->count_all_results('tbl_mahasiswa');
    }
    public function add_mahasiswa($add)
    {
        $username_mahasiswa = 'MHS_' . rand(10000, 99999) . 'U';
        $password_mahasiswa = 'MHS_' . rand(10000, 99999) . 'P';
        $data = array(
            'nama_mahasiswa'        => $add['nama_mahasiswa'],
            'nim'                   => $add['nim'],
            'tempat_lahir'          => $add['tempat_lahir'],
            'tanggal_lahir'         => $add['tanggal_lahir'],
            'jenis_kelamin'         => $add['jenis_kelamin'],
            'semester'              => $add['semester'],
            'program_studi'         => $add['program_studi'],
            'kode_kelas'            => $add['kode_kelas'],
            'username_mahasiswa'    => $username_mahasiswa,
            'password_mahasiswa'    => $password_mahasiswa,
        );
        $this->db->where('id_mahasiswa', $add['id_mahasiswa']);
        $this->db->insert('tbl_mahasiswa', $data);
    }
    public function upd_mahasiswa($add)
    {
        $data = array(
            'nama_mahasiswa'        => $add['nama_mahasiswa'],
            'nim'                   => $add['nim'],
            'tempat_lahir'          => $add['tempat_lahir'],
            'tanggal_lahir'         => $add['tanggal_lahir'],
            'jenis_kelamin'         => $add['jenis_kelamin'],
            'semester'              => $add['semester'],
            'program_studi'         => $add['program_studi'],
            'kode_kelas'            => $add['kode_kelas'],
        );
        $this->db->where('id_mahasiswa', $add['id_mahasiswa']);
        $this->db->update('tbl_mahasiswa', $data);
    }
    public function upd_user_mahasiswa($user)
    {
        $data = array(
            'nama_mahasiswa'    => $user['nama_mahasiswa'],
        );
        $this->db->where('id_mahasiswa', $user['id_mahasiswa']);
        $this->db->update('tbl_mahasiswa', $data);
    }
    public function del_mahasiswa($del_mahasiswa)
    {
        $this->db->where('id_mahasiswa', $del_mahasiswa['id_mahasiswa']);
        $this->db->delete('tbl_mahasiswa');
    }
    public function upd_akses_mahasiswa()
    {
        $data_mahasiswa = $this->db->get('tbl_mahasiswa')->result();
        foreach ($data_mahasiswa as $data_unik) {
            $username = 'MHS_' . rand(10000, 99999) . 'U';
            $password = 'MHS_' . rand(10000, 99999) . 'P';
            $data = array(
                'username_mahasiswa'    => $username,
                'password_mahasiswa'    => $password,
            );
            $this->db->where('id_mahasiswa', $data_unik->id_mahasiswa);
            $this->db->update('tbl_mahasiswa', $data);
        }
    }
    // --------------------------------------------------------------------------
    // OOP DATA PROGRAM MATA KULIAH
    // --------------------------------------------------------------------------
    public function get_matkul()
    {
        return $this->db->get('tbl_mata_kuliah')->result();
    }
    public function jumlah_matkul()
    {
        return $this->db->count_all('tbl_mata_kuliah');
    }
    public function add_mata_kuliah($add)
    {
        $data = array(
            'nama_mata_kuliah'  => $add['nama_matkul'],
            'kode'              => $add['kode_matkul'],
            'jumlah_sks'        => $add['jumlah_sks'],
            'no_ruang'          => $add['no_ruang'],
            'kode_gabung'       => $add['kode_gabung'],
            'dosen_pengajar'    => $add['dosen_pengajar'],
        );
        $this->db->where('id_mata_kuliah', $add['id_mata_kuliah']);
        $this->db->insert('tbl_mata_kuliah', $data);
    }
    public function upd_mata_kuliah($add)
    {
        $data = array(
            'nama_mata_kuliah'  => $add['nama_matkul'],
            'kode'              => $add['kode_matkul'],
            'jumlah_sks'        => $add['jumlah_sks'],
            'no_ruang'          => $add['no_ruang'],
            'kode_gabung'       => $add['kode_gabung'],
            'dosen_pengajar'    => $add['dosen_pengajar'],
        );
        $this->db->where('id_mata_kuliah', $add['id_mata_kuliah']);
        $this->db->update('tbl_mata_kuliah', $data);
    }
    public function del_mata_kuliah($del_mata_kuliah)
    {
        $this->db->where('id_mata_kuliah', $del_mata_kuliah['id_mata_kuliah']);
        $this->db->delete('tbl_mata_kuliah');
    }
    public function get_profil()
    {
        return $this->db->get('tbl_profil')->result();
    }
    public function upd_profil($upd)
    {
        $data = array(
            'nama_lembaga'      => $upd['nama_lembaga'],
            'nomor_telepon'     => $upd['nomor_telepon'],
            'alamat_lembaga'    => $upd['alamat_lembaga'],
            'tahun_pelajaran'   => $upd['tahun_pelajaran'],
            'semester'          => $upd['semester'],
        );
        $this->db->where('id_profil', $upd['id_profil']);
        $this->db->update('tbl_profil', $data);
    }
    public function del_all_data($nama_tabel)
    {
        $this->db->empty_table($nama_tabel);
    }
    public function get_pengumuman()
    {
        return $this->db->get('tbl_pengumuman')->result();
    }
    public function get_pengumuman_dosen()
    {
        return $this->db->get('tbl_pengumuman_dosen')->result();
    }
    public function upd_pengumuman($upd)
    {
        $data = array(
            'pengumuman' => $upd['pengumuman'],
        );
        $this->db->where('id_pengumuman', $upd['id_pengumuman']);
        $this->db->update('tbl_pengumuman', $data);
    }
    public function upd_pengumuman_dosen($upd)
    {
        $data = array(
            'pengumuman_dosen' => $upd['pengumuman_dosen'],
        );
        $this->db->where('id_pengumuman_dosen', $upd['id_pengumuman_dosen']);
        $this->db->update('tbl_pengumuman_dosen', $data);
    }


    public function get_login()
    {
        return $this->db->get('tbl_log_aktivitas')->result();
    }
    public function get_logout()
    {
        return $this->db->get('tbl_log_aktivitas')->result();
    }
    public function del_all_log()
    {
        $this->db->truncate('tbl_log_aktivitas');
    }
    public function insert_log($data)
    {
        $this->db->insert('tbl_log_aktivitas', $data);
    }
}
