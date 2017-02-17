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
            $this->load->model('commercial_model');
            $this->load->database();
            $data['title']="Algobreizh - Visites";
            $data['clients']=$this->commercial_model->getVisite($_SESSION['zone']);
            $this->load->view('common/headerCommercial',$data);
            $this->load->view('commercial/visite',$data);
            $this->load->view('common/footer');
    }

    public function avis(){
        $this->load->helper(array('form', 'url'));
        $this->load->model('commercial_model');
        $this->load->library('form_validation');
        $this->load->database();
        $data['title']="Algobreizh - Avis";
        $this->load->view('common/headerCommercial',$data);
        $this->load->view('commercial/avis');
        $this->load->view('common/footer');
    }

}