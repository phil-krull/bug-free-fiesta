<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class User extends CI_Model {

  public function create($post) {
    $query = "INSERT INTO users (name, alias, email, dob, password, created_at, updated_at) VALUES (?,?,?,?,?,NOW(),NOW())";
    $values = array(
      $post['name'],
      $post['alias'],
      $post['email'],
      $post['dob'],
      password_hash($post['password'],PASSWORD_BCRYPT)
      );

    return $this->db->query($query, $values);
  }

  public function validate() {
    $this->form_validation->set_rules('name', 'Name', 'required');
    $this->form_validation->set_rules('alias', 'Alias', 'required');
    $this->form_validation->set_rules('email', 'Email', 'required|valid_email|is_unique[users.email]');
    $this->form_validation->set_rules('dob', 'Date of Birth', 'required');
    $this->form_validation->set_rules('password', 'Password', 'required|matches[password_confirmation]|min_length[8]');
    $this->form_validation->set_rules('password_confirmation', 'Confirm Password', 'required');

    return $this->form_validation->run();
  }

  public function login($email) {
    $query = "SELECT * FROM users WHERE email = ?";
    $values = array($email);
    return $this->db->query($query, $values)->row_array();
  }
}