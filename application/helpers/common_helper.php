<?php
if (!defined('BASEPATH'))
    exit('No direct script access allowed');
if (!function_exists('getCountryDropdown')) {
    function getCountryDropdown() {
        $arrCountry = array();
        $CI = & get_instance();
        $arrSession['']="Select Country";
        $temp = $CI->db->get('mkpl_countries')->result();
        foreach ($temp as $t) {
            $arrSession[$t->c_id] = $t->c_name;
        }
        return $arrSession;
    }
}

if (!function_exists('getSurveynDropdown')) {
    function getSurveynDropdown() {
        $arrSurvey = array();
        $CI = & get_instance();
        $arrSurvey[0]="Select Survey";
		$CI->db->where("status","1");
        $temp = $CI->db->get('tblsurvey')->result();
        foreach ($temp as $t) {
            $arrSurvey[$t->survey_id] = $t->survey_name;
        }
        return $arrSurvey;
    }
}

if (!function_exists('getCategoryDropdown')) {
    function getCategoryDropdown() {
        $arrCategory = array();
        $CI = & get_instance();
        $arrCategory[0]="Select Category";
		$CI->db->where('parent_id IS NULL', null, true);
		$CI->db->where("status","1");
        $temp = $CI->db->get('tblsurveycategory')->result();
        foreach ($temp as $t) {
            $arrCategory[$t->id] = $t->category_title;
        }
        return $arrCategory;
    }
}
if (!function_exists('getParentCategoryDropdown')) {
    function getParentCategoryDropdown() {
        $arrCategory = array();
        $CI = & get_instance();
        $arrCategory[0]="Select Parent Category";
		$CI->db->where("status","1");
		$CI->db->where('parent_id IS NULL', null, true);
        $temp = $CI->db->get('tblsurveycategory')->result();
        foreach ($temp as $t) {
            $arrCategory[$t->id] = $t->category_title;
        }
        return $arrCategory;
    }
}

if (!function_exists('getProjectManagerDropdown')) {
    function getProjectManagerDropdown() {
        $arrCategory = array();
        $CI = & get_instance();
        $arrCategory[0]="Select Project Manager";
        $temp = $CI->db->get('tblsurveyprojectmanager')->result();
        foreach ($temp as $t) {
            $arrCategory[$t->id] = $t->name;
        }
        return $arrCategory;
    }
}



/* rohit COde Start  */
if (!function_exists('get_swot')) {
    function get_swot($plan_id,$user_id,$select_data) {
        
        $CI = & get_instance();
        $temp =$CI->db->select($select_data)->from('mkpl_plan_market')
		                           ->where('plan_id',$plan_id)
								   ->where('user_id',$user_id)
								   ->get()
								   ->result();
								   
								   return $temp;
								   
    }
}



if (!function_exists('check_plan_exist')) {
    function check_plan_exist($plan_id,$user_id) {
        
        $CI = & get_instance();
        $temp =$CI->db->select('*')->from('mkpl_plan_market')
		                           ->where('plan_id',$plan_id)
								   ->where('user_id',$user_id)
								   ->get()
								   ->result();
								   
								   return $temp;
								   
    }
}


if (!function_exists('fetch_states')) {
    function fetch_states($country_id) {
      $CI = & get_instance();
	 
	 $temp = $CI->db->select('st_id,st_name')
		               ->from('mkpl_states')
					   ->where('st_c_id',$country_id)
					   ->get()
					   ->result(); 
		     return $temp;
			// echo $CI->db->last_query(); exit;
	 }
} 

if (!function_exists('getgeneral__sic_type_businessDropdown')) {
    function getgeneral__sic_type_businessDropdown() {
        $arrCountry = array();
        $CI = & get_instance();
        $arrSession['']="Select general__sic_type_business";
        $temp = $CI->db->get('mkpl_sic')->result();
        foreach ($temp as $t) {	
            $arrSession[$t->id] = $t->description;
        }
        return $arrSession;
    }
}

if (!function_exists('getswotanalysisfilled')) {
    function getswotanalysisfilled($plan_id,$user_id) {
      $CI = & get_instance();
	 
	 $temp = $CI->db->select('swot_analysis_strengths,swot_analysis_weaknesses,swot_analysis_opportunities,swot_analysis_threats')
		               ->from('mkpl_plan_market')
					   ->where('plan_id',$plan_id)
					   ->where('user_id',$user_id)
					   ->get()
					   ->result(); 
		   return $temp;
			//echo $CI->db->last_query(); exit;
	 }
} 

