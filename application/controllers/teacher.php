<?php 
	if ( ! defined('BASEPATH')) 
		exit('No direct script access allowed');
	
/*default controller*/
include_once 'User.php';

class Teacher extends User {
	function __construct() {
        parent::__construct();
		$this->load->model(array('Homework_model','Teacher_model'));
	}
	
	public function user_admin($data = array())
	{
		if ($this->session->userdata('role') == 'ta')
			$data['users'] = $query = $this->Teacher_model->get_all_studnets()->result_array();
		else if ($this->session->userdata('role') == 'teacher')
			$data['users'] = $query = $this->Teacher_model->get_all_tas_students()->result_array();
		
		$data['css'] = 'typeTextMetro';
		$this->load->view('header', $data);
		$this->load->view('manageUsr_view');
		$this->load->view('footer');
	}
	
	public function group_admin($data = array())
	{
		
		$data['css'] = 'typeTextMetro';
		$this->load->view('header', $data);
		$this->load->view('manageUsr_view');
		$this->load->view('footer');
	}
	
	public function add_user($data = array())
	{
		$data['css'] = 'typeAlert';
		$this->load->view('header', $data);
  		$this->load->view('addUsr_view');
		$this->load->view('footer');
	}
	
	public function add_user_check()
	{
		$data['uid'] = $this->input->post('uid');
		$data['user_name'] = $this->input->post('user_name');
		$data['password'] = $this->input->post('uid');
		$data['role'] = $this->input->post('role');
		
		if (!$this->Teacher_model->add_user($data)) {
			$data['errorMsg'] = '该用户已存在！';
			$this->add_user($data);
		}
		else {
			$this->user_admin();
		}
	}
	
	public function delete_user()
	{
		if (!isset($_POST['delete_uid'])) {
		
			$data['errorMsg'] = '请选择要删除的用户！';
			$this->user_admin($data);
		}
		else {
			$data['alertMsg'] = '确定删除已选用户？';
			$dta['delete_uid'] = $this->input->post('delete_uid');
			$data['css'] = 'typeAlert';
			$this->load->view('header', $data);
	  		$this->load->view('alert_view', $data);
			$this->load->view('footer');
		}
	}
	
	public function publishHw() {
		$data['css'] = 'typeAlert';
		$this->load->view("header", $data);
		$this->load->view("publishHw_view");
		$this->load->view("footer");
	}
	
	public function publishHw_check() {
		$data['title'] = $this->input->post('name');
		$data['deadline'] = $this->input->post('deadline');
		$data['content'] = $this->input->post('request');
		$data['author'] = $this->session->userdata("user_name");
		
		if (!$this->Homework_model->add_homework($data)) {
			$data['errorMsg'] = 'unknown error！';
			$this->publishHw($data);
		}
		else {
			$this->hw_history();
		}
	}
	
	public function hw_history() {
		//$this->load
		$data['css'] = 'typeBigMetro';
		$data['homeworks'] = $this->Homework_model->get_all_homework()->result_array();
		$this->load->view('header', $data);
		$this->load->view('groupedHw_view', $data);
		$this->load->view('footer');
	}
	
	public function delete_user_check($uids = array())
	{
		foreach ($uids as $uid) {
			$this->Teacher_model->delete_user_by_uid('$uid');
		}
		$this->user_admin();
	}
}