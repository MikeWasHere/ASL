<?php 
	
include(APPPATH.'libraries/facebook/facebook.php');
	
	
class Fbconnect extends Facebook{
	
	public function Fbconnect(){
		
		$ci =& get_instance();
		$ci->config->load('facebook', TRUE);
		$config = $ci->config->item('facebook');
		parent::__construct($config);
		
	}
	
	public function send_back($value){
		return $value;
	}
	
	public function test(){
		
		$ci = & get_instance();
		
		
		$ci->load->helper('url');
		
		echo base_url();
		
	}
	
}