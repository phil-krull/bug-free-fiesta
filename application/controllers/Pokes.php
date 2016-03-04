<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Pokes extends CI_Controller {

	public function show() {
		$this->load->model('Poke');
		// session user only;
		$user = $this->Poke->show($this->session->userdata('id'));
		// var_dump($user);
		// die;

		// for all users other than session user;
		$users = $this->Poke->index($this->session->userdata('id'));
		// var_dump($users);
		// die;

		$this->load->view('Users/pokes', array('users' => $users, 'user' => $user));
	}

	public function create($user_id)
	{
		$this->load->model('Poke');
		$this->Poke->create($user_id, $this->session->userdata('id'));
		redirect('/users/pokes');
	}
}

/* End of file welcome.php */
/* Location: ./application/controllers/welcome.php */