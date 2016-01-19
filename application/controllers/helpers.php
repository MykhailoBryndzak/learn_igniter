<?php
if ( ! defined('BASEPATH')) exit('No direct script access allowed');
 class Helpers extends CI_Controller
 {
     public function all_helpers()
     {
         $this->load->helper('html');
         $this->load->helper('text');
         $this->load->helper('string');

//         $vals = array(
//             'word'	        => 'Random word',
//             'img_path  '  	=> './img/capcha',
//             'img_url'	    => base_url().'/img/capcha',
//             'font_path'	=> './path/to/fonts/texb.ttf',
//             'img_width'	=> '150',
//             'img_height'   => 30,
//             'expiration'   => 10
//         );
//
//         $cap = create_captcha($vals);
//         echo $cap['image'];

         $this->load->view('helpers_view');

     }
 }