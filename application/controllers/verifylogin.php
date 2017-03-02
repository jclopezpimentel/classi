<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class VerifyLogin extends CI_Controller {

 function __construct()
 {
   parent::__construct();
   $this->load->model('UsuariosModel','',TRUE);
   $this->load->library('session');
 }

 function index()
 {
   //This method will have the credentials validation
   $this->load->helper('security');
   $this->load->library('form_validation');

   $this->form_validation->set_rules('email', 'email', 'trim|required|xss_clean');
   $this->form_validation->set_rules('contrasena', 'contrasena', 'trim|required|xss_clean|callback_check_database');

   if($this->form_validation->run() == FALSE)
   {
     //Field validation failed.  User redirected to login page


     $this->load->view('Shared/modallogin');
   }
   else
   {
     //Go to private area


     $session_data = $this->session->userdata('logged_in');
     $data['email'] = $session_data['email'];
     $this->load->view('inicio/home_view', $data);
   }

 }

 function check_database($contrasena)
 {
   //Field validation succeeded.  Validate against database
   $email = $this->input->post('email');

   //query the database
   $result = $this->UsuariosModel->login($email, $contrasena);

   if($result)
   {
     $sess_array = array();
     foreach($result as $row)
     {
       $sess_array = array(
         'idUsuario' => $row->idUsuario,
         'email' => $row->email
       );
       $this->session->set_userdata('logged_in', $sess_array);
     }
     return TRUE;
   }
   else
   {
     $this->form_validation->set_message('check_database', 'Invalid username or password');
     return false;
   }
 }
}
?>