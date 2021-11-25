<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Home extends CI_Controller
{

	public function __construct()
	{
		parent::__construct();
		$this->load->model('M_obat');
		$this->load->helper('Kosong');
	}

	public function index()
	{
		$queryAllObat = $this->M_obat->getDataObat();
		$DATA = array('queryAllObt' => $queryAllObat);
		$this->load->view('home', $DATA);
	}

	public function halaman_tambah()
	{
		$this->load->view('halaman_tambah_obat');
		
	}

	public function halaman_edit($id)
	{
		$queryObatDetail = $this->M_obat->getDataObatDetail($id);
		$DATA = array('queryObtDetail' => $queryObatDetail);
		$this->load->view('halaman_edit_obat', $DATA);
	}

	public function fungsiTambah()
	{
		$id = $this->input->post('id');
		$email = $this->input->post('email');
		$password = $this->input->post('password');
		$nama = $this->input->post('nama');
		$jenis = $this->input->post('jenis');
		$deskripsi = $this->input->post('deskripsi');
		$penyimpanan = $this->input->post('penyimpanan');
		$penyuplai = $this->input->post('penyuplai');
		$tanggal = $this->input->post('tanggal');
		$foto =$_FILES['foto'];
		if ($foto=''){}else{
			$config['upload_path'] = './images/foto';
			$config['allowed_types'] = 'jpg|png|gif';
		
		$this->load->library('upload',$config);
		if(!$this->upload->do_upload('foto')){
			echo "upload gagal"; die();
		}else{
			$foto=$this->upload->data('file_name');
		}
	}
	

		$ArrInsert = array(
			'id' => $id,
			'email' => $email,
			'password' => $password,
			'nama' => $nama,
			'jenis' => $jenis,
			'deskripsi' => $deskripsi,
			'penyimpanan' => $penyimpanan,
			'penyuplai' => $penyuplai,
			'tanggal' => $tanggal,
			'foto' => $foto
		);

		$this->M_obat->insertDataObat($ArrInsert);
		$this->session->set_flashdata('message', 'Data Berhasil Ditambahkan');
		redirect(base_url(''));
	}

	public function fungsiEdit()
	{
		$id = $this->input->post('id');
		$email = $this->input->post('email');
		$password = $this->input->post('password');
		$nama = $this->input->post('nama');
		$jenis = $this->input->post('jenis');
		$deskripsi = $this->input->post('deskripsi');
		$penyimpanan = $this->input->post('penyimpanan');
		$penyuplai = $this->input->post('penyuplai');
		$tanggal = $this->input->post('tanggal');
		$foto =$_FILES['foto'];
		if ($foto=''){}else{
			$config['upload_path'] = './images/foto';
			$config['allowed_types'] = 'jpg|png|gif';
		
		$this->load->library('upload',$config);
		if(!$this->upload->do_upload('foto')){
			echo "upload gagal"; die();
		}else{
			$foto=$this->upload->data('file_name');
		}
	}

		$ArrUpdate = array(
			'email' => $email,
			'password' => $password,
			'nama' => $nama,
			'jenis' => $jenis,
			'deskripsi' => $deskripsi,
			'penyimpanan' => $penyimpanan,
			'penyuplai' => $penyuplai,
			'tanggal' => $tanggal,
			'foto' => $foto
		);

		$this->M_obat->updateDataObat($id, $ArrUpdate);
		$this->session->set_flashdata('message', 'Data Berhasil DiEdit');
		redirect(base_url(''));
	}

	public function fungsiDelete($id)
	{
		$this->M_obat->deleteDataObat($id);
		redirect(base_url(''));
	}
}
