<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class pokes extends CI_Controller {

	public function show() {
		$this->load->model('poke');
		// session user only;
		$user = $this->poke->show($this->session->userdata('id'));
		// var_dump($user);
		// die;

		// for all users other than session user;
		$users = $this->poke->index($this->session->userdata('id'));
		// var_dump($users);
		// die;

		$this->load->view('users/pokes', array('users' => $users, 'user' => $user));
	}

	public function create($user_id)
	{
		$this->load->model('poke');
		$this->poke->create($user_id, $this->session->userdata('id'));
		redirect('/users/pokes');
	}
}

/* End of file welcome.php */
/* Location: ./application/controllers/welcome.php */