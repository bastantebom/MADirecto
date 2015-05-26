<?php 
/**
 * Developed by: Jayson
 *  
 */
if ( ! defined('BASEPATH')) exit('No direct script access allowed');
session_start();
class Borrowers extends CI_Controller {

	public function __construct() {
            parent::__construct();
            $this->load->model('Borrower');
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
                $data['list_of_borrower'] = $this->Borrower->get_borrower();
                $this->load->view('borrower_view',$data);
            }else{
                redirect('login','refresh');
            }
        }
        
        public function add(){
            if($this->session->userdata('logged_in')){
                $data['user_data'] = $this->session->userdata('logged_in');
                $data['company_name'] = $this->config->item('company_name');
                $data['company_address'] = $this->config->item('company_address');
                $this->load->view('borrower_add',$data);
            }else{
                redirect('login','refresh');
            }
        }
        
        public function save(){
           if($this->session->userdata('logged_in')){
                $this->load->library('form_validation');
                $this->form_validation->set_rules('borrower[lastname]', 'Lastname', 'trim|required|xss_clean');
                $this->form_validation->set_rules('borrower[firstname]', 'Firstname', 'trim|required|xss_clean');
                $this->form_validation->set_rules('borrower[address]', 'Address', 'trim|required|xss_clean');
                $this->form_validation->set_rules('borrower[sss]', 'SSS', 'trim|required|xss_clean');
                $this->form_validation->set_rules('borrower[tin]', 'TIN', 'trim|required|xss_clean');
                $this->form_validation->set_rules('borrower[mobile]', 'Mobile', 'trim|required|xss_clean');
                $this->form_validation->set_rules('borrower[employed]', 'Employed', 'trim|required|xss_clean');
                $this->form_validation->set_rules('borrower[employer]', 'Employer', 'trim|required|xss_clean');
                $this->form_validation->set_rules('borrower[employeradd]', 'Employer Address', 'trim|required|xss_clean');
                $this->form_validation->set_rules('borrower[employerphone]', 'Employer Phone Number', 'trim|required|xss_clean');
                if ($this->form_validation->run() == FALSE){
                    $data['user_data'] = $this->session->userdata('logged_in');
                    $data['company_name'] = $this->config->item('company_name');
                    $data['company_address'] = $this->config->item('company_address');
                    $this->load->view('borrower_add',$data); 
                }else{
                    $borrower = $this->input->post('borrower');
                    $this->Borrower->save_borrower($borrower);
                    $data['message'] = "<div class='msg msg-ok'><p>Save Successfully!</p></div>";
                    $data['user_data'] = $this->session->userdata('logged_in');
                    $data['company_name'] = $this->config->item('company_name');
                    $data['company_address'] = $this->config->item('company_address');
                    $this->load->view('borrower_add',$data);
                }
           }else{
                redirect('login','refresh');
            }
           
        }
        
        public function delete(){
            if($this->session->userdata('logged_in')){
                $data['user_data'] = $this->session->userdata('logged_in');
                $data['company_name'] = $this->config->item('company_name');
                $data['company_address'] = $this->config->item('company_address');
                $this->Borrower->delete_borrower($this->input->post('borrowerId'));
            }else{
                redirect('login','refresh');
            }
        }
        
        public function view(){
              if($this->session->userdata('logged_in')){
                $data['user_data'] = $this->session->userdata('logged_in');
                $data['company_name'] = $this->config->item('company_name');
                $data['company_address'] = $this->config->item('company_address');
                echo json_encode($this->Borrower->borrower($this->input->post('borrowerId')));
                
            }else{
                redirect('login','refresh');
            }
        }
        
    
}

/* End of file welcome.php */
/* Location: ./application/controllers/welcome.php */