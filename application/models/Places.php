<?php

defined('BASEPATH') OR exit('No direct script access allowed');

class Places extends CI_Model {

    public function __construct() {
        parent :: __construct();
        $this->load->database();
    }
    

    
    public function upload_places() {
        $destination = $_POST["destination"];
        $database = $_POST["database"];
        
        $data = array(
            'destination'=>$destination 
        );
        $this->db->insert("$database", $data);
        echo 'successful';
        
        
        
    }
    
    
}