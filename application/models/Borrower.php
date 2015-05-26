<?php
class Borrower extends CI_Model {

	public function __construct(){
            $this->load->database();
	}
        
        public function save_borrower($borrower){
            $this->db->insert('borrower', $borrower); 
        }
        
        public function get_borrower(){
            $results = $this->db->get('borrower');
            return $results->result_array();
        }
        
        public function delete_borrower($id){
            $this->db->delete('borrower', array('borrowerid' => $id)); 
        }
        
        public function borrower($id){
            $result = $this->db->get_where('borrower',array('borrowerid'=>$id));
            if($result->num_rows()==1){
                return $result->row();
            }
            
        }
       
}
