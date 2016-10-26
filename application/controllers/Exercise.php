<?php

class Exercise extends CI_Controller {
	public function index() {
		$this->load->view('index_view');
	}

	public function about() {
		$this->load->view('about_view');
	}
}