<?php 
/**
 * Developed by: Jayson
 *  
 */
if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Code extends CI_Controller {

	public function __construct() {
            parent::__construct();
            $this->load->model('Entry_model');
            $this->load->helper('date');
            $this->load->helper('form');
            $this->load->helper('url');
        }
         
	public function index(){
          if($this->session->userdata('user')){   
            $data['company_name'] = $this->config->item('company_name');
            $data['company_address'] = $this->config->item('company_address');
            $session_access = array('page'=>'marketing');
            $this->session->set_userdata('access', $session_access);
            $data['access'] = $this->session->userdata('access');
            $data['user'] = $this->session->userdata('user');
            $data['entries'] = $this->Entry_model->getAllCodes();
            $this->load->view('code',$data);
          }else{
            redirect('home', 'refresh');  
          }  
	}
        
        public function count(){
          if($this->session->userdata('user')){   
           $result = $this->Entry_model->count($this->input->post('code'));
           echo json_encode($result);
          }  
        }
        
        public function uniqueCode(){
           echo uniqid();
        }
        
        public function save(){
          if($this->session->userdata('user')){  
           $result = $this->Entry_model->save(json_decode($this->input->post('entries')));
          } 
        }
        
}

/* End of file welcome.php */
/* Location: ./application/controllers/welcome.php */
