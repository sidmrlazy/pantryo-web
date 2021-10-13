<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class MY_Model extends CI_Model {
	protected $_table_name='';
    protected $_primary_key='';
    

    function __construct() {
		parent::__construct();
	
    }
   
    public function get_all_date($condition = NULL)
    {
       if($condition != NULL)
       {
         $this->db->where($condition);
         $query=$this->db->get($this->_table_name);
         return $query->row();
       }
       else
       {
        $query=$this->db->get($this->_table_name);
        return $query->result();
       }
    }

	public function get_all_data_bulk($condition = NULL)
	{
        if($condition != NULL)
        {
            $this->db->where($condition);
            $query=$this->db->get($this->_table_name);
            return $query->result();
        }
        else{
            $query=$this->db->get($this->_table_name);
            return $query->result();
        }
	}
  public function updatedata($data,$condition)
  {
     $this->db->set($data)
     ->where($condition)
     ->update($this->_table_name);
     return ($this->db->affected_rows() > 0);
  }
	public function insert($data)
  {
    $this->db->insert($this->_table_name,$data);
    $insert_id = $this->db->insert_id();
   return  $insert_id;
  }
  public function delete($condition)
  {
    if($condition !=null)
    {
      $this->db->where($condition);
      $this->db->delete($this->_table_name); 
    }
   
  }
}
