<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class hOME extends CI_Controller {

	public function index()
	{
		$this->load->view('partial/header');
		$this->load->view('home');
		$this->load->view('partial/footer');
	}
}
