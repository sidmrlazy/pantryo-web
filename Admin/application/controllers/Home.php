<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Home extends MY_Controller {
    
    public function __construct()
    {
       parent::__construct();
       $this->load->model('HomeModel','home');
       $this->load->model('LoginModel');
       $this->load->library('form_validation');
       if($this->LoginModel->loggedin() != true)
       {
           redirect('/');
       }
    }
//     $message="checking the messsage";
//     $type="error";
//    set_message($type,$message);
	public function index() 
	{
		$this->load->view('Login/login');
	}
 
    public function login()
    {
        $today=strtotime('today'); 
        $tomorrow=strtotime('tomorrow'); 
        //customer count
        $this->home->_table_name='pantryo_customer';
        $data['customer_count']=count($this->home->get_all_data_bulk());
        //shop partner count
        $this->home->_table_name='pantryo_partner';
        $data['shopPartner_count']=count($this->home->get_all_data_bulk());
        //delivery partner count
        $this->home->_table_name='pantryo_delivery_partner';
        $data['deliveryPartner_count']=count($this->home->get_all_data_bulk());

        $this->home->_table_name='pantryo_cart_product';
        $condition="create_date > $today and create_date < $tomorrow";
               
        // $data['order_details']=$this->home->get_all_data_bulk();
        $data['order_details']=$this->home->gettodayorder();

        //  print_r($data);exit;
        // foreach($order_details as $details)
        // {
        //     $orderId=$details[0]->orderId;
        //     $unit=$this->home->getquantityandunit($orderId);
        //     // print_r($unit);
        //     foreach($unit as $checkunit)
        //     {
        //         if($checkunit->productUnit == 'gm')
        //         {
        //         }
        //     }
        // }
      

        $this->pages('Dashboard/dashboard',$data);
    }
    public function showcustomer() 
    {
        $this->home->_table_name='pantryo_customer';
        $data['customer_details']=$this->home->get_all_data_bulk();
        $this->pages('Customer/showcustomer',$data);
    }
    public function showdelivery()
    {
        $this->home->_table_name='pantryo_delivery_partner';
        $data['delivery_details']=$this->home->get_all_data_bulk();
        
       $this->pages('Delivery/showdelivery',$data);
    }
    public function showshop()
    {
        $this->home->_table_name='pantryo_partner';
        $data['partner_details']=$this->home->get_all_data_bulk();
        
       $this->pages('Shop/showshop',$data);
    }
    public function order()
    { 
        $this->home->_table_name='pantryo_cart_product';
        $data['order_details']=$this->home->get_all_data_bulk();
        $this->pages('Order/showorder',$data);
    }
   public function transfers()
   {
       echo "transfers";
    //    $this->pages('Navigation/transfers');
   }

   public function revenue()
   {       
       echo "revenue";
       $this->pages('Navigation/revenue');
   }

   public function inventory()
   {
    //    echo "inventory";
        $this->home->_table_name='pantryo_inventory';
        $data['inventory']=$this->home->get_all_data_bulk();
       $this->pages('Inventory/inventory',$data);
   }

   public function sendnotification()
   {
       $this->pages('Navigation/sendnotification');
   }

   public function details()
   {
       echo "details";
    //    $this->pages('Navigation/details');
   }  

   public function reviews()
   { 
       echo "reviews";
    //    $this->pages('Navigation/reviews');
   }  

   public function pendingVerification()
   {
    
    //    echo "pendingVerification";
    $this->home->_table_name='pantryo_partner';
    $condition="partner_kycStatus=1";
    $data['details']=$this->home->get_all_data_bulk($condition);
    $this->pages('Shop/pendingVerification',$data);
   
  }  

   public function shopWiseSales() 
   {
       $this->home->_table_name='pantryo_partner';
       $data['partner_details']=$this->home->get_all_data_bulk();
       $this->pages('Shop/shopWiseSales',$data);
   }  

   public function pendingDeliveryPartnerVerification()
   {
   
    $this->home->_table_name='pantryo_delivery_partner';
    $condition="userVerificationStatus=1";
    $data['delivery_details']=$this->home->get_all_data_bulk($condition);
    $this->pages('Delivery/pendingDeliveryPartnerVerification',$data);
   }

   public function pendingDelveryPartner($id)
   {
       
        $delivery_id =base64_decode($id);
        $this->home->_table_name='pantryo_delivery_partner';
        $condition="delivery_id =$delivery_id";
        $data['delivery_details']=$this->home->get_all_data_bulk($condition);
        $this->pages('Delivery/pendingDelveryPartnerpage',$data);
   }
   public function deliverypartnerfrom()
   {
       $delivery_id=$this->input->post('delivery_id');
       $data=array(
            'account_id'=>$this->input->post('partnerAcountId')
       );
       $this->home->_table_name='partner_registration_fee';
       $condition="partner_id ='$delivery_id'";
       $effectrow=$this->home->updatedata($data,$condition);
        if(!empty($effectrow))
        {
            $data=array(
                'userVerificationStatus'=>'2'
           );
           $this->home->_table_name='pantryo_delivery_partner';
           $condition="delivery_id  =D$delivery_id";
           $effectrowsec=$this->home->updatedata($data,$condition);
           $type="success";
           $message="Verification Successful";
           set_message($type,$message);
          redirect('Home/pendingDeliveryPartnerVerification');
        }
        else{
            $type="error";
            $message="Something went Wrong";
            set_message($type,$message);
            redirect('Home/pendingDeliveryPartnerVerification');
        }

       
   }
   public function Track()
   {
        $this->home->_table_name='pantryo_delivery_partner';
        $data['delivery_details']=$this->home->get_all_data_bulk();
       $this->pages('Delivery/track',$data);
   }

   public function showorderdetails($id)
   {

       $order_id=base64_decode($id);
       $data['details']=$this->home->getallorderdetails($order_id);
       $this->pages('Order/orderdetails',$data);
   }

   public function deliveryBlock()
   {
      $this->home->_table_name='pantryo_delivery_partner';
      $delivery_id= base64_decode($this->uri->segment(3));
      $userstatus=base64_decode($this->uri->segment(4));
      $condition="delivery_id=$delivery_id";
      if($userstatus==1)
      {
        $data=array(
            'userStatus'=>2
        );
      }
      else
      {
        $data=array(
            'userStatus'=>1
        );
      }
      $this->home->updatedata($data,$condition);
      redirect('Home/showdelivery');     
   }

   public function shopBlock()
   {
    
    $this->home->_table_name='pantryo_partner';
    $shop_id= base64_decode($this->uri->segment(3));
    $partner_status=base64_decode($this->uri->segment(4));
    $condition="partner_id=$shop_id";
    if($partner_status==1)
    {
      $data=array(
          'partner_status'=>2
      );
    }
    else
    {
      $data=array(
          'partner_status'=>1
      );
    }
    $this->home->updatedata($data,$condition);
    redirect('Home/showshop');   
   }

   public function customerBlock()
   {
    $this->home->_table_name='pantryo_customer';
    $customer_id= base64_decode($this->uri->segment(3));
    $customer_status=base64_decode($this->uri->segment(4));
    $condition="customer_id=$customer_id";
    if($customer_status==1)
    {
      $data=array(
          'customer_status'=>2
      );
    }
    else
    {
      $data=array(
          'customer_status'=>1
      );
    }
    $this->home->updatedata($data,$condition);
    redirect('Home/showcustomer');   
   }

   public function inventoryadd()
   {
    $this->pages('Inventory/addinventory');
   }

   public function inventoryedit($idd)
   {

    $id=base64_decode($idd);
    $this->home->_table_name='pantryo_inventory';
  
    $data['editinventory']=$this->home->editinventory($id);
 
    $this->pages('Inventory/editinventory',$data);
   }

   public function inventorydelete($idd)
   {

    $id=base64_decode($idd);
    $this->home->_table_name='pantryo_inventory';
    $condition="pantryo_inventory_id=$id";
    $this->home->delete($condition);
    redirect('Home/inventory');
   }
   public function selectcategory()
   {
    $this->home->_table_name='partner_category';
    $data=$this->home->get_all_data_bulk();
    echo json_encode($data);
   }
   public function select_main_category()
   {
      $category_id=$this->input->post('category_id');
      $this->home->_table_name='pantryo_main_category';
      $condition="partner_category_id='$category_id'";
      $data=$this->home->get_all_data_bulk($condition);
      echo json_encode($data);
   }
   public function AddInventory()
   {
                $this->form_validation->set_rules('partner_category_id', 'Category', 'required');
                $this->form_validation->set_rules('pantryo_item_name', 'Item Name', 'required');
                $this->form_validation->set_rules('pantryo_brand_name', 'Brand Name', 'required');
                $this->form_validation->set_rules('pantryo_main_category_id', 'Main Category','required');
                $this->form_validation->set_rules('pantryo_item_qty', 'Item Qty', 'required');
                $this->form_validation->set_rules('pantryo_item_unit', 'Item Unit', 'required');
                $this->form_validation->set_rules('pantryo_item_price', 'Item Price', 'required');
                if ($this->form_validation->run() == FALSE)
                {
                    redirect('Home/inventoryadd');
                }
                else
                {
                   $data=array(
                       'partner_category_id'=>$this->input->post('partner_category_id'),
                       'pantryo_brand_name'=>$this->input->post('pantryo_brand_name'),
                       'pantryo_main_category_id'=>$this->input->post('pantryo_main_category_id'),
                       'pantryo_item_name'=>$this->input->post('pantryo_item_name'),
                       'pantryo_item_qty'=>$this->input->post('pantryo_item_qty'),
                       'pantryo_item_unit'=>$this->input->post('pantryo_item_unit'),
                       'pantryo_item_price'=>$this->input->post('pantryo_item_price'),

                   );
                   $this->home->_table_name='pantryo_inventory';
                   $id=$this->home->insert($data);
                   if(!empty($id))
                   {
                    redirect('Home/inventoryadd');
                   }
                //    else{
                    // redirect('Home/inventoryadd');
                //    }
                }   
   }
   public function editInventory()
   {
          
                   $partner_category_id=$this->input->post('pantryo_inventory_id');
                   $data=array(
                       'partner_category_id'=>$this->input->post('partner_category_id'),
                       'pantryo_brand_name'=>$this->input->post('pantryo_brand_name'),
                       'pantryo_main_category_id'=>$this->input->post('pantryo_main_category_id'),
                       'pantryo_item_name'=>$this->input->post('pantryo_item_name'),
                       'pantryo_item_qty'=>$this->input->post('pantryo_item_qty'),
                       'pantryo_item_unit'=>$this->input->post('pantryo_item_unit'),
                       'pantryo_item_price'=>$this->input->post('pantryo_item_price'),

                   );
                   $this->home->_table_name='pantryo_inventory';
                   $condition="pantryo_inventory_id='$partner_category_id'";
                   $id=$this->home->updatedata($data,$condition);
                   if(!empty($id))
                   {
                    redirect('Home/inventory');
                   }
                //    else{
                    // redirect('Home/inventoryadd');
                //    }
            
   }

   public function sendingnotification()
   {
      $partners=$this->input->post('partners');
      $usertype=$this->input->post('usertype');
      $mobilenumber=$this->input->post('mobilenumber');
      $title=$this->input->post('title');
      $body=$this->input->post('body');
      if(!empty($partners))
      {
        if($partners=='allshop')
        {
          $this->home->_table_name='pantryo_partner';
          $data=$this->home->get_all_data_bulk();
          foreach($data as $row)
          {
           $partner_token=$row->partner_token;
           $url = "https://fcm.googleapis.com/fcm/send";
           $serverKey = 'AAAALC3Ugt8:APA91bFdhqYhHLlDedpHpuCBX7puDR5x1qsrmc6k3gh-pXIBaUoxTJ3t91pVuBwV51GdrSnYLb9McgZYbGnkVR6-A8BnqsUL8nQKN8Bg3qwwH9puZ01uCt4tnGU7w0qNXL0S-x8Ofnaf';
           
           $notification = array('title' =>$title , 'body' => $body, 'sound' => 'default', 'badge' => '1');
           $arrayToSend = array('to' => $partner_token, 'notification' => $notification,'priority'=>'high');
           $json = json_encode($arrayToSend);
           $headers = array();
           $headers[] = 'Content-Type: application/json';
           $headers[] = 'Authorization: key='. $serverKey;
           $ch = curl_init();
           curl_setopt($ch, CURLOPT_URL, $url);
           curl_setopt($ch, CURLOPT_CUSTOMREQUEST,"POST");
           curl_setopt($ch, CURLOPT_POSTFIELDS, $json);
           curl_setopt($ch, CURLOPT_HTTPHEADER,$headers);
           //Send the request
           $response = curl_exec($ch);
           //Close request
            if ($response === FALSE) 
            {
            die('FCM Send Error: ' . curl_error($ch));
            }
            curl_close($ch);
          }       
          redirect('home/sendnotification');
        }
        elseif($partners=='alldelivery')
        {
          $this->home->_table_name='pantryo_delivery_partner';
          $data=$this->home->get_all_data_bulk();
          foreach($data as $row)
          {           
            $userToken=$row->userToken;
            $url = "https://fcm.googleapis.com/fcm/send";
            $serverKey = 'AAAALC3Ugt8:APA91bFdhqYhHLlDedpHpuCBX7puDR5x1qsrmc6k3gh-pXIBaUoxTJ3t91pVuBwV51GdrSnYLb9McgZYbGnkVR6-A8BnqsUL8nQKN8Bg3qwwH9puZ01uCt4tnGU7w0qNXL0S-x8Ofnaf';         
             $notification = array('title' =>$title , 'body' => $body, 'sound' => 'default', 'badge' => '1');
             $arrayToSend = array('to' => $userToken, 'notification' => $notification,'priority'=>'high');
             $json = json_encode($arrayToSend);
             $headers = array();
             $headers[] = 'Content-Type: application/json';
             $headers[] = 'Authorization: key='. $serverKey;
             $ch = curl_init();
             curl_setopt($ch, CURLOPT_URL, $url);
             curl_setopt($ch, CURLOPT_CUSTOMREQUEST,"POST");
             curl_setopt($ch, CURLOPT_POSTFIELDS, $json);
             curl_setopt($ch, CURLOPT_HTTPHEADER,$headers);
             //Send the request
             $response = curl_exec($ch);
             //Close request
              if ($response === FALSE) 
              {
              die('FCM Send Error: ' . curl_error($ch));
              }
              curl_close($ch);
              redirect('home/sendnotification');
          }   
        }
          elseif($partners=='allcustomer')
        {
          $this->home->_table_name='pantryo_customer';
          $data=$this->home->get_all_data_bulk();
          foreach($data as $row)
          {
           
            $user_token=$row->user_token;
            $url = "https://fcm.googleapis.com/fcm/send";
            // $serverKey = 'AAAALC3Ugt8:APA91bFdhqYhHLlDedpHpuCBX7puDR5x1qsrmc6k3gh-pXIBaUoxTJ3t91pVuBwV51GdrSnYLb9McgZYbGnkVR6-A8BnqsUL8nQKN8Bg3qwwH9puZ01uCt4tnGU7w0qNXL0S-x8Ofnaf';

            $serverKey = 'AAAAIIoSzdk:APA91bFqAg9Vu4T-_LYX5EPz9UVtqZTp0bRWOpkJLgm6GqIf4QAJtrW6RISmqWHZl6T-ykQrNLpo39kbRHLBsfGmqyz5JP8hxNCUzrfw8ECkcOItsO173OGeIrPf01_jiTLGjJsgwr33';
         
            $notification = array('title' =>$title , 'body' => $body, 'sound' => 'default', 'badge' => '1');
            $arrayToSend = array('to' => $user_token, 'notification' => $notification,'priority'=>'high');
            $json = json_encode($arrayToSend);
            $headers = array();
            $headers[] = 'Content-Type: application/json';
            $headers[] = 'Authorization: key='. $serverKey;
            $ch = curl_init();
            curl_setopt($ch, CURLOPT_URL, $url);
            curl_setopt($ch, CURLOPT_CUSTOMREQUEST,"POST");
            curl_setopt($ch, CURLOPT_POSTFIELDS, $json);
            curl_setopt($ch, CURLOPT_HTTPHEADER,$headers);
            //Send the request
            $response = curl_exec($ch);
            //Close request
            if ($response === FALSE) 
            {
            die('FCM Send Error: ' . curl_error($ch));
            }
            curl_close($ch);
            redirect('home/sendnotification');
          }  
        }
      }
      elseif(!empty($mobilenumber) && ($usertype=='customer'))
      {
        $this->home->_table_name='pantryo_partner';
        $condition="mobilenumber='$mobilenumber'";
        $data=$this->home->get_all_data_bulk($condition);

        foreach($data as $row)
          {
            
            $user_token=$row->user_token;
            $url = "https://fcm.googleapis.com/fcm/send";

            $serverKey = 'AAAAIIoSzdk:APA91bFqAg9Vu4T-_LYX5EPz9UVtqZTp0bRWOpkJLgm6GqIf4QAJtrW6RISmqWHZl6T-ykQrNLpo39kbRHLBsfGmqyz5JP8hxNCUzrfw8ECkcOItsO173OGeIrPf01_jiTLGjJsgwr33';
         
            $notification = array('title' =>$title , 'body' => $body, 'sound' => 'default', 'badge' => '1');
            $arrayToSend = array('to' => $user_token, 'notification' => $notification,'priority'=>'high');
            $json = json_encode($arrayToSend);
            $headers = array();
            $headers[] = 'Content-Type: application/json';
            $headers[] = 'Authorization: key='. $serverKey;
            $ch = curl_init();
            curl_setopt($ch, CURLOPT_URL, $url);
            curl_setopt($ch, CURLOPT_CUSTOMREQUEST,"POST");
            curl_setopt($ch, CURLOPT_POSTFIELDS, $json);
            curl_setopt($ch, CURLOPT_HTTPHEADER,$headers);
            //Send the request
            $response = curl_exec($ch);
            //Close request
            if ($response === FALSE) 
            {
            die('FCM Send Error: ' . curl_error($ch));
            }
            curl_close($ch);
            redirect('home/sendnotification');
          } 
      }
      elseif(!empty($mobilenumber) && ($usertype=='shop') || ($usertype=='partner'))
      {
        $this->home->_table_name='pantryo_partner';
        $condition="mobilenumber='$mobilenumber'";
        $data=$this->home->get_all_data_bulk($condition);

        foreach($data as $row)
          {
            
            $user_token=$row->user_token;
            $url = "https://fcm.googleapis.com/fcm/send";

            $serverKey = 'AAAALC3Ugt8:APA91bFdhqYhHLlDedpHpuCBX7puDR5x1qsrmc6k3gh-pXIBaUoxTJ3t91pVuBwV51GdrSnYLb9McgZYbGnkVR6-A8BnqsUL8nQKN8Bg3qwwH9puZ01uCt4tnGU7w0qNXL0S-x8Ofnaf';
         
            $notification = array('title' =>$title , 'body' => $body, 'sound' => 'default', 'badge' => '1');
            $arrayToSend = array('to' => $user_token, 'notification' => $notification,'priority'=>'high');
            $json = json_encode($arrayToSend);
            $headers = array();
            $headers[] = 'Content-Type: application/json';
            $headers[] = 'Authorization: key='. $serverKey;
            $ch = curl_init();
            curl_setopt($ch, CURLOPT_URL, $url);
            curl_setopt($ch, CURLOPT_CUSTOMREQUEST,"POST");
            curl_setopt($ch, CURLOPT_POSTFIELDS, $json);
            curl_setopt($ch, CURLOPT_HTTPHEADER,$headers);
            //Send the request
            $response = curl_exec($ch);
            //Close request
            if ($response === FALSE) 
            {
            die('FCM Send Error: ' . curl_error($ch));
            }
            curl_close($ch);
            redirect('home/sendnotification');
          } 
      }

      else
      {

      }
    } 

    public function pendingVerificationshowform($id)
    {
        $partner_id =base64_decode($id);
        $this->home->_table_name='pantryo_partner';
        $condition="partner_id =$partner_id";
        $data['partner_details']=$this->home->get_all_data_bulk($condition);

        $this->home->_table_name='partner_registration_fee';
        $condition1="partner_id ='P$partner_id'";
        $data['partner_account']=$this->home->get_all_data_bulk($condition1);

    
        $this->pages('Shop/pendingverifiyform',$data);
    }
    public function partnerpendingfrom()
    {
        $partner_id=$this->input->post('partner_id');

        $data=array(
             'account_id'=>$this->input->post('partnerAcountId')
        );
        $this->home->_table_name='partner_registration_fee';
        $condition="partner_id ='P$partner_id'";
        $effectrow=$this->home->updatedata($data,$condition);

        $data1=array(
                 'partner_kycStatus'=>'2'
            );
        $this->home->_table_name='pantryo_partner';
        $condition="partner_id=$partner_id";
        $effectrowsec=$this->home->updatedata($data1,$condition);

            redirect('Home/pendingVerification');

         // if(!empty($effectrow))
         // {
         //     $data=array(
         //         'partner_kycStatus'=>'2'
         //    );
         //    $this->home->_table_name='pantryo_partner';
         //    $condition="partner_id=$partner_id";
            
         //    $effectrowsec=$this->home->updatedata($data,$condition);

         //  redirect('Home/pendingVerification');
         // }
         // else{
         // redirect('Home/pendingVerification');
         // }
 
    }

  
}