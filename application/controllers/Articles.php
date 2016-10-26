<?php

class Articles extends CI_Controller {
	
	public function index() {
		$array = [
			'alpha',
			'beta',
			'charlie',
		];
		$this->output
			->set_content_type('application/json', 'UTF-8')
			->set_output(json_encode($array));
	}

	public function ladida() {
		$this->session->set_userdata('user_id', 348);
	}

	public function demo() {
		echo $this->session->userdata('user_id');
	}
}