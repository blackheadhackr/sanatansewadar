<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Web_contact extends CI_Controller {
	//  cunstruct page ------------------------------------
	public function __construct(){
        parent::__construct();

        $this->load->model('all_img');
        $this->load->model('Contact');
		$this->load->model('Blog_model');
        $this->load->model('Web_model');

   }
	// web contact data reflect on admmin ----------------------------------------
	public function get_web_contact_data(){
        $a['web_data'] = $this->Contact->get_web_contact_data();
		$this->load->view('admin/web_contact',$a);
	}

	// contact data insert from web site =============================================
	public function addcontact(){
        $this->form_validation->set_rules('firstName','First Name','required');
        $this->form_validation->set_rules('lastName','Last Name','required');
        $this->form_validation->set_rules('email','Email','required');
        $this->form_validation->set_rules('phone','Phone number','required|min_length[10]|max_length[10]',array('min_length' => 'Please fill currect Phone Number 10 digits','max_length' => 'Please fill currect Phone Number'));
        $this->form_validation->set_rules('message','Message','required');

        if($this->form_validation->run() == false){
            $all_data = array(
                'result' => 'error',
                'first' =>form_error('firstName'),
                'last' =>form_error('lastName'),
                'email' =>form_error('email'),
                'phone' =>form_error('phone'),
                'message' =>form_error('message')
            );
        }else{
            $firstName = $this->input->post('firstName'); 
            $lastName = $this->input->post('lastName'); 
            $email = $this->input->post('email'); 
            $phone = $this->input->post('phone'); 
            $message = $this->input->post('message');

            $data = array(
                'firstname' => $firstName,
                'lastnane' => $lastName,
                'email' => $email,
                'phone' => $phone,
                'message' => $message
            );
            $a = $this->Web_model->contact_dta($data);
            if($a){
                $all_data = array(
                    'result' => 'success',
                    'message' =>'<div class="alert alert-success alert-dismissible fade show" role="alert">
                    <strong>Success !</strong> Thankyou for connecting with us our team will connect you back soon...
                    <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                  </div>'
                );
            }else{
                $all_data = array(
                    'result' => 'error',
                    'message' =>'<div class="alert alert-success alert-dismissible fade show" role="alert">
                    <strong>Error !</strong> Something went wrong please tryagain after some time.....
                    <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                  </div>'
                );
            }
        }
        echo json_encode($all_data);
    }

}
