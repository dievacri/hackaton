<?php 
defined('BASEPATH') OR exit('No direct script access allowed');

/**
* 
*/
class Info extends CI_Controller
{
	
	public function index()
	{
		return $this->load->view('usuario/info');
	}

	public function infoMetro()
	{
		return $this->load->view('usuario/infometro');
	}
	public function infoTren()
	{
		return $this->load->view('usuario/infotren');
	}
	public function infocorredor()
	{
		return $this->load->view('usuario/corredor');
	}
}