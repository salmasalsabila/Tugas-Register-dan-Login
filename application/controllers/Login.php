<?php


defined('BASEPATH') OR exit('No direct script access allowed');

class Login extends CI_Controller {

    public function loginUser()
    {
        $this->load->model('Model_user');
        $querry = $this->Model_user->checkLogin();
        $username = $querry[0]->username;

        $listSession = array (
            'username' => $username
        );

        $this->session->set_userdata($listSession);
        $this->session->set_flashdata('berhasil', 'Berhasil Login');

        
        redirect('Home/Masuk');        
    }
    public function logoutUser()
    {
        unset($_SESSION);
        
        redirect('Home/Index');
        
    }
        

}


/* End of file Login.php */


?>