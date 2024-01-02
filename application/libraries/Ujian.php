<?php 
    defined('BASEPATH') OR exit('No direct script access allowed');
    #[\AllowDynamicProperties]
    class Ujian {
        var $ujian_data = array();

        function set($name, $value){
            $this->ujian_data[$name] = $value;
        }
        function load($ujian = '', $view = '', $view_data = array(), $return = FALSE){
            $this->CI =& get_instance();
            $this->set('ujian',$this->CI->load->view($view, $view_data, TRUE));
            return $this->CI->load->view($ujian, $this->ujian_data, $return);
        }
    }
?>