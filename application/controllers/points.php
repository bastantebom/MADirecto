<?php 
/**
 * Developed by: Jayson
 *  
 */
if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Points extends CI_Controller {

	public function __construct() {
            parent::__construct();
            $this->load->helper('date');
            $this->load->helper('form');
            $this->load->helper('url');
            $this->load->model('Entry_model');
            $this->load->model('User_model');
        }
         
	public function index(){
          if($this->session->userdata('user')){  
            $data['company_name'] = $this->config->item('company_name');
            $data['company_address'] = $this->config->item('company_address');
            $session_user = array('page'=>'marketing');
            $this->session->set_userdata('access', $session_user);
            $user = ($this->session->userdata('user'));
            //echo ;
            $data['vehicles'] = $this->Entry_model->getAllVehiclePerUser($user['id']);
            
            $data['access'] = $this->session->userdata('access');
            $data['user'] = $this->session->userdata('user');
            $this->load->view('points',$data);
          }else {
             redirect('home', 'refresh');  
          }  
	}
        
     public function getListDiagram(){
         $vC = $this->input->post('vehicleCode');
         $user = $this->session->userdata('user');
         $userId = $user['id'];
         //$data['vehicles'] = $this->Entry_model->getAllVehiclePerUser($user['id']);
         $results = $this->Entry_model->getDiagram($vC, $userId);
         echo json_encode($results);
         //echo $results;
     }
        
}

/* End of file welcome.php */
/* Location: ./application/controllers/welcome.php */
