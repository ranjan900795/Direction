<?php

defined('BASEPATH') OR exit('No direct script access allowed');

class Deals extends CI_Model {

    public function __construct() {
        parent :: __construct();
        $this->load->database();
    }
    

    
    public function parts_select($choice) {
        $query = $this->db->get('parts');
        /* @var $row Deals */
        
        foreach ($query->result() as $row) {
            if ($choice == $row->parts) {
                $part = $row->parts;
                return ($part);
                
                
            }
        }
        
    }
    
    
}