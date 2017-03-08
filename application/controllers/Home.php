<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Home extends CI_Controller
{

	public function index()
	{
		$data['title'] = 'CodeIgniter 3 + Bootstrap 3';
		$this->load->view('template/header', $data);
		$this->load->view('home');
		$this->load->view('template/footer', $data);
	}

}
