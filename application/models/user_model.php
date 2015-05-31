<?php
class User_model extends CI_Model {

	public function __construct(){
            
	}
        
        public function exist($u,$p){
            //echo $u.$p;
            $where = array('username' => $u, 'password' => $p);
            $query = $this->db->get_where('user',$where);
            if($query->num_rows()==1){
               return $query->row();
            }else{
               return ;
            }
        }
        
        public function saveRegistration($user){
            $this->db->insert('user',$user);
            $id=$this->db->insert_id();
            $query = $this->db->get_where('user', array('id' => $id));
            return $query->row();
        }
       
}
