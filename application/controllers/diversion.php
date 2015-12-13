<?php 
defined('BASEPATH') OR exit('No direct script access allowed');

/**
* 
*/
class Diversion extends CI_Controller
{
	
	public function index()
	{
		$handler = curl_init("http://api.datosabiertos.msi.gob.pe/datastreams/invoke/ACTIV-CULTU-86315?auth_key=cc3a41046dc0e9e0e0b04e48b5c32585636af8dd&output=json_array");
		curl_setopt($handler, CURLOPT_RETURNTRANSFER,true);
		$response = curl_exec ($handler);
		curl_close($handler);
		$data = array ('eventos' => json_decode($response));
		return $this->load->view('usuario/diversion',$data);
	}

}