<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Sablon extends CI_Controller {

    public function __construct(){
        parent::__construct();
    }

    // İndex
    public function index(){
        $query = $this->db->select("*")
                  ->from('table')
                  ->where('status',1)
                  ->group_by('group_id')
                  ->get();
        $data["veri"] = $query->result();

        $data["title"] = "Page Title";

        $this->load->view('admin/header', $data);
        $this->load->view('admin/table/listele', $data);
        $this->load->view('admin/footer');
    }

    // Ekle
    public function ekle(){
        $data["title"] = "New_Content";

        if(isset($_POST) && !empty($_POST)){
            // Resim Upload
            $picture['upload_path'] = './uploads/haber/';
            $picture['file_name'] = permalink($this->input->post('baslik1')).'-'.rastgeleuret(5);
            $picture['allowed_types'] = 'gif|jpg|png';
            //$config["max_size"] = 1024;
            $this->load->library('upload', $picture);

            if($this->upload->do_upload('fotograf')){
                $upload = $this->upload->data();
                $image = $upload['file_name'];
            }else{
                $image = "";
            }

            // Data import
            $data1 = array(
                'title' => $this->input->post('input_name'),
                'picture' => $image,
                'permalink' => permalink($this->input->post('input_name')),
                'date' => now(),
                'ip' => $this->input->ip_address()
            );
            $this->Default_Model->ekle("table", $data1);

            redirect(base_url()."admin/sablon");
        }

        $this->load->view('admin/header', $data);
        $this->load->view('admin/sablon/ekle');
        $this->load->view('admin/footer');
    }

    // Düzenle View
    public function duzenle($id){
        $query = $this->db->select("*")
                  ->from('table')
                  ->where('id', $id)
                  ->get();
        $data["veri"] = $query->result();

        $data["title"] =  "Content_Edit";

        if(isset($_POST) && !empty($_POST)){
            // Resim Upload
            $picture['upload_path'] = './uploads/sablon/';
            $picture['file_name'] = permalink($this->input->post('input_name')).'-'.rastgeleuret(5);
            $picture['allowed_types'] = 'gif|jpg|png';
            //$config["max_size"] = 1024;
            $this->load->library('upload', $picture);

            if($this->upload->do_upload('fotograf')){
                $upload = $this->upload->data();
                $image = $upload['file_name'];
            }else{
                foreach ($data["veri"] as $key) {
                    $image = $key->picture;
                }
            }

            // Data edit import
            $data1 = array(
                'title' => $this->input->post('input_name'),
                'picture' => $image,
                'permalink' => permalink($this->input->post('input_name')),
                'date' => now(),
                'ip' => $this->input->ip_address()
            );
            $this->Default_Model->guncelle("table", $data1, $id);

            redirect(base_url()."admin/sablon");
        }

        $this->load->view("admin/header", $data);
        $this->load->view("admin/sablon/duzenle", $data);
        $this->load->view("admin/footer");
    }

    // Sil İşlem
    public function sil($id){
        $this->Default_Model->sil('table', 'id', $id);
        redirect(base_url().'admin/sablon');
    }

}