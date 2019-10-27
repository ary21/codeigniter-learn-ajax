<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Welcome extends CI_Controller {
	
	public function index() {
		$data['content'] = $this->load->view('index', null, true);
		$this->load->view('layout', $data);
	}

	public function form() {
		$this->load->view('form');
	}
}
