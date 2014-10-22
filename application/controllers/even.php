<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Even extends CI_Controller {

	public function index()
	{	
		$this->load->view('templates/header');
		$this->load->view('index_view');
		$this->load->view('templates/footer');

	}
}
