<?php

defined('BASEPATH') OR exit('No direct script access allowed');

class Cart extends CI_Controller {

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
    public function shopping_cart() {
        if (isset($_SESSION['id']) && $_SESSION['id'] != NULL) {
            $this->load->view('header_loggedin');
            $this->load->model('shopcart');
            $item['item']= $this->shopcart->find();
            $this->load->view('cart',$item);
            $this->load->view('footer');
        }
        
    }

    public function add($id) {
        $this->load->model('shopcart');
        $dest = $this->shopcart->add_item($id);
        header("location:../../compass/destination/$dest");
    }
    
    public function delete($id){
        $this->load->model('shopcart');
        $this->shopcart->delete_item($id);
        header("location:../../cart/shopping_cart");
    }

}
