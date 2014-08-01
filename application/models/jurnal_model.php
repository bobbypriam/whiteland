<?php
	class Jurnal_model extends CI_Model {
		function get_jurnal() {
			$query = "set search_path to 1206208315";
			$this->db->query($query);
			$this->db->order_by('id', 'asc');
			return $this->db->get('jurnal');
		}
		
		function submit_jurnal() {
			$data = array(
				'nama' => trim($this->input->post('name')),
				'email' => trim($this->input->post('email')),
				'entri' => strip_tags($this->input->post('entry'), '<br><a>'),
				'status' => 0
			);
			
			$query = "set search_path to 1206208315";
			$this->db->query($query);
			return $this->db->insert('jurnal', $data);
		}
		
		function delete_jurnal($id) {
			$query = "set search_path to 1206208315";
			$this->db->query($query);
			$query = "delete from jurnal where id=$id";
			$this->db->query($query);
		}
		
		function approve_jurnal($id) {
			$query = "set search_path to 1206208315";
			$this->db->query($query);
			$query = "update jurnal set status=1 where id=$id";
			$this->db->query($query);
		}
	}
?>