    <?php
     
    class Commercial_model extends CI_Model
    {
            function __construct(){
                parent::__construct();
            }
            public function getVisite($zone) {
                
             return  $this->db->select('*')
                            ->from('client')
                            ->where('zone',$zone)
                            ->order_by('derniereVisite')
                            ->get()
                            ->result_array();
                
            }

            public function avisPost($data){
            
                return $this->db->insert('commentaire', $data);
                        
            }
            public function majVisite($data){
                return $this->db->where('idClient',$data['idClient'])
                                ->update('client',$data);
            }
    }
    ?>