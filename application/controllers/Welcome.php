<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Welcome extends CI_Controller {

	public function index()
	{
		$this->load->view('home');
	}
	public function reg_alumni()
	{
		$this->load->view('reg_alumni');
		
	}
	/*public function comfirm()
	{
		$this->loan->view('config_reg');
	} */
	public function view_reg()
	{
		$this->load->view('view_reg');
		
	}
}
