<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Downloads extends CI_Controller
{
	public function __construct()
	{
		parent::__construct();
		if (!$this->session->userdata('id')) {
			redirect('login');
		}
	}

	public function index()
	{
		$this->load->view('header');
		$this->load->view('topbar');
		$sidebar = $this->load->view('sidebar', ['downloads_menu_active' => true], true);
		$this->load->view('downloads', ['sidebar' => $sidebar]);
		$this->load->view('footer');
	}

	function logout()
	{
		$data = $this->session->all_userdata();
		foreach ($data as $row => $rows_value) {
			$this->session->unset_userdata($row);
		}
		redirect('login');
	}
}
