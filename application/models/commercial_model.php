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
    }
    ?>