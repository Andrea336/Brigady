
<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Home extends CI_Controller {


	public function index()
	{
		//$data['meno'] = "Martin";
		//$data['dnes'] = date(format: "j.n.Y");


		$this->load->view('template/header');
		$this->load->view('home');   // $this->load->view('home', $data); 
		$this->load->view('template/footer');
	}
}