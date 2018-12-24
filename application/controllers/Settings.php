<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Settings extends CI_Controller {
    /*Constructor*/
	public function __construct() {
	parent::__construct();
	 $this->load->library('form_validation');
	 $this->load->helper(array('form', 'url', 'common_helper'));
	 $this->load->library('session');
	 $this->load->Model('UserSignup_model');
	 if($this->session->userdata('USER_ID') == '') {
        redirect(base_url('login'));
     }
    }
	/**Account Settings For User**/
	public function index()
	{
	    $data['title'] = 'Change Password';
		$data['main'] ='users-panel/settings/index';
        $this->load->view('users-panel/includes/template', $data);
    }
	/**Account Settings For User**/
	public function accountSettings()
	{
	    $data['title'] = 'Account Settings';
		$data['country']=getCountryDropdown();
		$userId=$this->session->userdata['USER_ID'];
		if(!empty(extract($this->input->post()))){
		  $arrUser=array("name"=>$username,"companyname"=>$companyname,"address"=>$address,"town_city"=>$town_city,"postcode_zip"=>$postcode_zip,"country"=>$country,"states"=>$states,"phone"=>$phone);
		  $this->UserSignup_model->updateRegister($userId,$arrUser);
		}
		$data['userData']=$this->UserSignup_model->userRegisterDataByUserId($userId); 
		$data['main'] ='users-panel/settings/account-settings';
        $this->load->view('users-panel/includes/template', $data);
    }
} 