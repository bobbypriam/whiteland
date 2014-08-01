<?php
	class Kisah_model extends CI_Model {
		function get_kisah($slug = FALSE) {
			$query = "set search_path to 1206208315";
			$this->db->query($query);
			
			if ($slug === FALSE) {
				$this->db->order_by('id', 'asc');
				return $this->db->get('kisah');
			}
			return $this->db->get_where('kisah', array('slug'=>$slug));
		}
		
		function post_kisah() {
			$this->load->helper('url');
			
			$slug = url_title($this->input->post('judul'), 'dash', TRUE);
			
			$data = array(
				'judul' => $this->input->post('judul'),
				'slug' => $slug,
				'isi' => $this->input->post('isi')
			);
			
			$query = "set search_path to 1206208315";
			$this->db->query($query);
			return $this->db->insert('kisah', $data);
		}
		
		function delete_kisah($id) {
			$query = "set search_path to 1206208315";
			$this->db->query($query);
			$query = "delete from kisah where id=$id";
			$this->db->query($query);
		}
		
		function edit_kisah($id) {
			$this->load->helper('url');
			
			$judul = $this->input->post('judul');
			$slug = url_title($judul, 'dash', TRUE);
			$isi = $this->input->post('isi');
			
			$query = "set search_path to 1206208315";
			$this->db->query($query);
			$query = "update kisah set (judul, slug, isi) = ('$judul', '$slug', '$isi') where id=$id";
			$this->db->query($query); 
		}
	}
?>