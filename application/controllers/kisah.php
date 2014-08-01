<?php

class Kisah extends CI_Controller {
	public function index() {
		$data['title'] = 'Kisah | Kisah dari Desa Whiteland';
		$data['kisah'] = $this->kisah_model->get_kisah();
		$data['count'] = $this->counter_model->get_counter()->row_array();
		$this->load->view('templates/header', $data);
		$this->load->view('kisah/kisah', $data);
		$this->load->view('templates/footer', $data);
	}
	
	public function view($slug) {
		$data['kisah'] = $this->kisah_model->get_kisah($slug);
		$row = $data['kisah']->result();
		if (empty($row))
			show_404();
		
		$title_array = explode('-', $slug);
		$title = ucfirst($title_array[0]);
		for ($i = 1; $i < count($title_array); $i++)
			$title = $title . ' ' . ucfirst($title_array[$i]);
		
		$data['title'] = $title.' | Kisah dari Desa Whiteland';
		$data['count'] = $this->counter_model->get_counter()->row_array();
		$this->load->view('templates/header', $data);
		$this->load->view('kisah/view', $data);
		$this->load->view('templates/footer', $data);
	}
}