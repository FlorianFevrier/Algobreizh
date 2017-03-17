<?php 
    defined('BASEPATH') OR exit('No direct script access allowed');

class Form extends CI_Controller {

        public function index()
        {
                $this->load->helper(array('form', 'url'));
                $this->load->model('user_model');
                $this->load->library('form_validation');
                $this->load->database();
                $data['title']="Algobreizh - Authentification";
                $this->form_validation->set_rules('email', 'Email', 'required');
                $this->form_validation->set_rules('password', 'password', 'required');
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
                                        $this->session;
                                        $this->session->set_userdata('statut',$data['statut']);   
                                        if($_SESSION['statut']=='commercial'){   
                                                foreach ($requete as $row){
                                                        $this->session;
                                                        $this->session->set_userdata('mail',$row->mail);                                                
                                                        $this->session->set_userdata('id',$row->idCommercial);
                                                        $this->session->set_userdata('zone',$row->zone); 
                                                        $this->session->set_userdata('nom',$row->nom); 
                                                        }
                                                $this->load->view('common/headerCommercial',$data);
                                                $this->load->view('commercial/vcompteCommercial',$data);
                                                $this->load->view('common/footer');
                                        }
                                        if ($_SESSION['statut']=='client'){
                                                foreach ($requete as $row){
                                                        $this->session;
                                                        $this->session->set_userdata('mail',$row->mail);                                                
                                                        $this->session->set_userdata('id',$row->idClient);
                                                        $this->session->set_userdata('zone',$row->zone); 
                                                        $this->session->set_userdata('nom',$row->nom); 
                                                        }
                                                $this->load->view('common/headerClient',$data);
                                                $this->load->view('client/vcompteClient',$data);
                                                $this->load->view('common/footer');
                                        }
                                        if ($_SESSION['statut']=='teleprospecteur'){
                                                foreach ($requete as $row){
                                                        $this->session;
                                                        $this->session->set_userdata('mail',$row->mail);                                                
                                                        $this->session->set_userdata('id',$row->idCommercial);
                                                        $this->session->set_userdata('zone',$row->zone); 
                                                        $this->session->set_userdata('nom',$row->nom); 
                                                        }                                               
                                                $this->load->view('common/headerCompte',$data);
                                                $this->load->view('tele/vcompteTele',$data);
                                                $this->load->view('common/footer');
                                        }
                                }
                        }
                }
        }
}

     
