<?php
    class M_aktivitas extends CI_Model{
        public function insert_log($id_user, $tipe_aktivitas){
            $data = array(
                'id_user' => $id_user,
                'tipe_aktivitas' => $tipe_aktivitas,
                'waktu_aktivitas' => date('Y-m-d H:i:s'),
            );
            $this->db->insert('tbl_aktivitas_user',$data);
        }
        public function get_user_act($id_user){
            $this->db->where('id_user',$id_user);
            $this->db->order_by('waktu_aktivitas');
            return $this->db->get('tbl_aktivitas')->result();
        }
    }
?>