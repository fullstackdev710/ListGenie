<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Search extends CI_Controller
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
		$sidebar = $this->load->view('sidebar', ['search_menu_active' => true], true);
		$this->load->view('search', ['sidebar' => $sidebar]);
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
	public function search()
	{
		$area = $this->input->post('area');
		foreach ($this->input->post(NULL, true) as $key => $value) {
			if ($key != 'area') {
				$this->db->like($key, $value, 'both');
			}
		}
		echo $this->db->count_all_results('area_' . $area);
	}
}
