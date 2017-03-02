<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class UsuariosModel extends CI_Model{

  public function __construct(){
      parent::__construct();/*constructor de la clase padre Model*/
      $this->load->database();/*Permite accesos a la base de datos*/
      $this->load->library('session');
  }
  
function login($email,$contrasena){
  $this->db->select('idUsuario, email, contrasena');
  $this->db->from('usuario');
  $this->db->where('email',$email);
  $this->db->where('contrasena',$contrasena);
  $this->db->limit(1);

  $query = $this->db->get();
  if ($query->num_rows()==1) {
    return $query->result();
  }
  else{
    return false;
  }
}
}