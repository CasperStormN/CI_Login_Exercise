<?php

class Test extends CI_Controller {
	public function index() {
		echo 'Test frontpage';
	}

	public function dashboard() {
		$this->load->view('dashboard_view');
	}
}