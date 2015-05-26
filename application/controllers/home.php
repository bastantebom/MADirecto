<?php 
/**
 * Developed by: Jayson
 *  
 */
if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Home extends CI_Controller {

	public function __construct() {
            parent::__construct();
            $this->load->helper('date');
            //$this->load->helper('form');
            $this->load->helper('url');
        }
         
	public function index(){
            $data['company_name'] = $this->config->item('company_name');
            //$data['company_address'] = $this->config->item('company_address');
            $this->load->view('home',$data);
	}
        
}

/* End of file welcome.php */
/* Location: ./application/controllers/welcome.php */
