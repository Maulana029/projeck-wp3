<?php
class Simple_login
{
    var $CI = NULL;
    public function __construct()
    {
        $this->CI = &get_instance();
        $this->CI->load->model('M_model');
    }
    public function login($username, $password)
    {
        $query = $this->CI->db->get_where('tbl_user', array('username' => $username, 'password' => md5($password)));
        $dosen = $this->CI->db->get_where('tbl_dosen', array('username_dosen' => $username, 'password_dosen' => $password));
        $mahasiswa = $this->CI->db->get_where('tbl_mahasiswa', array('username_mahasiswa' => $username, 'password_mahasiswa' => $password));
        if ($query->num_rows() == 1) {
            $admin = $query->row();
            $id = $admin->id_user;
            $name = $admin->nama;
            date_default_timezone_set('Asia/Jakarta');
            $log_data = array(
                'id_user' => $id,
                'nama_user' => $name,
                'tipe_aktivitas' => 'Login',
                'waktu_aktivitas' => date('Y-m-d H:i:s')
            );
            $this->CI->M_model->insert_log($log_data);

            $this->CI->session->set_userdata('username', $username);
            $this->CI->session->set_userdata('id_user', uniqid(rand()));
            $this->CI->session->set_userdata('id_user', $id);
            redirect(base_url('dashboard'));
        } elseif ($dosen->num_rows() > 0) {
            $v_dosen = $dosen->row();
            $id_dosen = $v_dosen->id_dosen;
            $this->CI->session->set_userdata('username', $username);
            $this->CI->session->set_userdata('id_dosen', uniqid(rand()));
            $this->CI->session->set_userdata('id', $id_dosen);
            redirect(base_url('dosen/dashboard'));
        } elseif ($mahasiswa->num_rows() > 0) {
            $v_mahasiswa = $mahasiswa->row();
            $id_mahasiswa = $v_mahasiswa->id_mahasiswa;
            $this->CI->session->set_userdata('username', $username);
            $this->CI->session->set_userdata('id_mahasiswa', uniqid(rand()));
            $this->CI->session->set_userdata('id', $id_mahasiswa);
            redirect(base_url('mahasiswa/dashboard'));
        } else {
            $this->CI->session->set_flashdata('error', 'Username atau password salah, Silahkan coba lagi...');
            redirect(base_url('home'));
        }
        return false;
    }
    public function cek_login()
    {
        if ($this->CI->session->userdata('username') == '') {
            $this->CI->session->set_flashdata('error', 'Anda belum login');
            redirect(base_url('home'));
        }
    }
    public function logout()
    {
        $this->CI->session->sess_destroy();
        $this->CI->session->unset_userdata('username');
        $this->CI->session->unset_userdata('id_user');
        $this->CI->session->unset_userdata('id');
        redirect(base_url('home'));
    }
}
