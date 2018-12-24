<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Dashboard_model extends CI_Model {
    
	/*Constructor*/
	public function __construct(){
	    parent::__construct();
	}
	/*Category count function*/
	public function category_count()
	{
		return $this->db->count_all('tblsurveycategory');
	}
	/*Question count function*/
	public function question_count()
	{
		return $this->db->count_all('tblsurveyquestion');
	}
	
}
