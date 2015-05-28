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
            $this->load->model('Entry');
            $this->load->model('User');
        }
         
	public function index(){
            $data['company_name'] = $this->config->item('company_name');
            $data['company_address'] = $this->config->item('company_address');
            $data['user'] = $this->session->userdata('user');
            $this->load->view('register',$data);
	}
        
        public function validateCode(){
            //echo "testr";
            if($this->session->userdata('user')){
                //echo "testr";
               echo $this->Entry->checkCodeExist($this->input->post('validationCode'));
            }else{
                redirect('login','refresh');
            }
        }
        
        public function checkCredential(){
            if($this->session->userdata('user')){
              $result = $this->User->exist($this->input->post('u'),md5($this->input->post('p')));
              echo json_encode($result);
            }
        }
        
       public function save(){
           if($this->session->userdata('user')){
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
                    echo json_encode(array('msg' => validation_errors()));
                }else{
                    $insert_id = $this->User->saveRegistration($this->input->post('user'));
                    $this->Entry->grabEntry($this->input->post('validation-code'),$insert_id);
                     //echo $this->input->post('validation-code');
                    //$this->input->post('validation-code')
                    echo json_encode(array('msg' => 'Successfully submitted and Added to Entry'));
                }
           }
       }
}

/* End of file welcome.php */
/* Location: ./application/controllers/welcome.php */
