<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Dashboard extends CI_Controller {
    /*Constructor*/
	public function __construct() {
	parent::__construct();
	 $this->load->library('form_validation');
	 $this->load->helper(array('form', 'url'));
	 $this->load->library('session');
	 if($this->session->userdata('USER_ID') == '') {
        redirect(base_url('login'));
     }
    }
	/***************/
	public function index()
	{
	    $data['title'] = 'User Dashboard';
		$data['main'] ='users-panel/dashboard/index';
        $this->load->view('users-panel/includes/template', $data);
    }
} 