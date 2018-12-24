<?php if(!empty($planData)){ ?>
<?php 
foreach($planData as $planData){ ?>

<div class="plan">
  <h1><img src="assets/images/logo-pdf.png" class="imgLogo" />&nbsp;<span class="pull-right"><small class="h5">Marketing Plan By PlanLabs</small></span></h1>
  <div class="container_heading">
    <h2 class="heading">Plan Introduction</h2>
  </div>
  <h4>Your business title :</h4>
  <span style="font-size:14px;"><?php echo $planData->business_title; ?></span>
  <h4>Describe your business</h4>
  <?php echo strip_tags($planData->describe_your_business); ?>
  <h4>Describe why people need and want your product/service</h4>
  <?php echo strip_tags($planData->describe_why_people_need_and_want_your_product_service); ?>
  <h4>List Your goals</h4>
  <?php echo strip_tags($planData->list_your_goals); ?> </div>
<div class="plan page_break">
  <h1><img src="assets/images/logo-pdf.png" class="imgLogo" />&nbsp;<span class="pull-right"><small class="h5">Marketing Plan By PlanLabs</small></span></h1>
  <div class="container_heading">
    <h2 class="heading">The Market </h2>
  </div>
  <strong class="text-center" style="text-align:center; display:block; font-weight:900; font-size:20px;">Example Of SWOT Analysis</strong>
  <p class="text-center" style="text-align:center;">Example based on a small consultancy advising <br/>
    organisation on how to integrate iPads into their workforce</p>
  <table class="table">
    <tr>
      <th width="75" height="55" scope="row">&nbsp;</th>
      <th width="338" align="center" class="headings">Positive</th>
      <th width="345" align="center" class="headings">Negative</th>
    </tr>
    <tr>
      <th  scope="row" align="center" class="headings"><div class="rotation">Internal Factors</div></th>
      <td><div class="contents">
          <h3>Strengths</h3>
          <?php foreach(explode(";",$planData->swot_analysis_strengths) as $swot_analysis_strengths){ echo $swot_analysis_strengths."<br/>";} ?> </div></td>
      <td><div class="contents">
          <h3>Weaknesses</h3>
          <?php
		       foreach(explode(";",$planData->swot_analysis_weaknesses) as $swot_analysis_weaknesses){ echo $swot_analysis_weaknesses."<br/>";}
		   ?> </div></td>
    </tr>
    <tr>
      <th align="center" class="headings"><div class="rotation">External Factors</div></th>
      <td><div class="contents">
          <h3>Opporunities</h3>
          <?php
		  foreach(explode(";",$planData->swot_analysis_opportunities) as $swot_analysis_opportunities){ echo $swot_analysis_opportunities."<br/>";}
		   ?> </div></td>
      <td><div class="contents">
          <h3>Threats</h3>
          <?php
		    foreach(explode(";",$planData->swot_analysis_threats) as $swot_analysis_threats){ echo $swot_analysis_threats."<br/>";}
		  ?> </div></td>
    </tr>
  </table>
  <strong class="text-center" style="text-align:center; display:block; font-weight:900; font-size:20px;">Example Of PEST Analysis</strong>
  <p class="text-center" style="text-align:center;">Example based on a small vineyard selling wine domestically </p>
  <table class="table" width="780px">
    <tr>
      <th width="360" class="pest"><div class="contents">
          <h3>POLITICAL</h3>
          <?php
		   foreach(explode(";",$planData->pest_analysis_political) as $pest_analysis_political){ echo $pest_analysis_political."<br/>";}
		  
		   ?> </div></th>
      <th width="384" class="pest"><div class="contents">
          <h3>ECONOMICAL</h3>
          <?php 
		   foreach(explode(";",$planData->pest_analysis_economical) as $pest_analysis_economical){ echo $pest_analysis_economical."<br/>";}
		   ?> </div></th>
    </tr>
    <tr>
      <th class="pest"><div class="contents">
          <h3>SOCIO-CULTURAL</h3>
          <?php 
		   foreach(explode(";",$planData->pest_analysis_socio_cultural) as $pest_analysis_socio_cultural){ echo $pest_analysis_socio_cultural."<br/>";}
		   ?> </div></th>
      <th class="pest"><div class="contents">
          <h3>TECHNOLOGICAL</h3>
          <?php
		   foreach(explode(";",$planData->pest_analysis_technological) as $pest_analysis_technological){ echo $pest_analysis_technological."<br/>";}
		   ?> </div></th>
    </tr>
  </table>
  <h4>Describe the market</h4>
  <?php echo strip_tags($planData->describe_the_market); ?>
  <h4>What is its current size</h4>
  <?php echo strip_tags($planData->what_is_its_current_size); ?>
  <h4>Current Market Share</h4>
  <?php echo strip_tags($planData->current_market_share); ?>
  <h4>Recent growth or decline within the industry</h4>
  <?php echo strip_tags($planData->recent_growth_or_decline_within_the_industry); ?>
  <h4>Forecasted growth</h4>
  <?php echo strip_tags($planData->forecasted_growth); ?>
  <h4>Why will the market buy your product service</h4>
  <?php echo strip_tags($planData->why_will_the_market_buy_your_product_service); ?>
  <h4>Expected Market Share</h4>
  <?php echo strip_tags($planData->expected_market_share); ?>
  <h4>Future Growth Opportunities</h4>
  <?php echo strip_tags($planData->future_growth_opportunities); ?></div>
<div class="plan page_break">
  <h1><img src="assets/images/logo-pdf.png" class="imgLogo" />&nbsp;<span class="pull-right"><small class="h5">Marketing Plan By PlanLabs</small></span></h1>
  <div class="container_heading">
    <h2 class="heading">The Customer </h2>
  </div>
  <?php echo strip_tags($planData->ideal_customer); ?></div>
<div class="plan page_break">
  <h1><img src="assets/images/logo-pdf.png" class="imgLogo" />&nbsp;<span class="pull-right"><small class="h5">Marketing Plan By PlanLabs</small></span></h1>
  <div class="container_heading">
    <h2 class="heading">Marketing Strategy </h2>
  </div>
  <h4>Price</h4>
  <?php echo strip_tags($planData->price); ?>
  <h4>Product</h4>
  <?php echo strip_tags($planData->product); ?>
  <h4>Place</h4>
  <?php echo strip_tags($planData->place); ?>
  <h4>Personality</h4>
  <?php echo strip_tags($planData->personality); ?>
  <h4>Service Experience</h4>
  <?php echo strip_tags($planData->service_experience); ?>
  <h4>Story</h4>
  <?php echo strip_tags($planData->story); ?>
  <h4>Unique Selling Proposition</h4>
  <?php echo strip_tags($planData->unique_selling_proposition); ?></div>
<div class="plan page_break">
  <h1><img src="assets/images/logo-pdf.png" class="imgLogo" />&nbsp;<span class="pull-right"><small class="h5">Marketing Plan By PlanLabs</small></span></h1>
  <div class="container_heading">
    <h2 class="heading">Marketing Mix </h2>
  </div>
  <h4>Direct Marketing</h4>
  <?php echo strip_tags($planData->direct_marketing); ?>
  <h4>Internet Marketing</h4>
  <?php echo strip_tags($planData->internet_marketing); ?>
  <h4>Social Media</h4>
  <?php echo strip_tags($planData->social_media); ?>
  <h4>Public Relations</h4>
  <?php echo strip_tags($planData->public_relations); ?>
  <h4>Advertising</h4>
  <?php echo strip_tags($planData->advertising); ?>
  <h4>Budget</h4>
  <?php echo strip_tags($planData->budget); ?>
  <h4>Action Plan</h4>
  <?php echo strip_tags($planData->action_plan); ?> </div>
<?php } ?>
<?php } ?>
<link href="https://fonts.googleapis.com/css?family=Lato|Roboto" rel="stylesheet">
<style type="text/css">
body{ font-size:11px; font-family: 'Lato', sans-serif;}
.plan{padding:32px 32px 32px 32px; margin:0px auto; font-family: 'Lato', sans-serif;  height:auto; margin-bottom:10px; width:100%}
.imgLogo{ width:120px; float:left; position:relative; top:-4px;}
h1{ color:#000; border-bottom:1px solid #1e88e5; font-size:24px}
h4{ padding:10px 0px; margin:0px 0px; font-size:15px;}
.pull-right{text-align:right; display:inline; float:right;}
span{ display:block;}
.heading{display:inline; text-transform:uppercase; font-size:26px;}
.container_heading{margin:0px auto; text-transform:capitalize;}
.contents{ display:inline; width:10px;}
.h5{ font-size:12px; color:#999999;}
.page_break{ page-break-before: always;  }
.table {font-size: 13px; margin: 20px 0; width:700px!important;}
.table.tick img { height: 10px; width: 10px; }
.table th {color: #fff; background: #e86549; padding: 10px 10px; text-align: center; border-left: 1px solid #fff; font-weight: normal;}
.table th {padding: 4px 10px; background: #1e88e5; border: 1px solid #fff; border-right: none;  border-bottom: none; width:10px;}
.table td {padding: 4px 10px; background: #fff; border: 1px solid #fff; border-right: none;  border-bottom: none; width:10px;}
.table tr.total td {background: #9397a0; text-transform: uppercase; color: #fff;}
.table tr td:first-child {text-align: left;}
.contents h3{ position:static;}
</style>
