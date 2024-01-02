<?php 
    defined('BASEPATH') OR exit('No direct script access allowed');
    #[\AllowDynamicProperties]
    class Dosen_menu {
        var $dosen_menu_data = array();

        function set($name, $value){
            $this->dosen_menu_data[$name] = $value;
        }
        function load($dosen_menu = '', $view = '', $view_data = array(), $return = FALSE){
            $this->CI =& get_instance();
            $this->set('dosen_menu',$this->CI->load->view($view, $view_data, TRUE));
            return $this->CI->load->view($dosen_menu, $this->dosen_menu_data, $return);
        }
    }
?>