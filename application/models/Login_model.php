<?php
class Login_model extends CI_model
{
    public function __construct()
    {
        $this->load->database();
    }
    public function login($ci,$clave)
    {
      $this->db->where('ci',$ci);
      $this->db->where('clave',$clave);
      $q = $this->db->get('usuario');
      if ($q->num_rows()>0) {
        return true;
      }else {
        return false;
      }
    }
}
