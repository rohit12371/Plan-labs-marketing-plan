<?php

defined('BASEPATH') OR exit('No direct script access allowed');

class Plan_model extends CI_Model {
   /*
   * Constructor;
   */
   public function __construct()
   { 
      parent::__construct();  
   }
   /**PLAN STEP 1**/
   /********************************************************/
   /**This Function Used For Getting Plan Introduction Data**/
   public function getPlanDataIntroduction($userId){
     $this->db->where("user_id",$userId);
     return $this->db->select("*")
	      ->from("mkpl_plan_introduction")
		  ->get()
		  ->result(); 
   } 
   
   
   /* add Competitor Image */
   public function insert_competitor($image)
   {
	  
	   extract($this->input->post());
	   $userId=$this->session->userdata['USER_ID'];
	  $data= array(
	   'plan_id'=>$plan_id,
	   'user_id'=>$userId,
	   'competitor_name'=>$competitor_name,
	   'location'=>$competitor_location,
	   'image'=>$image
	   );
	   
	  return $this->db->insert("mkpl_competitors",$data); 
	  //echo $this->db->last_query(); exit;
   }
   
   
    /********************************************************/
   /**This Function Used For Getting Plan Introduction Data**/
   public function getPlanDataIntroductionSingle($userId,$plan_id){
     $this->db->where("user_id",$userId);
	 $this->db->where("id",$plan_id);
     return $this->db->select("*")
	      ->from("mkpl_plan_introduction")
		  ->get()
		  ->result(); 
   }
   /********************************************************/
   /**This Function Used For Inserting Plan Introduction Data**/
   public function createPlanStep1($arrPlanStep1){
    return $this->db->insert("mkpl_plan_introduction",$arrPlanStep1); 
	
   }
   /********************************************************/
   /**This Function Used For Updating Plan Introduction Data**/
   public function updatePlanStep1($user_id,$planIdStep1,$arrPlanStep1){
     $this->db->where("id",$planIdStep1);
	 $this->db->where("user_id",$user_id);
     return $this->db->update("mkpl_plan_introduction",$arrPlanStep1); 
   }
   /********************************************************/
   /********************************************************/
   
   /**PLAN STEP 2**/
   /********************************************************/
   /**This Function Used For Inserting Plan Market Data**/
   public function createPlanStep2($arrPlanStep2){
     return $this->db->insert("mkpl_plan_market",$arrPlanStep2); 
   } 
   /********************************************************/
   /**This Function Used For Inserting Plan Market Data**/
   public function updatePlanStep2($user_id,$planIdStep2,$arrPlanStep2){
     $this->db->where("id",$planIdStep2);
	 $this->db->where("user_id",$user_id);
     return $this->db->update("mkpl_plan_market",$arrPlanStep2); 
   } 
   /********************************************************/
   /**This Function Used For Getting Plan Market Data**/
   public function getPlanDataMarket($userId,$plan_id){
     $this->db->where("user_id",$userId);
	 $this->db->where("id",$plan_id);
     return $this->db->select("*")
	      ->from("mkpl_plan_market")
		  ->get()
		  ->result(); 
   } 
   /********************************************************/
   /********************************************************/
   
   /**PLAN STEP 3**/
   /********************************************************/
   /**This Function Used For Inserting Plan Market Data**/
   public function createPlanStep3($arrPlanStep3){
     return $this->db->insert("mkpl_plan_customer",$arrPlanStep3); 
   }
   /********************************************************/
   /**This Function Used For Inserting Plan Customer Data**/
   public function updatePlanStep3($planIdStep3,$arrPlanStep3){
     $this->db->where("id",$planIdStep3);
     return $this->db->update("mkpl_plan_customer",$arrPlanStep3); 
   }
   /********************************************************/
   /**This Function Used For Getting Customer Data**/
   public function getPlanDataCustomer($userId){
     $this->db->where("user_id",$userId);
     return $this->db->select("*")
	      ->from("mkpl_plan_customer")
		  ->get()
		  ->result(); 
   } 
   
   /********************************************************/
   /********************************************************/
   
   /**PLAN STEP 4**/
   /********************************************************/
   /**This Function Used For Inserting Plan Market Strategy Data**/
   public function createPlanStep4($arrPlanStep4){
     return $this->db->insert("mkpl_plan_marketing_strategy",$arrPlanStep4); 
   }
   /********************************************************/
   /**This Function Used For Inserting Plan Market Strategy Data**/
   public function updatePlanStep4($planIdStep4,$arrPlanStep4){
     $this->db->where("id",$planIdStep4);
     return $this->db->update("mkpl_plan_marketing_strategy",$arrPlanStep4); 
   }
   /********************************************************/
   /**This Function Used For Getting Market Strategy Data**/
   public function getPlanDataMarketStrategy($userId){
     $this->db->where("user_id",$userId);
     return $this->db->select("*")
	      ->from("mkpl_plan_marketing_strategy")
		  ->get()
		  ->result(); 
   }
   
   /********************************************************/
   /********************************************************/
   
   /**PLAN STEP 5**/
   /********************************************************/
   /**This Function Used For Inserting Plan Market Mix Data**/
   public function createPlanStep5($arrPlanStep5){
     return $this->db->insert("mkpl_plan_marketing_mix",$arrPlanStep5); 
   }
   /********************************************************/
   /**This Function Used For Inserting Plan Market Mix Data**/
   public function updatePlanStep5($planIdStep5,$arrPlanStep5){
     $this->db->where("id",$planIdStep5);
     return $this->db->update("mkpl_plan_marketing_mix",$arrPlanStep5); 
   }
   /********************************************************/
   /**This Function Used For Getting Market Mix Data**/
   public function getPlanDataMarketMix($userId){
     $this->db->where("user_id",$userId);
     return $this->db->select("*")
	      ->from("mkpl_plan_marketing_mix")
		  ->get()
		  ->result(); 
   }
   /**Add Competitor**/
   /********************************************************/
   /**This Function Used For Adding Competitor Data**/
   public function getCreateCompetitor($arrCompetitor){
     return $this->db->insert("mkpl_competitors",$arrCompetitor); 
   } 
   /**List Of Competitor**/
   /********************************************************/
   /**This Function Used For Getting A List Of Competitor Data**/
   public function getSpecificCompetitors($planId,$userId){
     $this->db->where("user_id",$userId);
	 $this->db->where("plan_id",$planId);
     return $this->db->select("*")
	      ->from("mkpl_competitors")
		  ->get()
		  ->result(); 
   } 
   /**Delete Competitor**/
   /********************************************************/
    public function deleteCompetitor($competitorId){
	  $this->db->where(array("id"=>$competitorId));
	  return $this->db->delete("mkpl_competitors");
	}
	
   /********************************************************/
   /********************************************************/
   /*LAST PLAN REPORTS*/  
   public function getPlanReportExportAllType($plan_id){
     return $this->db->select("a.*,b.*,b.describe_the_market,c.*,d.*,e.*,f.*")
	      ->from("mkpl_plan_introduction as a")
		  ->join("mkpl_plan_market as b","a.id=b.plan_id","left")
		  ->join("mkpl_plan_customer as c","a.id=c.plan_id","left")
		  ->join("mkpl_plan_marketing_strategy as d","a.id=d.plan_id","left")
		  ->join("mkpl_plan_marketing_mix as e","a.id=e.plan_id","left")
		  ->join("mkpl_competitors as f","a.id=f.plan_id","left")
		  ->where("a.id",$plan_id)
		  ->get()
		  ->result();
   }
   
}
