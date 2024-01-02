<?php 
    defined('BASEPATH') OR exit('No direct script access allowed');
    class Home extends CI_Controller{
        public function __construct(){
            parent::__construct();
            // $this->load->library('excel');
        }
        public function index(){
            $data['judul'] = "Login Aplikasi";
            $valid = $this->form_validation;
            $username = $this->input->post('username');
            $password = $this->input->post('password');
            $valid->set_rules('username','Username','required');
            $valid->set_rules('password','Password','required');
            if($valid->run()){
                $this->simple_login->login($username,$password, base_url('dashboard'), base_url('login'));
            }
            $this->load->view('login', $data);
        }
        public function logout(){
            $this->simple_login->logout();
        }
    }
?>