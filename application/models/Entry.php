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
            $where = array('userCode' => $userCode, 'use' => 0);
            //$this->db->where('userCode', $userCode);
            $this->db->update('entry', $data, $where); 
            return $this->db->affected_rows();
        }
        
        public function updatePoints($unitCode, $active){
            $where = array('unitCode' => $unitCode, 'status' => $active);
            $query = $this->db->get_where('entry',$where);
            if($query->num_rows()==1){
              $row=$query->row();
              $points = $row->points;
              $points = $points + 1;
              $data = array('points' => $points);
              //$this->db->where('userCode', $where);
              $this->db->update('entry', $data, $where); 
               return $this->db->affected_rows();
            }
        }
        
        public function isGraduate($unitCode, $active){
            $where = array('unitCode' => $unitCode, 'status' => $active);
            $query = $this->db->get_where('entry',$where);
            if($query->num_rows()==1){
              $row=$query->row();
              $points = $row->points;
              $bonus = $row->bonus;
              $totalPoints = $points + $bonus;
              if($totalPoints==120){
                 //set New Active for that vehicle 
                 $entryNum = $row->entryNumber;
                 $entryNum = $entryNum + 1;
                 $userCode = $row->userCode;
                 
                 $dataStatus = array('status' => "Active");
                 $setNewActiveWhere = array('unitCode' => $unitCode, 'entryNumber' => $entryNum);
                 $this->db->update('entry', $dataStatus, $setNewActiveWhere); 
                 
                 //set to Graduate Previous Active
                 $dataGraduate = array('status' => "Graduate");
                 $setGraduateWhere = array('userCode' => $userCode);
                 $this->db->update('entry', $dataGraduate, $setGraduateWhere); 
                 return $this->db->affected_rows();
              }else{
                 return $this->db->affected_rows();
              }
            }
        }
        
}
