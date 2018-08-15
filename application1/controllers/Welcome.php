<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Welcome extends CI_Controller {

	public function index()
	{
		$this->output->cache(1);
		$data['num'] = rand(10,100);
		$this->load->view('pages/about', $data);
	}
	public function about()
	{
		//$this->output->cache(1);
		//$data['num'] = rand(10,100);
		//$this->load->view('pages/about', $data);
		//$this->output->delete_cache();
		$this->output->delete_cache('welcome'); 
	}
}
