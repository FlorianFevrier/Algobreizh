<?php 
    defined('BASEPATH') OR exit('No direct script access allowed');

class Commercial extends CI_Controller {
    public function index(){
        $data['title']="Algobreizh - ".$_SESSION['statut'];
        $this->load->view('common/headerCommercial',$data);
        $this->load->view('commercial/vcompteCommercial',$data);
        $this->load->view('common/footer');
    }
    public function visite(){
            $this->load->model('Commercial_model');
            $this->load->database();
            $data['title']="Algobreizh - Visites";
            $data['clients']=$this->Commercial_model->getVisite($_SESSION['zone']);
            $this->load->view('common/headerCommercial',$data);
            $this->load->view('commercial/visite',$data);
            $this->load->view('commercial/footerVisite');
    }

    public function avis(){
        $this->load->helper(array('form', 'url'));
        $this->load->model('Commercial_model');
        $this->load->library('form_validation');
        $this->load->database();
        $data['title']="Algobreizh - Avis";
        $data['clients']=$this->Commercial_model->getVisite($_SESSION['zone']);
        $this->load->view('common/headerCommercial',$data);
        $this->load->view('commercial/avis');
        $this->load->view('common/footer');
    }

    public function avisPost(){
        $this->load->helper(array('form', 'url'));
        $this->load->model('Commercial_model');
        $this->load->library('form_validation');
        $this->load->database(); 
        $data['title']="Algobreizh - Avis"; 
        $data['clients']=$this->Commercial_model->getVisite($_SESSION['zone']);
        $this->form_validation->set_rules('client', 'client', 'required');
        $this->form_validation->set_rules('message', 'message', 'required');
        $this->form_validation->set_rules('human', 'human', 'required');
        if ($this->form_validation->run() == FALSE)
            {
                $this->load->view('common/headerCommercial',$data);
                $this->load->view('commercial/avis',$data);
                $this->load->view('common/footer');
            }
        else
            {
                $date = date("Y-m-d");
                $data=array(
                    'date' => $date,
                    'idClient' => $this->input->post('client'),
                    'idCommercial' => $this->session->id,
                    'com' => $this->input->post('message') 
                );             
                    $this->Commercial_model->avisPost($data);
                    $data=array(
                        'derniereVisite'=>$date,
                        'idClient' => $this->input->post('client')
                    );

                    $this->Commercial_model->majVisite($data);
                    $data['succes']="Avis inséré";
                    $data['title']="Algobreizh - Avis";
                    $this->load->view('common/headerCommercial',$data);
                    $this->load->view('commercial/vcompteCommercial',$data); 
                    $this->load->view('common/footer');   
            }         
    }

}