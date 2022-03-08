<?php

defined('BASEPATH') or exit('No direct script access allowed');

class User extends CI_Controller
{

	public function __construct()
	{
		parent::__construct();
		//$this->get_user();
	}
	public function index()
	{
		$data = array();
		$this->load->view('web/inc/header');
		$this->load->view('web/pages/userinfo');
		$this->load->view('web/inc/footer');
	}
	public function userinfo()
	{
		$data = array();
		$value['customer_email']    = $this->session->userdata('customer_email');
		// $value['customer_email']    = 'priyankadas.7123@gmail.com';
		
		$data['userinfo'] = $this->web_model->get_customer_info($value);
		$this->load->view('web/inc/header');
		$this->load->view('web/pages/userinfo',$data);
		$this->load->view('web/inc/footer');
	}
}
