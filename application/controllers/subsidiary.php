<?php 
/**
 * Developed by: Jayson
 *  
 */
if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Subsidiary extends CI_Controller {

	public function __construct() {
            parent::__construct();
            $this->load->helper('date');
            $this->load->helper('form');
            $this->load->helper('url');
        }
         
	public function index(){
          if($this->session->userdata('user')){  
            $data['company_name'] = $this->config->item('company_name');
            $data['company_address'] = $this->config->item('company_address');
            $session_user = array('page'=>'global');
            $this->session->set_userdata('access', $session_user);
            $data['access'] = $this->session->userdata('access');
            $data['user'] = $this->session->userdata('user');
            $this->load->view('subsidiary',$data);
          }else {
             redirect('home', 'refresh');  
          }  
	}
        
        public function marketing() {
          if($this->session->userdata('user')){  
            $session_user = array('page'=>'marketing');
            $this->session->set_userdata('access', $session_user);
            $data['access'] = $this->session->userdata('access');
            $data['user'] = $this->session->userdata('user');
            $this->load->view('marketinghome',$data);
          }else {
            redirect('home', 'refresh'); 
          }  
        }
        
}

/* End of file welcome.php */
/* Location: ./application/controllers/welcome.php */
