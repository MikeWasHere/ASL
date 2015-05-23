<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Main extends CI_Controller {

	public function index(){
		$this->login();
	}
	
	public function login(){
		
		$this->load->library('fbconnect');
	
		$this->load->view('login');
	}
	
	
	public function facebook_request(){
		
		$this->load->library('fbconnect');
		
		$data = array(
			'redirect_url' => site_url('main/handle_facebook_login'),
			'scope' => 'email'
		);
		
		redirect($this->fbconnect->getLoginUrl($data));
		
	}
	
}
