<?php

defined('BASEPATH') OR exit('No direct script access allowed');

class Home extends CI_Controller {

    public function index()
    {
        $this->load->view('Login_view');        
    }
    public function Register()
    {
        $this->load->view('register_view');        
    }
    public function Login()
    {
        $this->load->view('Login_view');        
    }
    public function Masuk(Type $var = null)
    {
        $this->load->view('user_view');        
    }

}

/* End of file Home.php */

?>