<?php

defined('BASEPATH') OR exit('No direct script access allowed');

class Registration extends CI_Controller {

    /**
     * Index Page for this controller.
     *
     * Maps to the following URL
     * 		http://example.com/index.php/welcome
     * 	- or -
     * 		http://example.com/index.php/welcome/index
     * 	- or -
     * Since this controller is set as the default controller in
     * config/routes.php, it's displayed at http://example.com/
     *
     * So any other public methods not prefixed with an underscore will
     * map to /index.php/welcome/<method_name>
     * @see https://codeigniter.com/user_guide/general/urls.html
     */
    public function signup() {
        $this->load->view('header');
        $this->load->view('signup');
        $this->load->view('footer');
    }

    public function signup_submit() {
        
        $this->load->model('users');
        $this->users->get_usersdata();
        
    }

    public function signin_submit() {
        $this->load->model('users');
        $user_id = $this->users->users_login();

        if (!$user_id) {
            echo 'Authentication unsuccessful';
        } else {
            //session_start();
            $_SESSION['id'] = $user_id;
            header("location:../welcome/home");
        }
        
    }
    
    public function signout() {
        //session_start();
        session_destroy();
        header("location:../welcome/home");
    }

}



