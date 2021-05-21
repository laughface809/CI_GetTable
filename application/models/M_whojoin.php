<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class M_whojoin extends CI_Model {

	public function get_data()
	{
		$this->db->select('*');
		$this->db->from('tb_listed');
		$this->db->order_by('id', 'DESC');

		return $this->db->get();
	}
	public function simpan($data)
	{
		return $this->db->insert('tb_listed', $data);
	}

	public function edit_data($id)
	{
		return $this->db->where('id', $id)->get('tb_listed')->row();
	}

	public function update_whojoin($data, $id)
	{
		return $this->db->update('tb_listed', $data, $id);
	}

	public function hapus_whojoin($id_who)
	{
		return $this->db->delete('tb_listed', $id_who);
	}
}