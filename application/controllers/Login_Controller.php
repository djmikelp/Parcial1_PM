<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Login_Controller extends CI_Controller {
public function __construct()
{
	parent::__construct();
	$this->load->helper('url');
	$this->load->model('login_model');
}
	public function index()
	{
		$this->load->view('header');
		$this->load->view('Login');
		$this->load->view('footer');
	}
	public function verificar()
	{
		if (isset($_POST['clave']) && isset($_POST['ci']))
		{
				$this->load->model('Login_model');
			if($this->Login_model->login($_POST['ci'],$_POST['clave']))
			{
				$identificador=$this->Login_model->get_identificador($_POST['ci']);
				$usuario=$this->Login_model->get_usuario($_POST['ci']);
				$datos["identificador"]=$identificador;
				$datos["usuario"]=$usuario;
				$this->load->view('header', $datos);
				$this->load->view('Bienvenida');
				$this->load->view('footer');
			}else {
				redirect('Login_Controller');
			}
		}
	}

}
