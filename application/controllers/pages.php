<?php

class Pages extends CI_Controller {
	public function index() {
		$data['title'] = 'Kisah dari Desa Whiteland';
		$this->load->view('home.php', $data);
	}
	
	public function view($page) {
		if ( ! file_exists('application/views/'.$page.'.php'))
			show_404();
		$data['title'] = ucfirst($page) . ' | Kisah dari Desa Whiteland';
		$data['count'] = $this->counter_model->get_counter()->row_array();
		$this->load->view('templates/header', $data);
		$this->load->view($page, $data);
		$this->load->view('templates/footer', $data);
	}
}