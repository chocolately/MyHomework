<?php 
	if ( ! defined('BASEPATH')) 
		exit('No direct script access allowed');
	
/*default controller*/
include_once 'User.php';

class Homework extends CI_Controller {
	function __construct() {
        parent::__construct();
	}
	
	public function showDetail($data = Array()){
		$data['css'] = 'typeTextMetro';
		$this->load->view('header', $data);
  		$this->load->view('detailedHw_tch_view');
		$this->load->view('footer');
	}
}