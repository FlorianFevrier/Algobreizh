<?php
    defined('BASEPATH') OR exit('No direct script access allowed');

    class Site extends CI_Controller {
        public function index(){
            $data["title"]="Page d’accueil"; 
            $this->load->view('common/header',$data);
            $this->load->view('site/index',$data);
            $this->load->view('common/footer');
        }
        public function auth(){
            $this->load->helper("form");
            $this->load->library('form_validation');
            $data["title"]="Contact"; 
            $this->load->view('common/header',$data);           
            $this->load->view('site/auth');
            $this->load->view('common/footer');
        }
    }
       
     
   