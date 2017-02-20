<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Sitemap extends CI_Controller {

	public function __construct(){
	    parent::__construct();
	}
	/*
		changefreq :
			always - her zaman
			hourly - saatlik
			daily - günlük
			weekly - haftalık
			monthly - aylık
			yearly - yıllık
			never - asla

		priority :
			0.5
			1.0
	*/
	public function index(){
		// Sorgu
        $query = $this->db->select("*")
	              ->from('table')
	              ->where('sutun','value')
	              ->get();
		$data["sorgu"] = $query->result();

		$data["iletisim"] = "iletisim";
		$data["hakkimizda"] = "hakkimizda";

	   $this->load->view("sitemap/sitemap",$data);
	}
}