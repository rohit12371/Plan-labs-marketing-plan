<style>
[type=checkbox]+label:before, [type=checkbox]:not(.filled-in)+label:after{
	    border: 2px solid #3583c794;
		
}

[type=checkbox]+label
{
	font-size: 14px;
    font-weight: 600;
}

[type=radio]:checked+label, [type=radio]:not(:checked)+label
{
	    font-size: 14px;
    font-weight: 600;
}
.error
{
  color: #fb4f2a !important;
  font-size: 17px !important;
  text-shadow: 1px 1px 1px #000; 
}
.radio{
color: rgb(79, 176, 174);
background-color: rgba(79, 176, 174, 0.1);
box-shadow: rgba(79, 176, 174, 0.6) 0px 0px 0px 1px inset;
cursor: pointer; margin:12px 12px 12px 0px; 
padding:12px 12px 1px 12px;
width:300px;
}
.checkbox{
color: rgb(79, 176, 174);
background-color: rgba(79, 176, 174, 0.1);
box-shadow: rgba(79, 176, 174, 0.6) 0px 0px 0px 1px inset;
cursor: pointer; margin:12px 12px 12px 0px; 
padding:12px 12px 1px 12px;
width:300px;
}
.numbering{
    -webkit-box-align: center;
    align-items: center;
    color: rgb(79, 176, 174);
    font-size: 14px;
    line-height: 20px;
    height: 100%;
}
.questionTitle{ font-size:18px;}
.form-control{
display: block;
    width: 100%;
    font-family: inherit;
    color: rgb(79, 176, 174)!important;
    -webkit-appearance: none;
    font-size: 17px;
    line-height: 38px;
    -webkit-font-smoothing: antialiased;
    padding: 0px 0px 8px;
    border-width: initial;
    border-style: none;
    border-color: initial;
    border-image: initial;
    outline: none;
    border-radius: 0px;
    transition: box-shadow 0.2s ease 0s;
    background: none;
}
</style>
<div class="content-wrapper" style="min-height: 549px;">
  <section class="content">
    <div class="box">
      <div class="box-header with-border">
        <h3 class="box-title">Introduction <small>( My Plans )</small></h3>
      </div>
      <div class="box-body">
        <div class="box-body form-element">
          <div class="col-md-12">
            <?php $this->load->view('users-panel/plans/menu-top-bar'); ?>
          </div>
          <?php echo form_open("plans/planStep1",array("id"=>"frmStep1")); ?>
          <?php 
		  if(!empty($planIntro)){
		  foreach($planIntro as $planIntro){ ?>
		  
		  
          <div class="note pull-right">
            <label>Please Note Here:</label>
            <br/>
            <textarea name="noteStep1" class="form-control input-lg" style="width:100%; background:#fff;"><?php echo $planIntro->introduction_note; ?></textarea>
          </div>
          <div class="col-md-7">
            <p>The Executive Summary is often the only page that your bank or potential investors will read. It has the potential to make or break your ambition so put a lot of time into perfecting it. Include all of the keys to your success and your projected outcomes</p>
          </div>
          <div class="col-md-12">
            <hr style="border-color:#1e88e5; border-width:3px;"/>
          </div>
		  
         <div id="first">
          <div class="col-md-12">
            <div class="col-md-9">
              <div class="col-md-12  pull-right 101">
                <div class="form-group">
                  <label class="h5">
                  <strong class="questionTitle"><span class="numbering">1 &rarr;</span> Is this a new or existing business?</strong>
                  <div id="errordiv1" style="margin: -23px 0px 0px 265px;  position: absolute;"></div>
                  </label>
                  <div class="radio">
				  <?php if($planIntro->new_exi=='New'){?>
                    <input name="new_exi" type="radio" id="Option_1" value="New" checked="checked">
				  <?php } else {?>
				   <input name="new_exi" type="radio" id="Option_1" value="New">
				  <?php } ?>
                    <label for="Option_1">New</label>
                  </div>
                  <div class="radio">
				  <?php if($planIntro->new_exi=='Existing'){?>
                    <input name="new_exi" type="radio" id="Option_2" value="Existing" checked="checked">
				  <?php } else { ?>
				  <input name="new_exi" type="radio" id="Option_2" value="Existing">
				  <?php } ?>
                    <label for="Option_2">Existing</label>
                  </div>
                </div>
              </div>
              <div class="col-md-12  pull-right 102">
                <div class="form-group">
                  <label class="h5"><strong class="questionTitle"><span class="numbering">2 &rarr;</span> What is the name of the business?</strong></label>
                  <input name="business_title" type="text" class="form-control input-lg" placeholder=" Your business title :" value="<?php echo $planIntro->business_title; ?>" autocomplete="off">
                </div>
              </div>
              <div class="col-md-12  pull-right 103">
                <div class="form-group">
                  <label class="h5"><strong class="questionTitle"><span class="numbering">3 &rarr;</span> What is the physical address of the business?</strong></label>
                  <input name="physical_address" type="text" class="form-control input-lg" placeholder=" Your physical address :" value="<?php echo $planIntro->physical_address; ?>" autocomplete="off">
                </div>
              </div>
              <div class="col-md-12  pull-right 103">
                <div class="form-group">
                  <label class="h5"><strong class="questionTitle"><span class="numbering">4 &rarr;</span> In what country will the business be located?</strong></label>
                  <?php echo form_dropdown('country',$country,$planIntro->country, array('class' => 'form-control', 'id' => 'country', 'onchange' => 'getStates();')); ?> </div>
              </div>
              <div class="col-md-12  pull-right 103">
                <div class="form-group">
                  <label class="h5"><strong class="questionTitle"><span class="numbering">5 &rarr;</span> What is the street address of the business?</strong></label>
                  <input name="street" type="text" class="form-control input-lg" placeholder=" Your street address :" value="<?php echo $planIntro->street; ?>" autocomplete="off">
                </div>
              </div>
              <div class="col-md-12  pull-right 103">
                <div class="form-group">
                  <label class="h5"><strong class="questionTitle"><span class="numbering">6 &rarr;</span> In what city?</strong></label>
                  <input name="city" type="text" class="form-control input-lg" placeholder=" Your city :"  value="<?php echo $planIntro->city; ?>" autocomplete="off">
                </div>
              </div>
              <div class="col-md-12  pull-right 103">
                <div class="form-group">
                  <label class="h5"><strong class="questionTitle"><span class="numbering">7 &rarr;</span> State</strong></label>
				   <?php $fetch_data=fetch_states($planIntro->country); ?>
                 <select class="form-control" name="states" id="states">
			    <option>Select State</option>
			   <?php foreach($fetch_data as $fetch_datas){?>
			    <option value="<?php echo $fetch_datas->st_id;?>" <?php if($planIntro->states == $fetch_datas->st_id ){  echo 'selected="selected"'; } ?>  ><?php echo $fetch_datas->st_name;?></option>
			  
			   <?php } ?>
           </select>
                </div>
              </div>
              <div class="col-md-12  pull-right 103">
                <div class="form-group">
                  <label class="h5"><strong class="questionTitle"><span class="numbering">8 &rarr;</span> Zipcode?</strong></label>
                  <input name="zipcode" type="text" class="form-control input-lg" placeholder="Your Zipcode :" value="<?php echo $planIntro->zipcode; ?>"  autocomplete="off">
                </div>
              </div>
              <div class="col-md-12  pull-right new" style="display:none;">
                <div class="form-group">
                  <label class="h5">
                  <strong class="questionTitle"><span class="numbering">9 &rarr;</span> What type of business are you planning?</strong>
                  <div id="errordiv2" style="margin: -23px 0px 0px 265px;  position: absolute;"></div>
                  </label>
                  <div class="radio">
				   <?php if($planIntro->business_type=='1'){?>
				  
                    <input name="business_type" type="radio" id="Option_3" value="1" checked="checked">
				   <?php } else {?>
				    <input name="business_type" type="radio" id="Option_3" value="1">
				   <?php } ?>
                    <label for="Option_3">Web based Only</label>
                  </div>
                  <div class="radio">
				   <?php if($planIntro->business_type=='2'){?>
                    <input name="business_type" type="radio" id="Option_4" value="2"  checked="checked">
				   <?php } else { ?>
				   <input name="business_type" type="radio" id="Option_4" value="2">
				   <?php } ?>
                    <label for="Option_4">Physical Location Business Only</label>
                  </div>
                  <div class="radio">
				   <?php if($planIntro->business_type=='3'){?>
                    <input name="business_type" type="radio" id="Option_5" value="3" checked="checked">
				   <?php } else { ?>
				   <input name="business_type" type="radio" id="Option_5" value="3">
				   <?php } ?>
                    <label for="Option_5">Both Web & Physical  Based Business</label>
                  </div>
                </div>
              </div>
              <div class="col-md-12  pull-right existing" style="display:none;">
                <div class="form-group">
                  <label class="h5">
                  <strong class="questionTitle"> <span class="numbering">10 &rarr;</span>What type of business do you own?</strong>
                  <div id="errordiv3" style="margin: -23px 0px 0px 265px;  position: absolute;"></div>
                  </label>
                  <div class="radio">
				   <?php if($planIntro->business_type_own=='1'){?>
                    <input name="business_type_own" type="radio" id="Option_6" value="1" checked="checked">
				   <?php } else {?>
				   <input name="business_type_own" type="radio" id="Option_6" value="1">
				   <?php } ?>
                    <label for="Option_6">Web based Only</label>
                  </div>
                  <div class="radio">
				   <?php if($planIntro->business_type_own=='2'){?>
                    <input name="business_type_own" type="radio" id="Option_7" value="2"  checked="checked">
				  <?php } else {?>
				  <input name="business_type_own" type="radio" id="Option_7" value="2">
				  <?php } ?>
                    <label for="Option_7">Physical Location Business Only</label>
                  </div>
                  <div class="radio">
				   <?php if($planIntro->business_type_own=='3'){?>
                    <input name="business_type_own" type="radio" id="Option_8" value="3" checked="checked">
				   <?php } else {?>
				   <input name="business_type_own" type="radio" id="Option_8" value="3">
				   <?php } ?>
                    <label for="Option_8">Both Web & Physical  Based Business</label>
                  </div>
                </div>
              </div>
              <div class="col-md-12  pull-right new" style="display:none;">
                <div class="form-group">
                  <label class="h5">
                  <strong class="questionTitle"><span class="numbering">11 &rarr;</span>What type of business structure do you plan?</strong>
                  <div id="errordiv4" style="margin: -23px 0px 0px 265px;  position: absolute;"></div>
                  </label>
                  <div class="radio">
				  <?php if($planIntro->business_structure_plan=='1'){?>
                    <input name="business_structure_plan" type="radio" id="Option_9" value="1" checked="checked" >
					
				  <?php } else { ?>
				  <input name="business_structure_plan" type="radio" id="Option_9" value="1">
				  <?php } ?>
                    <label for="Option_9">Sole Proprietorship</label>
                  </div>
                  <div class="radio">
				   <?php if($planIntro->business_structure_plan=='2'){?>
                    <input name="business_structure_plan" type="radio" id="Option_10" value="2" checked="checked">
				   <?php } else { ?>
				   <input name="business_structure_plan" type="radio" id="Option_10" value="2">
				   <?php } ?>
                    <label for="Option_10">Partnership</label>
                  </div>
                  <div class="radio">
				   <?php if($planIntro->business_structure_plan=='3'){?>
                    <input name="business_structure_plan" type="radio" id="Option_11" value="3" checked="checked">
				   <?php } else { ?>
				    <input name="business_structure_plan" type="radio" id="Option_11" value="3">
				   <?php } ?>
                    <label for="Option_11">Limited Liability Corporation (LLC)</label>
                  </div>
                  <div class="radio">
				   <?php if($planIntro->business_structure_plan=='4'){?>
                    <input name="business_structure_plan" type="radio" id="Option_12" value="4" checked="checked">
				   <?php } else { ?>
				    <input name="business_structure_plan" type="radio" id="Option_12" value="4" >
				   <?php } ?>
                    <label for="Option_12">C-Corp</label>
                  </div>
                  <div class="radio">
				   <?php if($planIntro->business_structure_plan=='5'){?>
                    <input name="business_structure_plan" type="radio" id="Option_13" value="5" checked="checked">
				   <?php }  else {?>
				   <input name="business_structure_plan" type="radio" id="Option_13" value="5">
				   <?php } ?>
                    <label for="Option_13">S-Corp</label>
                  </div>
                  <div class="radio">
				  <?php if($planIntro->business_structure_plan=='6'){?>
                    <input name="business_structure_plan" type="radio" id="Option_14" value="6" checked="checked">
				  <?php } else { ?>
				  <input name="business_structure_plan" type="radio" id="Option_14" value="6">
				  <?php } ?>
                    <label for="Option_14">Not for Profit</label>
                  </div>
                </div>
              </div>
              <div class="col-md-12  pull-right existing" style="display:none;">
                <div class="form-group">
                  <label class="h5">
                  <strong class="questionTitle"> <span class="numbering">11 &rarr;</span>What is your business structure?</strong>
                  <div id="errordiv5" style="margin: -23px 0px 0px 265px;  position: absolute;"></div>
                  </label>
                  <div class="radio">
				   <?php if($planIntro->business_structure=='1'){?>
                    <input name="business_structure" type="radio" id="Option_15" value="1" checked="checked">
				   <?php } else { ?>
				   <input name="business_structure" type="radio" id="Option_15" value="1">
				   <?php } ?>
                    <label for="Option_15">Sole Proprietorship</label>
                  </div>
                  <div class="radio">
				    <?php if($planIntro->business_structure=='2'){?>
                    <input name="business_structure" type="radio" id="Option_16" value="2" checked="checked">
					 <?php } else { ?>
					 <input name="business_structure" type="radio" id="Option_16" value="2">
					 <?php } ?>
                    <label for="Option_16">Partnership</label>
                  </div>
                  <div class="radio">
				   <?php if($planIntro->business_structure=='3'){?>
                    <input name="business_structure" type="radio" id="Option_17" value="3" checked="checked">
					 <?php } else { ?>
					 <input name="business_structure" type="radio" id="Option_17" value="3">
					 <?php } ?>
                    <label for="Option_17">Limited Liability Corporation (LLC)</label>
                  </div>
                  <div class="radio">
				    <?php if($planIntro->business_structure=='4'){?>
                    <input name="business_structure" type="radio" id="Option_18" value="4" checked="checked">
					 <?php } else { ?>
					 <input name="business_structure" type="radio" id="Option_18" value="4">
					 <?php } ?>
                    <label for="Option_18">C-Corp</label>
                  </div>
                  <div class="radio">
				  <?php if($planIntro->business_structure=='5'){?>
                    <input name="business_structure" type="radio" id="Option_19" value="5" checked="checked">
					 <?php } else { ?>
					  <input name="business_structure" type="radio" id="Option_19" value="5">
					 <?php } ?>
                    <label for="Option_19">S-Corp</label>
                  </div>
                  <div class="radio">
				   <?php if($planIntro->business_structure=='6'){?>
                    <input name="business_structure" type="radio" id="Option_20" value="6" checked="checked">
					 <?php } else { ?>
					  <input name="business_structure" type="radio" id="Option_20" value="6">
					 <?php } ?>
                    <label for="Option_20">Not for Profit</label>
                  </div>
                </div>
              </div>
              <div class="col-md-12  pull-right new" style="display:none;">
                <div class="form-group">
                  <label class="h5"><strong class="questionTitle"><span class="numbering">12 &rarr;</span>What is the general SIC type of business you are planning to open?</strong></label>
                   <?php echo form_dropdown('general__sic_type_business', $general__sic_type_business,$planIntro->general__sic_type_business, array('class' => 'form-control', 'id' => 'country' )); ?> 
                </div>
              </div>
              <div class="col-md-12  pull-right existing" style="display:none;">
                <div class="form-group">
                  <label class="h5"><strong class="questionTitle"> <span class="numbering">13 &rarr;</span>What is the general SIC type of business you own?</strong></label>
				  
				   <?php echo form_dropdown('general_sic_type_business_own', $general__sic_type_business,$planIntro->general_sic_type_business_own, array('class' => 'form-control', 'id' => 'country')); ?> 
                  
                </div>
              </div>
              <div class="col-md-12  pull-right 106">
                <div class="form-group">
                  <label class="h5"><strong class="questionTitle"> <span class="numbering">14 &rarr;</span>Which further describes your business?</strong></label>
				  
				  <?php echo form_dropdown('further_describe_business', $general__sic_type_business,$planIntro->further_describe_business, array('class' => 'form-control', 'id' => 'country')); ?> 
				  
                 
                </div>
              </div>
              <div class="col-md-12  pull-right 107">
                <div class="form-group">
                  <label class="h5">
                  <strong class="questionTitle"> <span class="numbering">15 &rarr;</span>Are you planning to sell a product, service or both?</strong>
                  <div id="errordiv6" style="margin: -23px 0px 0px 265px;  position: absolute;"></div>
                  </label>
                  <div class="radio">
				  <?php if($planIntro->planning_to_sell=='1'){?>
                    <input name="planning_to_sell" type="radio" id="Option_21" value="1" checked="checked">
				  <?php } else {?>
				  <input name="planning_to_sell" type="radio" id="Option_21" value="1">
				  <?php } ?>
                    <label for="Option_21">Products Only</label>
                  </div>
                  <div class="radio">
				   <?php if($planIntro->planning_to_sell=='2'){?>
                    <input name="planning_to_sell" type="radio" id="Option_22" value="2" checked="checked">
					  <?php } else {?>
					  
					  <input name="planning_to_sell" type="radio" id="Option_22" value="2" >
					  <?php } ?>
                    <label for="Option_22">Services Only</label>
                  </div>
                  <div class="radio">
				   <?php if($planIntro->planning_to_sell=='3'){?>
                    <input name="planning_to_sell" type="radio" id="Option_23" value="3" checked="checked">
				   <?php } else { ?>
				    <input name="planning_to_sell" type="radio" id="Option_23" value="3">
				   <?php } ?>
                    <label for="Option_23">Both Products & Services</label>
                  </div>
                </div>
              </div>
              <div class="col-md-12  pull-right 108">
                <div class="form-group">
                  <label class="h5">
                  <strong class="questionTitle"> <span class="numbering">16 &rarr;</span>What type of opportunity is this ?
                  <div id="errordiv" style="margin: -29px 0px 0px 343px;  position: absolute;"></div>
                  </label>
                  <div class="c-inputs-stacked">
				    <div class="checkbox">
					<?php
                   $a=explode(',', $planIntro->type_of_opportunity);
					
					if(in_array("1",$a)){ ?>
                    <input type="checkbox" id="checkbox_890" name="type_of_opportunity[]" value="1" checked="checked">
					<?php } else { ?>
					 <input type="checkbox" id="checkbox_890" name="type_of_opportunity[]" value="1">
					<?php } ?>
                    <label for="checkbox_890" class="block">Full-time</label></div>
					 <div class="checkbox">
					<?php  if(in_array("2",$a)){ ?>
                    <input type="checkbox" id="checkbox_901" name="type_of_opportunity[]" value="2" checked="checked">
					<?php } else { ?>
					 <input type="checkbox" id="checkbox_901" name="type_of_opportunity[]" value="2">
					<?php } ?>
                    <label for="checkbox_901" class="block">Part-time</label>
					</div>
					 <div class="checkbox">
					 <?php  if(in_array("3",$a)){ ?>
                    <input type="checkbox" id="checkbox_012" name="type_of_opportunity[]" value="3" checked="checked">
					<?php } else { ?>
					 <input type="checkbox" id="checkbox_012" name="type_of_opportunity[]" value="3">
					<?php } ?>
                    <label for="checkbox_012" class="block">Seasonal</label></div>
					 <div class="checkbox">
					 <?php  if(in_array("4",$a)){ ?>
                    <input type="checkbox" id="checkbox_01211" name="type_of_opportunity[]" value="4" checked="checked">
					<?php } else { ?>
					 <input type="checkbox" id="checkbox_01211" name="type_of_opportunity[]" value="4">
					<?php } ?>
                    <label for="checkbox_01211" class="block">Year round</label></div>
                  </div>
                </div>
              </div>
              <div class="col-md-12  pull-right 109">
                <div class="form-group">
                  <label class="h5">
                  <strong class="questionTitle"> <span class="numbering">17 &rarr;</span>What is your product/service positioning ?
                  <div id="errordiv7" style="margin: -23px 0px 0px 265px;  position: absolute;"></div>
                  </label>
                  <div class="c-inputs-stacked">
				  <div class="checkbox">
				  <?php
                   $b=explode(',', $planIntro->product_service);
						
					if(in_array("1",$b)){ ?>
                    <input type="checkbox" id="checkbox_1" name="product_service[]" value="1" checked="checked">
					<?php } else {?>
					 <input type="checkbox" id="checkbox_1" name="product_service[]" value="1">
					<?php } ?>
                    <label for="checkbox_1" class="block">Commodity</label></div>
					<div class="checkbox">
					<?php if(in_array("2",$b)){ ?>
                    <input type="checkbox" id="checkbox_2" name="product_service[]" value="2" checked="checked">
					<?php } else {?>
					<input type="checkbox" id="checkbox_2" name="product_service[]" value="2">
					<?php } ?>
                    <label for="checkbox_2" class="block">Mass Appeal</label></div>
					<div class="checkbox">
					<?php if(in_array("3",$b)){ ?>
                    <input type="checkbox" id="checkbox_3" name="product_service[]" value="3" checked="checked">
					<?php } else { ?>
					 <input type="checkbox" id="checkbox_3" name="product_service[]" value="3">
					<?php } ?>
                    <label for="checkbox_3" class="block">Premium</label></div>
                  </div>
                </div>
              </div>
              <div class="col-md-12  pull-right 110">
                <div class="form-group">
                  <label class="h5">
                  <strong class="questionTitle"> <span class="numbering">18 &rarr;</span>Who is your business targeting?</strong>
                  <div id="errordiv8" style="margin: -23px 0px 0px 265px;  position: absolute;"></div>
                  </label>
                  <div class="radio">
				   <?php if($planIntro->who_business_targeting=='1'){?>
                    <input name="who_business_targeting" type="radio" id="Option_61" value="1"  checked="checked">
				   <?php } else { ?>
				    <input name="who_business_targeting" type="radio" id="Option_61" value="1">
				   <?php } ?>
                    <label for="Option_61">Consumers Only</label>
                  </div>
                  <div class="radio">
				  <?php if($planIntro->who_business_targeting=='2'){?>
                    <input name="who_business_targeting" type="radio" id="Option_71" value="2" checked="checked">
				  <?php } else { ?>
				  <input name="who_business_targeting" type="radio" id="Option_71" value="2">
				  <?php } ?>
                    <label for="Option_71">Businesses Only</label>
                  </div>
                  <div class="radio">
				   <?php if($planIntro->who_business_targeting=='3'){?>
                    <input name="who_business_targeting" type="radio" id="Option_81" value="2" checked="checked">
				   <?php } else {?>
				   <input name="who_business_targeting" type="radio" id="Option_81" value="2">
				   <?php } ?>
                    <label for="Option_81">Both Consumers & Businesses</label>
                  </div>
                </div>
              </div>
              <div class="col-md-12  pull-right 110">
                <div class="form-group">
                  <label class="h5">
                  <strong class="questionTitle"> <span class="numbering">19 &rarr;</span>How is your target market defined?
                  <div id="errordiv9" style="margin: -23px 0px 0px 265px;  position: absolute;"></div>
                  </label>
                  <div class="c-inputs-stacked">
				  <div class="checkbox">
				  <?php
                   $c=explode(',', $planIntro->target_market_defined);
						
					if(in_array("1",$c)){ ?>
                    <input type="checkbox" id="checkbox_4" name="target_market_defined[]" value="1" checked="checked">
					<?php } else{ ?>
					<input type="checkbox" id="checkbox_4" name="target_market_defined[]" value="1">
					<?php } ?>
                    <label for="checkbox_4" class="block">Geographically</label></div>
					<div class="checkbox">
					<?php if(in_array("2",$c)){ ?>
                    <input type="checkbox" id="checkbox_5" name="target_market_defined[]" value="2" checked="checked">
					<?php }  else { ?>
					<input type="checkbox" id="checkbox_5" name="target_market_defined[]" value="2">
					<?php } ?>
                    <label for="checkbox_5" class="block">Audience Type (Adults, Ethnic, etc)</label></div>
					<div class="checkbox">
					<?php if(in_array("3",$c)){ ?>
                    <input type="checkbox" id="checkbox_6" name="target_market_defined[]" value="3" checked="checked">
					<?php } else { ?>
					 <input type="checkbox" id="checkbox_6" name="target_market_defined[]" value="3">
					<?php } ?>
                    <label for="checkbox_6" class="block">Web</label></div>
                  </div>
                </div>
              </div>
            </div>
          </div>
          <div class="clearfix"></div>
		  <div class="col-md-12">
            <button class="btn btn-success btn-large" type="button" name="submit_step1" id="step_next" style="float: right;"> Next <i class="fa fa-chevron-right"></i> </button>
          </div>
		   <div class="clearfix"></div>
		   <div class="clearfix"></div>
		   
		    <div class="col-md-12">
            <hr style="border-color:#1e88e5; border-width:3px; margin-top: -42px;">
          </div>
		   
</div><!-- first div close -->



 <div id="second" style="display:none;">
		 
		  
          <div class="clearfix"></div>
          <div class="col-xl-6 col-12 pull-right">
            <p>Your description of your business should be quite extensive, outlining your product or service, the customer, the market, the marketing strategy that you will use and the objectives that the marketing strategy strives to achieve. Having read your Executive Summary, the reader should have a good idea of the products and services you are selling, why people need and want them and what impact you expect to have on the market.</p>
            <a data-toggle="modal" data-target="#myModal" class="popup-with-form label label-success"><i class="fa fa-lightbulb-o"></i> Example By Plan Labs</a> </div>
          <div class="col-xl-6 col-12 pull-left">
            <label class="h5"><strong>Please describe your business:</strong></label>
            <textarea class="textarea" name="describe_your_business" id="editor" placeholder="Place some text here" style="width: 100%; height: 200px; font-size: 14px; line-height: 18px; border: 1px solid #dddddd; padding: 10px;"><?php echo $planIntro->describe_your_business; ?></textarea>
          </div>
          <div id="myModal" class="modal fade" role="dialog">
            <div class="modal-dialog modal-lg">
              <div class="modal-content">
                <div class="modal-header" style="background-color:#1e88e5; color:#FFFFFF;">
                  <button type="button" class="close" data-dismiss="modal">&times;</button>
                  <h4 class="modal-title">Describe your business :</h4>
                </div>
                <div class="modal-body  modal-md">
                  <p><strong> An example business description for a fictional graphic design studio:</strong></p>
                  <em>
                  <p>Ink House is a small graphic design studio based in Hertfordshire, England. Originally started in 2007 in the home office of founder Mary Wallace, today Ink House has three full time employees and services over thirty regular clients and some 400+ businesses with one-off design tasks.</p>
                  <p>Ink House has to date based much of its marketing off publicity from advertising within Hertfordshire district council marketing material. This advertising was provided free in exchange for heavily discounted design services and has created strong relationships with many businesses in the district, especially those that are involved with the Chamber of Commerce and the local community as a whole.</p>
                  <p>70% of revenue comes from brochure and flyer design, 20% from logo design/corporate branding and the remaining 10% from markup on printing supplies for clients. While business has been strong in previous years, profitability has decreased as SMEs around England have reduced spending and sought electronic marketing promotion that requires smaller designs without printing.</p>
                  <p>This marketing plan outlines the need to move relationships from primarily offline to online, connecting with our many clients and fans via social media and using this to drive a strong word of mouth plan. We will reward existing businesses for recommending us to their colleagues, even if no orders come of it.</p>
                  <p>This love and care for our customers will continue to form the basis of our marketing strategy, despite moving to a greater online presence. In addition to a strategy based around social activity and word of mouth, we will run a large DIY design promotion whereby businesses can submit designs that they have created in-house. The community will vote on which companies need a graphic designer the most, and the three most popular entries will each receive &pound;700.</p>
                  </em> </div>
              </div>
            </div>
          </div>
          <div class="clearfix"></div>
          <div class="col-xl-6 col-12 pull-right">
            <p>Where do you envisage the business being in one year, three years and five years? Your business vision may mention your revenue, market share or new markets to which you expand.</p>
            <a data-toggle="modal" data-target="#myModal1" class="label label-success"><i class="fa fa-lightbulb-o"></i> Example By Plan Labs</a> </div>
          <div class="col-xl-6 col-12 pull-left">
            <label class="h5" style="word-spacing: -2px;"><strong> Why do people need and/or want your [INSERT ANSWER FROM Basic Q17]? </strong></label>
            <textarea class="textarea" name="describe_why_people_need_and_want_your_product_service" id="editor1" placeholder="Place some text here" style="width: 100%; height: 200px; font-size: 14px; line-height: 18px; border: 1px solid #dddddd; padding: 10px;"><?php echo $planIntro->describe_why_people_need_and_want_your_product_service; ?></textarea>
          </div>
          <div id="myModal1" class="modal fade" role="dialog">
            <div class="modal-dialog modal-lg">
              <div class="modal-content">
                <div class="modal-header" style="background-color:#1e88e5; color:#FFFFFF;">
                  <button type="button" class="close" data-dismiss="modal">&times;</button>
                  <h4 class="modal-title">Describe your business :</h4>
                </div>
                <div class="modal-body  modal-md">
                  <p><strong> An example entry for this question for Plan Lab is:</strong></p>
                  <em>
                  <p>Plan Lab meets the needs of business owners around the world that don't have access to specialist marketing advice or knowledge within their business, but have the desire to learn and become good marketers. The key reasons that we believe Plan Lab will become a profitable, viable product are:</p>
                  </em>
                  <ul>
                    <em>
                    <li>A single hour of professional small business consulting can often cost more than a Plan Lab account.</li>
                    <li>Most small business owners start their business because they're good at what they do, but possess little marketing training or knowledge.</li>
                    <li>Most small business owners still have a lot of marketing headaches and are not confident in the decisions they make or what marketing promotions to try.</li>
                    <li>Our key competitor's software is not available on Mac and as a result, is unusable by a significant portion of the market</li>
                    <li>Many are disillusioned with our key competitor's software as the marketing plan writing process is not as easy as it could or should be, so they look for other software alternatives.</li>
                    <li>Relatively little competition exists in the marketing plan software market.</li>
                    </em>
                  </ul>
                </div>
              </div>
            </div>
          </div>
          <div class="clearfix"></div>
          <div class="col-xl-6 col-12 pull-right">
            <p>We prefer to bullet point our goals. These drive your ambition and help to show the reader what you want to achieve.</p>
            <a  data-toggle="modal" data-target="#myModal3" class="label label-success"><i class="fa fa-lightbulb-o"></i> Example By Plan Labs</a> </div>
          <div class="col-xl-6 col-12 pull-left">
            <label class="h5"><strong>List your goals :</strong></label>
            <textarea class="textarea" name="list_your_goals" id="editor2" placeholder="Place some text here" style="width: 100%; height: 200px; font-size: 14px; line-height: 18px; border: 1px solid #dddddd; padding: 10px;"><?php echo $planIntro->list_your_goals; ?></textarea>
			  <input type="hidden" name="planIdStep1" value="<?php echo $planIntro->id; ?>" />
          </div>
          <div id="myModal3" class="modal fade" role="dialog">
            <div class="modal-dialog modal-lg">
              <div class="modal-content">
                <div class="modal-header" style="background-color:#1e88e5; color:#FFFFFF;">
                  <button type="button" class="close" data-dismiss="modal">&times;</button>
                  <h4 class="modal-title">Describe your business :</h4>
                </div>
                <div class="modal-body  modal-md">
                  <p><strong> Our goals in the next two years are to:</strong></p>
                  <ul>
                    <li>Become one of the three most popular accountants in inner-city Boston.</li>
                    <li>Grow revenue by 70%.</li>
                    <li>Become recognized as the specialists in cloud-based accounting software packages.</li>
                    <li>Establish a customer base of tech-savvy clients who appreciate a modern brand and approach to accounting.</li>
                    <li>Have the largest social media following of any account in Boston.</li>
                  </ul>
                </div>	
              </div>
            </div>
          </div>
          <div style="height:300px;">&nbsp;</div>
		   <div class="clearfix"></div>
          <div class="col-md-12">
		   <button class="btn btn-success btn-large" type="button" name="submit_step1" id="back_step1" value="Save &amp; Continue" style="float: left;"> <i class="fa fa-chevron-left"></i> Back  </button>
            <button class="btn btn-success btn-large" type="submit" name="submit_step1" value="Save &amp; Continue" style="float: right;"> Save &amp; Next <i class="fa fa-chevron-right"></i> </button>
          </div>
         
          
		  </div><!-- second div -->
		  
          <?php }}else{ ?>
          <div class="note pull-right">
            <label>Please Note Here:</label>
            <br/>
            <textarea name="noteStep1" class="form-control input-lg" style="width:100%; background:#fff;"></textarea>
          </div>
          <div class="col-md-7">
            <p>The Executive Summary is often the only page that your bank or potential investors will read. It has the potential to make or break your ambition so put a lot of time into perfecting it. Include all of the keys to your success and your projected outcomes</p>
          </div>
          <div class="col-md-12">
            <hr style="border-color:#1e88e5; border-width:3px;"/>
          </div>
		  
		  <div id="first">
          <div class="col-md-12">
            <div class="col-md-9">
              <div class="col-md-12  pull-right 101">
                <div class="form-group">
                  <label class="h5">
                  <strong class="questionTitle"><span class="numbering">1 &rarr;</span> Is this a new or existing business?</strong>
                  <div id="errordiv1" style="margin: -23px 0px 0px 265px;  position: absolute;"></div>
                  </label>
                  <div class="radio">
                    <input name="new_exi" type="radio" id="Option_1" value="New">
                    <label for="Option_1">New</label>
                  </div>
                  <div class="radio">
                    <input name="new_exi" type="radio" id="Option_2" value="Existing">
                    <label for="Option_2">Existing</label>
                  </div>
                </div>
              </div>
              <div class="col-md-12  pull-right 102">
                <div class="form-group">
                  <label class="h5"><strong class="questionTitle"><span class="numbering">2 &rarr;</span> What is the name of the business?</strong></label>
                  <input name="business_title" type="text" class="form-control input-lg" placeholder=" Your business title :" autocomplete="off">
                </div>
              </div>
              <div class="col-md-12  pull-right 103">
                <div class="form-group">
                  <label class="h5"><strong class="questionTitle"><span class="numbering">3 &rarr;</span> What is the physical address of the business?</strong></label>
                  <input name="physical_address" type="text" class="form-control input-lg" placeholder=" Your physical address :" autocomplete="off">
                </div>
              </div>
              <div class="col-md-12  pull-right 103">
                <div class="form-group">
                  <label class="h5"><strong class="questionTitle"><span class="numbering">4 &rarr;</span> In what country will the business be located?</strong></label>
                  <?php echo form_dropdown('country', $country,'', array('class' => 'form-control', 'id' => 'country', 'onchange' => 'getStates();')); ?> </div>
              </div>
              <div class="col-md-12  pull-right 103">
                <div class="form-group">
                  <label class="h5"><strong class="questionTitle"><span class="numbering">5 &rarr;</span> What is the street address of the business?</strong></label>
                  <input name="street" type="text" class="form-control input-lg" placeholder=" Your street address :" autocomplete="off">
                </div>
              </div>
              <div class="col-md-12  pull-right 103">
                <div class="form-group">
                  <label class="h5"><strong class="questionTitle"><span class="numbering">6 &rarr;</span> In what city?</strong></label>
                  <input name="city" type="text" class="form-control input-lg" placeholder=" Your city :" autocomplete="off">
                </div>
              </div>
              <div class="col-md-12  pull-right 103">
                <div class="form-group">
                  <label class="h5"><strong class="questionTitle"><span class="numbering">7 &rarr;</span> State</strong></label>
                  <select class="form-control" name="states" id="states">
                    <option>Select State</option>
                  </select>
                </div>
              </div>
              <div class="col-md-12  pull-right 103">
                <div class="form-group">
                  <label class="h5"><strong class="questionTitle"><span class="numbering">8 &rarr;</span> Zipcode?</strong></label>
                  <input name="zipcode" type="text" class="form-control input-lg" placeholder="Your Zipcode :" autocomplete="off">
                </div>
              </div>
              <div class="col-md-12  pull-right new" style="display:none;">
                <div class="form-group">
                  <label class="h5">
                  <strong class="questionTitle"><span class="numbering">9 &rarr;</span> What type of business are you planning?</strong>
                  <div id="errordiv2" style="margin: -23px 0px 0px 265px;  position: absolute;"></div>
                  </label>
                  <div class="radio">
                    <input name="business_type" type="radio" id="Option_3" value="1">
                    <label for="Option_3">Web based Only</label>
                  </div>
                  <div class="radio">
                    <input name="business_type" type="radio" id="Option_4" value="2">
                    <label for="Option_4">Physical Location Business Only</label>
                  </div>
                  <div class="radio">
                    <input name="business_type" type="radio" id="Option_5" value="3">
                    <label for="Option_5">Both Web & Physical  Based Business</label>
                  </div>
                </div>
              </div>
              <div class="col-md-12  pull-right existing" style="display:none;">
                <div class="form-group">
                  <label class="h5">
                  <strong class="questionTitle"> <span class="numbering">10 &rarr;</span>What type of business do you own?</strong>
                  <div id="errordiv3" style="margin: -23px 0px 0px 265px;  position: absolute;"></div>
                  </label>
                  <div class="radio">
                    <input name="business_type_own" type="radio" id="Option_6" value="1" >
                    <label for="Option_6">Web based Only</label>
                  </div>
                  <div class="radio">
                    <input name="business_type_own" type="radio" id="Option_7" value="2">
                    <label for="Option_7">Physical Location Business Only</label>
                  </div>
                  <div class="radio">
                    <input name="business_type_own" type="radio" id="Option_8" value="3">
                    <label for="Option_8">Both Web & Physical  Based Business</label>
                  </div>
                </div>
              </div>
              <div class="col-md-12  pull-right new" style="display:none;">
                <div class="form-group">
                  <label class="h5">
                  <strong class="questionTitle"><span class="numbering">11 &rarr;</span>What type of business structure do you plan?</strong>
                  <div id="errordiv4" style="margin: -23px 0px 0px 265px;  position: absolute;"></div>
                  </label>
                  <div class="radio">
                    <input name="business_structure_plan" type="radio" id="Option_9" value="1" >
                    <label for="Option_9">Sole Proprietorship</label>
                  </div>
                  <div class="radio">
                    <input name="business_structure_plan" type="radio" id="Option_10" value="2">
                    <label for="Option_10">Partnership</label>
                  </div>
                  <div class="radio">
                    <input name="business_structure_plan" type="radio" id="Option_11" value="3">
                    <label for="Option_11">Limited Liability Corporation (LLC)</label>
                  </div>
                  <div class="radio">
                    <input name="business_structure_plan" type="radio" id="Option_12" value="4">
                    <label for="Option_12">C-Corp</label>
                  </div>
                  <div class="radio">
                    <input name="business_structure_plan" type="radio" id="Option_13" value="5">
                    <label for="Option_13">S-Corp</label>
                  </div>
                  <div class="radio">
                    <input name="business_structure_plan" type="radio" id="Option_14" value="6">
                    <label for="Option_14">Not for Profit</label>
                  </div>
                </div>
              </div>
              <div class="col-md-12  pull-right existing" style="display:none;">
                <div class="form-group">
                  <label class="h5">
                  <strong class="questionTitle"> <span class="numbering">11 &rarr;</span>What is your business structure?</strong>
                  <div id="errordiv5" style="margin: -23px 0px 0px 265px;  position: absolute;"></div>
                  </label>
                  <div class="radio">
                    <input name="business_structure" type="radio" id="Option_15" value="1">
                    <label for="Option_15">Sole Proprietorship</label>
                  </div>
                  <div class="radio">
                    <input name="business_structure" type="radio" id="Option_16" value="2">
                    <label for="Option_16">Partnership</label>
                  </div>
                  <div class="radio">
                    <input name="business_structure" type="radio" id="Option_17" value="3">
                    <label for="Option_17">Limited Liability Corporation (LLC)</label>
                  </div>
                  <div class="radio">
                    <input name="business_structure" type="radio" id="Option_18" value="4">
                    <label for="Option_18">C-Corp</label>
                  </div>
                  <div class="radio">
                    <input name="business_structure" type="radio" id="Option_19" value="5">
                    <label for="Option_19">S-Corp</label>
                  </div>
                  <div class="radio">
                    <input name="business_structure" type="radio" id="Option_20" value="6">
                    <label for="Option_20">Not for Profit</label>
                  </div>
                </div>
              </div>
              <div class="col-md-12  pull-right new" style="display:none;">
                <div class="form-group">
                  <label class="h5"><strong class="questionTitle"><span class="numbering">12 &rarr;</span>What is the general SIC type of business you are planning to open?</strong></label>
				   <?php echo form_dropdown('general__sic_type_business', $general__sic_type_business,'', array('class' => 'form-control', 'id' => 'country' )); ?> 
				  
                 
                </div>
              </div>
              <div class="col-md-12  pull-right existing" style="display:none;">
                <div class="form-group">
                  <label class="h5"><strong class="questionTitle"> <span class="numbering">13 &rarr;</span>What is the general SIC type of business you own?</strong></label>
				  
				   <?php echo form_dropdown('general_sic_type_business_own', $general__sic_type_business,'', array('class' => 'form-control', 'id' => 'country')); ?> 
                  
                </div>
              </div>
              <div class="col-md-12  pull-right 106">
                <div class="form-group">
                  <label class="h5"><strong class="questionTitle"> <span class="numbering">14 &rarr;</span>Which further describes your business?</strong></label>
            
          <?php echo form_dropdown('further_describe_business', $general__sic_type_business,'', array('class' => 'form-control', 'id' => 'country' )); ?> 
   
                </div>
              </div>
              <div class="col-md-12  pull-right 107">
                <div class="form-group">
                  <label class="h5">
                  <strong class="questionTitle"> <span class="numbering">15 &rarr;</span>Are you planning to sell a product, service or both?</strong>
                  <div id="errordiv6" style="margin: -23px 0px 0px 265px;  position: absolute;"></div>
                  </label>
                  <div class="radio">
                    <input name="planning_to_sell" type="radio" id="Option_21" value="1">
                    <label for="Option_21">Products Only</label>
                  </div>
                  <div class="radio">
                    <input name="planning_to_sell" type="radio" id="Option_22" value="2">
                    <label for="Option_22">Services Only</label>
                  </div>
                  <div class="radio">
                    <input name="planning_to_sell" type="radio" id="Option_23" value="3">
                    <label for="Option_23">Both Products & Services</label>
                  </div>
                </div>
              </div>
              <div class="col-md-12  pull-right 108">
                <div class="form-group">
                  <label class="h5">
                  <strong class="questionTitle"> <span class="numbering">16 &rarr;</span>What type of opportunity is this ?
                  <div id="errordiv" style="margin: -29px 0px 0px 343px;  position: absolute;"></div>
                  </label>
                  <div class="c-inputs-stacked">
				    <div class="checkbox">
                    <input type="checkbox" id="checkbox_890" name="type_of_opportunity[]" value="1">
                    <label for="checkbox_890" class="block">Full-time</label></div>
					 <div class="checkbox">
                    <input type="checkbox" id="checkbox_901" name="type_of_opportunity[]" value="2">
                    <label for="checkbox_901" class="block">Part-time</label>
					</div>
					 <div class="checkbox">
                    <input type="checkbox" id="checkbox_012" name="type_of_opportunity[]" value="3">
                    <label for="checkbox_012" class="block">Seasonal</label></div>
					 <div class="checkbox">
                    <input type="checkbox" id="checkbox_012123" name="type_of_opportunity[]" value="4">
                    <label for="checkbox_012123" class="block">Year round</label></div>
                  </div>
                </div>
              </div>
              <div class="col-md-12  pull-right 109">
                <div class="form-group">
                  <label class="h5">
                  <strong class="questionTitle"> <span class="numbering">17 &rarr;</span>What is your product/service positioning ?
                  <div id="errordiv7" style="margin: -23px 0px 0px 265px;  position: absolute;"></div>
                  </label>
                  <div class="c-inputs-stacked">
				  <div class="checkbox">
                    <input type="checkbox" id="checkbox_1" name="product_service[]" value="1">
                    <label for="checkbox_1" class="block">Commodity</label></div>
					<div class="checkbox">
                    <input type="checkbox" id="checkbox_2" name="product_service[]" value="2">
                    <label for="checkbox_2" class="block">Mass Appeal</label></div>
					<div class="checkbox">
                    <input type="checkbox" id="checkbox_3" name="product_service[]" value="3">
                    <label for="checkbox_3" class="block">Premium</label></div>
                  </div>
                </div>
              </div>
              <div class="col-md-12  pull-right 110">
                <div class="form-group">
                  <label class="h5">
                  <strong class="questionTitle"> <span class="numbering">18 &rarr;</span>Who is your business targeting?</strong>
                  <div id="errordiv8" style="margin: -23px 0px 0px 265px;  position: absolute;"></div>
                  </label>
                  <div class="radio">
                    <input name="who_business_targeting" type="radio" id="Option_61" value="1">
                    <label for="Option_61">Consumers Only</label>
                  </div>
                  <div class="radio">
                    <input name="who_business_targeting" type="radio" id="Option_71" value="2">
                    <label for="Option_71">Businesses Only</label>
                  </div>
                  <div class="radio">
                    <input name="who_business_targeting" type="radio" id="Option_81" value="2">
                    <label for="Option_81">Both Consumers & Businesses</label>
                  </div>
                </div>
              </div>
              <div class="col-md-12  pull-right 110">
                <div class="form-group">
                  <label class="h5">
                  <strong class="questionTitle"> <span class="numbering">19 &rarr;</span>How is your target market defined?
                  <div id="errordiv9" style="margin: -23px 0px 0px 265px;  position: absolute;"></div>
                  </label>
                  <div class="c-inputs-stacked">
				  <div class="checkbox">
                    <input type="checkbox" id="checkbox_4" name="target_market_defined[]" value="1">
                    <label for="checkbox_4" class="block">Geographically</label></div>
					<div class="checkbox">
                    <input type="checkbox" id="checkbox_5" name="target_market_defined[]" value="2">
                    <label for="checkbox_5" class="block">Audience Type (Adults, Ethnic, etc)</label></div>
					<div class="checkbox">
                    <input type="checkbox" id="checkbox_6" name="target_market_defined[]" value="3">
                    <label for="checkbox_6" class="block">Web</label></div>
                  </div>
                </div>
              </div>
            </div>
          </div>
          <div class="clearfix"></div>
		  <div class="col-md-12">
            <button class="btn btn-success btn-large" type="button" name="submit_step1" id="step_next" style="float: right;"> Next <i class="fa fa-chevron-right"></i> </button>
          </div>
		   <div class="clearfix"></div>
		   <div class="clearfix"></div>
		   
		    <div class="col-md-12">
            <hr style="border-color:#1e88e5; border-width:3px; margin-top: -42px;">
          </div>
		   
</div><!-- first div close -->
          
		  
		  <div id="second" style="display:none;">
		 
		  
          <div class="clearfix"></div>
          <div class="col-xl-6 col-12 pull-right">
            <p>Your description of your business should be quite extensive, outlining your product or service, the customer, the market, the marketing strategy that you will use and the objectives that the marketing strategy strives to achieve. Having read your Executive Summary, the reader should have a good idea of the products and services you are selling, why people need and want them and what impact you expect to have on the market.</p>
            <a data-toggle="modal" data-target="#myModal" class="popup-with-form label label-success"><i class="fa fa-lightbulb-o"></i> Example By Plan Labs</a> </div>
          <div class="col-xl-6 col-12 pull-left">
            <label class="h5"><strong>Please describe your business:</strong></label>
            <textarea class="textarea" name="describe_your_business" id="editor" placeholder="Place some text here" style="width: 100%; height: 200px; font-size: 14px; line-height: 18px; border: 1px solid #dddddd; padding: 10px;"></textarea>
          </div>
          <div id="myModal" class="modal fade" role="dialog">
            <div class="modal-dialog modal-lg">
              <div class="modal-content">
                <div class="modal-header" style="background-color:#1e88e5; color:#FFFFFF;">
                  <button type="button" class="close" data-dismiss="modal">&times;</button>
                  <h4 class="modal-title">Describe your business :</h4>
                </div>
                <div class="modal-body  modal-md">
                  <p><strong> An example business description for a fictional graphic design studio:</strong></p>
                  <em>
                  <p>Ink House is a small graphic design studio based in Hertfordshire, England. Originally started in 2007 in the home office of founder Mary Wallace, today Ink House has three full time employees and services over thirty regular clients and some 400+ businesses with one-off design tasks.</p>
                  <p>Ink House has to date based much of its marketing off publicity from advertising within Hertfordshire district council marketing material. This advertising was provided free in exchange for heavily discounted design services and has created strong relationships with many businesses in the district, especially those that are involved with the Chamber of Commerce and the local community as a whole.</p>
                  <p>70% of revenue comes from brochure and flyer design, 20% from logo design/corporate branding and the remaining 10% from markup on printing supplies for clients. While business has been strong in previous years, profitability has decreased as SMEs around England have reduced spending and sought electronic marketing promotion that requires smaller designs without printing.</p>
                  <p>This marketing plan outlines the need to move relationships from primarily offline to online, connecting with our many clients and fans via social media and using this to drive a strong word of mouth plan. We will reward existing businesses for recommending us to their colleagues, even if no orders come of it.</p>
                  <p>This love and care for our customers will continue to form the basis of our marketing strategy, despite moving to a greater online presence. In addition to a strategy based around social activity and word of mouth, we will run a large DIY design promotion whereby businesses can submit designs that they have created in-house. The community will vote on which companies need a graphic designer the most, and the three most popular entries will each receive &pound;700.</p>
                  </em> </div>
              </div>
            </div>
          </div>
          <div class="clearfix"></div>
          <div class="col-xl-6 col-12 pull-right">
            <p>Where do you envisage the business being in one year, three years and five years? Your business vision may mention your revenue, market share or new markets to which you expand.</p>
            <a data-toggle="modal" data-target="#myModal1" class="label label-success"><i class="fa fa-lightbulb-o"></i> Example By Plan Labs</a> </div>
          <div class="col-xl-6 col-12 pull-left">
            <label class="h5" style="word-spacing: -2px;"><strong> Why do people need and/or want your [INSERT ANSWER FROM Basic Q17]? </strong></label>
            <textarea class="textarea" name="describe_why_people_need_and_want_your_product_service" id="editor1" placeholder="Place some text here" style="width: 100%; height: 200px; font-size: 14px; line-height: 18px; border: 1px solid #dddddd; padding: 10px;"></textarea>
          </div>
          <div id="myModal1" class="modal fade" role="dialog">
            <div class="modal-dialog modal-lg">
              <div class="modal-content">
                <div class="modal-header" style="background-color:#1e88e5; color:#FFFFFF;">
                  <button type="button" class="close" data-dismiss="modal">&times;</button>
                  <h4 class="modal-title">Describe your business :</h4>
                </div>
                <div class="modal-body  modal-md">
                  <p><strong> An example entry for this question for Plan Lab is:</strong></p>
                  <em>
                  <p>Plan Lab meets the needs of business owners around the world that don't have access to specialist marketing advice or knowledge within their business, but have the desire to learn and become good marketers. The key reasons that we believe Plan Lab will become a profitable, viable product are:</p>
                  </em>
                  <ul>
                    <em>
                    <li>A single hour of professional small business consulting can often cost more than a Plan Lab account.</li>
                    <li>Most small business owners start their business because they're good at what they do, but possess little marketing training or knowledge.</li>
                    <li>Most small business owners still have a lot of marketing headaches and are not confident in the decisions they make or what marketing promotions to try.</li>
                    <li>Our key competitor's software is not available on Mac and as a result, is unusable by a significant portion of the market</li>
                    <li>Many are disillusioned with our key competitor's software as the marketing plan writing process is not as easy as it could or should be, so they look for other software alternatives.</li>
                    <li>Relatively little competition exists in the marketing plan software market.</li>
                    </em>
                  </ul>
                </div>
              </div>
            </div>
          </div>
          <div class="clearfix"></div>
          <div class="col-xl-6 col-12 pull-right">
            <p>We prefer to bullet point our goals. These drive your ambition and help to show the reader what you want to achieve.</p>
            <a  data-toggle="modal" data-target="#myModal3" class="label label-success"><i class="fa fa-lightbulb-o"></i> Example By Plan Labs</a> </div>
          <div class="col-xl-6 col-12 pull-left">
            <label class="h5"><strong>List your goals :</strong></label>
            <textarea class="textarea" name="list_your_goals" id="editor2" placeholder="Place some text here" style="width: 100%; height: 200px; font-size: 14px; line-height: 18px; border: 1px solid #dddddd; padding: 10px;"></textarea>
          </div>
          <div id="myModal3" class="modal fade" role="dialog">
            <div class="modal-dialog modal-lg">
              <div class="modal-content">
                <div class="modal-header" style="background-color:#1e88e5; color:#FFFFFF;">
                  <button type="button" class="close" data-dismiss="modal">&times;</button>
                  <h4 class="modal-title">Describe your business :</h4>
                </div>
                <div class="modal-body  modal-md">
                  <p><strong> Our goals in the next two years are to:</strong></p>
                  <ul>
                    <li>Become one of the three most popular accountants in inner-city Boston.</li>
                    <li>Grow revenue by 70%.</li>
                    <li>Become recognized as the specialists in cloud-based accounting software packages.</li>
                    <li>Establish a customer base of tech-savvy clients who appreciate a modern brand and approach to accounting.</li>
                    <li>Have the largest social media following of any account in Boston.</li>
                  </ul>
                </div>	
              </div>
            </div>
          </div>
          <div style="height:300px;">&nbsp;</div>
		   <div class="clearfix"></div>
          <div class="col-md-12">
		   <button class="btn btn-success btn-large" type="button" name="submit_step1" id="back_step1" value="Save &amp; Continue" style="float: left;"> <i class="fa fa-chevron-left"></i> Back  </button>
            <button class="btn btn-success btn-large" type="submit" name="submit_step1" value="Save &amp; Continue" style="float: right;"> Save &amp; Next <i class="fa fa-chevron-right"></i> </button>
          </div>
          <?php } ?>
          <?php echo form_close(); ?> 
		  </div><!-- second div -->
      </div>
      </div>
    </div>
  </section>
