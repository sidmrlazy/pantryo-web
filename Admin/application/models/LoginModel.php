<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class LoginModel extends CI_Model {
	function __construct() {
		parent::__construct();
	   
    }
	
	public function checking($data)
	{
        $res=$this->db->get_where('admin',$data)->result();
        // print_r($res);exit;
        foreach($res as $row)
        {
           $logindata=array(
               'admin_id'=>$row->admin_id,
               'user_mobile'=>$row->user_mobile,
               'loginStatus'=>TRUE,

           );
        }
        // print_r($logindata);exit;
        if(isset($logindata))
        {
          $this->session->set_userdata($logindata);
          return TRUE;
        }
        else{
            return FALSE;
        }
	}
    public function loggedin() {
        return $this->session->userdata('loginStatus');
        
    }
	
}
