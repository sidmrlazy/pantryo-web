<?php

if (!defined('BASEPATH'))
    exit('No direct script access allowed');

   if(!function_exists('box_message'))
   {
      function message_box($messagetype)
      {
          $CI =& get_instance();
          $message=$CI->session->flashdata($messagetype);
          $retval = '';
          
          if($message){
              switch($messagetype){
                  case 'success':
                      $retval .= '<span class="alert alert-success" style="background-color:#4ff376;;color:white;border-radius:10px">';
                      break;
                  case 'error':
                      $retval .= '<span class="alert alert-danger" style="border-radius:10px">';
                      break;
              }
  
              $retval .= $message;
              $retval .= '</span>';
              return $retval;

         }
     }
   }     

    if(!function_exists('set_message'))
    { 
        function set_message($type,$message)
        {
        
           $CI =& get_instance();
           $CI->session->set_flashdata($type,$message);
        }
    }
   


?>