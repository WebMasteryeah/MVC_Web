<?php
class Player extends CI_Controller{
    
    public function __construct(){
        //calls the contructor of its parent class CI_Controller
        parent::__construct(); 
    }
    
    public function play($id=NULL){
        
        $this->load->helper('html');
        $this->load->helper('url');
        
        $this->load->view("$id");

    }
}
?>


