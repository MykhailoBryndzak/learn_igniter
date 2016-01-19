<?php
if ( ! defined('BASEPATH')) exit('No direct script access allowed');
 class Helpers extends CI_Controller
 {
     public function all_helpers()
     {
         $this->load->helper('html');
         $this->load->helper('text');
         $this->load->helper('string');



         $this->load->view('helpers_view');

     }
 }