<?php 
    defined('BASEPATH') OR exit('No direct script access allowed');

class Client extends CI_Controller {
    public function index(){
        $data['title']="Algobreizh - ".$_SESSION['statut'];
        $this->load->view('common/headerClient',$data);
        $this->load->view('commercial/vcompteCommercial',$data);
        $this->load->view('common/footer');
    }
    public function panier(){
            $this->load->database();
            $this->load->helper(array('form', 'url'));
            $this->load->library('form_validation');
            $this->load->model('Client_model');
            $data['produit']=$this->Client_model->getProduit();
            $this->load->library('form_validation','cart');
            $data['title']="Algobreizh - Saisir une commande";
            $this->load->view('common/headerClient',$data);
            $this->load->view('client/panier',$data);
            $this->load->view('common/footer');
    }
    public function addPanier(){
        $this->load->library('cart');
        $this->load->helper(array('form', 'url'));
        $this->load->library('form_validation');
        $this->form_validation->set_rules('Id', 'Id', 'required');
        $this->form_validation->set_rules('Prix', 'Prix', 'required');
        $this->form_validation->set_rules('quantite', 'quantite', 'required');       
        if ($this->form_validation->run() == FALSE){
            echo("Problème d'insertion dans le panier");
            $this->load->view('common/headerClient');
            $this->load->view('client/panier');
            $this->load->view('common/footer');
            }          
        else
            {
            $article=array(
                "description"=>$this->input->post("description"),
                "idArticle"=> $this->input->post('Id'),
                "quantite"=> $this->input->post('quantite'),
                "prix"=>$this->input->post("Prix"),
                'idClient'=> $_SESSION['id']
            );
            $data['article']=$article;
            $this->load->database();
            $this->load->model('Client_Model');
            $this->Client_Model->addPanier($data['article']);
            $data['Panier']=$this->Client_Model->getPanier($_SESSION['id']);
            $data['title']="Algobreizh - Mon panier";
            $this->load->view('common/headerClient',$data);
            $this->load->view('client/monPanier',$data);
            $this->load->view('common/footer');
        }
    }

    public function facture(){
        $this->load->helper(array('form', 'url'));
        $this->load->library('form_validation');
        $this->load->database();
        $data['title']="Algobreizh - Mes commandes";
        $this->load->view('common/headerClient',$data);
        $this->load->view('client/facture');
        $this->load->view('common/footer');
    }
}