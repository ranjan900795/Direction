<?php

defined('BASEPATH') OR exit('No direct script access allowed');

class Monthly_deals extends CI_Controller {

    /**
     * Index Page for thpublic function signup() {
      $this->load->view('header');
      $this->load->view('signup');
      $this->load->view('footer');
      }is controller.
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
    public function deals() {
        $this->load->view('deals');
    }

    public function do_upload() {

        if (!empty($_FILES['picture']['name'])) {
            $config['upload_path'] = 'static/images/';
            $config['allowed_types'] = 'jpg|jpeg|png|gif';
            $config['file_name'] = $_FILES['picture']['name'];

            //Load upload library and initialize configuration
            $this->load->library('upload', $config);
            $this->upload->initialize($config);

            if ($this->upload->do_upload('picture')) {
                $uploadData = $this->upload->data();
                $picture = $uploadData['file_name'];
                
            } else {
                $picture = '';
            }
        } else {
            $picture = '';
        }
        $this->load->model('deals');
        $this->deals->get_dealsdata($picture);



        //Pass user data to model
    }

}
