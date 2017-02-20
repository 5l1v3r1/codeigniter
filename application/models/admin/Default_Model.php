<?php

class Default_Model extends CI_Model{
	
	function __construct(){
		parent::__construct();
	}

	public function ekle($table, $data){
		if($this->db->insert($table, $data)){
			return true;
		}
	}

	public function guncelle($table, $data, $id){
		$this->db->where("id", $id);
		$this->db->update($table, $data);
		return true;
	}

	public function guncelle2($table, $data, $sutun1, $id1, $sutun2, $id2){
		$this->db->where($sutun1, $id1);
		$this->db->where($sutun2, $id2);
		$this->db->update($table, $data);
		return true;
	}

	public function sil($table, $id){
		$this->db->where("id", $id);
		$this->db->delete($table);
		return true;
	}

	public function sil2($table, $sutun1, $id1){
		$this->db->where($sutun1, $id1);
		$this->db->delete($table);
		return true;
	}

	public function fotosil($table, $data, $id){
		$this->db->where("group_id", $id);
		$this->db->update($table, $data);
		return true;
	}

}

?>