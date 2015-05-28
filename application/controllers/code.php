<?php 
/**
 * Developed by: Jayson
 *  
 */
if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Code extends CI_Controller {

	public function __construct() {
            parent::__construct();
            $this->load->model('Entry');
            $this->load->helper('date');
            $this->load->helper('form');
            $this->load->helper('url');
        }
         
	public function index(){
          if($this->session->userdata('user')){   
            $data['company_name'] = $this->config->item('company_name');
            $data['company_address'] = $this->config->item('company_address');
            $data['user'] = $this->session->userdata('user');
            $data['entries'] = $this->Entry->getAllCodes();
            $this->load->view('code',$data);
          }  
	}
        
        public function count(){
          if($this->session->userdata('user')){   
           $result = $this->Entry->count($this->input->post('code'));
           echo json_encode($result);
          }  
        }
        
        public function uniqueCode(){
           echo uniqid();
        }
        
        public function save(){
          if($this->session->userdata('user')){  
           $result = $this->Entry->save(json_decode($this->input->post('entries')));
          } 
        }
        
}

/* End of file welcome.php */
/* Location: ./application/controllers/welcome.php */
