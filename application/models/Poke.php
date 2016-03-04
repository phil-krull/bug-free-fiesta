<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Poke extends CI_Model {

  public function index($user_id) {
    $query = "SELECT users.id, users.name,users.alias,users.email, count(pokes.user_id) AS pokes FROM users LEFT JOIN pokes ON users.id = pokes.user_id WHERE users.id != $user_id GROUP BY users.id ORDER BY users.alias ASC";

    return $this->db->query($query)->result_array();
  }

  public function show($user_id) {
    $query = "SELECT users.alias, count(pokes.id) AS pokes FROM pokes JOIN users ON users.id = pokes.poke_user_id WHERE user_id = $user_id GROUP BY users.alias ORDER BY pokes DESC";

    return $this->db->query($query)->result_array();
  }

  public function create($id, $poker_id) {
    $query = "INSERT INTO pokes (user_id, poke_user_id, created_at, updated_at) VALUES (?,?,NOW(),NOW())";
    $values = array(
      $id,
      $poker_id,
      );

    return $this->db->query($query, $values);
  }

}