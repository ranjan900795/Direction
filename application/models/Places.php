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


        $this->db->select('id');
        $this->db->where('parts', "$part");
        $query = $this->db->get('india');
        foreach ($query->result() as $row) {
            $id = $row->id;
        }

        $data = array(
            'dest' => $destination,
            'india_id' => $id
        );
        $this->db->insert('destination', $data);

        echo 'success';
    }

    public function upload_activities() {
        $name = $_POST["name"];
        $price = $_POST["price"];
        $dest = $_POST["dest"];
        $file_name = $_FILES["photo"]["name"];
        print_r($file_name);

        $this->db->select('id');
        $this->db->where('dest', "$dest");
        $query = $this->db->get('destination');
        foreach ($query->result() as $row) {
            $id = $row->id;
        }

        $data = array(
            'name' => $name,
            'price' => $price,
            'destination_id' => $id
        );
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
