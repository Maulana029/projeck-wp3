<?php 
    defined('BASEPATH') OR exit('No direct script access allowed');
    #[\AllowDynamicProperties]
    class mahasiswa_menu {
        var $mahasiswa_menu_data = array();

        function set($name, $value){
            $this->mahasiswa_menu_data[$name] = $value;
        }
        function load($mahasiswa_menu = '', $view = '', $view_data = array(), $return = FALSE){
            $this->CI =& get_instance();
            $this->set('mahasiswa_menu',$this->CI->load->view($view, $view_data, TRUE));
            return $this->CI->load->view($mahasiswa_menu, $this->mahasiswa_menu_data, $return);
        }
    }
?>