<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Welcome extends CI_Controller {
    /*Constructor*/
	public function __construct() {
	parent::__construct();
	 $this->load->library('form_validation');
	 $this->load->helper(array('form', 'url','security', 'common_helper' ));
	 $this->load->library('session');
	 $this->load->model("UserSignup_model");
	 $this->load->library('Paypal_lib');
    }
	/***************************************************************************/
	/***************************************************************************/
	/**This Function Is Used For Login**/
	public function index()
	{
	    $data['title'] = 'User | Login';
		$argPost = $this->input->post();
        $this->form_validation->set_rules('email', 'email', 'trim|required');
        $this->form_validation->set_rules('password', 'password', 'trim|required');	
        if($this->form_validation->run() == FALSE){
         $this->form_validation->set_error_delimiters('<span class="text-danger">','</span>');
        }
		else{$user = $this->UserSignup_model->checkLogin($argPost);
        if($user){
         redirect(base_url('dashboard'));
        }else{
         $this->load->view('login');
        }  
       }	
	   $this->load->view('login');
    }
	/***************************************************************************/
	/***************************************************************************/
	/**This Function Is Used For Login**/
	public function registerPlanLabs()
	{
	    $data['title'] = 'User | Login';
		$data['country']=getCountryDropdown();
		if(!empty(extract($this->input->post()))){
		  $returnURL = base_url().'paypal/success'; //payment success url
          $cancelURL = base_url().'paypal/cancel'; //payment cancel url
          $notifyURL = base_url().'paypal/ipn'; //ipn url
		  $arrUser=array("name"=>$username,"companyname"=>$companyname,"email"=>$email,"password"=>$password,"address"=>$address,"town_city"=>$town_city,"postcode_zip"=>$postcode_zip,"country"=>$country,"states"=>$states,"phone"=>$phone);
		  $this->UserSignup_model->createRegister($arrUser);
		  $last_id=$this->db->insert_id();
		/**Paypal Code**/  
		$this->paypal_lib->add_field('return', $returnURL);
        $this->paypal_lib->add_field('cancel_return', $cancelURL);
        $this->paypal_lib->add_field('notify_url', $notifyURL);
        $this->paypal_lib->add_field('item_name', $plan_name."(".$plan_type.")");
        $this->paypal_lib->add_field('amount',  $plan_cost);
        $this->paypal_lib->add_field('custom', $last_id);
        $this->paypal_lib->add_field('item_number',  '1');
        $this->paypal_lib->paypal_auto_form();  
		/**MailChip Optin Form API Access**/
		/*$apiKey = '9007529ed05e6eeba9ae934eefb17012-us19';
        $listID = '6c86de42ef';
        $memberID = md5(strtolower($email));
        $dataCenter = substr($apiKey,strpos($apiKey,'-')+1);
        $url = 'https://' . $dataCenter . '.api.mailchimp.com/3.0/lists/' . $listID . '/members/' . $memberID;
        $json = json_encode([
            'email_address' => $email,
            'status'        => 'subscribed',
            'merge_fields'  => [
                'FNAME'     => $username,
                'LNAME'     => $username
            ]
        ]);
        $ch = curl_init($url);
        curl_setopt($ch, CURLOPT_USERPWD, 'user:' . $apiKey);
        curl_setopt($ch, CURLOPT_HTTPHEADER, ['Content-Type: application/json']);
        curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
        curl_setopt($ch, CURLOPT_TIMEOUT, 10);
        curl_setopt($ch, CURLOPT_CUSTOMREQUEST, 'PUT');
        curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, false);
        curl_setopt($ch, CURLOPT_POSTFIELDS, $json);
        $result = curl_exec($ch);
        $httpCode = curl_getinfo($ch, CURLINFO_HTTP_CODE);
        curl_close($ch);*/  
		}
        $this->load->view('register',$data);
    }
} 