<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Plans extends CI_Controller {
    /*Constructor*/
	public function __construct() {
	parent::__construct();
	 $this->load->library('form_validation');
	  $this->load->helper(array('form', 'url', 'common_helper'));
	 $this->load->library('session');
	 $this->load->model('Plan_model');
	 $this->load->library('image_lib');
	 if($this->session->userdata('USER_ID') == '') {
        redirect(base_url('welcome'));
     }
    }
	/*******************************************************/
	/*******************************************************/
	/*Create New Plan First Step*/
	public function planStep1()
	{
	   
           
	   $data['title'] = 'My Plans (First Step)';
		$data['main'] ='users-panel/plans/step1';
        $data['country']=getCountryDropdown();
        $data['general__sic_type_business']= getgeneral__sic_type_businessDropdown();
		$userId=$this->session->userdata['USER_ID'];
		if(!empty($_GET['plan_id'])){
			// print_r($this->input->post()); exit;
		   $data['planIntro']=$this->Plan_model->getPlanDataIntroductionSingle($userId,$_GET['plan_id']);
		}else{
		   $data['planIntro']="";
		 }	
		if(!empty(extract($this->input->post()))){
			// print_r($this->input->post()); exit;
			$q1=implode(',', $type_of_opportunity);
			$q2=implode(',', $product_service);
			$q3=implode(',', $target_market_defined);
			
		  $arrPlanStep1=array("user_id"=>$userId,
		  "business_title"=>$business_title,	
		  "new_exi"=>$new_exi,
		  "physical_address"=>$physical_address,
		  "country"=>$country,
		  "street"=>$street,
		  "city"=>$city,
		  "states"=>$states,
		  "zipcode"=>$zipcode,
		  "business_type"=>$business_type,
		  "business_type_own"=>$business_type_own,
		  "business_structure_plan"=>$business_structure_plan,
		  "business_structure"=>$business_structure,
		  "general__sic_type_business"=>$general__sic_type_business,
		  "general_sic_type_business_own"=>$general_sic_type_business_own,
		  "further_describe_business"=>$further_describe_business,
		  "planning_to_sell"=>$planning_to_sell,
		  "type_of_opportunity"=>$q1,
		  "product_service"=>$q2,
		  "who_business_targeting"=>$who_business_targeting,
		  "target_market_defined"=>$q3,
		  "describe_your_business"=>$describe_your_business,
		  "describe_why_people_need_and_want_your_product_service"=>$describe_why_people_need_and_want_your_product_service,
		  "list_your_goals"=>$list_your_goals,
		  "introduction_note"=>$noteStep1,
		  "created_date"=>date('Y-m-d h:i:s'));
		 if(!empty($planIdStep1)){
		  $this->Plan_model->updatePlanStep1($userId,$planIdStep1,$arrPlanStep1);
		  redirect(base_url("plans/planStep2/?plan_id=".$planIdStep1));
		 }
		 else{
		  $this->Plan_model->createPlanStep1($arrPlanStep1);
		  $plan_id=$this->db->insert_id();
		  redirect(base_url("plans/planStep2/?plan_id=".$plan_id));
		  }
		}
        $this->load->view('users-panel/includes/template', $data);
    }
	
	
	
	
	/* Add Competitor Analysis */
	public function addcompetitor_analysis()
	{
		
		extract($this->input->post()); 
		
		$filename=time() . date('Ymd');
		$image='';
			 if(isset($_FILES['fileToUpload'])&&$_FILES['fileToUpload']['error']=='0'){
						$config = array(
						'upload_path' => "uploads/img/",
						'allowed_types' => "gif|jpg|png|jpeg",
						'overwrite' => TRUE,
						'max_size' => "2048000",
						'file_name' => $filename,
						);
						$this->load->library('upload', $config);
						if($this->upload->do_upload('fileToUpload'))
						{
						$data = array('upload_data' => $this->upload->data());
						$image=$data['upload_data']['file_name'];
						}
						else
						{
						$error = array('error' => $this->upload->display_errors());
						echo $error['error'];die;
						}
			
			 }
			 
			$check =$this->Plan_model->insert_competitor($image);
			if($check)
			{
				redirect('Plans/planstep2_competitor/?plan_id='.$plan_id);
			}
			
	}
	
	
	
	/*******************************************************/
	/*******************************************************/
	/*Create New Plan Second Step*/
	public function planStep2()
	{
	    $data['title'] = 'My Plans (Second Step)';
		$data['main'] ='users-panel/plans/step2';
		$userId=$this->session->userdata['USER_ID'];
		$plan_id=!empty($_GET['plan_id'])? $_GET['plan_id'] : "";
		if(!empty($_GET['plan_id'])){
		  $data['diagramData']=$this->Plan_model->getPlanDataMarket($userId,$_GET['plan_id']);}
		else{
		  $data['diagramData']="";
		}
		if(!empty(extract($this->input->post()))){
		  $arrPlanStep2=array("user_id"=>$userId,"plan_id"=>$planIdStep2,"swot_analysis_strengths"=>implode(",",$swot_analysis_strengths),"swot_analysis_weaknesses"=>implode(",",$swot_analysis_weaknesses),"swot_analysis_opportunities"=>implode(",",$swot_analysis_opportunities),"swot_analysis_threats"=>implode(",",$swot_analysis_threats),"pest_analysis_political"=>implode(",",$pest_analysis_political),"pest_analysis_economical"=>implode(",",$pest_analysis_economical),"pest_analysis_socio_cultural"=>implode(",",$pest_analysis_socio_cultural),"pest_analysis_technological"=>implode(",",$pest_analysis_technological),"describe_the_market"=>$describe_the_market,"what_is_its_current_size"=>$what_is_its_current_size,"current_market_share"=>$current_market_share,"recent_growth_or_decline_within_the_industry"=>$recent_growth_or_decline_within_the_industry,"forecasted_growth"=>$forecasted_growth,"why_will_the_market_buy_your_product_service"=>$why_will_the_market_buy_your_product_service,"expected_market_share"=>$expected_market_share,"future_growth_opportunities"=>$future_growth_opportunities,"market_note"=>$noteStep2,"created_date"=>date('Y-m-d h:i:s'));
		  if(!empty($planIdStep2)){
		  $this->Plan_model->updatePlanStep2($userId,$planIdStep2,$arrPlanStep2);
		  redirect(base_url("plans/planStep3/?plan_id=".$planIdStep2));
		  }else{
		  $this->Plan_model->createPlanStep2($arrPlanStep2);
		  redirect(base_url("plans/planStep3/?plan_id=".$plan_id));
		  }
		}
        $this->load->view('users-panel/includes/template', $data);
    }
	
	
	
	
			Public function planstep2_pest()
			{
                $data['userId']=$this->session->userdata['USER_ID'];  
				$data['plan_id']=$_GET['plan_id'];
				$data['main'] ='users-panel/plans/step2_pest';
				$this->load->view('users-panel/includes/template', $data);
				
			}
	
           
           Public function planstep2_competitor()
			{

                $data['userId']=$this->session->userdata['USER_ID'];  
				$data['plan_id']=$_GET['plan_id'];
				$data['main'] ='users-panel/plans/step2_competitor';
				$this->load->view('users-panel/includes/template', $data);
				
			}
              
	         
			
			Public function step2_Political()
				{
					 extract($this->input->post());
				   $Political_final=implode(',', $Political);
				  $data=array(
				  'pest_analysis_political'=>$Political_final
				  );
				  
				  $this->db->where('plan_id',$plan_id);
				  $this->db->where('user_id',$user_id);
				  $this->db->update('mkpl_plan_market',$data);
				  echo 'sucesss';
				  
				}
			
			
			Public function step2_Economical()
				{
					 extract($this->input->post());
				   $Economical_final=implode(',', $Economical);
				  $data=array(
				  'pest_analysis_economical'=>$Economical_final
				  );
				  
				  $this->db->where('plan_id',$plan_id);
				  $this->db->where('user_id',$user_id);
				  $this->db->update('mkpl_plan_market',$data);
				  echo 'sucesss';
				  
				}
				
			Public function step2_Social_culture()
				{
					 extract($this->input->post());
				   $Social_culture_final=implode(',', $Social_culture);
				  $data=array(
				  'pest_analysis_socio_cultural'=>$Social_culture_final
				  );
				  
				  $this->db->where('plan_id',$plan_id);
				  $this->db->where('user_id',$user_id);
				  $this->db->update('mkpl_plan_market',$data);
				  echo 'sucesss';
				  
				}	
			
			Public function step2_Technological()
				{
					 extract($this->input->post());
				   $Technological_final=implode(',', $Technological);
				  $data=array(
				  'pest_analysis_technological'=>$Technological_final
				  );
				  
				  $this->db->where('plan_id',$plan_id);
				  $this->db->where('user_id',$user_id);
				  $this->db->update('mkpl_plan_market',$data);
				  echo 'sucesss';
				  
				}	
			
			
			
			
	
	
	
	Public function step2_strength()
	{
		 extract($this->input->post());
	   $strength_final=implode(',', $Strength);
	  $data=array(
	  'plan_id'=>$plan_id,
	  'user_id'=>$user_id,
	  'swot_analysis_strengths'=>$strength_final
	  );
	  
	 $exist_status = check_plan_exist($plan_id,$user_id);
	 if (empty($exist_status))
	 {
	   $this->db->insert('mkpl_plan_market',$data);
	 }else{
		          $this->db->where('plan_id',$plan_id);
				  $this->db->where('user_id',$user_id);
				  $this->db->update('mkpl_plan_market',$data);
	 }
	  echo 'sucesss';
	  
	}
	
	
	Public function step2_weekness()
	{
		 extract($this->input->post());
	   $weekness_final=implode(',', $Weekness);
	  $data=array(
	  'swot_analysis_weaknesses'=>$weekness_final
	  );
	  
	  $this->db->where('plan_id',$plan_id);
	  $this->db->where('user_id',$user_id);
	  $this->db->update('mkpl_plan_market',$data);
	  echo 'sucesss';
	  
	}
	
	Public function step2_Opportunities()
	{
		 extract($this->input->post());
	   $Opportunities_final=implode(',', $Opportunities);
	  $data=array(
	  'swot_analysis_opportunities'=>$Opportunities_final
	  );
	  
	  $this->db->where('plan_id',$plan_id);
	  $this->db->where('user_id',$user_id);
	  $this->db->update('mkpl_plan_market',$data);
	  echo 'sucesss';
	  
	}
	
	
	Public function step2_Threat()
	{
		 extract($this->input->post());
	   $Threat_final=implode(',', $Threat);
	  $data=array(
	  'swot_analysis_threats'=>$Threat_final
	  );
	  
	  $this->db->where('plan_id',$plan_id);
	  $this->db->where('user_id',$user_id);
	  $this->db->update('mkpl_plan_market',$data);
	  echo 'sucesss';
	  
	}
	
	
	
	/*******************************************************/
	/*******************************************************/
	/*Create New Plan Third Step*/
	public function planStep3()
	{
	    $data['title'] = 'My Plans (Third Step)';
		$data['main'] ='users-panel/plans/step3';
		$userId=$this->session->userdata['USER_ID'];
		$data['diagramData']=$this->Plan_model->getPlanDataCustomer($userId);
		if(!empty(extract($this->input->post()))){
		  $plan_id=$this->session->userdata("plan_id");
		  $arrPlanStep3=array("user_id"=>$userId,"plan_id"=>$planIdStep3,"ideal_customer"=>$ideal_customer,"customer_note"=>$noteStep3,"created_date"=>date('Y-m-d h:i:s'));
		 if(!empty($planIdStep3)){
		    $this->Plan_model->updatePlanStep3($planIdStep3,$arrPlanStep3);
			redirect(base_url("plans/planStep4/?plan_id=".$planIdStep3));
		 }
		 else{ 
		    $this->Plan_model->createPlanStep3($arrPlanStep3);
			redirect(base_url("plans/planStep4/?plan_id="));
		  }
		}
        $this->load->view('users-panel/includes/template', $data);
    }
	/*******************************************************/
	/*******************************************************/
	/*Create New Plan Fourth Step*/
	public function planStep4()
	{
	    $data['title'] = 'My Plans (Four Step)';
		$data['main'] ='users-panel/plans/step4';
		$userId=$this->session->userdata['USER_ID'];
		$data['diagramData']=$this->Plan_model->getPlanDataMarketStrategy($userId);
		if(!empty(extract($this->input->post()))){
		  $plan_id=$this->session->userdata("plan_id");
		  $arrPlanStep4=array("user_id"=>$userId,"plan_id"=>$planIdStep4,"price"=>$price,"product"=>$product,"place"=>$place,"personality"=>$personality,"service_experience"=>$service_experience,"story"=>$story,"unique_selling_proposition"=>$unique_selling_proposition,"marketing_strategy_note"=>$noteStep4,"created_date"=>date('Y-m-d h:i:s'));
		   if(!empty($planIdStep4)){
		     $this->Plan_model->updatePlanStep4($planIdStep4,$arrPlanStep4);
			 redirect(base_url("plans/planStep5/?plan_id=".$planIdStep4));
		   }else{
		    $this->Plan_model->createPlanStep4($arrPlanStep4);
			redirect(base_url("plans/planStep5/?plan_id="));
		   }
		}
        $this->load->view('users-panel/includes/template', $data);
    }
	/*******************************************************/
	/*******************************************************/
	/*Create New Plan Fifth Step*/
	public function planStep5()
	{
	    $data['title'] = 'My Plans (Fifth Step)';
		$data['main'] ='users-panel/plans/step5';
		$userId=$this->session->userdata['USER_ID'];
		$data['diagramData']=$this->Plan_model->getPlanDataMarketMix($userId);
		if(!empty(extract($this->input->post()))){
		  $plan_id=$this->session->userdata("plan_id");
		  $arrPlanStep5=array("user_id"=>$userId,"plan_id"=>$planIdStep5,"direct_marketing"=>$direct_marketing,"internet_marketing"=>$internet_marketing,"social_media"=>$social_media,"public_relations"=>$public_relations,"advertising"=>$advertising,"budget"=>$budget,"action_plan"=>$action_plan,"marketing_mix"=>$noteStep5,"created_date"=>date('Y-m-d h:i:s'));
		   if(!empty($planIdStep5)){
		     $this->Plan_model->updatePlanStep5($planIdStep5,$arrPlanStep5);
			 redirect(base_url("plans/lastStep/?plan_id=".$planIdStep5));
		   }else{
		    $this->Plan_model->createPlanStep5($arrPlanStep5);
			redirect(base_url("plans/lastStep/?plan_id="));
			$this->session->unset_userdata("plan_id");
		   }
		  }
        $this->load->view('users-panel/includes/template', $data);
    }
	/*******************************************************/
	/*******************************************************/
	/*Create New Plan Last Step*/
	public function lastStep()
	{
	    $data['title'] = 'My Plans (Last Step)';
		$data['main'] ='users-panel/plans/last-step';
        $this->load->view('users-panel/includes/template', $data);
    }
	/*******************************************************/
	/*******************************************************/
	/*List Of Created Plans*/
	public function listOfAllPlans()
	{
	    $data['title'] = 'List Of Created Plans';
		$data['main'] ='users-panel/plans/index';
		$userId=$this->session->userdata['USER_ID'];
		$data['planIntro']=$this->Plan_model->getPlanDataIntroduction($userId);
        $this->load->view('users-panel/includes/template', $data);
    }
	/*******************************************************/
	/*******************************************************/
	/*Create Competitor*/
	public function createCompetitor(){
	   if(!empty(extract($this->input->post()))){
	    $arrCompetitor=array("plan_id"=>$plan_id,"user_id"=>$user_id,"competitor_name"=>$competitor_name,"description"=>$description,"performance"=>$performance,"market_position"=>$market_position);
	    $this->Plan_model->getCreateCompetitor($arrCompetitor);
	   }
	}
	/*******************************************************/
	/*******************************************************/
	/*Get List Of Competitor*/
	public function getCompetitors(){
	    $plan_id=$this->input->post("plan_id");
		$user_id=$this->input->post("user_id");
	    $competitors=$this->Plan_model->getSpecificCompetitors($plan_id,$user_id);
		echo json_encode($competitors);
	}
	/*******************************************************/
	/*******************************************************/
	/*Delete Competitor*/
	public function deleteCompetitor(){
	  $competitorId=$this->input->post("competitorId");
	  $this->Plan_model->deleteCompetitor($competitorId);
	}
	/*******************************************************/
	/*******************************************************/
	/*Function Used For Exporting Plan Report In PDF*/
	public function planGetPdfReport()
	{ 
	   $plan_id=!empty($_GET['plan_id'])? $_GET['plan_id'] : "";
	   $data['planData']=$this->Plan_model->getPlanReportExportAllType($plan_id);
       $html=$this->load->view('users-panel/plans/plan-separate', $data,true);
		    $this->load->library('dompdf_lib');
		    $this->dompdf->set_paper("A4");
			$this->dompdf->load_html($html);
		    $this->dompdf->render();
		    $this->dompdf->stream("Plan-Pdf-Report.pdf", array("Attachment" => false));
	}
	/*******************************************************/
	/*******************************************************/
	/*Function Used For Exporting Plan Report In Word or Doc.*/
	public function planGetWordReport()
	{ 
	 $plan_id=!empty($_GET['plan_id'])? $_GET['plan_id'] : "";
	 $planData=$this->Plan_model->getPlanReportExportAllType($plan_id);
	 $filename="Plan-Word-Report.docx";
     $this->load->library('Phpword');
	 $phpWord = new \PhpOffice\PhpWord\PhpWord();
	 $content_font=array('name'=>'Helvetica Neue','align'=>'center','size'=>12,'spaceAfter'=>1);
	 $headings=array('name'=>'Helvetica Neue','size'=>26,'bold'=>true,'color'=>'#262734');
	 $questionsHeadings=array('name'=>'Helvetica Neue','size'=>15,'bold'=>true);
	 $section = $phpWord->addSection();
	  foreach($planData as $planData){
	   $section->addImage('./assets/images/logo-pdf.png');
	   $section->addText("Plan Introduction",$headings);
	   $section->addText("Your business title",$questionsHeadings);
	   $section->addText(strip_tags($planData->business_title));
	   $section->addText("Describe your business",$questionsHeadings);
	   $section->addText(strip_tags($planData->describe_your_business));
	   $section->addText("Describe why people need and want your product/service",$questionsHeadings);
	   $section->addText(strip_tags($planData->describe_why_people_need_and_want_your_product_service));
	   $section->addText("List Your goals",$questionsHeadings);
	   $section->addText(strip_tags($planData->list_your_goals));
	   $section->addPageBreak();
	   $section->addImage('./assets/images/logo-pdf.png');
	   $section->addText("The Market",$headings);
	   $styleCell = array('align'=>'center', 'bgColor'=>'#1e88e5');
       $styleCellBTLR = array('valign'=>'center');
       $fontStyle = array('bold'=>true, 'align'=>'center');
	   $section->addText("Example Of SWOT Analysis",$questionsHeadings);
       $section->addTableStyle('CoverLine', $styleTable, $styleFirstRow); 
       $table = $section->addTable('CoverLine');
	   $table->addRow(500);
	   $table->addCell(5000, $styleCell)->addText('', $fontStyle);
       $table->addCell(5000, $styleCell)->addText('Positive', $fontStyle);
       $table->addCell(5000, $styleCell)->addText('Negative', $fontStyle);
	   $table->addRow(500);
	   $table->addCell(5000, $styleCell)->addText('Internal Factors');
	   $table->addCell(5000, $styleCell)->addText($planData->swot_analysis_strengths);
       $table->addCell(5000, $styleCell)->addText($planData->swot_analysis_weaknesses);
	   $table->addRow(500);
	   $table->addCell(5000, $styleCell)->addText('External Factors');
	   $table->addCell(5000, $styleCell)->addText($planData->swot_analysis_opportunities);
	   $table->addCell(5000, $styleCell)->addText($planData->swot_analysis_threats);
	   
	    $section->addText("Example Of PEST Analysis",$questionsHeadings);
	   $table = $section->addTable('CoverLine');
	   $table->addRow(500);
	   $table->addCell(5000, $styleCell)->addText('POLITICAL');
	   $table->addCell(5000, $styleCell)->addText($planData->pest_analysis_political);
	   $table->addCell(5000, $styleCell)->addText('ECONOMICAL');
       $table->addCell(5000, $styleCell)->addText($planData->pest_analysis_economical);
	   $table->addRow(500);
	   $table->addCell(5000, $styleCell)->addText('SOCIO-CULTURAL');
	   $table->addCell(5000, $styleCell)->addText($planData->pest_analysis_socio_cultural);
	   $table->addCell(5000, $styleCell)->addText('TECHNOLOGICAL');
	   $table->addCell(5000, $styleCell)->addText($planData->pest_analysis_technological);
	   $section->addText("Describe the market",$questionsHeadings);
	   \PhpOffice\PhpWord\Shared\Html::addHtml($section, $planData->describe_the_market);
	   $section->addText("What is its current size",$questionsHeadings);
	   \PhpOffice\PhpWord\Shared\Html::addHtml($section, $planData->what_is_its_current_size);
	   $section->addText("Current Market Share",$questionsHeadings);
	   \PhpOffice\PhpWord\Shared\Html::addHtml($section, $planData->current_market_share);
	   $section->addText("Recent growth or decline within the industry",$questionsHeadings);
	   \PhpOffice\PhpWord\Shared\Html::addHtml($section, $planData->recent_growth_or_decline_within_the_industry);
	   $section->addText("Forecasted growth",$questionsHeadings);
	   \PhpOffice\PhpWord\Shared\Html::addHtml($section, $planData->forecasted_growth);
	   $section->addText("Why will the market buy your product service",$questionsHeadings);
	   \PhpOffice\PhpWord\Shared\Html::addHtml($section, $planData->why_will_the_market_buy_your_product_service);
	   $section->addText("Expected Market Share",$questionsHeadings);
	   \PhpOffice\PhpWord\Shared\Html::addHtml($section, $planData->expected_market_share);
	   
	   $section->addText("Future Growth Opportunities",$questionsHeadings);
	   \PhpOffice\PhpWord\Shared\Html::addHtml($section, $planData->future_growth_opportunities); 
	   $section->addPageBreak();
	   $section->addImage('./assets/images/logo-pdf.png');
	   $section->addText("The Customer",$headings);
	   $section->addText("Ideal Customer",$questionsHeadings);
	   \PhpOffice\PhpWord\Shared\Html::addHtml($section, $planData->ideal_customer);
	   $section->addPageBreak();
	   $section->addImage('./assets/images/logo-pdf.png');
		$section->addText("Marketing Strategy",$headings);
		$section->addText("Price",$questionsHeadings);
		 \PhpOffice\PhpWord\Shared\Html::addHtml($section, $planData->price);
		 $section->addText("Product",$questionsHeadings);
		  \PhpOffice\PhpWord\Shared\Html::addHtml($section, $planData->product);
		  $section->addText("Place",$questionsHeadings);
		   \PhpOffice\PhpWord\Shared\Html::addHtml($section, $planData->place);
		   $section->addText("Personality",$questionsHeadings);
		    \PhpOffice\PhpWord\Shared\Html::addHtml($section, $planData->personality);
			$section->addText("Service Experience",$questionsHeadings);
			 \PhpOffice\PhpWord\Shared\Html::addHtml($section, $planData->service_experience);
			 $section->addText("Story",$questionsHeadings);
			  \PhpOffice\PhpWord\Shared\Html::addHtml($section, $planData->story);
			  $section->addText("Unique selling proposition",$questionsHeadings);
			   \PhpOffice\PhpWord\Shared\Html::addHtml($section, $planData->unique_selling_proposition);
			  $section->addPageBreak();
			    $section->addImage('./assets/images/logo-pdf.png');
				$section->addText("Marketing Mix",$headings);
				$section->addText("Direct marketing",$questionsHeadings);
				 \PhpOffice\PhpWord\Shared\Html::addHtml($section, $planData->direct_marketing);
				  $section->addText("Internet marketing",$questionsHeadings);
				  \PhpOffice\PhpWord\Shared\Html::addHtml($section, $planData->internet_marketing);
				   $section->addText("Social Media",$questionsHeadings);
				   \PhpOffice\PhpWord\Shared\Html::addHtml($section, $planData->social_media);
				    $section->addText("Public relations",$questionsHeadings);
					\PhpOffice\PhpWord\Shared\Html::addHtml($section, $planData->public_relations);
					 $section->addText("Advertising",$questionsHeadings);
					\PhpOffice\PhpWord\Shared\Html::addHtml($section, $planData->advertising);
					$section->addText("Budget",$questionsHeadings);
				    \PhpOffice\PhpWord\Shared\Html::addHtml($section, $planData->budget);
					$section->addText("Action plan",$questionsHeadings);
				    \PhpOffice\PhpWord\Shared\Html::addHtml($section, $planData->action_plan);
	   }
	   $section->addPageBreak();
	   $objWriter = \PhpOffice\PhpWord\IOFactory::createWriter($phpWord, 'Word2007');
	   $objWriter->save($filename);
       header('Content-Description: File Transfer');
	   header('Content-Type: application/octet-stream');
	   header('Content-Disposition: attachment; filename='.$filename);
	   header('Content-Transfer-Encoding: binary');
	   header('Expires: 0');
	   header('Cache-Control: must-revalidate, post-check=0, pre-check=0');
	   header('Pragma: public');
	   header('Content-Length: ' . filesize($filename));
	   flush();
	   readfile($filename);
	   unlink($filename); // deletes the temporary file
	   exit;
	}
	/*******************************************************/
	/*******************************************************/
	/*Function Used For Exporting Plan Report In PPT.*/
	public function planGetPPTReport()
	{ 
	   $plan_id=!empty($_GET['plan_id'])? $_GET['plan_id'] : "";
	   $this->load->library('Phpppt');
	   $filename="PlanPPTExport.pptx";
	   $planData=$this->Plan_model->getPlanReportExportAllType($plan_id);
       $objPHPPowerPoint = new \PhpOffice\PhpPowerpoint\PhpPowerpoint();
	   $objPHPPowerPoint->getProperties()->setCreator('PHPOffice')
                                  ->setLastModifiedBy('PHPPowerPoint Team')
                                  ->setTitle('Sample 01 Title')
                                  ->setSubject('Sample 01 Subject')
                                  ->setDescription('Sample 01 Description')
                                  ->setKeywords('office 2007 openxml libreoffice odt php')
                                  ->setCategory('Sample Category');
	  $currentSlide = $objPHPPowerPoint->getActiveSlide();
	  $shape = $currentSlide->createDrawingShape();
      $shape->setName('PHPPowerPoint logo')
       ->setDescription('PHPPowerPoint logo')
       ->setPath('./assets/images/logo-pdf.png')
       ->setHeight(36)
       ->setOffsetX(10)
       ->setOffsetY(10);
       $shape->getShadow()->setVisible(true)
                   ->setDirection(45)
                   ->setDistance(10);
	   $shape = $currentSlide->createRichTextShape()
       ->setHeight(300)
       ->setWidth(600)
       ->setOffsetX(170)
       ->setOffsetY(180);
	   $shape->getShadow()
       ->setVisible(false)
       ->setDirection(45)
       ->setDistance(10);
	   foreach($planData as $planDatas){
	   $textRun = $shape->createTextRun(strip_tags("<h1>Plan Introduction</h1>"));
	   $textRun = $shape->createTextRun("Your business title");
	   $textRun = $shape->createTextRun(strip_tags($planDatas->business_title));
	   $textRun = $shape->createTextRun("Describe your business");
	   $textRun = $shape->createTextRun(strip_tags($planDatas->describe_your_business));
	   $textRun = $shape->createTextRun("Describe why people need and want your product/service");
	   $textRun = $shape->createTextRun(strip_tags($planDatas->describe_why_people_need_and_want_your_product_service));
	   $textRun = $shape->createTextRun("List Your goals");
	   $textRun = $shape->createTextRun(strip_tags($planDatas->list_your_goals));
	   $textRun = $shape->createTextRun(strip_tags("<h1>The Market </h1>"));
	   $textRun = $shape->createTextRun("SWOT Analysis Strengths");
	   $textRun = $shape->createTextRun(strip_tags($planDatas->swot_analysis_strengths));
	   $textRun = $shape->createTextRun("SWOT Analysis Strengths");
	   $textRun = $shape->createTextRun(strip_tags($planDatas->swot_analysis_weaknesses));
	   $textRun = $shape->createTextRun("SWOT Analysis Opportunities");
	   $textRun = $shape->createTextRun(strip_tags($planDatas->swot_analysis_opportunities));
	   $textRun = $shape->createTextRun("SWOT Analysis Threats");
	   $textRun = $shape->createTextRun(strip_tags($planDatas->swot_analysis_threats));
	   $textRun = $shape->createTextRun("PEST Analysis Political");
	   $textRun = $shape->createTextRun(strip_tags($planDatas->pest_analysis_political));
	   $textRun = $shape->createTextRun("PEST Analysis Economical");
	   $textRun = $shape->createTextRun(strip_tags($planDatas->pest_analysis_economical));
	   $textRun = $shape->createTextRun("PEST Analysis Socio Cultural");
	   $textRun = $shape->createTextRun(strip_tags($planDatas->pest_analysis_socio_cultural));
	   $textRun = $shape->createTextRun("PEST Analysis Technological");
	   $textRun = $shape->createTextRun(strip_tags($planDatas->pest_analysis_technological));
	   $textRun = $shape->createTextRun("Describe the market");
	   $textRun = $shape->createTextRun(strip_tags($planDatas->describe_the_market));
	   $textRun = $shape->createTextRun("What is its current size");
	   $textRun = $shape->createTextRun(strip_tags($planDatas->what_is_its_current_size));
	   $textRun = $shape->createTextRun("Current Market Share");
	   $textRun = $shape->createTextRun(strip_tags($planDatas->current_market_share));
	   $textRun = $shape->createTextRun("Recent growth or decline within the industry");
	   $textRun = $shape->createTextRun(strip_tags($planDatas->recent_growth_or_decline_within_the_industry));
	   $textRun = $shape->createTextRun("Forecasted growth");
	   $textRun = $shape->createTextRun(strip_tags($planDatas->forecasted_growth));
	   $textRun = $shape->createTextRun("Why will the market buy your product service");
	   $textRun = $shape->createTextRun(strip_tags($planDatas->why_will_the_market_buy_your_product_service));
	   $textRun = $shape->createTextRun("Expected Market Share");
	   $textRun = $shape->createTextRun(strip_tags($planDatas->expected_market_share));
	   $textRun = $shape->createTextRun("Future Growth Opportunities");
	   $textRun = $shape->createTextRun(strip_tags($planDatas->future_growth_opportunities));
	   $textRun = $shape->createTextRun(strip_tags("<h1>The Customer  </h1>"));
	   $textRun = $shape->createTextRun("Ideal Customer");
	   $textRun = $shape->createTextRun(strip_tags($planDatas->ideal_customer));
	   $textRun = $shape->createTextRun(strip_tags("<h1>Marketing Strategy  </h1>"));
	   $textRun = $shape->createTextRun("Price");
	   $textRun = $shape->createTextRun(strip_tags($planDatas->price));
	   $textRun = $shape->createTextRun("Product");
	   $textRun = $shape->createTextRun(strip_tags($planDatas->product));
	   $textRun = $shape->createTextRun("Place");
	   $textRun = $shape->createTextRun(strip_tags($planDatas->place));
	   $textRun = $shape->createTextRun("Personality");
	   $textRun = $shape->createTextRun(strip_tags($planDatas->personality));
	   $textRun = $shape->createTextRun("Service Experience");
	   $textRun = $shape->createTextRun(strip_tags($planDatas->service_experience));
	   $textRun = $shape->createTextRun("Story");
	   $textRun = $shape->createTextRun(strip_tags($planDatas->story));
	   $textRun = $shape->createTextRun("Unique Selling Proposition");
	   $textRun = $shape->createTextRun(strip_tags($planDatas->unique_selling_proposition));
	   $textRun = $shape->createTextRun(strip_tags("<h1>Marketing Mix </h1>"));
	   $textRun = $shape->createTextRun("Direct Marketing");
	   $textRun = $shape->createTextRun(strip_tags($planDatas->direct_marketing));
	   $textRun = $shape->createTextRun("Internet Marketing");
	   $textRun = $shape->createTextRun(strip_tags($planDatas->internet_marketing));
	   $textRun = $shape->createTextRun("Social Media");
	   $textRun = $shape->createTextRun(strip_tags($planDatas->social_media));
	   $textRun = $shape->createTextRun("Public Relations");
	   $textRun = $shape->createTextRun(strip_tags($planDatas->public_relations));
	   $textRun = $shape->createTextRun("Advertising");
	   $textRun = $shape->createTextRun(strip_tags($planDatas->advertising));
	   $textRun = $shape->createTextRun("Budget");
	   $textRun = $shape->createTextRun(strip_tags($planDatas->budget));
	   $textRun = $shape->createTextRun("Action Plan");
	   $textRun = $shape->createTextRun(strip_tags($planDatas->action_plan));
	   }
	   header('Content-Type: application/vnd.openxmlformats-officedocument.presentationml.presentation');
       header('Content-Disposition: attachment;filename="'.$filename.'"');
       header('Cache-Control: max-age=0');
       header('Cache-Control: max-age=1');
       header ('Expires: Mon, 26 Jul 1997 05:00:00 GMT'); // Date in the past
       header ('Last-Modified: '.gmdate('D, d M Y H:i:s').' GMT'); // always modified
       header ('Cache-Control: cache, must-revalidate'); // HTTP/1.1
       header ('Pragma: public'); // HTTP/1.0
	   $oWriterPPTX =\PhpOffice\PhpPowerpoint\IOFactory::createWriter($objPHPPowerPoint, 'PowerPoint2007');
       $oWriterPPTX->save('php://output');			   
	}
} 