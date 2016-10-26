<?php

class User extends CI_Controller {
	public $email = '';

	public $password = '';

	public function index() {
		$email = $this->input->post('email');

		$password = $this->input->post('password');

		$this->load->library('form_validation');

		$this->form_validation->set_rules('email', 'Email', 'required|valid_email|min_length[5]');

		$this->form_validation->set_rules('password', 'Password', 'required|min_length[4]');

		if ($this->form_validation->run() === true) {
			# check in DB 
			$this->load->model('users_model');
			$this->users_model->login($email, $password);

			
		}

		$this->load->view('login_view');
	}

	public function test() {
		$this->load->helper('date');

		echo mdate('%Y-%M-%d', time());
	}

	public function url() {
		$this->load->helper('url');

		echo base_url();
	}

	public function userlist() {
		$this->load->model('users_model');
		$users = $this->users_model->get_users();

		$this->load->view('userlist_view', [
		'users' => $users,]);
	}

}