</div>
<style type="text/css">
.form-control{ margin-bottom:12px;}
.clearfix{ padding:42px 42px;}
.h5{ color:#000; font-size:15px;}
</style>
<!-- jQuery library -->
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>


<script>
	$(document).ready(function(){
	
	$('#frmStep1').validate({
		
		rules:{
		      new_exi:{
				  required:true,
			  },
			  business_title:{
				  required:true,
			  },
			  physical_address:{
				  required:true,
			  },
			  country:{
				  required:true,
			  },
			  street:{
				  required:true,
			  },
			  city:{
				  required:true,
			  },
			  zipcode:{
				  required:true,
				 
			  },
			  business_type:{
				  required:true,
				  
			  },
			  business_type_own:{
				  required:true,
			  },
			   business_structure_plan:{
				  required:true,
			  },
			   business_structure:{
				  required:true,
			  },
			 general__sic_type_business:{
				  required:true,
			  },
			   general_sic_type_business_own:{
				  required:true,
			  },
			   further_describe_business:{
				  required:true,
			  },
			   planning_to_sell:{
				  required:true,
			  },
			   'type_of_opportunity[]':{
				  required:true,
			  },
			 'product_service[]':{
				  required:true,
			  },
			  who_business_targeting:{
				  required:true,
			  },
			  'target_market_defined[]':{
				  required:true,
			  },
			  describe_your_business:{
				  required:true,
			  },
			  describe_why_people_need_and_want_your_product_service:{
				  required:true,
			  },
			  list_your_goals:{
				  required:true,
			  }
			 
			 
		},
		errorPlacement: function(error, element) {
    if (element.attr("name") == "type_of_opportunity[]" )
        error.appendTo("#errordiv");
    else if  (element.attr("name") == "new_exi" )
        error.insertAfter("#errordiv1");
	else if  (element.attr("name") == "business_type" )
        error.insertAfter("#errordiv2");
	else if  (element.attr("name") == "business_type_own" )
        error.insertAfter("#errordiv3");
	else if  (element.attr("name") == "business_structure_plan" )
        error.insertAfter("#errordiv4");
	else if  (element.attr("name") == "business_structure" )
        error.insertAfter("#errordiv5");
	else if  (element.attr("name") == "planning_to_sell" )
        error.insertAfter("#errordiv6");
	else if  (element.attr("name") == "product_service[]" )
        error.insertAfter("#errordiv7");
	else if  (element.attr("name") == "who_business_targeting" )
        error.insertAfter("#errordiv8");
	else if  (element.attr("name") == "target_market_defined[]" )
        error.insertAfter("#errordiv9");
    else
        error.insertAfter(element);	
}
	});
	
	
	});
	
	$('#step_next').click(function(e){
		
		
		$r=$('#frmStep1').valid();
		if($r == false)
		{
			    e.preventDefault();
			    $('#frmStep1').valid();
				alert('Please fill all required field Properly.');
		}else {
			$('#second').show();
			$('#first').hide();
			
		}
		
		
	});
	
	</script>
	
	
	<script>
	
	$("#step_next").on("click", function() {
		
        $('html,body').animate({
        scrollTop: $("#second").offset().top},
        'slow');
    });
	
	</script>

<script>

$('#back_step1').click(function(){
	
	$('#second').hide();
			$('#first').show();
});
</script>
	
	
<script>
	$(document).ready(function(){
	
	$('#frmStep1').validate({
		
		rules:{
		      new_exi:{
				  required:true,
			  },
			  business_title:{
				  required:true,
			  },
			  physical_address:{
				  required:true,
			  },
			  country:{
				  required:true,
			  },
			  street:{
				  required:true,
			  },
			  city:{
				  required:true,
			  },
			  zipcode:{
				  required:true,
				 
			  },
			  business_type:{
				  required:true,
				  
			  },
			  business_type_own:{
				  required:true,
			  },
			   business_structure_plan:{
				  required:true,
			  },
			   business_structure:{
				  required:true,
			  },
			 general__sic_type_business:{
				  required:true,
			  },
			   general_sic_type_business_own:{
				  required:true,
			  },
			   further_describe_business:{
				  required:true,
			  },
			   planning_to_sell:{
				  required:true,
			  },
			   'type_of_opportunity[]':{
				  required:true,
			  },
			 'product_service[]':{
				  required:true,
			  },
			  who_business_targeting:{
				  required:true,
			  },
			  'target_market_defined[]':{
				  required:true,
			  },
			  describe_your_business:{
				  required:true,
			  },
			  describe_why_people_need_and_want_your_product_service:{
				  required:true,
			  },
			  list_your_goals:{
				  required:true,
			  }
			 
			 
		},
		errorPlacement: function(error, element) {
    if (element.attr("name") == "type_of_opportunity[]" )
        error.appendTo("#errordiv");
    else if  (element.attr("name") == "new_exi" )
        error.insertAfter("#errordiv1");
	else if  (element.attr("name") == "business_type" )
        error.insertAfter("#errordiv2");
	else if  (element.attr("name") == "business_type_own" )
        error.insertAfter("#errordiv3");
	else if  (element.attr("name") == "business_structure_plan" )
        error.insertAfter("#errordiv4");
	else if  (element.attr("name") == "business_structure" )
        error.insertAfter("#errordiv5");
	else if  (element.attr("name") == "planning_to_sell" )
        error.insertAfter("#errordiv6");
	else if  (element.attr("name") == "product_service[]" )
        error.insertAfter("#errordiv7");
	else if  (element.attr("name") == "who_business_targeting" )
        error.insertAfter("#errordiv8");
	else if  (element.attr("name") == "target_market_defined[]" )
        error.insertAfter("#errordiv9");
    else
        error.insertAfter(element);	
}
	});
	
	
	});
	
	$('#frmStep1').submit(function(e){
		
		
		$r=$('#frmStep1').valid();
		if($r == false)
		{
			    e.preventDefault();
			    $('#frmStep1').valid();
		}
		
		
	});
	
	</script>
	
	
	<script>
	
	$("input[name='new_exi']").click(function(){
		
		if($("input[name='new_exi']:checked").val()=='New')
		{
			$('.new').show();
		}else{
			$('.new').hide();
		}
		
		if($("input[name='new_exi']:checked").val()=='Existing')
		{
			$('.existing').show();
		}else{
			$('.existing').hide();
		}
	});
	
	</script>
	
	
	<script>
	$(document).ready(function(){
		if ($("input[name='new_exi']").is(":checked")) {
		if($("input[name='new_exi']:checked").val()=='New')
		{
			$('.new').show();
		}else{
			$('.new').hide();
		}
		
		if($("input[name='new_exi']:checked").val()=='Existing')
		{
			$('.existing').show();
		}else{
			$('.existing').hide();
		}
		    
		}
		
	});
	
	</script>
	
	
<script type="text/javascript">
/*****************************************/   
var getStates = function () {
	var value = new Object();
	value.id = $('#country').val();
	var URL = "<?php echo base_url(); ?>";
	$.ajax({
		url: URL + 'ajax/states',
		type: 'POST',
		data: value,
		success: function (html) {
			$('#states').html(html);
		}
	});
};
</script>
