<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Login extends CI_Controller {

	public function __construct(){
		parent::__construct();
		$this->load->database();
		$this->load->helper(array('form', 'url'));

		$this->load->model("admin/Login_Model");
	}

	public function index(){
		$data["title"] = "Giriş Yap";
		$this->load->view('admin/login', $data);
	}

	public function login_ol(){
		$mail = $this->input->post("email");
		$sifre = sha1(md5(md5($this->input->post("sifre"))));
		
		$result = $this->Login_Model->giris($mail,$sifre);

		if($result){
			$sess_array = array();
			foreach ($result as $key) {
				$sess_array = array(
					'id' => $key->id,
					'ad' => $key->ad,
					'soyad' => $key->soyad,
					'email' => $key->email
				);

				$this->session->set_userdata("oturum_kaydi", $sess_array);

				$veriler = array(
					'ip' => $this->input->ip_address(),
					'tarih' => now()
				);

				$this->Default_Model->guncelle('yoneticiler',$veriler,$sess_array["id"]);
				redirect(base_url()."admin/home");
			}
			return true;
		}else{
			$data["title"] = "Hatalı Giriş";
			$this->session->set_flashdata("oturum_uyari", '<div class="alert alert-danger" role="alert" style="font-size:13px;">Kullanıcı adı veya şifre hatalı !</div>');
			$this->load->view("admin/login", $data);
			return false;
		}
	}

	public function cikis(){
		$this->session->unset_userdata("oturum_kaydi");
		$this->session->sess_destroy();
		redirect(base_url()."admin/login");
	}
}