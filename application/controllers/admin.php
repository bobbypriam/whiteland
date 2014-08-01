<?php

class Admin extends CI_Controller {
	public function index() {
		$data['title'] = 'Admin | Kisah dari Desa Whiteland';
		$data['entries'] = $this->jurnal_model->get_jurnal();
		$data['kisah'] = $this->kisah_model->get_kisah();
		$this->load->view('admin/index', $data);
	}
	
	public function edit_post($slug) {
		$data['title'] = 'Edit Kisah | Kisah dari Desa Whiteland';
		$data['entry'] = $this->kisah_model->get_kisah($slug);
		$this->load->view('admin/edit', $data);
	}
	
	public function login() {
		$user_check = $this->input->post('user');
		$pass_check = md5($this->input->post('pass'));
		if ($user_check == 'bobby' && $pass_check == '57f842286171094855e51fc3a541c1e2') {
			session_start();
			$_SESSION['user'] = $user_check;
		}
		header('location:../');
	}
	
	public function logout() {
		session_start();
		session_destroy();
		header('location:../');
	}
	
	public function approve($id) {
		$this->jurnal_model->approve_jurnal($id);
		header('location:../');
	}
	
	public function delete($id) {
		$this->jurnal_model->delete_jurnal($id);
		header('location:../');
	}
	
	public function post() {
		$this->kisah_model->post_kisah();
		header('location:./');
	}
	
	public function deletekisah($id) {
		$this->kisah_model->delete_kisah($id);
		header('location:../');
	}
	
	public function edit($id) {
		$this->kisah_model->edit_kisah($id);
		header('location:../');
	}
}