<?php

defined('BASEPATH') OR exit('No direct script access allowed');

class Shopcart extends CI_Model {

    public function __construct() {
        parent :: __construct();
        $this->load->database();
    }

    public function add_item($id) {
        $this->db->where('id', $id);
        $product = $this->db->get('activities');
        foreach ($product->result() as $row) {
            $dest_id = $row->destination_id;
            $name = $row->name;

            $price = $row->price;
        }

        $item = array(
            'name' => $name,
            'price' => $price,
            'qty' => 1,
            'total_price' => $price,
            'activities_id' => $id,
            'users_id' => $_SESSION['id']
        );
        $this->db->insert('cart', $item);

        $this->db->where('id', $dest_id);
        $query = $this->db->get('destination');

        foreach ($query->result() as $col) {
            $dest = $col->dest;
        }
        return $dest;
    }

    public function find() {
        $this->db->where('users_id', $_SESSION['id']);
        $query = $this->db->get('cart');
        return ($query->result());
    }

    public function delete_item($id) {
        
        $this->db->where('id', $id);
        $this->db->delete('cart');
    }

}
