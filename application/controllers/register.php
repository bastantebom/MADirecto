<?php 
/**
 * Developed by: Jayson
 *  
 */
if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Register extends CI_Controller {

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
            $session_access = array('page'=>'marketing');
            $this->session->set_userdata('access', $session_access);
            $data['access'] = $this->session->userdata('access');
            $data['user'] = $this->session->userdata('user');
            $this->load->view('register',$data);
          } else{
            $data['company_name'] = $this->config->item('company_name');
            $data['company_address'] = $this->config->item('company_address');
            $this->load->view('register',$data); 
          } 
	}
        
        public function validateCode(){
            //echo "testr";
            //if($this->session->userdata('user')){
                //echo $this->input->post('validationCode');
               echo $this->Entry_model->checkCodeExist($this->input->post('validationCode'));
            //}else{
            //    redirect('login','refresh');
            //}
        }
        
        
        public function saveExistingUser(){
            $code = $this->input->post('validationCode');
            $id = $this->input->post('id');
            $vehicle = $this->input->post('vehicleCode');
            //echo $code.$id.$vehicle;
            $affectedRows = $this->Entry_model->grabEntry($code,$id);
            if($affectedRows>0){
               //update the points of the active user for that Vehicle 
               $updateChanges = $this->Entry_model->updatePoints($vehicle, "Active");
               if($updateChanges>0){
                 //check if the active member of this vehicle is graduate
                 $this->Entry_model->isGraduate($vehicle, "Active");
                 echo "Registration successful";
              }else {
                // echo $updateChanges; 
              }
           }else {
               echo "Invalid Codes already in used";
           }
        }
        
        
        public function check_credential(){
            //if($this->session->userdata('user')){
              $result = $this->User_model->exist($this->input->post('u'),md5($this->input->post('p')));
              echo json_encode($result);
           // }
        }
        
       public function save(){
          //if($this->session->userdata('user')){
                $this->load->library('form_validation');
                $this->form_validation->set_rules('user[lastname]', 'Lastname', 'trim|required|xss_clean');
                $this->form_validation->set_rules('user[firstname]', 'Firstname', 'trim|required|xss_clean');
                $this->form_validation->set_rules('user[middlename]', 'Middlename', 'trim|required|xss_clean');
                $this->form_validation->set_rules('user[birthday]', 'Birthday', 'trim|required|xss_clean');
                $this->form_validation->set_rules('user[sss]', 'SSS', 'trim|required|xss_clean');
                $this->form_validation->set_rules('user[tax]', 'TIN', 'trim|required|xss_clean');
                $this->form_validation->set_rules('user[cp]', 'Mobile Number', 'trim|required|xss_clean');
                $this->form_validation->set_rules('user[telephone]', 'Telephone', 'trim|required|xss_clean');
                $this->form_validation->set_rules('user[gender]', 'Gender', 'trim|required|xss_clean');
                $this->form_validation->set_rules('user[civil]', 'Civil Status', 'trim|required|xss_clean');
                $this->form_validation->set_rules('user[email]', 'Email', 'trim|required|xss_clean|valid_email');
                $this->form_validation->set_rules('user[username]', 'Username', 'trim|required|xss_clean');
                $this->form_validation->set_rules('user[password]', 'Password', 'trim|required|xss_clean|md5');
                
                if ($this->form_validation->run() == FALSE){
                    echo "fill out missing information";
                }else{
                    //save new User
                    $result = $this->User_model->saveRegistration($this->input->post('user'));
                    if(!$this->session->userdata('user') && $result){
                          $session_user = array(
                                    'id'=>$result->id,
                                    'type'=>$result->type,
                                    'lastname'=>$result->lastname,
                                    'firstname'=>$result->firstname,
                                    'middlename'=>$result->middlename
                                    );
                        $name = $result->firstname +" "+ $result->lastname + "##";
                        $this->session->set_userdata('user',$session_user);
                        $session_access = array('page'=>'marketing');
                        $this->session->set_userdata('access', $session_access);
                        $this->session->userdata('access');                     
                    }else {
                        $name = "User successfully Save";
                          //$session_user=array('id'=>'');
                    }
                      //Grab the code for the user
                      $affectedRows = $this->Entry_model->grabEntry($this->input->post('validation-code'),$result->id);
                      if($affectedRows==1){
                        //update the points of the active user for that Vehicle 
                        $updateChanges = $this->Entry_model->updatePoints($this->input->post('vehicle-cde'), "Active");
                          if($updateChanges>0){
                            //check if the active member of this vehicle is graduate
                            $this->Entry_model->isGraduate($this->input->post('vehicle-cde'), "Active");
                            //$errorMessage = "OK";
                            //echo $name;
                          }else {
                            echo "Invalid Codes already in used"; 
                          }
                      }else {
                          echo "Invalid Codes already in used";
                      }
                   echo $name;
                }
                
       }
       //}  
       
}

/* End of file welcome.php */
/* Location: ./application/controllers/welcome.php */
