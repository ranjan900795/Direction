<?php

defined('BASEPATH') OR exit('No direct script access allowed');

class Places extends CI_Model {

    public function __construct() {
        parent :: __construct();
        $this->load->database();
    }
    

    public function parts_select($choice) {
        $this->db->select('id');
        $this->db->where('parts', "$choice");
        $query = $this->db->get('india');
        foreach ($query->result() as $row) {
            $id = $row->id;
        }



        $this->db->where('india_id', "$id");
        $list = $this->db->get('destination');

        return ($list->result());
    }

    public function upload_places() {
        $destination = $_POST["destination"];
        $part = $_POST["part"];
        $config['upload_path'] = "./static/uploads/";
        
        $config['allowed_types'] = 'jpg|jpeg|png|gif';
        $config['file_name'] = $_FILES['file']['name'];
        
        $error = $_FILES['file']['error'];
        
        if (move_uploaded_file($_FILES["file"]["tmp_name"], $config['upload_path'].$config['file_name'])) {
            $picture = $config['file_name'];
        } else {
            echo 'sorry'; 
            echo $error;
        }
        $this->db->select('id');
        $this->db->where('parts', "$part");
        $query = $this->db->get('india');
        foreach ($query->result() as $row) {
            $id = $row->id;
        }
        $data = ['dest' => $destination,         'india_id' => $id,          'picture' => $picture
            ];
        $this->db->insert('destination', $data);

        echo 'success';
    }

    public function upload_activities() {
        $name = $_POST["name"];
        $price = $_POST["price"];
        $dest = $_POST["dest"];




        $config['upload_path'] = './static/uploads/';
        $config['allowed_types'] = 'jpg|jpeg|png|gif';
        $config['file_name'] = $_FILES['file']['name'];

        //Load upload library and initialize configuration

        echo $config['file_name'];

        if (move_uploaded_file($_FILES["file"]["tmp_name"], $config['upload_path'].$config['file_name'])) {
            $picture = $config['file_name'];
        } else {
            echo 'sorry';
            
        }


        $this->db->select('id');
        $this->db->where('dest', "$dest");
        $query = $this->db->get('destination');
        foreach ($query->result() as $row) {
            $id = $row->id;
        }
        //Prepare array of user data
        $data = array(
            'name' => $name,
            'price' => $price,
            'destination_id' => $id,
            'picture' => $picture
        );
        //Pass user data to model
        $this->db->insert('activities', $data);

        echo 'success';
    }

    public function activities_select($dest) {
        $this->db->select('id');
        $this->db->where('dest', "$dest");
        $query = $this->db->get('destination');
        foreach ($query->result() as $row) {
            $id = $row->id;
        }


        $this->db->where('destination_id', "$id");
        $list = $this->db->get('activities');
        return($list->result());
    }

    

}
