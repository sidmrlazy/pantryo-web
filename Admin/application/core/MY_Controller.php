<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed'); 

class MY_Controller extends CI_Controller {

   public function pages($page,$data=NULL)
   {
      
    $this->load->view('include/header');
    $this->load->view('include/navigation');
    $this->load->view($page,$data);
    $this->load->view('include/footer');

   } 

}