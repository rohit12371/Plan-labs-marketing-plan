<?php

defined('BASEPATH') OR exit('No direct script access allowed');

class UserSignup_model extends CI_Model {
   /*
   * Constructor;
   */
   public function __construct()
   { 
      parent::__construct();  
   }
   
   /********************************************************/
   /**This Function Used For Inserting User Data**/
   public function createRegister($arrRegister){
     return $this->db->insert("mkpl_plan_users",$arrRegister); 
   }
   
    /********************************************************/
   /**This Function Used For Updating User Data**/
   public function updateRegister($userId,$arrRegister){
     $this->db->where("id",$userId);
     return $this->db->update("mkpl_plan_users",$arrRegister); 
   }
   
   /********************************************************/
   /**This Function Used For Updating User Data**/
   public function userRegisterDataByUserId($userId){
	 return $this->db->select("*")
	              ->from("mkpl_plan_users")
				  ->where("id",$userId)
				  ->get()
				  ->result(); 
   }
   
   /********************************************************/
   /****This Function User For Login****/
   public function checkLogin($argPost) { 
	$query = $this->db->select('a.*')
        ->from('mkpl_plan_users as a')
        ->where(array('email' => $argPost['email'], 'password' => $argPost['password']))
        ->get();
        if ($query->num_rows() > 0) {
            $row = $query->row();
            $userData = array(
               'USERNAME' => $row->name,
               'USER_ID' => $row->id,
            );
            $this->session->set_userdata($userData);
            return true;
        }
        return false;
    }
  /********************************************************/
  /****This Function User For Get States By Country Id****/
  public function getStates($argID)
    {
    $cities = array();    
	$this->db->order_by("st_id");
    $data = $this->db->get_where('mkpl_states', array('st_c_id ='=>$argID))->result();
    return $data;
  }	
	
}
