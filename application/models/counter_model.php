<?php

class Counter_model extends CI_Model {
	public function get_counter() {
		$query = 'set search_path to 1206208315';
		$this->db->query($query);
		$this->db->query("select nextval('count')");
		return $this->db->query("select * from count");
	}
}