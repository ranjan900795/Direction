
<?php

defined('BASEPATH') OR exit('No direct script access allowed');

class Compass extends CI_Controller {

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
    public function part($choice) {



        if (isset($_SESSION['id']) && $_SESSION['id'] != NULL) {
            $this->load->view('header_loggedin');
            $this->load->model('places');
            $part['part'] = $this->places->parts_select($choice);
            $this->load->view('part', $part);
            $this->load->view('footer');
        } else {
            $this->load->view('header');
            $this->load->model('places');
            $part['part'] = $this->places->parts_select($choice);
            $this->load->view('part', $part);
            $this->load->view('footer');
        }
    }

    public function destination($dest) {
        if (isset($_SESSION['id']) && $_SESSION['id'] != NULL) {
            $this->load->view('header_loggedin');
            $this->load->model('places');
            $query = $this->places->activities_select($dest);
            $activity['activity']=$query['activities'];
            
            $activity['destination']=$query['destination'];
            $activity['nearby']=$query['all_dest'];
            $this->load->view('destination', $activity);
            $this->load->view('footer');
        } else {
            $this->load->view('header');
            $this->load->model('places');
            $query = $this->places->activities_select($dest);
            $activity['activity']=$query['activities'];
            
            $activity['destination']=$query['destination'];
            $activity['nearby']=$query['all_dest'];
            
            $this->load->view('destination', $activity);
            $this->load->view('footer');
        }
    }

}
