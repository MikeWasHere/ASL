<?php 
	
class Model_get extends CI_Model{
	function getData($page){
		$query = $this->db->get_where("pageData", array("page"=>$page));
		return $query->result();
	}
	
	function insert1($data){
		$this->db->insert("test",$data);
	}
	
	function insert2($data){
		$this->db->insert_batch("test",$data);
}

	function update1($data){
		$this->db->update("test",$data, "id = 2");
	}
	
	function update2($data){
		$this->db->update_batch("test",$data,"id");
	}
	
	function delete1($data){
		$this->db->delete("test",$data);
	}
	
	function empty1($table){
		$this->db->empty($table);
	}
	
	function getCoor($lat,$long){
		$this->db->insert("coordinatesDAWG", array('lat'=>$lat, 'long'=>$long));		
	}
	function loadCoor(){
		$query = $this->db->query('select * from coordinatesDAWG order by id DESC LIMIT 1'); 
		return $query->result();				
	}
}
	
?> 