if (!function_exists('getpestanalysisfilled')) {
    function getpestanalysisfilled($plan_id,$user_id) {
      $CI = & get_instance();
	 
	 $temp = $CI->db->select('pest_analysis_political,pest_analysis_economical,pest_analysis_socio_cultural,pest_analysis_technological')
		               ->from('mkpl_plan_market')
					   ->where('plan_id',$plan_id)
					   ->where('user_id',$user_id)
					   ->get()
					   ->result(); 
		   return $temp;
			//echo $CI->db->last_query(); exit;
	 }
} 




/* End ROhit code */

if (!function_exists('getUniqueByIdColumn')) {
    function getUniqueByIdColumn($tablename,$getcolumn,$column_name,$column_cond) {
        $CI = & get_instance();
        $temp = $CI->db->select('*')->from($tablename)->where($column_name,$column_cond)->get()->result();
        foreach ($temp as $t) {
            $arrdata = $t->$getcolumn;
        }
        return $arrdata;
    }
}


if (!function_exists('getcompetitor')) {
    function getcompetitor($user_id,$plan_id) {
        $CI = & get_instance();
        $temp = $CI->db->select('*')
		           ->from('mkpl_competitors')
				   ->where('plan_id',$plan_id)
				   ->where('user_id',$user_id)
				   ->get()->result();
        return $temp;
    }
}

if (!function_exists('getUniqueByIdColumn_1')) {
    function getUniqueByIdColumn_1($tablename,$column_name,$column_cond) {
        $CI = & get_instance();
        $temp = $CI->db->select('*')->from($tablename)->where($column_name,$column_cond)->get()->result();
        return $temp;
    }
}

if (!function_exists('getUniqueByIdColumn_2')) {
    function getUniqueByIdColumn_2($tablename,$column_name,$column_cond,$column_name1,$column_cond1) {
        $CI = & get_instance();
		$CI->db->where($column_name,$column_cond);
		$CI->db->where($column_name1,$column_cond1);
        $temp = $CI->db->select('*')->from($tablename)->get()->result();
        return $temp;
    }
}

if (!function_exists('getQuestionShowBySection')) {
    function getQuestionShowBySection($tablename,$column_name,$column_cond,$column_name1,$column_cond1) {
        $CI = & get_instance();
		$CI->db->where($column_name,$column_cond);
		$CI->db->where($column_name1,$column_cond1);
        $temp = $CI->db->select('*')->from($tablename)->get()->result();
        return $temp;
    }
}




if (!function_exists('arrayToString')) {
    function arrayToString($argArray) {
        $temp='';
        for ($i = 0; $i < count($argArray); $i++) {
            $temp .= "$argArray[$i]" . ",";
        }
        return $temp;
    }
}

if (!function_exists('questionSwap')) {
    function questionSwap($current,$swap,$current_id) {
        $CI = & get_instance();
        $CI->db->set("priorty",$current);
	    $CI->db->where('priorty',$swap );
        $CI->db->update('tblsurveyquestion');
        $CI->db->set("priorty",$swap);
	    $CI->db->where('id',$current_id );
        $CI->db->update('tblsurveyquestion');
    }
}

if (!function_exists('getCount')) {
    function getCount($tablename,$getColumn,$column_name,$column_cond) {
        $CI = & get_instance();
        $temp = $CI->db->select('COUNT('.$getColumn.') AS labelCount')->from($tablename)->where($column_name,$column_cond)->get()->row();
		return $temp->labelCount;
    }
}

if (!function_exists('getQuestion')) {
    function getQuestion($tablename,$getColumn,$column_name,$column_cond,$column_name1,$column_cond1) {
        $CI = & get_instance();
		$CI->db->where("$column_name1",$column_cond1);
		$CI->db->where("$column_name",$column_cond);
        $temp = $CI->db->select('COUNT('.'"'.$getColumn.'"'.') AS labelCount')->from($tablename)->get()->row();
		return $temp->labelCount;
    }
}

if (!function_exists('get_select_value')) {
    function get_select_value($column_cond) {
        $CI = & get_instance();
		$temp = $CI->db->select('*')
		               ->from('tblsurveyquestion_point')
					   ->where('question_id',$column_cond)
					   ->get()
					   ->result();
		     return $temp;
    }
}

