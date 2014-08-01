<?php

class Jurnal extends CI_Controller {
	public function index() {
		$data['title'] = 'Jurnal | Kisah dari Desa Whiteland';
		$data['entries'] = $this->jurnal_model->get_jurnal();
		$data['count'] = $this->counter_model->get_counter()->row_array();
		$this->load->view('templates/header', $data);
		$this->load->view('jurnal/jurnal', $data);
		$this->load->view('templates/footer', $data);
	}
	
	public function submit() {
		
		$nama = $this->input->post('name');
		$email = $this->input->post('email');
		
		if (empty($nama) || !preg_match("/^[a-zA-Z ]*$/",$nama) || empty($email) || !preg_match("/([\w\-]+\@[\w\-]+\.[\w\-]+)/", $email))
		{
			$data['err_name'] = '';
			$data['err_email'] = '';
			if (empty($nama) || !preg_match("/^[a-zA-Z ]*$/",$nama))
			{
				if (empty($nama))
					$data['err_name'] = "Nama harus diisi";
				else
					$data['err_name'] = "Nama hanya boleh huruf dan spasi";
			}
			if (empty($email) || !preg_match("/([\w\-]+\@[\w\-]+\.[\w\-]+)/", $email))
			{
				if (empty($email))
					$data['err_email'] = 'Email tidak boleh kosong';
				else if (!preg_match("/([\w\-]+\@[\w\-]+\.[\w\-]+)/", $email))
					$data['err_email'] = "Format email tidak sesuai";
			}
			$data['title'] = 'Jurnal | Kisah dari Desa Whiteland';
			$data['entries'] = $this->jurnal_model->get_jurnal();
			$data['count'] = $this->counter_model->get_counter()->row_array();
			$this->load->view('templates/header', $data);
			$this->load->view('jurnal/jurnal', $data);
			$this->load->view('templates/footer', $data);
		}
		else
		{
			$this->jurnal_model->submit_jurnal();
			header('location:./');
		}
	}
}