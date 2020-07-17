<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class pregunta2_Controller extends CI_Controller {
public function __construct()
{
	parent::__construct();
}
	public function index()
	{
    $this->load->model('pregunta2_model');
    $consulta=$this->pregunta2_model->get_consulta();
    $datos["consulta"]=$consulta;
		$this->load->view('pregunta2',$datos);
	}

}
