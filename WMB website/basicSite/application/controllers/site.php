

<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Site extends CI_Controller {
	
	public function index(){
		$this->home();	
	}
	
	public function home(){
/* 		$this->load->model("model_get");   
		 $data["results"] = $this->model_get->getData("home"); <-- Enables the modal data for CMS in the Home Page*/
		
		$this->load->view("site_header");
		$this->load->view("content_home");
		$this->load->view("site_footer");				
	}
	
	public function about(){
		/*
$this->load->model("model_get");
		$data["results"] = $this->model_get->getData("about"); <-- Enables the modal data for CMS in the About Page.
*/		
		$this->load->view("site_header");
		$this->load->view("content_about");
		$this->load->view("site_footer");
	}
	
	public function contact(){
		$data["message"] = "";
	
		$this->load->view("site_header");
		$this->load->view("site_nav");
		$this->load->view("content_contact", $data);
		$this->load->view("site_footer");
	}
	
	public function map(){
		$data = array();
		$this->load->library('googlemaps');
		/* $config  = array(); */
		$config['center'] = 'auto';
		
		$config['places'] = TRUE;
		$config['placesLocation'] = '28.633208221340514, -81.31748557090759';
		$config['placesRadius'] = 500; 
		$this->googlemaps->initialize($config);
		
		$data['map'] = $this->googlemaps->create_map();
		
		
		$this->load->view('newview',$data);
	}
	
	public function send_email(){
		$this->load->library("form_validation");
		
		$this->form_validation->set_rules("fullName", "Full Name", "required|alpha|xss_clean");
		$this->form_validation->set_rules("email", "Email", "required|valid_email|xss_clean");
		$this->form_validation->set_rules("message", "Message", "required|xss_clean");
		
		if ($this->form_validation->run() == FALSE){
			$data["message"] = "";
			
			$this->load->view("site_header");
			$this->load->view("site_nav");
			$this->load->view("content_contact", $data);
			$this->load->view("site_footer");
		} else {
			$data["message"] = "the email has successfully been sent";
			
			$this->load->library("email");
			
			/*
$this->email->from(set_value("email"), set_value("fullName"));
			$this->email->to("xtrjago@gmail.com");
			$this->email->subject("Message from our form");
			$this->email->message(set_value("message"));
*/
			
			$this->email->send();
			
			/* echo $this->email->print_debugger(); */
			
			$this->load->view("site_header");
			$this->load->view("site_nav");
			$this->load->view("content_contact", $data);
			$this->load->view("site_footer");
		}
		
	}	
}