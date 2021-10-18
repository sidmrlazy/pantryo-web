<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Dashboard extends MY_Controller
{
  public function __construct()
  {
    parent::__construct();
    $this->load->model('HomeModel', 'home');
    $this->load->model('LoginModel');
  
    $this->load->library('form_validation');
    if ($this->LoginModel->loggedin() != true) {
      redirect('/');
    }
  }
  public function login()
  {
    $today = strtotime('today');
    $tomorrow = strtotime('tomorrow');

    //customer count
    $this->home->_table_name = 'pantryo_customer';
    $data['customer_count'] = count($this->home->get_all_data_bulk());

    //daily earning count
    

    //shop partner count
    $this->home->_table_name = 'pantryo_partner';
    $data['shopPartner_count'] = count($this->home->get_all_data_bulk());
    //delivery partner count
    $this->home->_table_name = 'pantryo_delivery_partner';
    $data['deliveryPartner_count'] = count($this->home->get_all_data_bulk());
    //product cart count
    $this->home->_table_name = 'pantryo_cart_product';
    $condition = "create_date > $today and create_date < $tomorrow";

    // $data['order_details']=$this->home->get_all_data_bulk();
    $data['order_details'] = $this->home->gettodayorder();
    $this->pages('Dashboard/dashboard', $data);
  }
}