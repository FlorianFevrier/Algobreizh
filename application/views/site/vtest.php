<div>
<?php
    $query = $this->db->get('utilisateur');
 foreach ($query->result() as $row){
     echo $row->id;
 }
?>
</div>