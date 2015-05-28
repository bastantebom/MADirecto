<?php
class Entry extends CI_Model {

	public function __construct(){
	}
        
        public function count($code){
           $where = array('unitCode' => $code);
           $query = $this->db->get_where('entry',$where);
           //return $query->result();
           return $query->num_rows();
        }
        
        public function save($entry){
            $this->db->insert('entry',$entry);
        }
        
        public function getAllCodes(){
            $results = $this->db->get('entry');
            return $results->result_array();
        }
        
        public function checkCodeExist($userCode){
            $where = array('userCode' => $userCode, 'use' => 0);
            $query = $this->db->get_where('entry',$where);
            $message ="";
            if($query->num_rows()==1){
              $row=$query->row();
              $message = $row->unitCode;
            }else{
              $message = "-1";  
            }
            
            return $message;
        }
        
        public function grabEntry($userCode, $userId){
            $data = array('userId' => $userId, 'use' => 1);
            $this->db->where('userCode', $userCode);
            $this->db->update('entry', $data); 
        }
        
}
