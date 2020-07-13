<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Login_Controller extends CI_Controller {
public function __construct()
{
	parent::__construct();
	$this->load->helper('url');
}
	public function index()
	{
		if (isset($_POST['clave'])) {
			$this->load->model('Login_model');
			if($this->Login_model->login($_POST['ci'],$_POST['clave']))
			{
				redirect('Bienvenida_Controller');
			}else {
				redirect('Login_Controller');
			}
		}


		$this->load->view('login');


	}
}
