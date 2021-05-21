<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Whojoin extends CI_Controller {

	public function index()
	{
		$this->load->model('M_whojoin');

		$data = array(
			'whojoin' => $this->M_whojoin->get_data()
		);

		$this->load->view('data_whojoin', $data);
	}

	public function tambah()
	{
		$this->load->view('tambah_whojoin');
	}

	public function simpan()
	{
		$this->load->model('M_whojoin');

		$data = array(
			'nim' => $this->input->post('nim'),
			'nama_lengkap' => $this->input->post('nama_lengkap'),
			'alamat' => $this->input->post('alamat')
		);

		$who = $this->M_whojoin->simpan($data);

		if($who){
			echo "Data Berhasil Disimpan!";
		}else{
			echo "Data Gagal Disimpan!";
		}

	}

	public function edit($id)
	{
		$this->load->model('M_whojoin');

		$data = array(
			'whojoin' => $this->M_whojoin->edit_data($id)
		);
		

		$this->load->view('edit_whojoin', $data);
	}

	public function update()
	{
		$this->load->model('M_whojoin');

		$id['id'] = $this->input->post("id");

		$data = array(
			'nim' => $this->input->post('nim'),
			'nama_lengkap' => $this->input->post('nama_lengkap'),
			'alamat' => $this->input->post('alamat')
		);

		$who = $this->M_whojoin->update_whojoin($data, $id);

		if($who){
			echo "Data Berhasil Diupdate!";
		}else{
			echo "Data Gagal diupdate!";
		}
	}

	public function hapus($id)
	{
		$this->load->model('M_whojoin');

		$id_who['id'] = $id;

		$who = $this->M_whojoin->hapus_whojoin($id_who);

		if($who){
			echo "Data Berhasil Dihapus!";
		}else{
			echo "Data Gagal Dihapus!";
		}
	}
}
