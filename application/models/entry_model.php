<?php
class Entry_model extends CI_Model {

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
              $entryNum = $row->entryNumber;
              $graduation = $row->graduation;
              $totalPoints = $points + $bonus;
              $target = $graduation/$entryNum;
              if($totalPoints==$target){
                 //set New Active for that vehicle 
                 
                 $entryNum = $entryNum + 1;
                 $userCode = $row->userCode;
                 
                 $dataStatus = array('status' => "Active");
                 $setNewActiveWhere = array('unitCode' => $unitCode, 'entryNumber' => $entryNum);
                 $this->db->update('entry', $dataStatus, $setNewActiveWhere); 
                 
                 //set to Graduate Previous Active
                 $dataGraduate = array('status' => "Graduate");
                 $setGraduateWhere = array('userCode' => $userCode);
                 $this->db->update('entry', $dataGraduate, $setGraduateWhere); 
                 //return $this->db->affected_rows();
              }else{
                 //return $this->db->affected_rows();
              }
            }
        }
        
        public function getAllVehiclePerUser($id){
            $this->db->distinct();
            $this->db->select('unitCode');
            $this->db->where('userId', $id); 
            $query = $this->db->get('entry');
            return $query->result_array();
        }
        
        public function getDiagram($vh, $ui){
            $whereActive = array('unitCode' => $vh, 'status' => 'Active', 'userId' => $ui);
            $query = $this->db->get_where('entry',$whereActive);
            //return $query->num_rows();
             if($query->num_rows()==1){
                $status_array = array('Active','Inactive');
                $this->db->where("unitCode",$vh);
                $this->db->where_in('status', $status_array);
                $this->db->order_by('entryNumber ', 'ASC');
                $result = $this->db->get('entry');
                return $result->result_array();
             }else{
               $this->db->select('*');
               $this->db->from('entry');
               $this->db->where("(unitCode='{$vh}' AND userId='{$ui}')");
               $this->db->order_by('entryNumber', 'ASC');
               $this->db->limit('1');
               $query = $this->db->get();
               return $query->result_array();
             }
        }
        
}
