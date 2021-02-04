<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Welcome extends CI_Controller {
	public function index()
	{
		$this->load->library('session');
		$this->load->helper('url');

		$this->load->view('header');
		$this->load->view('nav');
		$this->load->view('welcome_message');
		$this->load->view('footer');
	}
}
