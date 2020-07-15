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
    public function get_identificador($ci)
    {
      $query=$this->db->query("Select * from identificador where ci='$ci'");
  		return $query->row_array();
    }
    public function get_usuario($ci)
    {
      $query=$this->db->query("Select * from usuario where ci='$ci'");
  		return $query->row_array();
    }
}
