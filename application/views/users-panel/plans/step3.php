<style>

[type=radio]:checked, [type=radio]:not(:checked)
{
	    opacity: 1;
		left: unset;
}


</style>

<div class="content-wrapper" style="min-height: 549px;">
  <section class="content">
    <div class="box">
      <div class="box-header with-border">
        <h3 class="box-title">The Customer <small>( My Plans )</small></h3>
      </div>
      <?php echo form_open("plans/planStep3",array(""=>"frmStep3")); ?>
      <?php 
		    if(!empty($diagramData)){
			foreach($diagramData as $diagramData){
		  ?>
      <div class="box-body">
        <div class="box-body form-element">
          <div class="col-md-12">
            <?php $this->load->view('users-panel/plans/menu-top-bar'); ?>
          </div>
          <div class="col-md-12">
            <div class="note pull-right">
              <label>Please Note Here:</label>
              <br/>
              <textarea name="noteStep3" class="form-control input-lg" style="width:100%;background:#fff;"><?php echo $diagramData->customer_note; ?></textarea>
            </div>
            <p>There are different ways that you can look at customers. The people buying your product may differ by behaviour (loyalty, usage patterns, order size, whether they spread word of mouth), psychographics (values, attitudes and lifestyle), demographics (age, gender, ethnicity, income, family status) or geographic region.<br/>
              <br/>
              To get the most complete and accurate research, use a variety of methods such as speaking to the market directly, speaking to others in the industry and analysing industry reports and publications. Often the government census can reveal where the largest groups of your customer segments are.</p>
          </div>
        </div>
      </div>
      <div class="box-header with-border">
        <h3 class="box-title">The Customer <small>( My Plans )</small></h3>
      </div>
      <div class="box-body">
        <div class="box-body form-element">
          <div class="col-md-12">
            <p>As you think more about different customer segments that you can target and how they differ, describe their lifestyles, activities, values, needs, interests and opinions.<br/>
              For each customer segment that you can target, describe the segments typical: Demographic (as above), Location, Number of members in the segment, Estimated percentage of sales, What they want, How they use it, Support requirements, Price sensitivity, How to reach them, Value drivers and Decision process</p>
            <a href="#competitor" class="btn btn-primary pull-right" title="Add Competitor" id="button" data-toggle="modal"><i class="fa fa-plus"></i> Add Competitor</a>
            <div class="clearfix"></div>
          </div>
          <div class="col-md-12">
            <table width="100%" cellpadding="0" cellspacing="0" border="0" class="table table-bordered">
              <thead>
                <tr>
                  <th width="21%">Title</th>
                  <th width="70%">Description</th>
                  <th width="9%">Actions</th>
                </tr>
              </thead>
              <tbody id="custs_data">
                <tr id="none" class="">
                  <td colspan="5"><div class="alert alert-warning" align="center">Customers are not listed.!</div></td>
                </tr>
              </tbody>
            </table>
          </div>
          <div class="col-md-12">
            <hr style="border-color:#1e88e5; border-width:3px;"/>
          </div>
          <div class="clearfix"></div>
          <div class="col-xl-6 col-12 pull-left">
            <p>Discovering a narrowly defined ideal client from the very beginning will save months of wandering in the dark trying to be all things to all people. Targeting the best possible customers right from the beginning can save you a lot of time and money.</p>
            <p>Imagine a person that will fall in love with your product/service exactly because it meets their needs far better than anything else on offer. What does that customer look like? What do they do in their spare time? What are they looking for that your competitors haven't given them?</p>
            <p>By targeting your products and services to this ideal customer who will really love them, you will find it easier to convert sales and gain raving fans.</p>
            <a data-toggle="modal" data-target="#myModal" class="popup-with-form label label-success"><i class="fa fa-lightbulb-o"></i> Example By Plan Labs</a> </div>
          <div class="col-xl-6 col-12 pull-right">
            <label class="h5"><strong>Ideal Customer :</strong></label>
            <textarea name="ideal_customer" class="textarea" id="editor" placeholder="Place some text here" style="width: 100%; height: 200px; font-size: 14px; line-height: 18px; border: 1px solid #dddddd; padding: 10px;"><?php echo $diagramData->ideal_customer; ?></textarea>
          </div>
          <div id="myModal" class="modal fade" role="dialog">
            <div class="modal-dialog modal-lg">
              <div class="modal-content">
                <div class="modal-header" style="background-color:#1e88e5; color:#FFFFFF;">
                  <button type="button" class="close" data-dismiss="modal">&times;</button>
                  <h4 class="modal-title">Ideal Customer :</h4>
                </div>
                <div class="modal-body  modal-md">
                  <p><strong><br />
                    An ideal customer profile for a personal trainer might read:</strong></p>
                  <em>
                  <p>We will target our ideal customer before the general market. Our ideal customer can be profiled as:</p>
                  <ul>
                    <li>32-45 years old</li>
                    <li>Married in the past 5 years</li>
                    <li>Has neglected their health and fitness since being married</li>
                    <li>Not feeling as confident and sexy as they once did</li>
                    <li>Usually reads the health and wellbeing guide in the newspaper</li>
                    <li>Has previously held a gym membership but doesn't have the self-motivation to make it last</li>
                    <li>Sets a new year's resolution each year to get fit</li>
                    <li>Has a burning desire to wake up feeling happier each day</li>
                    <li>Works a traditional 9-5 job and only has time for exercise before dinner or before work</li>
                    <li>Is outgoing and prefers the company of others</li>
                  </ul>
                  <p>Rather than just targeting a general market of people who want to get fit, we have a profile of a customer that shows what they have struggled with in the market, what they ultimately care about and how they need to be emotionally targeted.</p>
                  <p>Using this, Bob's personal training business can develop before and after work group fitness classes, using the promise of keeping accountable and motivated by your personal trainer and the new friends that you'll meet. Get fit and feel sexy together and get back in pre-wedding shape!</p>
                  </em></div>
              </div>
            </div>
          </div>
          <div class="clearfix"></div>
          <div class="col-md-12">
            <button class="btn btn-success btn-large" type="submit" name="submit_step1" value="Save &amp; Continue" onclick="window.location.href='<?php echo base_url('plans/planStep4'); ?>'"> Save &amp; Continue <i class="fa fa-chevron-right"></i> </button>
          </div>
          <input type="hidden" name="planIdStep3" value="<?php echo $diagramData->id; ?>" />
        </div>
      </div>
      <?php } 
		   }else{ ?>
      <div class="box-body">
        <div class="box-body form-element">
          <div class="col-md-12">
            <?php $this->load->view('users-panel/plans/menu-top-bar'); ?>
          </div>
          <div class="col-md-12">
            <div class="note pull-right">
              <label>Please Note Here:</label>
              <br/>
              <textarea name="noteStep3" class="form-control input-lg" style="width:100%;background:#fff;"></textarea>
            </div>
            <p>There are different ways that you can look at customers. The people buying your product may differ by behaviour (loyalty, usage patterns, order size, whether they spread word of mouth), psychographics (values, attitudes and lifestyle), demographics (age, gender, ethnicity, income, family status) or geographic region.<br/>
              <br/>
              To get the most complete and accurate research, use a variety of methods such as speaking to the market directly, speaking to others in the industry and analysing industry reports and publications. Often the government census can reveal where the largest groups of your customer segments are.</p>
          </div>
        </div>
		
      </div>
	
	   <div class="box-body">
        <div class="box-body form-element">
		<div class="col-md-12">
            <hr style="border-color:#1e88e5; border-width:3px;"/>
          </div>
		  <div class="col-md-12">
				  <div class="col-md-3  pull-left" style="margin: -28px 0px 0px 0px; border-right: 3px solid;  border-color: #1e88e5;">
				  <br/>
				  <br/>
				  
				       <div class="col-md-12  pull-left">
									 <div class="form-group">
										 
										  <div class="c-inputs-stacked">
											<input type="checkbox" id="checkbox_101">
											<label for="checkbox_101" class="block">Age</label>
											<input type="checkbox" id="checkbox_102">
											<label for="checkbox_102" class="block">Gender</label>
											<input type="checkbox" id="checkbox_103">
											<label for="checkbox_103" class="block"> Geography </label>
											<input type="checkbox" id="checkbox_104">
											<label for="checkbox_104" class="block"> Income</label>
											<input type="checkbox" id="checkbox_105">
											<label for="checkbox_105" class="block"> Marital Status</label>
											<input type="checkbox" id="checkbox_106">
											<label for="checkbox_106" class="block"> Family size</label>
											<input type="checkbox" id="checkbox_107">
											<label for="checkbox_107" class="block"> Occupation</label>
											<input type="checkbox" id="checkbox_108">
											<label for="checkbox_108" class="block"> Language</label>
											<input type="checkbox" id="checkbox_109">
											<label for="checkbox_109" class="block"> Education</label>
											<input type="checkbox" id="checkbox_110">
											<label for="checkbox_110" class="block"> Values/Beliefs</label>
											<input type="checkbox" id="checkbox_111">
											<label for="checkbox_111" class="block"> Activities</label>
											<input type="checkbox" id="checkbox_112">
											<label for="checkbox_112" class="block"> Business Size</label>
											<input type="checkbox" id="checkbox_113">
											<label for="checkbox_113" class="block"> Interests/Lifestyle</label>
											<input type="checkbox" id="checkbox_114">
											<label for="checkbox_114" class="block"> Religion</label>
											<input type="checkbox" id="checkbox_115">
											<label for="checkbox_115" class="block">Price</label>
											<input type="checkbox" id="checkbox_116">
											<label for="checkbox_116" class="block">Race</label>
											<input type="checkbox" id="checkbox_117">
											<label for="checkbox_117" class="block">Family Lifecycle</label>
											<input type="checkbox" id="checkbox_118">
											<label for="checkbox_118" class="block">Other</label>
											
											
										  </div>
									</div>
								</div>
				  
				  </div>
				  
				
				  <div class="col-md-9 pull-right" style="margin: -45px 0px 0px 0px;">
				  
				  <br/>
				  <br/>
								 <div class="col-md-12  pull-right 101" id="101" style="display:none;">
									   <div class="form-group">
										  <label class="h5"><strong>What age groups do you target?</strong></label>
										  <select class="form-control" name="general_type_business" id="general_type_business">
									  
												<option value="">Select options</option>
												<option value="1">Greatest Generation (Roughly 73 and older)</option>
												<option value="2">Baby Boomers (Roughly 52 to 72 years old)</option>
												<option value="3">Generation X (Roughly 42 – 52 years old)</option>
												<option value="4">Generation Y (Roughly 32 - 42 years old)</option>
												<option value="5">Millennials (Roughly 18 – 32 years old)</option>
												<option value="6">iGeneration (Teens 13 and older)</option>
												<option value="7">Tweens (10 - 12 years old)</option>
												<option value="8">Grammar school</option>
												<option value="9">Preschool</option>
												<option value="10">Toddler</option>
												<option value="11">Infant</option>
									    </select>
										 
										</div>
								 </div>
								  
								  <div class="col-md-12  pull-right 102" id="102" style="display:none;">
									<div class="form-group">
									  <label class="h5"><strong>What gender do you target?</strong></label>
									   <select class="form-control" name="general_type_business" id="general_type_business">
									  
												<option value="">Select options</option>
												<option value="1">Male</option>
												<option value="2">Female</option>
												<option value="3">Other</option>
												
									    </select>
									</div>
								  </div>
								  
								   <div class="col-md-12  pull-right 103" id="103" style="display:none;">
									<div class="form-group">
									  <label class="h5"><strong>What geography(s) do you target?</strong></label>
									  <select class="form-control" name="general_type_business" id="general_type_business">
									  
												<option value="">Select options</option>
												<option value="1">Local</option>
												<option value="2">Regional</option>
												<option value="3">National</option>
												<option value="4">International</option>
												
									    </select>
									</div>
								  </div>
								  
								   <div class="col-md-12  pull-right 104" id="104" style="display:none;">
									   <div class="form-group">
											<label class="h5"><strong>What income groups do you target?</strong></label>
										  <select class="form-control" name="general_type_business" id="general_type_business">
									  
												<option value="">Select options</option>
												<option value="1">Less than $15,000</option>
												<option value="2">$15,000 - $24,999</option>
												<option value="3">$25,000 - $34,999</option>
												<option value="4">$35,000 - $49,999</option>
												<option value="5">$50,000 - $74,999</option>
												<option value="6">$75,000 - $99,999</option>
												<option value="7">$100,000 - $149,999</option>
												<option value="8">$150,000 - $199,999</option>
												<option value="9">$200,000+</option>
												
									    </select>
										  </div>
								   </div>
								   
									<div class="col-md-12  pull-right 105" id="105" style="display:none;">
									<div class="form-group">
									  <label class="h5"><strong>What marital status do you target?</strong></label>
									 <select class="form-control" name="general_type_business" id="general_type_business">
									  
												<option value="">Select options</option>
												<option value="1">We target Single People.</option>
												<option value="2">We target Married People.</option>
												<option value="3">We target Separated People. </option>
												<option value="4">We target Divorced/Widowed People.</option>
												
												
									    </select>
									</div>
								  </div>
								  
								   <div class="col-md-12  pull-right 106" id="106" style="display:none;">
									<div class="form-group">
									  <label class="h5"><strong>What family size do you target?</strong></label>
									  <input name="business_title" type="text" class="form-control input-lg" placeholder="family size:" autocomplete="off">
									</div>
								  </div>
									 
								<div class="col-md-12  pull-right 107" id="107" style="display:none;">
								   <div class="form-group">
									 <label class="h5"><strong>What occupations do you target?</strong></label>
									    <input name="business_title" type="text" class="form-control input-lg" placeholder="occupations" autocomplete="off">
									  </div>
								</div>
								  
								  <div class="col-md-12  pull-right 108" id="108" style="display:none;">
									<div class="form-group">
									  <label class="h5"><strong>What languages do you target?</strong></label>
									  <select class="form-control" name="general_type_business" id="general_type_business">
									  
												<option value="">Select options</option>
												<option value="1">person</option>
												<option value="2">person</option>
												<option value="3">person </option>
												<option value="4">people</option>
												<option value="4">people or more</option>
												
									    </select>
									</div>
									
									<div class="form-group 108_1" id="108_1" style="display:none;">
									  <label class="h5"><strong>Select Other Language</strong></label>
									  <select class="form-control" name="general_type_business" id="general_type_business">
									  
												<option value="">Select options</option>
												<option value="1">Armenian</option>
												<option value="2">Bantu (including Swahili)</option>
												<option value="3">Bengali </option>
												<option value="4">Greek</option>
												<option value="5">Gujarati</option>
												<option value="6">Haitian Creole</option>
												<option value="7">Hebrew</option>
												<option value="8">Hindi</option>
												<option value="9">Hmong</option>
												<option value="10">Khmer</option>
												<option value="11">Lao</option>
												<option value="12">Navajo</option>
												<option value="13">Portuguese</option>
												<option value="14">Punjabi</option>
												<option value="15">Serbo-Croatian (including Bosnian, Croatian, Montenegrin, and Serbian)</option>
												<option value="16">Tai–Kadai</option>
												<option value="17">Tamil</option>
												<option value="18">Telugu</option>
												<option value="19">Thai</option>
												<option value="20">Other</option>
												
									    </select>
									</div>
									
								  </div>
								  
								  
								   <div class="col-md-12  pull-right 109" id="109" style="display:none;">
									   <div class="form-group">
										  <label class="h5"><strong>What education groups do you target?</strong></label>
										 <select class="form-control" name="general_type_business" id="general_type_business">
									  
												<option value="">Select options</option>
												<option value="1">Accounting</option>
												<option value="2">Administrative/Clerical</option>
												<option value="3">Arts/Entertainment/Media </option>
												<option value="4">Automotive</option>
												<option value="5">Biotechnology</option>
												<option value="6">Business</option>
												<option value="7">Construction</option>
												<option value="8">Customer Service</option>
												<option value="9">Education</option>
												<option value="10">Engineering</option>
												<option value="11">Executive</option>
												<option value="12">Facilities</option>
												<option value="13">Financial Services</option>
												<option value="14">Government</option>
												<option value="15">Healthcare</option>
												<option value="16">Hospitality</option>
												<option value="17">Human Resources</option>
												<option value="18">Information Technology</option>
												<option value="19">Insurance</option>
												<option value="20">Law Enforcement</option>
												<option value="21">Legal</option>
												<option value="22">Manufacturing/Production</option>
												<option value="23">Marketing</option>
												<option value="24">Real Estate</option>
												<option value="25">Retail/Wholesale</option>
												<option value="26">Sales</option>
												<option value="27">Science</option>
												<option value="28">Telecommunications</option>
												<option value="29">Transportation/Warehouse </option>
												<option value="30">Other</option>
												
									    </select>
										</div>
								   </div>
								  
								   <div class="col-md-12  pull-right 110" id="110" style="display:none;">
									   <div class="form-group">
										  <label class="h5"><strong>What values/beliefs groups do you target?</strong></label>
										 <select class="form-control" name="general_type_business" id="general_type_business">
									  
												<option value="">Select options</option>
												<option value="1">Business</option>
												<option value="2">Economics</option>
												<option value="3">Education </option>
												<option value="4">Politic Views</option>
												<option value="5">Products</option>
												<option value="6">Social Issues</option>
												
												
									    </select>
										</div>
								   </div>
								   
									<div class="col-md-12  pull-right 111" id="111" style="display:none;">
									   <div class="form-group">
										  <label class="h5"><strong>What activities groups do you target?</strong></label>
										 <select class="form-control" name="general_type_business" id="general_type_business">
									  
												<option value="">Select options</option>
												<option value="1">Club Membership</option>
												<option value="2">Community</option>
												<option value="3">Entertainment </option>
												<option value="4">Interests/Hobbies</option>
												<option value="5">Social Events</option>
												<option value="6">Vacation Type</option>
												<option value="7">Work/Job</option>
												
												
									    </select>
										</div>
								   </div>
								  
								   <div class="col-md-12  pull-right 112"  id="112" style="display:none;">
									   <div class="form-group">
										  <label class="h5"><strong>What business size do you target? (based on employees)</strong></label>
										  <select class="form-control" name="general_type_business" id="general_type_business">
									  
												<option value="">Select options</option>
												<option value="1">1-9 (Micro)</option>
												<option value="2">10-100 (Small)</option>
												<option value="3">101-500 (Medium) </option>
												<option value="4">501-1000 (Med-Large)</option>
												<option value="5">1000+ (Large)</option>
												
												
												
									    </select>
										</div>
								   </div>
								   
								  <div class="col-md-12  pull-right 113" id="113" style="display:none;">
									<div class="form-group">
									  <label class="h5"><strong>What interests/lifestyles do you target?</strong></label>
									  <select class="form-control" name="general_type_business" id="general_type_business">
									  
										<option value="">Select options</option>
										<option value="1">Career/Job</option>
										<option value="2">Community</option>
										<option value="3">Family</option>
										<option value="4">Fashion</option>
										<option value="5">Food</option>
										<option value="6">Home</option>
										<option value="7">Recreation</option>
										
									  </select>
									</div>
								</div>
								
								 <div class="col-md-12  pull-right 114" id="114" style="display:none;">
									<div class="form-group">
									  <label class="h5"><strong>What religions do you target?</strong></label>
									  <select class="form-control" name="general_type_business" id="general_type_business">
									  
												<option value="">Select options</option>
												<option value="1">Buddhist/Buddhism</option>
												<option value="2">Christian/ Christianity</option>
												<option value="3">Confucianism </option>
												<option value="4">Hindu/Hinduism</option>
												<option value="5">Islam</option>
												<option value="6">Jewish/Judaism</option>
												<option value="7">Muslim</option>
												<option value="8">Shinto</option>
												<option value="9">Sikh/Sikhism</option>
												<option value="10">Taoism</option>
												<option value="11">Agnostic</option>
												<option value="12">Atheist</option>
												<option value="13">Other</option>
												
												
									    </select>
									</div>
								</div>
								
								 <div class="col-md-12  pull-right 115" id="115" style="display:none;">
									<div class="form-group">
									  <label class="h5"><strong>What type of price do you target?</strong></label>
									   <input name="business_title" type="text" class="form-control input-lg" placeholder="type of price " autocomplete="off">
									</div>
								</div>
								
								<div class="col-md-12  pull-right 116" id="116" style="display:none;">
								   <div class="form-group">
										  <label class="h5"><strong>What races do you target?</strong></label>
										   <select class="form-control" name="general_type_business" id="general_type_business">
									  
												<option value="">Select options</option>
												<option value="1">American Indian/Alaska Native</option>
												<option value="2">Asian</option>
												<option value="3">Black </option>
												<option value="4">Hispanic</option>
												<option value="5">Native American</option>
												<option value="6">Native Hawaiian/Other Pacific Islander</option>
												<option value="7">White</option>
												<option value="8">Other</option>
												
												
												
									    </select>
										</div>
								</div>
								
								<div class="col-md-12  pull-right 117" id="117" style="display:none;">
									 <div class="form-group">
										  <label class="h5"><strong>What family lifecycle do you target?</label>
										  <select class="form-control" name="general_type_business" id="general_type_business">
									  
												<option value="">Select options</option>
												<option value="1">Young</option>
												<option value="2">Single</option>
												<option value="3">Engaged </option>
												<option value="4">DINKS (double income no kids)</option>
												<option value="5">SINKS (single income no kids)</option>
												<option value="6">Married with kids (babies, toddler, elementary school age, teen, older)</option>
												<option value="7">Recently divorced</option>
												<option value="8">Empty nester (children have moved out)</option>
												<option value="9">Same-sex couples</option>
												<option value="10">Single parents</option>
												<option value="11">Extended parents (grandparents raising their grandchildren)</option>
												<option value="12">Retired (either wealthy or Medicare dependent/poor)</option>
												<option value="13">Boomerang Kids (adult children have moved back home)</option>
												<option value="14">Cougar/Silver Fox (Cougar is a 40-60-year-old wealthy, single, career driven woman seeking a younger man</option>
												<option value="15">Silver Fox is a 40-60-year-old wealthy, single, career driven man seeking a younger woman)</option>
												
												
												
												
									    </select>
									</div>
								</div>
								
								<div class="col-md-12  pull-right 118" id="118" style="display:none;">
									 <div class="form-group">
										  <label class="h5"><strong>What other groups do you target?</label>
										   <input name="business_title" type="text" class="form-control input-lg" placeholder="other groups" autocomplete="off">
									</div>
								</div>
								
								
								
				  
				  </div>
				  
				  
		  
		  </div>
		
		<div class="clearfix"></div>
		  <div class="col-md-12">
		  	<hr style="border-color:#1e88e5; border-width:3px; margin-top: -42px;">
		  </div>
		
		</div>
		</div>
	  
	  
	   
	   <div class="box-body">
        <div class="box-body form-element">
		
		

<p>Thinking of only your company, your staffing, your product/service offering, please rate your company on each of the following. </p>


<table  class="table table-bordered" style="border: 2px solid #f4f4f4;">
  <thead>
    <tr style="background-color: #539bda;">
      <!-- First column header is not rotated -->
          <th></th>
      <!-- Following headers are rotated -->
        <th class="rotate"><div><span style="color:#fff; font-weight: 600;">Our Quality of our products/services is…</span></div></th>
        <th class="rotate"><div><span style="color:#fff; font-weight: 600;">Our Reputation as a business is…</span></div></th>
        <th class="rotate"><div><span style="color:#fff; font-weight: 600;">The Pricing of our products/services is…</span></div></th>
       
      
    </tr> 
  </thead>
  <tbody>
    <tr style="background-color: #c8e0ec;">
      <th class="row-header" style="font-weight: 600;">Much higher than competitors</th>
      <td><input  name="column1[]" type="radio" value="row1-column1"></td>
      <td><input  name="column1[]" type="radio" value="row1-column2"></td>
      <td><input name="column1[]" type="radio" value="row1-column3"></td>
     
     
    </tr>
    <tr style="background-color: #e8d5d545;">
      <th class="row-header" style="font-weight: 600;">A little higher than competitors</th>
      <td><input  name="column2[]" type="radio" value="row1-column1"></td>
      <td><input  name="column2[]" type="radio" value="row1-column2"></td>
      <td><input name="column2[]" type="radio" value="row1-column3"></td>
      
     
    </tr>
    <tr style="background-color: #c8e0ec;">
      <th class="row-header" style="font-weight: 600;">About the same as competitors</th>
       <td><input  name="column3[]" type="radio" value="row1-column1"></td>
      <td><input name="column3[]" type="radio" value="row1-column2"></td>
      <td><input name="column3[]" type="radio" value="row1-column3"></td>
     
     
    </tr>
	<tr style="background-color: #e8d5d545;">
      <th class="row-header" style="font-weight: 600;">A little lower than competitors</th>
      <td><input  name="column4[]" type="radio" value="row1-column1"></td>
      <td><input  name="column4[]" type="radio" value="row1-column2"></td>
      <td><input name="column4[]" type="radio" value="row1-column3"></td>
    
      
    </tr>
	
	<tr style="background-color: #c8e0ec;">
      <th class="row-header" style="font-weight: 600;">Much lower than competitors </th>
      <td><input  name="column5[]" type="radio" value="row1-column1"></td>
      <td><input  name="column5[]" type="radio" value="row1-column2"></td>
      <td><input name="column5[]" type="radio" value="row1-column3"></td>
     
      
    </tr>
	
  </tbody>
</table>


<br/>
<br/>
<p>Thinking of only your company, your staffing, your product/service offering, please rate your company on each of the following. </p>


<table  class="table table-bordered" style="border: 2px solid #f4f4f4;">
  <thead>
    <tr style="background-color: #539bda;">
      <!-- First column header is not rotated -->
          <th></th>
      <!-- Following headers are rotated -->
        <th class="rotate"><div><span style="color:#fff; font-weight: 600;">Our Profitability as a business is...</span></div></th>
        <th class="rotate"><div><span style="color:#fff; font-weight: 600;">The quality of our employees are..</span></div></th>
        <th class="rotate"><div><span style="color:#fff; font-weight: 600;">The quality of our management is..</span></div></th>
        <th class="rotate"><div><span style="color:#fff; font-weight: 600;">The quality of our customer service is..</span></div></th>
       
      
    </tr> 
  </thead>
  <tbody>
    <tr style="background-color: #c8e0ec;">
      <th class="row-header" style="font-weight: 600;">Much higher than competitors</th>
      <td><input  name="column161[]" type="radio" value="row1-column1"></td>
      <td><input  name="column161[]" type="radio" value="row1-column2"></td>
      <td><input name="column161[]" type="radio" value="row1-column3"></td>
      <td><input name="column161[]" type="radio" value="row1-column3"></td>
     
     
    </tr>
    <tr style="background-color: #e8d5d545;">
      <th class="row-header" style="font-weight: 600;">A little higher than competitors</th>
      <td><input  name="column261[]" type="radio" value="row1-column1"></td>
      <td><input  name="column261[]" type="radio" value="row1-column2"></td>
      <td><input name="column261[]" type="radio" value="row1-column3"></td>
	  <td><input name="column261[]" type="radio" value="row1-column3"></td>
      
     
    </tr>
    <tr style="background-color: #c8e0ec;">
      <th class="row-header" style="font-weight: 600;">About the same as competitors</th>
       <td><input  name="column361[]" type="radio" value="row1-column1"></td>
      <td><input name="column361[]" type="radio" value="row1-column2"></td>
      <td><input name="column361[]" type="radio" value="row1-column3"></td>
	  <td><input name="column361[]" type="radio" value="row1-column3"></td>
     
     
    </tr>
	<tr style="background-color: #e8d5d545;">
      <th class="row-header" style="font-weight: 600;">A little lower than competitors</th>
      <td><input  name="column461[]" type="radio" value="row1-column1"></td>
      <td><input  name="column461[]" type="radio" value="row1-column2"></td>
      <td><input name="column461[]" type="radio" value="row1-column3"></td>
	  <td><input name="column461[]" type="radio" value="row1-column3"></td>
    
      
    </tr>
	
	<tr style="background-color: #c8e0ec;">
      <th class="row-header" style="font-weight: 600;">Much lower than competitors </th>
      <td><input  name="column561[]" type="radio" value="row1-column1"></td>
      <td><input  name="column561[]" type="radio" value="row1-column2"></td>
      <td><input name="column561[]" type="radio" value="row1-column3"></td>
	  <td><input name="column561[]" type="radio" value="row1-column3"></td>
     
      
    </tr>
	
  </tbody>
</table>
		
<br/>
<br/>
<p>Thinking of only the <strong style="font-weight:600;"> market share </strong> of your business, please rate your business only the <strong style="font-weight:600;"> market share </strong> of your business.  </p>


<table  class="table table-bordered" style="border: 2px solid #f4f4f4;">
  
  <tbody>
    <tr style="background-color: #c8e0ec;">
     
	 
      <td style="font-weight:600;"><center>Market Leader<br/>
<input  name="column861[]" type="radio" value="row1-column1"></center><br/></td>
      <td style="font-weight:600;"><center>Significant share, but not a leader<br/>
<input  name="column861[]" type="radio" value="row1-column2"></center><br/></td>
      <td style="font-weight:600;"><center>Smaller Competitor<br/>
<input name="column861[]" type="radio" value="row1-column3"></center><br/></td>
      <td style="font-weight:600;"><center>Specialty Competitor<br/>
<input name="column861[]" type="radio" value="row1-column3"></center>
<br/></td>
     
    
	
    </tr>
    
	
  </tbody>
</table>
		
		
		<br/>
<br/>
<p>Thinking of only your <strong style="font-weight:600;"> pricing strategy, </strong> which most accurately represents the <strong style="font-weight:600;"> pricing strategy </strong> of your business.  </p>


<table  class="table table-bordered" style="border: 2px solid #f4f4f4;">
  
  <tbody>
    <tr style="background-color: #c8e0ec;">
     
	 
      <td style="font-weight:600;"><center>Cost-plus pricing — Calculate cost and add a mark-up to make a profit
<br/>
<input  name="column861[]" type="radio" value="row1-column1"></center><br/></td>
      <td style="font-weight:600;"><center>Competitive pricing — Product/Service price based on what other competitors charge
<br/>
<input  name="column861[]" type="radio" value="row1-column2"></center><br/></td>
      <td style="font-weight:600;"><center>Skim pricing — 
Start with high price and lowering it as the market evolves
<br/>
<input name="column861[]" type="radio" value="row1-column3"></center><br/></td>
      <td style="font-weight:600;"><center>Penetration pricing — 
Setting a price low to enter a competitive market and raising it later
<br/>
<input name="column861[]" type="radio" value="row1-column3"></center>
<br/></td>
<td style="font-weight:600;"><center>Bundle pricing — 
Combining products/ services, increasing value and price

<br/>
<input name="column861[]" type="radio" value="row1-column3"></center>
<br/></td>
     
    
	
    </tr>
    
	
  </tbody>
</table>
		
		
		</div>
		</div>
	  
	  
	  <div class="clearfix"></div>
      <div class="box-header with-border">
        <h3 class="box-title">The Customer <small>( My Plans )</small></h3>
      </div>
      <div class="box-body">
        <div class="box-body form-element">
          <div class="col-md-12">
            <p>As you think more about different customer segments that you can target and how they differ, describe their lifestyles, activities, values, needs, interests and opinions.<br/>
              For each customer segment that you can target, describe the segments typical: Demographic (as above), Location, Number of members in the segment, Estimated percentage of sales, What they want, How they use it, Support requirements, Price sensitivity, How to reach them, Value drivers and Decision process</p>
            <a href="#competitor" class="btn btn-primary pull-right" title="Add Competitor" id="button" data-toggle="modal"><i class="fa fa-plus"></i> Add Competitor</a>
            <div class="clearfix"></div>
          </div>
          <div class="col-md-12">
            <table width="100%" cellpadding="0" cellspacing="0" border="0" class="table table-bordered">
              <thead>
                <tr>
                  <th width="21%">Title</th>
                  <th width="70%">Description</th>
                  <th width="9%">Actions</th>
                </tr>
              </thead>
              <tbody id="custs_data">
                <tr id="none" class="">
                  <td colspan="5"><div class="alert alert-warning" align="center">Customers are not listed.!</div></td>
                </tr>
              </tbody>
            </table>
          </div>
          <div class="col-md-12">
            <hr style="border-color:#1e88e5; border-width:3px;"/>
          </div>
          <div class="clearfix"></div>
          <div class="col-xl-6 col-12 pull-left">
            <p>Discovering a narrowly defined ideal client from the very beginning will save months of wandering in the dark trying to be all things to all people. Targeting the best possible customers right from the beginning can save you a lot of time and money.</p>
            <p>Imagine a person that will fall in love with your product/service exactly because it meets their needs far better than anything else on offer. What does that customer look like? What do they do in their spare time? What are they looking for that your competitors haven't given them?</p>
            <p>By targeting your products and services to this ideal customer who will really love them, you will find it easier to convert sales and gain raving fans.</p>
            <a data-toggle="modal" data-target="#myModal" class="popup-with-form label label-success"><i class="fa fa-lightbulb-o"></i> Example By Plan Labs</a> </div>
          <div class="col-xl-6 col-12 pull-right">
            <label class="h5"><strong>Ideal Customer :</strong></label>
            <textarea name="ideal_customer" class="textarea" id="editor" placeholder="Place some text here" style="width: 100%; height: 200px; font-size: 14px; line-height: 18px; border: 1px solid #dddddd; padding: 10px;"></textarea>
          </div>
          <div id="myModal" class="modal fade" role="dialog">
            <div class="modal-dialog modal-lg">
              <div class="modal-content">
                <div class="modal-header" style="background-color:#1e88e5; color:#FFFFFF;">
                  <button type="button" class="close" data-dismiss="modal">&times;</button>
                  <h4 class="modal-title">Ideal Customer :</h4>
                </div>
                <div class="modal-body  modal-md">
                  <p><strong><br />
                    An ideal customer profile for a personal trainer might read:</strong></p>
                  <em>
                  <p>We will target our ideal customer before the general market. Our ideal customer can be profiled as:</p>
                  <ul>
                    <li>32-45 years old</li>
                    <li>Married in the past 5 years</li>
                    <li>Has neglected their health and fitness since being married</li>
                    <li>Not feeling as confident and sexy as they once did</li>
                    <li>Usually reads the health and wellbeing guide in the newspaper</li>
                    <li>Has previously held a gym membership but doesn't have the self-motivation to make it last</li>
                    <li>Sets a new year's resolution each year to get fit</li>
                    <li>Has a burning desire to wake up feeling happier each day</li>
                    <li>Works a traditional 9-5 job and only has time for exercise before dinner or before work</li>
                    <li>Is outgoing and prefers the company of others</li>
                  </ul>
                  <p>Rather than just targeting a general market of people who want to get fit, we have a profile of a customer that shows what they have struggled with in the market, what they ultimately care about and how they need to be emotionally targeted.</p>
                  <p>Using this, Bob's personal training business can develop before and after work group fitness classes, using the promise of keeping accountable and motivated by your personal trainer and the new friends that you'll meet. Get fit and feel sexy together and get back in pre-wedding shape!</p>
                  </em></div>
              </div>
            </div>
          </div>
          <div class="clearfix"></div>
          <div class="col-md-12">
            <button class="btn btn-success btn-large" type="submit" name="submit_step1" value="Save &amp; Continue" onclick="window.location.href='<?php echo base_url('plans/planStep4'); ?>'"> Save &amp; Continue <i class="fa fa-chevron-right"></i> </button>
          </div>
        </div>
      </div>
      <?php } ?>
      <?php echo form_close(); ?> </div>
  </section>
