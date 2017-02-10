<?php 
    defined('BASEPATH') OR exit('No direct script access allowed');

class Form extends CI_Controller {

        public function index()
        {
                $this->load->helper(array('form', 'url'));
                $this->load->model('user_model');
                $this->load->library('form_validation');
                $this->load->database();
                $this->form_validation->set_rules('password', 'Password', 'required',
                        array('required' => 'You must provide a %s.')
                );
                $data['title']="Algobreizh - Authentification";
                $this->form_validation->set_rules('email', 'Email', 'required');
                $this->form_validation->set_rules('password', 'password', 'required');
             //   $result = $this->user_model->userLogin($email,$mdp);
                if ($this->form_validation->run() == FALSE)
                {
                        $this->load->view('common/header',$data);
                        $this->load->view('site/auth');
                        $this->load->view('common/footer');
                }
                else
                {
                        $data = array(
                        'mail' => $this->input->post('email'),
                        'password' => $this->input->post('password')
                        );
                        $data['title']='Algobreizh';
                        $requete=$this->user_model->userLogin($data['mail'],$data['password']);
                        if (count($requete)==0){
                                $this->load->view('common/header',$data);
                                $this->load->view('site/auth');
                                $this->load->view('common/footer');                           
                        }
                        else{
                                foreach ($requete as $row){
                                        $data['id']=$row->id;
                                        $data['statut']=$row->statut;
                                }
                                $requete=$this->user_model->userRecup($data['mail'],$data['statut']);
                                if(count($requete)==0){
                                        $this->load->view('common/header',$data);
                                        $this->load->view('site/auth');
                                        $this->load->view('common/footer');      
                                }
                                else{
                                        foreach ($requete as $row){
                                                $this->session;
                                                $this->session->set_userdata('mail',$row->mail);                                                
                                                $this->session->set_userdata('id',$row->idCommercial);
                                                $this->session->set_userdata('zone',$row->zone);  
                                        }
                                        $this->session;
                                        $this->session->set_userdata('statut',$data['statut']);                                        
                                        $this->load->view('common/headerCompte',$data);
                                        $this->load->view('site/vcompte',$data);
                                        $this->load->view('common/footer');
                                }
                               
                        }
                }
        }
}

     
