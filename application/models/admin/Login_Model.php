<?php

class Login_Model extends CI_Model{
	
	function __construct(){
		parent::__construct();
	}

	public function giris($email, $sifre){
		$this->db->select("*");
		$this->db->from("yoneticiler");
		$this->db->where("email", $email);
		$this->db->where("sifre", $sifre);
		$this->db->where("durum", "1");
		$this->db->limit(1);

		$query = $this->db->get();
		if($query->num_rows() == 1){
			return $query->result();
		}else{
			return false;
		}

		
	}


}

?>