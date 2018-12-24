<?php 

if ( ! defined('BASEPATH')) exit('No direct script access allowed');
class Paypal extends CI_Controller 
{
     function  __construct(){
        parent::__construct();
        $this->load->library('Paypal_lib');
        $this->load->model('Paypal_model');
     }
     /************************************************************/
	 /************************************************************/
     function success(){
        $paypalInfo = $this->input->post();
        $data['item_number'] = $paypalInfo['item_number']; 
        $data['txn_id'] = $paypalInfo["txn_id"];
        $data['payment_amt'] = $paypalInfo["mc_gross"];
        $data['currency_code'] = $paypalInfo["mc_currency"];
        $data['status'] = $paypalInfo["payment_status"];
		$this->Paypal_model->saveOrder(array('user_id'=>$paypalInfo['custom'],'txn_id'=>$paypalInfo["txn_id"],"plan_name"=>$paypalInfo['item_name'],'price'=>$paypalInfo["mc_gross"],'currency_code'=>$paypalInfo["mc_currency"],'payment_status'=>$paypalInfo["payment_status"]));
        $this->load->view('paypal/success', $data);
		redirect(base_url());
     }
	 /************************************************************/
     /************************************************************/
     function cancel(){
        $this->load->view('paypal/cancel');
     }
     /************************************************************/
	 /************************************************************/
     function ipn(){
        //paypal return transaction details array
        $paypalInfo= $this->input->post();
        $data['user_id'] = $paypalInfo['custom'];
        $data['product_id']    = $paypalInfo["item_number"];
        $data['txn_id']    = $paypalInfo["txn_id"];
        $data['payment_gross'] = $paypalInfo["mc_gross"];
        $data['currency_code'] = $paypalInfo["mc_currency"];
        $data['payer_email'] = $paypalInfo["payer_email"];
        $data['payment_status']    = $paypalInfo["payment_status"];
        $paypalURL = $this->Paypal_lib->paypal_url;        
        $result    = $this->Paypal_lib->curlPost($paypalURL,$paypalInfo);
        if(preg_match("/VERIFIED/i",$result)){
         $this->Common_model->saveOrder($data);
        }
    }
}