<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class M_obat extends CI_Model {

	function getDataObat() {
		$query = $this->db->get('medicine');
		return $query->result();
	}

	function insertDataObat($data) {
		$this->db->insert('medicine', $data);
	}

	function getDataObatDetail($id) {
		$this->db->where('id', $id);
		$query = $this->db->get('medicine');
		return $query->row();
	}

	function updateDataObat($id, $data) {
		$this->db->where('id', $id);
		$this->db->update('medicine', $data);
	}

	function deleteDataObat($id) {
		$this->db->where('id', $id);
		$this->db->delete('medicine');
	}
}
