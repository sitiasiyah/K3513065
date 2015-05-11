<?php if (! defined('BASEPATH')) exit('No direct script access allowed');
class Siswa extends CI_Controller {

function __construct()
{
 parent::__construct();
 $this->load->library(array('table'));
 $this->load->helper(array('url','form'));
 $this->load->model('siswa_model','',TRUE);
 }
 function index()
 {
 $this->load->view('menu_siswa');
 }
 
 function cetak_semua(){
 $siswas=$this->siswa_model->get_paged_list()->result();
 $tmpl = array ('table_open' => '<table border ="1">');
 $this->table->set_template($tmpl);
 $this->table->set_empty("&nbsp;");
 $this->table->set_heading('No', 'Nama', 'Alamat', 'Jenis Kelamin', 'Tanggal Lahir', 'Detail');
 $i=0;
 foreach ($siswas as $siswa){
	$this->table->add_row(
	++$i,
	$siswa->nama,
	$siswa->alamat,
	$siswa->jenis_kelamin,
	$siswa->tanggal_lahir,
	anchor('siswa/cetak_detail/' .$siswa->id.'' , 'det ke-' .$i.'')
	);
	}
$data['table']=$this->table->generate();
$this->load->view('siswa_list', $data);
 }
 
 
 function input()
 {
 $data['nama']=$this->input->post('nama',true);
 $data['alamat']=$this->input->post('alamat',true);
 $data['jenis_kelamin']=$this->input->post('jenis_kelamin',true);
 $data['tanggal_lahir']=$this->input->post('tanggal_lahir',true);
 $data['tombol']=$this->input->post('tombol',true);
 
 if(!$data['tombol']){}
 else{
 $siswa=array(
	'nama'=>$data['nama'],
	'alamat'=>$data['alamat'],
	'jenis_kelamin'=>$data['jenis_kelamin'],
	'tanggal_lahir'=>$data['tanggal_lahir'],
	);
$this->siswa_model->save($siswa);
}
 $this->load->view('input_siswa',$data);
 }
 
  function cetak_detail($id){
  $data['id']=$id;
 $this->load->view('siswa_detail',$data);
 }
 }