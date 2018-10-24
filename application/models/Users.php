<?php

defined('BASEPATH') OR exit('No direct script access allowed');

class Users extends CI_Model {

    public function __construct() {
        parent :: __construct();
        $this->load->database();
    }

    public function get_usersdata() {

        $name = $_POST["Name"];
        $email = $_POST["e-mail"];
        $pass = $_POST["pass"];
        echo $name;
        $data = array(
            'name' => $name,
            'email' => $email,
            'password' => $pass
        );

        $this->db->insert('users', $data);
        // Produces: INSERT INTO mytable (title, name, date) VALUES ('My title', 'My name', 'My date')
    }

    public function users_login() {
        $email = $_POST["e-mail"];
        $pass = $_POST["pass"];

        $query = $this->db->get('users');
        $flag = 0;
        foreach ($query->result() as $row) {
            if ($email == $row->email && $pass == $row->password) {
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
