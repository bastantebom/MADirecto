<?php 
/**
 * Developed by: Jayson
 *  
 */
if ( ! defined('BASEPATH')) exit('No direct script access allowed');
session_start();
class Loans extends CI_Controller {

	public function __construct() {
            parent::__construct();
            $this->load->library('session');
            $this->load->helper('url');
            $this->load->helper('date');
            $this->load->helper('security');
            $this->load->helper('form');
        }
        
        public function index(){
            if($this->session->userdata('logged_in')){
                $data['user_data'] = $this->session->userdata('logged_in');
                $data['company_name'] = $this->config->item('company_name');
                $data['company_address'] = $this->config->item('company_address');
                $this->load->view('loans_view',$data);
            }else{
                redirect('login','refresh');
            }
        }
        
       public function logout(){
           $this->session->unset_userdata('logged_in');
           session_destroy();
           redirect('loans','refresh');
       }
         
	
       
}

/* End of file welcome.php */
/* Location: ./application/controllers/welcome.php */