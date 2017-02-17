    <?php
     
    class User_model extends CI_Model
    {
        protected $table = 'utilisateur';
            function __construct(){
                parent::__construct();
            }
            public function userLogin($email,$mdp) {
                
               return $this->db->select('*')
                            ->from($this->table)
                            ->where('mail', $email)
                            ->where('mdp', md5($mdp))
                            ->get()
                            ->result();

            }
            public function userRecup($email,$statut){
                return $this->db->select('*')
                            ->from($statut)
                            ->where('mail',$email)
                            ->get()
                            ->result();
            }
            
    }
     
    ?>