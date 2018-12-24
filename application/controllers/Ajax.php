<?php

header('Access-Control-Allow-Origin: *');

defined('BASEPATH') OR exit('No direct script access allowed');

class Ajax extends CI_Controller {

    public function __construct() {
        parent::__construct();
        $this->load->model('UserSignup_model');
    }

    /*
     * Get Cities
     */
    public function states()
    {
        $response=$this->UserSignup_model->getStates($this->input->post('id'));
        echo '<option value="">Select States</option>';
        foreach($response as $r)
        {
            echo '<option value="'.$r->st_id.'">'.$r->st_name.'</option>';
        }
    }
}
