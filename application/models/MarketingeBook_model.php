<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class MarketingeBook_model extends CI_Model {
    
	/*Constructor*/
	public function __construct(){
	    parent::__construct();
	}
	/*This function returns all Marketing eBook By Its Title*/
	public function getMarketingeBookByTitle($eBookTitle)
	{
	    $this->db->like("title",$eBookTitle);
	    return $this->db->select("*")
	              ->from("mkpl_content_pages")
				  ->order_by('id','desc')
				  ->get()
				  ->result(); 
	}
}
