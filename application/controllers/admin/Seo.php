<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Seo extends CI_Controller {

	public function __construct(){
		parent::__construct();
	}

	// İndex
	public function index(){
		$query = $this->db->select("*")
	              ->from('seo')
	              ->get();
		$data["veri"] = $query->result();

		$data["title"] = "Seo";

		$this->load->view("admin/header", $data);
		$this->load->view("admin/seo/duzenle", $data);
		$this->load->view("admin/footer");

		if(isset($_POST) && !empty($_POST)){
			// Data import
			$data1 = array(
				'title' => $this->input->post('title'),
				'description' => $this->input->post('desc'),
				'keywords' => $this->input->post('key'),
			);
			$this->Default_Model->guncelle("seo", $data1, '1');

			redirect(base_url()."admin/seo");
		}
	}
}