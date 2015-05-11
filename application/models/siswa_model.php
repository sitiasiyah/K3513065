<?php
class Siswa_model extends CI_Model
{
	private $primary_key='no';
	private $table_name='data';

	function __construct(){
		parent::__construct();
	}
	
	function tampil(){
		$tampil = $this->db->get('data');
		if ($tampil->num_rows() > 0){
			foreach ($tampil->result() as $data){
				$hasil[] = $data;				
			}
			return $hasil;
		}
	}
	
	public function delete ($id)
    {
        $sql = "delete from data where no = '".$id."'";
        return $this->db->query($sql);
    }

	function save(){
		$nim = $this->input->post('nim', true);
		$nama = $this->input->post('nama', true);
		$kota = $this->input->post('kota', true);
		$jenis_kelamin = $this->input->post('jenis_kelamin', true);
		$tanggal = $this->input->post('tanggal', true);
		$bulan = $this->input->post('bulan', true);
		$tahun = $this->input->post('tahun', true);
		
		$sd = $this->input->post('sd', true);
		$smp = $this->input->post('smp', true);
		$sma = $this->input->post('sma', true);
		$universitas = $this->input->post('universitas', true);
		
		$siswa = array(
			'nim' => $nim,
			'nama' => $nama,
			'kota' => $kota,
			'jenis_kelamin' => $jenis_kelamin,
			'tanggal' => $tanggal,
			'bulan' => $bulan,
			'tahun' => $tahun,
			'sd' => $sd,
			'smp' => $smp,
			'sma' => $sma,
			'universitas' => $universitas,
		);
		
		$this->db->insert('data', $siswa);
	}
	
	function update($id){
	$this->db->where('no',$id);
	
		$nim = $this->input->post('nim', true);
		$nama = $this->input->post('nama', true);
		$kota = $this->input->post('kota', true);
		$jenis_kelamin = $this->input->post('jenis_kelamin', true);
		$tanggal = $this->input->post('tanggal', true);
		$bulan = $this->input->post('bulan', true);
		$tahun = $this->input->post('tahun', true);
		
		$sd = $this->input->post('sd', true);
		$smp = $this->input->post('smp', true);
		$sma = $this->input->post('sma', true);
		$universitas = $this->input->post('universitas', true);
		
		$siswa = array(
			'nim' => $nim,
			'nama' => $nama,
			'kota' => $kota,
			'jenis_kelamin' => $jenis_kelamin,
			'tanggal' => $tanggal,
			'bulan' => $bulan,
			'tahun' => $tahun,
			'sd' => $sd,
			'smp' => $smp,
			'sma' => $sma,
			'universitas' => $universitas,
		);
		
		$this->db->update('data', $siswa);
	}
	
	function ambil_data($id)
	{
		$this->db->where('no',$id);
		$query = $this->db->get('data');
		return $query->result();
	}
	/*
	function update(){
		$nim = $this->input->post('nim', true);
		$nama = $this->input->post('nama', true);
		$kota = $this->input->post('kota', true);
		$jenis_kelamin = $this->input->post('jenis_kelamin', true);
		$tanggal = $this->input->post('tanggal', true);
		$bulan = $this->input->post('bulan', true);
		$tahun = $this->input->post('tahun', true);
		
		$sd = $this->input->post('sd', true);
		$smp = $this->input->post('smp', true);
		$sma = $this->input->post('sma', true);
		$universitas = $this->input->post('universitas', true);
		
		$siswa = array(
			'nim' => $nim,
			'nama' => $nama,
			'kota' => $kota,
			'jenis_kelamin' => $jenis_kelamin,
			'tanggal' => $tanggal,
			'bulan' => $bulan,
			'tahun' => $tahun,
			'sd' => $sd,
			'smp' => $smp,
			'sma' => $sma,
			'universitas' => $universitas,
		);
		
		$this->db->where(no, $id);
		$this->db->update('data', $siswa);
	}
	
	
 
	function update2($id,$data_input)
	{
		$this->db->where('no',$id);
		$this->db->update('data',$data_input);
	}
	/*function update(){
		$baca = $this->db->get('siswa');
		if ($baca->num_rows() > 0){
			foreach ($baca->result() as $data){
				$hasil[] = $data;
			}
			return $hasil;
		}
	}*/
	
	
}