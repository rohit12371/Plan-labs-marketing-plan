<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class MarketingEbook extends CI_Controller {
    /*Constructor*/
	public function __construct() {
	parent::__construct();
	 $this->load->library('form_validation');
	 $this->load->helper(array('form', 'url'));
	 $this->load->library('session');
	 $this->load->model('MarketingeBook_model');
	 if($this->session->userdata('USER_ID') == '') {
        redirect(base_url('login'));
     }
    }
	/***************/
	public function index()
	{
	    $data['title'] = 'Marketing Ebook (Plan Labs)';
		$data['main'] ='users-panel/marketingebooks/index';
		$data['ebooks']=$this->MarketingeBook_model->getMarketingeBookByTitle("Marketing eBooks");
        $this->load->view('users-panel/includes/template', $data);
    }
} 