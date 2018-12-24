<?php

defined('BASEPATH') OR exit('No direct script access allowed');

class Paypal_model extends CI_Model {
    
    /**Constructor**/
    public function __construct() {
        parent::__construct();
    }
    /*Save Payment Data*/
    public function saveOrder($arrdata)
    {
      return $this->db->insert('all_plans_payments',$arrdata);
    } 
}
