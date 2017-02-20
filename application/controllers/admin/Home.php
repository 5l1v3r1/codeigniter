<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Home extends CI_Controller {

	public function __construct(){
		parent::__construct();
	}

	public function index(){
		$data["title"] = "Giriş";

		$this->load->view('admin/header', $data);
		$this->load->view('admin/home');
		$this->load->view('admin/footer');
	}
}