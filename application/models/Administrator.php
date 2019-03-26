<?php

defined('BASEPATH') OR exit('No direct script access allowed');

class Administrator extends CI_Model {

    public function __construct() {
        parent :: __construct();
        $this->load->database();
    }

    public function admin_login() {
        $name = $_POST["name"];
        $pass = $_POST["password"];

        $query = $this->db->get('admin');
        $flag = 0;
        foreach ($query->result() as $row) {
            if ($name == $row->name && $pass == $row->password) {
                $flag = 1;
                $id = $row->id;
                break;
            }
        }
        if ($flag == 0) {
            return false;
        } else {
            return ($id);
        }
    }

}
