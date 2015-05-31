<?php 
/**
 * Developed by: Jayson
 *  
 */
if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Authenticate extends CI_Controller {

	public function __construct() {
            parent::__construct();
            $this->load->model('User_model');
            $this->load->library('session');
            $this->load->helper('url');
            $this->load->helper('date');
            $this->load->helper('security');
            $this->load->helper('form');
           
        }
         
	public function index(){
            $this->load->library('form_validation');
            $this->form_validation->set_rules('uname', 'Username', 'trim|required|xss_clean');
            $this->form_validation->set_rules('password', 'Password', 'trim|required|xss_clean|md5|callback_checkUser');
                if($this->form_validation->run() == FALSE){
                //Field validation failed.  User redirected to login page
                    $data['company_name'] = $this->config->item('company_name');
                    //$data['company_address'] = $this->config->item('company_address');
                    $this->load->view('login',$data);
                }else{
                //Go to private area
                    $session_access = array('page'=>'global');
                    $this->session->set_userdata('access', $session_access);
                    $data['access'] = $this->session->userdata('access');
                    $data['user'] = $this->session->userdata('user');
                    $this->load->view('subsidiary',$data);
                }
	}
        
        public function checkUser($password){
            $username = $this->input->post('uname');
            $result = $this->User_model->exist($username,$password);
            //echo $result->id.$result->type.$result->lastname.$result->firstname.$result->middlename;
            if($result){
                $session_user = array(
                                'id'=>$result->id,
                                'type'=>$result->type,
                                'lastname'=>$result->lastname,
                                'firstname'=>$result->firstname,
                                'middlename'=>$result->middlename
                                );
                $this->session->set_userdata('user',$session_user);
                return TRUE;
            }else{
                $this->form_validation->set_message('checkUser', "<div class='alert alert-info' role='alert'>Invalid username or password</div>");
                return FALSE;
            }
        }
        
        public function logout(){
            $this->session->unset_userdata('user');
            $this->session->unset_userdata('access');
            $data['company_name'] = $this->config->item('company_name');
            redirect('home', 'refresh');
        }
        
}

/* End of file welcome.php */
/* Location: ./application/controllers/welcome.php */