    <?php
     
    class Client_model extends CI_Model
    {
            function __construct(){
                parent::__construct();
            }
            public function getProduit() {
                
             return  $this->db->select('*')
                            ->from('Article')
                            ->get()
                            ->result_array();               
            }

            public function addPanier($data){
               return  $this->db->insert('articlePanier', $data);
            }
            public function getPanier($var){
               return  $this->db->select('*')
                        ->from('articlePanier')
                        ->where('idClient',$var)
                        ->get()
                        ->result_array();
            }
            public function supprPanier($var){
                return $this->db->delete('idArticle', array('id' => $var));
            }

    }
    ?>