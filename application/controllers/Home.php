<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Home extends CI_Controller {

	public function __construct(){
	    parent::__construct();

	    $this->load->model("Ana_Model");
	}

	// Anasayfa Giriş
	public function index(){
		
		// Sorgu
		$query1 = $this->db->select("*")
	              ->from('table')
	              ->where('status',1)
	              ->get();
		$data["sorgu"] = $query1->result();


		// Seo
		$seo["seo"] = $this->Ana_Model->seo();
		foreach ($seo["seo"] as $key) {
			$data["meta_title"] = $key->title;
			$data["meta_desc"] = $key->description;
			$data["meta_key"] = $key->keywords;
		}

		$this->load->view("front/header", $data);
		$this->load->view("front/home", $data);
		$this->load->view("front/footer", $data);
	}
}