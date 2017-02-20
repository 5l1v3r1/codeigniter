<?php

class Ana_Model extends CI_Model{
	
	function __construct(){
		parent::__construct();
	}

	// SEO
	public function seo(){
		$query = $this->db->select("*")
	              ->from('seo')
	              ->get();
		$seo["seo"] = $query->result();
		return $seo["seo"];
	}
}