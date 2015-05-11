<?php 
if (! defined('BASEPATH')) exit('No direct script access allowed');

class Indekk extends CI_Controller {

	function __construct(){
		parent::__construct();
		$this->load->library(array('table'));
		$this->load->helper(array('url','form'));
		$this->load->model('siswa_model','',TRUE);
	}
	
	function index(){
		$this->load->model("siswa_model");
		$data['hasil'] = $this->siswa_model->tampil();
		$this->load->view("show", $data);
	}
	
	function input(){
		$this->load->view('awal', true);
		$tombol = $this->input->post('tombol', true);
		
		if (!$tombol){}
		else if ($tombol){
			$this->load->model('siswa_model');
			$this->siswa_model->save();
			redirect('indekk');
		}
	}
	
	function update($id){
	$this->db->where('no',$id);
		$this->load->view('awal', true);
		$tombol = $this->input->post('tombol', true);
	
		if (!$tombol){}
		else if ($tombol){
			$this->load->model('siswa_model');
			$this->siswa_model->update($id);
			redirect('indekk');
		}
	}
	
	function edit_data(){
		$id = $this->uri->segment(3);
		$data['data_siswa'] = $this->siswa_model->ambil_data($id);
		$this->load->view('edit',$data);
	}
	function detail(){
		$id = $this->uri->segment(3);
		$data['data_siswa'] = $this->siswa_model->ambil_data($id);
		$this->load->view('showd',$data);
	}
	
	
	function delete ($id){
        $this->siswa_model->delete($id);
         redirect(base_url("indekk"));    
        
    }
	
	
}