</div>
<style type="text/css">
.form-control{ margin-bottom:12px;}
.clearfix{ padding:42px 42px;}
.h5{ color:#000; font-size:15px;}
</style>


<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>

<script>

$(document).ready(function () {
		var ckbox101 = $('#checkbox_101');
		 var ckbox102 = $('#checkbox_102');
		  var ckbox103 = $('#checkbox_103');
		   var ckbox104 = $('#checkbox_104');
			var ckbox105 = $('#checkbox_105');
			 var ckbox106 = $('#checkbox_106');
			  var ckbox107 = $('#checkbox_107');
			   var ckbox108 = $('#checkbox_108');
				var ckbox109 = $('#checkbox_109');
				var ckbox110 = $('#checkbox_110');
				var ckbox111 = $('#checkbox_111');
				var ckbox112 = $('#checkbox_112');
				var ckbox113 = $('#checkbox_113');
				var ckbox114 = $('#checkbox_114');
				var ckbox115 = $('#checkbox_115');
				var ckbox116 = $('#checkbox_116');
				var ckbox117 = $('#checkbox_117');
				var ckbox118 = $('#checkbox_118');
	

    $('#checkbox_101').on('click',function () {
        if (ckbox101.is(':checked')) {
            $('.101').show();
        } else {
            $('.101').hide();
        }
    });
	
	 $('#checkbox_102').on('click',function () {
        if (ckbox102.is(':checked')) {
            $('.102').show();
        } else {
            $('.102').hide();
        }
    });
	
	 $('#checkbox_103').on('click',function () {
        if (ckbox103.is(':checked')) {
            $('.103').show();
        } else {
            $('.103').hide();
        }
    });
	
	 $('#checkbox_104').on('click',function () {
        if (ckbox104.is(':checked')) {
            $('.104').show();
        } else {
            $('.104').hide();
        }
    });
	
	 $('#checkbox_105').on('click',function () {
        if (ckbox105.is(':checked')) {
            $('.105').show();
        } else {
            $('.105').hide();
        }
    });
	
	 $('#checkbox_106').on('click',function () {
        if (ckbox106.is(':checked')) {
            $('.106').show();
        } else {
            $('.106').hide();
        }
    });
	
	 $('#checkbox_107').on('click',function () {
        if (ckbox107.is(':checked')) {
            $('.107').show();
        } else {
            $('.107').hide();
        }
    });
	
	 $('#checkbox_108').on('click',function () {
        if (ckbox108.is(':checked')) {
            $('.108').show();
        } else {
            $('.108').hide();
        }
    });
	
	 $('#checkbox_109').on('click',function () {
        if (ckbox109.is(':checked')) {
            $('.109').show();
        } else {
            $('.109').hide();
        }
    });
	
	 $('#checkbox_110').on('click',function () {
        if (ckbox110.is(':checked')) {
            $('.110').show();
        } else {
            $('.110').hide();
        }
    });
	
	 $('#checkbox_111').on('click',function () {
        if (ckbox111.is(':checked')) {
            $('.111').show();
        } else {
            $('.111').hide();
        }
    });
	
	 $('#checkbox_112').on('click',function () {
        if (ckbox112.is(':checked')) {
            $('.112').show();
        } else {
            $('.112').hide();
        }
    });
	
	 $('#checkbox_113').on('click',function () {
        if (ckbox113.is(':checked')) {
            $('.113').show();
        } else {
            $('.113').hide();
        }
    });
	
	 $('#checkbox_114').on('click',function () {
        if (ckbox114.is(':checked')) {
            $('.114').show();
        } else {
            $('.114').hide();
        }
    });
	
	 $('#checkbox_115').on('click',function () {
        if (ckbox115.is(':checked')) {
            $('.115').show();
        } else {
            $('.115').hide();
        }
    });
	
	 $('#checkbox_116').on('click',function () {
        if (ckbox116.is(':checked')) {
            $('.116').show();
        } else {
            $('.116').hide();
        }
    });
	
	 $('#checkbox_117').on('click',function () {
        if (ckbox117.is(':checked')) {
            $('.117').show();
        } else {
            $('.117').hide();
        }
    });
	
	 $('#checkbox_118').on('click',function () {
        if (ckbox118.is(':checked')) {
            $('.118').show();
        } else {
            $('.118').hide();
        }
    });
	

	
});


</script>
