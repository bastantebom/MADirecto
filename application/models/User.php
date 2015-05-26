<?php
class User extends CI_Model {

	public function __construct(){
            
	}
        
        public function exist($u,$p){
            //echo $u.$p;
            $where = array('username' => $u, 'password' => $p);
            $query = $this->db->get_where('user',$where);
            if($this->db->count_all_results()==1){
               return $query->row();
            }else{
                return ;
            }
        }
       
}
