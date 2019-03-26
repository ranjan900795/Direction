<?php

defined('BASEPATH') OR exit('No direct script access allowed');

class Admin extends CI_Controller {

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
    public function login() {
        $this->load->view('admin_login');
    }
    
    public function login_submit() {
        $this->load->model('administrator');
        $admin_id = $this->administrator->admin_login();
    
        if (!$admin_id) {
            echo 'Authentication unsuccessful';
        } else {
            //session_start();
            $_SESSION['id'] = $admin_id;
            header("location:../admin/home");
        }
    }
    
    public function home() {
        if (isset($_SESSION['id']) && $_SESSION['id'] != NULL) {
            $this->load->view('admin_home');
        } else {
            header("location:../admin/login");
        }
        
    }
    
    public function places() {
        $this->load->view('places');
    }
    
    public function places_upload() {
        $this->load->model('places');
        $this->places->upload_places();
        
    }
    
    public function activities() {
        $this->load->view('activities');
    }
    
    public function activities_upload() {
        $this->load->model('places');
        $this->places->upload_activities();
        
    }
    
    

}