

<style>
#textarea {
    -moz-appearance: textfield-multiline;
    -webkit-appearance: textarea;
    border: 1px solid gray;
    font: medium -moz-fixed;
    font: -webkit-small-control;
    height: 129px;
    overflow: auto;
    padding: 2px;
    resize: both;
    width: 309px;
	    margin: 15px 0px -67px 0px;
		pointer-events: none;
		
}

table tr td:nth-child(3)
{
	padding: 6px 10px !important;
}

table tr td:nth-child(2)
{
	padding: 6px 10px !important;
}

.headings
{
	background-color:#4D20AA !important;
}
.btn-primary
{
	background-color:#4D20AA !important;
}

.error
{
	color: #fb4f2a !important;
  font-size: 17px !important;
  text-shadow: 1px 1px 1px #000;
   
	
}

#comment
{color: #fb4f2a !important;
  font-size: 17px !important;
  text-shadow: 1px 1px 1px #000;}

[type=radio]:checked, [type=radio]:not(:checked)
{
	    opacity: 1;
		left: unset;
}

[type=checkbox]:checked, [type=checkbox]:not(:checked)
{
	opacity: 1;
		left: unset;
}

/* #fileLoader
{
    display:none;
} */


.items span {
    display: inline-block;
    margin: 5px;
    padding: 5px;
    border: 1px solid #CCC;
}
   .bootstrap-tagsinput
   {
	   padding: 6px 6px !important;
	   
   }
   
   .bootstrap-tagsinput .tag
   {
	   font-size:11px;
	   font-weight:600;
	      margin: 50px 0px 0px 0px;
    position: absolute;
   }
   
   .bootstrap-tagsinput span:nth-child(2)
   {
	   margin:62px 0px 0px 0px;
   }
   
    .bootstrap-tagsinput span:nth-child(3)
   {
	  margin: -50px 0px 0px 0px;
   }
    
	.bootstrap-tagsinput span:nth-child(4)
   {
	   margin:-84px 0px 0px 350px;
   }
   
   .bootstrap-tagsinput span:nth-child(5)
   {
	   margin:-67px 0px 0px 350px;
   }
   
   .bootstrap-tagsinput span:nth-child(6)
   {
	   margin:-50px 0px 0px 350px;
   }
    
	
</style>
<link rel="stylesheet" href="https://bootstrap-tagsinput.github.io/bootstrap-tagsinput/dist/bootstrap-tagsinput.css">

<link rel="stylesheet" href="https://bootstrap-tagsinput.github.io/bootstrap-tagsinput/examples/assets/app.css">



<div class="content-wrapper" style="min-height: 549px;">

<?php $user_id = $this->session->userdata['USER_ID']; ?>
<?php $plan_id = $_GET['plan_id'];?>

  <section class="content">
  <div class="box">
    <div class="box-header with-border">
      <h3 class="box-title">The Market <small>( My Plans )</small></h3>
    </div>
    <?php echo form_open("plans/planStep2",array("id"=>"frmStep2")); ?>
    <div class="box-body">
      <div class="box-body form-element">
        <div class="col-md-12">
          <?php $this->load->view('users-panel/plans/menu-top-bar'); ?>
        </div>
        <?php 
	    if(!empty($diagramData)){
	    foreach($diagramData as $diagramData){
	   ?>
        <div class="col-md-12">
          <div class="note pull-right">
            <label>Please Note Here:</label>
            <br/>
            <textarea name="noteStep2" class="form-control input-lg" style="width:100%; background:#fff;"><?php echo $diagramData->market_note; ?></textarea>
          </div>
          <p>Your market analysis should give the reader a complete understanding of the market - that is, who operates in it, how it has been performing in recent years, how it is expected to perform in the future, what influences impact on those operating in it and what niches exist.</p>
        </div>
      </div>
    </div>
    <div class="box-header with-border">
      <h3 class="box-title">SWOT Analysis <small>( My Plans )</small></h3>
    </div>
    <div class="box-body">
      <div class="box-body">
        <div class="col-md-12">
          <p>A SWOT Analysis is a tool that helps you to identify the internal factors (strengths and weaknesses) and external factors (opportunities and threats) to your business so that you can build on the opportunities that result from your business's strengths and mitigate the threats that arise from its weaknesses.<br/>
            Describe your strengths and weaknesses as a business as well as the opportunities and threats that are present or developing within your market.</p>
          <a data-toggle="modal" data-target="#SWOTDiagram" class="popup-with-form label label-success"><i class="fa fa-lightbulb-o"></i> Diagram</a> </div>
        <div id="SWOTDiagram" class="modal fade" role="dialog">
          <div class="modal-dialog modal-lg">
            <div class="modal-content">
              <div class="modal-header" style="background-color:#1e88e5; color:#FFFFFF;">
                <button type="button" class="close" data-dismiss="modal">&times;</button>
                <h4 class="modal-title">Example Of SWOT Analysis :</h4>
              </div>
              <div class="modal-body  modal-md"> <strong class="text-center" style="text-align:center; display:block; font-weight:900; font-size:27px;">Example Of SWOT Analysis</strong>
                <p class="text-center">Example based on a small consultancy advising <br/>
                  organisation on how to integrate iPads into their workforce</p>
                <table width="760" height="486" border="1">
                  <tr>
                    <td width="75" height="55" scope="row">&nbsp;</td>
                    <td width="338" align="center" class="headings">Positive</td>
                    <td width="345" align="center" class="headings">Negative</td>
                  </tr>
                  <tr>
                    <td  scope="row" align="center" class="headings"><div class="rotation">Internal Factors</div></td>
                    <td><div class="contents">
                        <h3>Strengths</h3>
                        <?php 
							 $disgramShowData=explode(";",$diagramData->swot_analysis_strengths);                           foreach($disgramShowData as $r){
							   echo $r."<br/>";
							 }?>
                      </div></td>
                    <td><div class="contents">
                        <h3>Weaknesses</h3>
                        <?php 
							 $disgramShowData=explode(";",$diagramData->swot_analysis_weaknesses);                           foreach($disgramShowData as $r){
							   echo $r."<br/>";
							 }?>
                      </div></td>
                  </tr>
                  <tr>
                    <td align="center" class="headings"><div class="rotation">External Factors</div></td>
                    <td><div class="contents">
                        <h3>Opporunities</h3>
                        <?php 
							 $disgramShowData=explode(";",$diagramData->swot_analysis_opportunities); foreach($disgramShowData as $r){
							   echo $r."<br/>";
							 }?>
                      </div></td>
                    <td><div class="contents">
                        <h3>Threats</h3>
                        <?php 
							 $disgramShowData=explode(";",$diagramData->swot_analysis_threats);                           foreach($disgramShowData as $r){
							   echo $r."<br/>";
							 }?>
                      </div></td>
                  </tr>
                </table>
              </div>
            </div>
          </div>
        </div>
        <div class="col-md-12">
          <hr style="border-color:#1e88e5; border-width:3px;"/>
        </div>
        <div class="col-md-12 input-group mb-3">
          <label style="display:block; width:100%;"><strong>STRENGTHS:</strong></label>
          <input type="text" class="form-control tag-input" placeholder="STRENGTHS" name="swot_analysis_strengths[]" aria-label="" aria-describedby="basic-addon1" data-role='tags-input' value="<?php echo $diagramData->swot_analysis_strengths; ?>">
          
        </div>
        <br/>
        <div class="col-md-12 input-group mb-3">
          <label style="display:block; width:100%;"><strong>WEAKNESSES:</strong></label>
          <input type="text" class="form-control" placeholder="WEAKNESSES" aria-label="" aria-describedby="basic-addon1" name="swot_analysis_weaknesses[]" data-role='tags-input' value="<?php echo $diagramData->swot_analysis_weaknesses; ?>">
          
        </div>
        <br/>
        <div class="col-md-12 input-group mb-3">
          <label style="display:block; width:100%;"><strong>OPPORTUNITIES:</strong></label>
          <input type="text" class="form-control" name="swot_analysis_opportunities[]" placeholder="" aria-label="" aria-describedby="basic-addon1" data-role='tags-input' value="<?php echo $diagramData->swot_analysis_opportunities; ?>">
         
        </div>
        <br/>
        <div class="col-md-12 input-group mb-3">
          <label style="display:block; width:100%;"><strong>THREATS:</strong></label>
          <input type="text" class="form-control"  name="swot_analysis_threats[]" placeholder="THREATS" aria-label="" aria-describedby="basic-addon1" data-role='tags-input' value="<?php echo $diagramData->swot_analysis_threats; ?>">
          
        </div>
        
         <button class="btn btn-success btn-large" type="submit" name="submit_step1" value="Save &amp; Continue"> Save &amp; Continue <i class="fa fa-chevron-right"></i> </button>

      </div>
    </div>
    <div class="box-header with-border">
      <h3 class="box-title">PEST Analysis <small>( My Plans )</small></h3>
    </div>
    <div class="box-body">
      <div class="box-body">
        <div class="col-md-12">
          <p>It is important when planning a business to be aware of all of the factors in your environment that could influence your success.<br/>
            List and analyse how each factor may affect your business.</p>
          <a data-toggle="modal" data-target="#PESTDiagram" class="popup-with-form label label-success"><i class="fa fa-lightbulb-o"></i> Diagram</a> </div>
        <div id="PESTDiagram" class="modal fade" role="dialog">
          <div class="modal-dialog modal-lg">
            <div class="modal-content">
              <div class="modal-header" style="background-color:#1e88e5; color:#FFFFFF;">
                <button type="button" class="close" data-dismiss="modal">&times;</button>
                <h4 class="modal-title">Example Of PEST Analysis :</h4>
              </div>
              <div class="modal-body  modal-md"> <strong class="text-center" style="text-align:center; display:block; font-weight:900; font-size:27px;">Example Of PEST Analysis</strong>
                <p class="text-center">Example based on a small vineyard selling wine domestically </p>
                <table width="760" height="486" border="1">
                  <tr>
                    <td width="360" class="pest"><div class="contents">
                        <h3>POLITICAL</h3>
                        <?php 
							 $disgramShowData=explode(";",$diagramData->pest_analysis_political);                           foreach($disgramShowData as $r){
							   echo $r."<br/>";
							 }?>
                      </div></td>
                    <td width="384" class="pest"><div class="contents">
                        <h3>ECONOMICAL</h3>
                        <?php 
							 $disgramShowData=explode(";",$diagramData->pest_analysis_economical);                           foreach($disgramShowData as $r){
							   echo $r."<br/>";
							 }?>
                      </div></td>
                  </tr>
                  <tr>
                    <td class="pest"><div class="contents">
                        <h3>SOCIO-CULTURAL</h3>
                        <?php 
							 $disgramShowData=explode(";",$diagramData->pest_analysis_socio_cultural); foreach($disgramShowData as $r){
							   echo $r."<br/>";
							 }?>
                      </div></td>
                    <td class="pest"><div class="contents">
                        <h3>TECHNOLOGICAL</h3>
                        <?php 
							 $disgramShowData=explode(";",$diagramData->pest_analysis_technological);                           foreach($disgramShowData as $r){
							   echo $r."<br/>";
							 }?>
                      </div></td>
                  </tr>
                </table>
              </div>
            </div>
          </div>
        </div>
        <div class="col-md-12">
          <hr style="border-color:#1e88e5; border-width:3px;"/>
        </div>
        <div class="col-md-12 input-group mb-3">
          <label style="display:block; width:100%;">
          <strong>POLITICAL:</strong>
          <p>This may include legal issues, tax policy, trade restriction, political stability and government regulations that affect your ability to do business.</p>
          </label>
          <input type="text" class="form-control" name="pest_analysis_political[]" placeholder="POLITICAL" aria-label="" aria-describedby="basic-addon1" data-role='tags-input' value="<?php echo $diagramData->pest_analysis_political; ?>">
          
        </div>
        <br/>
        <div class="col-md-12 input-group mb-3">
          <label style="display:block; width:100%;">
          <strong>ECONOMICAL:</strong>
          <p>Economic factors may affect your ability to access capital and your customers' ability to purchase your product/service. Note economic growth, interest rates, inflation, labour cost, the impact of globalisation and levels of consumer disposable income within your target markets.</p>
          </label>
          <input type="text" class="form-control" name="pest_analysis_economical[]" placeholder="ECONOMICAL" aria-label="" aria-describedby="basic-addon1" data-role='tags-input' value="<?php echo $diagramData->pest_analysis_economical; ?>">
          
        </div>
        <br/>
        <div class="col-md-12 input-group mb-3">
          <label style="display:block; width:100%;">
          <strong>SOCIO-CULTURAL:</strong>
          <p>These factors affect the size of a market, consumer demand. Note important facts on your market's population, age distribution, religious belief, career importance, social attitude and importance of health and safety.</p>
          </label>
          <input type="text" class="form-control" name="pest_analysis_socio_cultural[]" placeholder="" aria-label="" aria-describedby="basic-addon1" data-role='tags-input' value="<?php echo $diagramData->pest_analysis_socio_cultural; ?>">
          
        </div>
        <br/>
        <div class="col-md-12 input-group mb-3">
          <label style="display:block; width:100%;">
          <strong>TECHNOLOGICAL:</strong>
          <p>Technological factors influence the need to outsource, feasibility of in-house research and access to the latest technology. Consider the rate of technological change within your market, the research and development culture and the emergence of new technologies.</p>
          </label>
          <input type="text" class="form-control" name="pest_analysis_technological[]" placeholder="TECHNOLOGICAL" aria-label="" aria-describedby="basic-addon1" data-role='tags-input' value="<?php echo $diagramData->pest_analysis_technological; ?>">
         
        </div>
      </div>
    </div>
    <div class="box-header with-border">
      <h3 class="box-title">Competitor Analysis <small>( My Plans )</small></h3>
    </div>
    <div class="box-body">
      <div class="box-body">
        <div class="col-md-12">
          <p>A Competitor Analysis is integral in creating a successful small business.The goal of the Competitor Analysis is to better position your organisation to leverage your competitive edge. How is your company different from others? In what way does it stand out? Is there a sustainable value that you can maintain and develop over time?</p>
          <a class="btn btn-primary pull-right" title="Add Competitor" id="button" data-toggle="modal" data-target="#competitor" style="color:#fff!important;"><i class="fa fa-plus"></i> Add Competitor</a> </div>
        <div class="clearfix"></div>
        <div class="col-md-12">
          <hr style="border-color:#1e88e5; border-width:3px;"/>
        </div>
        <div class="col-md-12">
          <table width="100%" cellpadding="0" cellspacing="0" border="0" class="table table-bordered table-striped">
            <thead>
              <tr>
			    <th width="5%">Name</th>
                <th width="15%">Name</th>
                <th width="35%">Description</th>
                <th width="18%">Performance</th>
                <th width="14%">Market Position</th>
				<th width="5%">Action</th>
              </tr>
            </thead>
            <tbody id="comps_data">
            </tbody>
          </table>
        </div>
        <div id="competitor" class="modal fade" role="dialog">
          <div class="modal-dialog modal-sm">
            <div class="modal-content">
              <div class="modal-header" style="background-color:#1e88e5; color:#FFFFFF!important;">
                <button type="button" class="close" data-dismiss="modal">&times;</button>
                <h4 class="modal-title">Add New Competitor :</h4>
              </div>
              <div class="modal-body modal-sm">
                  <div class="form-group">
                    <label>Name:</label>
                    <input type="text" name="competitor_name" id="competitor_name" class="form-control" placeholder="Name Of Competitor" />
                  </div>
                  <div class="form-group">
                    <label>Description:</label>
                    <textarea name="description" id="description" class="form-control" placeholder="Description"></textarea>
                  </div>
                  <div class="form-group">
                    <label>Performance:</label>
                    <input type="text" name="performance" id="performance" class="form-control" placeholder="Performance" />
                  </div>
                  <div class="form-group">
                    <label>Market Position:</label>
                    <input type="text" name="market_position" id="market_position" class="form-control" placeholder="Market Position" />
                  </div>
                  <div class="form-group">
                    <button class="btn btn-success" type="button" id="frmCompetitor">Save Competitor Data</button>
                  </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
    <div class="box-header with-border">
      <h3 class="box-title">Market Description <small>( My Plans )</small></h3>
    </div>
    <div class="box-body">
      <div class="box-body">
        <div class="col-xl-6 col-12 pull-left">
          <p>Your Market Description should answer the following questions about the group of customers with whom you want to do business:</p>
          <ol>
            <li>Is it a seasonal market, or do customers visit consistently over the year?</li>
            <li>Is it a developing market that customers are unsure of or an established market with little change and innovation?</li>
            <li>What level of competition is there? Is it a highly fragmented market or one with only a few dominant competitors?</li>
            <li>Is there mass appeal, or are you targeting a niche market?</li>
            <li>Are there any regulatory restrictions that may prevent or harm your entry into the market?</li>
            <li>What characteristics distinguish the target market from the general market?</li>
          </ol>
          <a data-toggle="modal" data-target="#myModal" class="popup-with-form label label-success"><i class="fa fa-lightbulb-o"></i> Example By Plan Labs</a> </div>
        <div class="col-xl-6 col-12 pull-right">
          <label class="h5"><strong>Describe the market :</strong></label>
          <textarea class="textarea" id="editor" name="describe_the_market" placeholder="Place some text here" style="width: 100%; height: 200px; font-size: 14px; line-height: 18px; border: 1px solid #dddddd; padding: 10px;"><?php echo $diagramData->describe_the_market; ?></textarea>
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
        <div class="col-xl-6 col-12 pull-left">
          <p>Understanding the size of your market can help you to understand where to focus your business efforts.</p>
          <p>You can find revenue data from trade and government associations associated with the market. This information will help you figure out pricing and revenue potential.</p>
          <a data-toggle="modal" data-target="#myModal1" class="label label-success"><i class="fa fa-lightbulb-o"></i> Example By Plan Labs</a> </div>
        <div class="col-xl-6 col-12 pull-right">
          <label class="h5"><strong>What is its current size? :</strong></label>
          <textarea class="textarea" id="editor1" name="what_is_its_current_size" placeholder="Place some text here" style="width: 100%; height: 200px; font-size: 14px; line-height: 18px; border: 1px solid #dddddd; padding: 10px;"><?php echo $diagramData->what_is_its_current_size; ?></textarea>
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
        <div class="col-xl-6 col-12 pull-left">
          <p>What portion of the market (stated either by revenue or percentage) do you currently hold? Ideally this is stated as a portion of your target market, rather than the larger market as a whole.</p>
          <p>For example, a bakery targeting consumers in a 5km radius may have a 30% share of their target market, but less than a 1% share of the general market in their state.</p>
          <a  data-toggle="modal" data-target="#myModal3" class="label label-success"><i class="fa fa-lightbulb-o"></i> Example By Plan Labs</a> </div>
        <div class="col-xl-6 col-12 pull-right">
          <label class="h5"><strong>Current market share :</strong></label>
          <textarea class="textarea" id="editor2" name="current_market_share" placeholder="Place some text here" style="width: 100%; height: 200px; font-size: 14px; line-height: 18px; border: 1px solid #dddddd; padding: 10px;"><?php echo $diagramData->current_market_share; ?></textarea>
        </div>
        <div class="clearfix"></div>
      </div>
    </div>
    <div class="box-header with-border">
      <h3 class="box-title">Growth Forecast <small>( My Plans )</small></h3>
    </div>
    <div class="box-body">
      <div class="box-body">
        <div class="col-xl-6 col-12 pull-left">
          <p>What growth or decline has the industry experienced in the past 3 years? If you are in an early-stage market that is growing and changing rapidly, it would be beneficial to note growth or decline within the past 6-12 months.</p>
          <p>Readers should be able to understand whether the industry has been growing, stagnating or declining in recent times.</p>
          <a data-toggle="modal" data-target="#myModal" class="popup-with-form label label-success"><i class="fa fa-lightbulb-o"></i> Example By Plan Labs</a> </div>
        <div class="col-xl-6 col-12 pull-right">
          <label class="h5"><strong>Recent growth or decline within the industry :</strong></label>
          <textarea class="textarea" id="editor" name="recent_growth_or_decline_within_the_industry" placeholder="Place some text here" style="width: 100%; height: 200px; font-size: 14px; line-height: 18px; border: 1px solid #dddddd; padding: 10px;"><?php echo $diagramData->recent_growth_or_decline_within_the_industry; ?></textarea>
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
        <div class="col-xl-6 col-12 pull-left">
          <p>What is the projected growth for the market? Ideally you will identify the growth rate in the coming 12 months, 3 years and 5-10 years.</p>
          <p>The projected market growth rate can be found in industry publications and industry media reports.</p>
          <a data-toggle="modal" data-target="#myModal1" class="label label-success"><i class="fa fa-lightbulb-o"></i> Example By Plan Labs</a> </div>
        <div class="clearfix"></div>
        <div class="col-xl-6 col-12 pull-right">
          <label class="h5"><strong>Forecasted growth :</strong></label>
          <textarea class="textarea" name="forecasted_growth" id="editor1" placeholder="Place some text here" style="width: 100%; height: 200px; font-size: 14px; line-height: 18px; border: 1px solid #dddddd; padding: 10px;"><?php echo $diagramData->forecasted_growth; ?></textarea>
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
      </div>
    </div>
    <div class="box-header with-border">
      <h3 class="box-title">Opportunity Statement <small>( My Plans )</small></h3>
    </div>
    <div class="box-body">
      <div class="box-body">
        <div class="col-md-12">
          <p>An Opportunity Statement is something usually not seen in a Marketing Plan but we suggest creating one to help you note down areas that your business could explore in the future. Not only will it increase your chances of taking new opportunities, but banks and investors love to see your awareness of your market and its opportunities.</p>
        </div>
        <div class="clearfix1"></div>
        <div class="col-xl-6 col-12 pull-left">
          <p>Identify the unmet needs of the market that have led to the creation of your business and explain in depth why people need and want your product/service. It is important to ascertain whether customers will buy your product because of rational need or more emotional desire.</p>
          <a data-toggle="modal" data-target="#myModal" class="popup-with-form label label-success"><i class="fa fa-lightbulb-o"></i> Example By Plan Labs</a> </div>
        <div class="col-xl-6 col-12 pull-right">
          <label class="h5"><strong>Why will the market buy your product/service?:</strong></label>
          <textarea class="textarea" id="editor" name="why_will_the_market_buy_your_product_service" placeholder="Place some text here" style="width: 100%; height: 200px; font-size: 14px; line-height: 18px; border: 1px solid #dddddd; padding: 10px;"><?php echo $diagramData->why_will_the_market_buy_your_product_service; ?></textarea>
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
        <div class="col-xl-6 col-12 pull-left">
          <p>What portion of the market (stated either by revenue or percentage) do you expect to capture?</p>
          <a data-toggle="modal" data-target="#Expectedmarket" class="label label-success"><i class="fa fa-lightbulb-o"></i> Example By Plan Labs</a> </div>
        <div class="col-xl-6 col-12 pull-right">
          <label class="h5"><strong> Expected market share :</strong></label>
          <textarea class="textarea" id="editor1" name="expected_market_share" placeholder="Place some text here" style="width: 100%; height: 200px; font-size: 14px; line-height: 18px; border: 1px solid #dddddd; padding: 10px;"><?php echo $diagramData->expected_market_share; ?></textarea>
        </div>
        <div id="Expectedmarket" class="modal fade" role="dialog">
          <div class="modal-dialog modal-lg">
            <div class="modal-content">
              <div class="modal-header" style="background-color:#1e88e5; color:#FFFFFF;">
                <button type="button" class="close" data-dismiss="modal">&times;</button>
                <h4 class="modal-title">Expected market share :</h4>
              </div>
              <div class="modal-body  modal-md">
                <p><br />
                  Peninsula Brewery currently holds a 1.8% of the craft beer market within New Zealand. The craft beer market currently accounts for just 1.4% of total beer sales nationwide, although this has increased in recent years and is expected to dramatically increase to 4-5% by 2018.</p>
                <p>Using the strategies outlined in this marketing plan, we expect to increase to a 3.2-4.4% market share of craft beers by 2018. The key to achieving this growth is not so much the market, but having the financial resources to increase production to meet growing demand in a growing market.</p>
                <p>Our research and analysis has suggested that this is possible and realistic.</p>
              </div>
            </div>
          </div>
        </div>
        <div class="clearfix"></div>
        <div class="col-xl-6 col-12 pull-left">
          <p>How is the market expected to change in the next five years? What growth opportunities does this change create?</p>
          <a data-toggle="modal" data-target="#Futuregrowth" class="label label-success"><i class="fa fa-lightbulb-o"></i> Example By Plan Labs</a> </div>
        <div class="col-xl-6 col-12 pull-right">
          <label class="h5"><strong> Future growth opportunities :</strong></label>
          <textarea class="textarea" id="editor1" name="future_growth_opportunities" placeholder="Place some text here" style="width: 100%; height: 200px; font-size: 14px; line-height: 18px; border: 1px solid #dddddd; padding: 10px;"><?php echo $diagramData->future_growth_opportunities; ?></textarea>
        </div>
        <div id="Futuregrowth" class="modal fade" role="dialog">
          <div class="modal-dialog modal-lg">
            <div class="modal-content">
              <div class="modal-header" style="background-color:#1e88e5; color:#FFFFFF;">
                <button type="button" class="close" data-dismiss="modal">&times;</button>
                <h4 class="modal-title">Describe your business :</h4>
              </div>
              <div class="modal-body  modal-md">
                <p><strong>The Blog Designers list future growth opportunities within their marketing plan as:</strong></p>
                <em>
                <p>Our business has been operating well in the Australian market, but we believe there to be several opportunities to increase market share and the size of the market within Australia, as well as to reach new markets. These growth opportunities are:</p>
                <ul>
                  <li>Develop partnership with marketing and advertising agencies that advise businesses on the need to blog, but don't have an in-house department to create and design the blogs.</li>
                  <li>Offer a premium blog design service for brands that want the confidence of working with a blog specialist, but expect to receive a higher level of service and quality than traditional bloggers.</li>
                  <li>Targeting international markets. Currently, no single agency serves as a leading blog design agency in the global economy. The United States in particular offers huge potential, with over 15x more bloggers than Australia. Success in international markets is possible and realistic due to the global nature of blogging.</li>
                </ul>
                </em> </div>
            </div>
          </div>
        </div>
        <div class="clearfix"></div>
        <div class="col-md-12">
          <button class="btn btn-success btn-large" type="submit" name="submit_step1" value="Save &amp; Continue" onclick="window.location.href='<?php echo base_url('plans/planStep3'); ?>'"> Save &amp; Continue <i class="fa fa-chevron-right"></i> </button>
        </div>
      </div>
    </div>
    <input type="hidden" name="planIdStep2" value="<?php echo $diagramData->id; ?>" />
    <?php }
	    }else{  
	  ?>
    <div class="col-md-12">
      <div class="note pull-right">
        <label>Please Note Here:</label>
        <br/>
        <textarea name="noteStep2" class="form-control input-lg" style="width:100%; background:#fff;"></textarea>
      </div>
      <p>Your market analysis should give the reader a complete understanding of the market - that is, who operates in it, how it has been performing in recent years, how it is expected to perform in the future, what influences impact on those operating in it and what niches exist.</p>
    </div>
  </div>
</div>

<div id="swot" style="display:block">

					<div class="box-header with-border">
					  <h3 class="box-title">SWOT Analysis <small>( My Plans )</small></h3>
					</div>
					<div class="box-body">
					  <div class="box-body">
						<div class="col-md-12">
						  <p>A SWOT Analysis is a tool that helps you to identify the internal factors (strengths and weaknesses) and external factors (opportunities and threats) to your business so that you can build on the opportunities that result from your business's strengths and mitigate the threats that arise from its weaknesses.<br/>
							Describe your strengths and weaknesses as a business as well as the opportunities and threats that are present or developing within your market.</p>
						 <!-- <a data-toggle="modal" data-target="#SWOTDiagram" class="popup-with-form label label-success"><i class="fa fa-lightbulb-o"></i> Diagram</a>--> </div>
						<div id="SWOTDiagram" class="modal fade" role="dialog">
						  <div class="modal-dialog modal-lg">
							<div class="modal-content">
							  <div class="modal-header" style="background-color:#1e88e5; color:#FFFFFF;">
								<button type="button" class="close" data-dismiss="modal">&times;</button>
								<h4 class="modal-title">Example Of SWOT Analysis :</h4>
							  </div>
							  <div class="modal-body  modal-md"> <strong class="text-center" style="text-align:center; display:block; font-weight:900; font-size:27px;">Example Of SWOT Analysis</strong>
								<p class="text-center">Example based on a small consultancy advising <br/>
								  organisation on how to integrate iPads into their workforce</p>
								<table width="760" height="486" border="1">
								  <tr>
									<td width="75" height="55" scope="row">&nbsp;</td>
									<td width="338" align="center" class="headings">Positive</td>
									<td width="345" align="center" class="headings">Negative</td>
								  </tr>
								  <tr>
									<td  scope="row" align="center" class="headings"><div class="rotation">Internal Factors</div></td>
									<td><div class="contents">
										<h3>Strengths</h3>
									  </div></td>
									<td><div class="contents">
										<h3>Weaknesses</h3>
									  </div></td>
								  </tr>
								  <tr>
									<td align="center" class="headings"><div class="rotation">External Factors</div></td>
									<td><div class="contents">
										<h3>Opporunities</h3>
									  </div></td>
									<td><div class="contents">
										<h3>Threats</h3>
									  </div></td>
								  </tr>
								</table>
							  </div>
							</div>
						  </div>
						</div>
						<div class="col-md-12">
						  <hr style="border-color:#1e88e5; border-width:3px;"/>
						</div>
						<br/>
						
						
						 <div class="col-md-12"> <a  data-toggle="modal" data-target="#myModalstrength" class="popup-with-form label label-success" style="font-size: 15px;"><i class="fa fa-lightbulb-o"></i> Click Here To Start</a><strong class="text-center" style="text-align:center; display:block; font-weight:900; font-size:27px;">SWOT Analysis</strong>
								<p class="text-center">&nbsp;</p>
							  <center>  <table width="760" height="486" border="1">
								  <tr>
									<td width="475" height="55" scope="row">&nbsp;</td>
									<td width="338" align="center" class="headings" style="background-color:#180542">Strengths</td>
									<td width="345" align="center" class="headings">Weekness</td>
									 <td width="475" height="55" scope="row">&nbsp;</td>
								  </tr>
								  <tr>
									<td  scope="row" align="center" class="headings"><div class="rotation">&nbsp;</div></td>
									<td><div id="textarea" contenteditable class="contents">
										<h3> </h3>
									  </div></td>
									<td><div id="textarea" contenteditable placeholder="Weaknesses" class="contents">
										<h3></h3>
									  </div></td>
									  <td  scope="row" align="center" class="headings"><div class="rotation">&nbsp;</div></td>
								  </tr>
								  <tr>
									<td align="center" class="headings"><div class="rotation">&nbsp;</div></td>
									<td><div id="textarea" contenteditable placeholder="Opporunities" class="contents">
										<h3></h3>
									  </div></td>
									<td><div id="textarea" contenteditable placeholder="Threats" class="contents">
										<h3></h3>
									  </div></td>
									   <td align="center" class="headings"><div class="rotation">&nbsp;</div></td>
								  </tr>
								  
								  <tr> 	
									<td width="475" height="55" scope="row">&nbsp;</td>
									<td width="338" align="center" class="headings">Opportunities</td>
									<td width="345" align="center" class="headings">Threats</td>
									 <td width="475" height="55" scope="row">&nbsp;</td>
								  </tr>
								</table>
								</center>
							  </div>
						
						
							

					  </div>
					</div>
</div>

<div id="pest" style="display:none;">
						<div class="box-header with-border">
						  <h3 class="box-title">PEST Analysis <small>( My Plans )</small></h3>
						</div>
						<div class="box-body">
						  <div class="box-body">
							<div class="col-md-12">
							  <p>It is important when planning a business to be aware of all of the factors in your environment that could influence your success.<br/>
								List and analyse how each factor may affect your business.</p>
							  <a data-toggle="modal" data-target="#PESTDiagram" class="popup-with-form label label-success"><i class="fa fa-lightbulb-o"></i> Diagram</a> </div>
							<div id="PESTDiagram" class="modal fade" role="dialog">
							  <div class="modal-dialog modal-lg">
								<div class="modal-content">
								  <div class="modal-header" style="background-color:#1e88e5; color:#FFFFFF;">
									<button type="button" class="close" data-dismiss="modal">&times;</button>
									<h4 class="modal-title">Example Of PEST Analysis :</h4>
								  </div>
								  <div class="modal-body  modal-md"> <strong class="text-center" style="text-align:center; display:block; font-weight:900; font-size:27px;">Example Of PEST Analysis</strong>
									<p class="text-center">Example based on a small vineyard selling wine domestically </p>
									<table width="760" height="486" border="1">
									  <tr>
										<td width="360" class="pest"><div class="contents">
											<h3>POLITICAL</h3>
										  </div></td>
										<td width="384" class="pest"><div class="contents">
											<h3>ECONOMICAL</h3>
										  </div></td>
									  </tr>
									  <tr>
										<td class="pest"><div class="contents">
											<h3>SOCIO-CULTURAL</h3>
										  </div></td>
										<td class="pest"><div class="contents">
											<h3>TECHNOLOGICAL</h3>
										  </div></td>
									  </tr>
									</table>
								  </div>
								</div>
							  </div>
							</div>
							<div class="col-md-12">
							  <hr style="border-color:#1e88e5; border-width:3px;"/>
							</div>
							<div class="col-md-12 input-group mb-3">
							  <label style="display:block; width:100%;">
							  <strong>POLITICAL:</strong>
							  <p>This may include legal issues, tax policy, trade restriction, political stability and government regulations that affect your ability to do business.</p>
							  </label>
							  <input type="text" class="form-control" name="pest_analysis_political[]" placeholder="POLITICAL" aria-label="" aria-describedby="basic-addon1" data-role='tags-input' >
							  
							</div>
							<br/>
							<div class="col-md-12 input-group mb-3">
							  <label style="display:block; width:100%;">
							  <strong>ECONOMICAL:</strong>
							  <p>Economic factors may affect your ability to access capital and your customers' ability to purchase your product/service. Note economic growth, interest rates, inflation, labour cost, the impact of globalisation and levels of consumer disposable income within your target markets.</p>
							  </label>
							  <input type="text" class="form-control" name="pest_analysis_economical[]" placeholder="ECONOMICAL" aria-label="" aria-describedby="basic-addon1" data-role='tags-input' >
							  
							</div>
							<br/>
							<div class="col-md-12 input-group mb-3">
							  <label style="display:block; width:100%;">
							  <strong>SOCIO-CULTURAL:</strong>
							  <p>These factors affect the size of a market, consumer demand. Note important facts on your market's population, age distribution, religious belief, career importance, social attitude and importance of health and safety.</p>
							  </label>
							  <input type="text" class="form-control" name="pest_analysis_socio_cultural[]" placeholder="" aria-label="" aria-describedby="basic-addon1" data-role='tags-input' >
							 
							</div>
							<br/>
							<div class="col-md-12 input-group mb-3">
							  <label style="display:block; width:100%;">
							  <strong>TECHNOLOGICAL:</strong>
							  <p>Technological factors influence the need to outsource, feasibility of in-house research and access to the latest technology. Consider the rate of technological change within your market, the research and development culture and the emergence of new technologies.</p>
							  </label>
							  <input type="text" class="form-control" name="pest_analysis_technological[]" placeholder="TECHNOLOGICAL" aria-label="" aria-describedby="basic-addon1" data-role='tags-input'>
							 
							</div>
						   <br/>
							 <button class="btn btn-success btn-large" type="submit" name="submit_step1" value="Add" style="float:right;">Add</button>

						  </div>
						</div>
</div>
<div class="box-header with-border">
  <h3 class="box-title">Competitor Analysis <small>( My Plans )</small></h3>
</div>
<div class="box-body">
  <div class="box-body">	
    <div class="col-md-9">
      <p>Think about the top competitors in their market. Enter the top 5 (or more) here by clicking ‘Add New Direct Competitor’. </p>
	  <button type="button" id="mymodal121" class="btn btn-primary btn-lg" data-toggle="modal" data-target="#myModal121" style="    padding: 0px 24px 0px 24px;">
     <i class="fa fa-plus"></i> Add New Direct Competitor</a>
</button>

<div class="container" id="flag">
<?php $competitor=getcompetitor($user_id,$plan_id); ?>
  <h2>List of Competitor <p id="comment"> <?php $competitor_count = count($competitor);
  if(!empty($competitor) && $competitor_count < 5){?>
    Please Add Atleast Five Competitor.
  <?php } ?>
  </p></h2> 
  <div class="list-group">
  
  
  
  <?php foreach($competitor as $com){ ?>
    <a href="#" class="list-group-item" style="font-weight:600;"> <img src="<?php echo base_url('uploads/img/'.$com->image); ?>" style="height:80px; width:90px;"/>   &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;    Name: <?php echo $com->competitor_name;?> &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; Location: <?php echo $com->location;?>  </a>
  <?php } ?>
  </div>
</div>
	  
      </div>
	  

<br/>	
<br/>	






<div class="col-md-12">
<p>Thinking of only the <strong style="font-weight: 600;">quality</strong> of each competitor’s product/service offering, please rate each on only the <strong style="font-weight: 600;">quality </strong>of the competitor’s product/service offering. </p>


<table  class="table table-bordered" style="border: 2px solid #f4f4f4;">
  <thead>
    <tr style="background-color: #539bda;">
      <!-- First column header is not rotated -->
          <th></th>
      <!-- Following headers are rotated -->
	  <?php $competitor=getcompetitor($user_id,$plan_id); ?>
	   <?php foreach($competitor as $com){ ?>
        <th class="rotate"><div><span style="color:#fff; font-weight: 600;"><?php echo $com->competitor_name;?></span></div></th>
       
	   <?php } ?>
      
      
    </tr> 
  </thead>
  <tbody>
    <tr style="background-color: #c8e0ec;">
      <th class="row-header" style="font-weight: 600;">Much higher than competitors</th>
	  
	  <?php 
	  $i=1;
	  foreach($competitor as $com){ ?>
      <td><input  name="quality<?php echo $com->id;?>" type="radio" value="<?php echo $i;?>1"></td>
	  <?php $i++; }  ?>
      
     
    </tr>
    <tr style="background-color: #e8d5d545;">
      <th class="row-header" style="font-weight: 600;">A little higher than competitors</th>
	   <?php 
	  $j=1;
	  foreach($competitor as $com){ ?>
	  
      <td><input name="quality<?php echo $com->id;?>" type="radio" value="<?php echo $j;?>2"></td>
       <?php $j++; }  ?>
     
    </tr>
    <tr style="background-color: #c8e0ec;">
      <th class="row-header" style="font-weight: 600;">About the same as competitors</th>
	   <?php 
	  $k=1;
	  foreach($competitor as $com){ ?>
      <td><input name="quality<?php echo $com->id;?>" type="radio" value="<?php echo $k;?>3"></td>
      <?php $k++; }  ?>
     
    </tr>
	<tr style="background-color: #e8d5d545;">
      <th class="row-header" style="font-weight: 600;">A little lower than competitors</th>
	   <?php 
	  $l=1;
	  foreach($competitor as $com){ ?>
      <td><input name="quality<?php echo $com->id;?>" type="radio" value="<?php echo $l;?>4"></td>
	     <?php $l++; }  ?>
    
      
    </tr>
	
	<tr style="background-color: #c8e0ec;">
      <th class="row-header" style="font-weight: 600;">Much lower than competitors</th>
	     <?php 
	  $m=1;
	  foreach($competitor as $com){ ?>
      <td><input name="column1[]" type="radio" value="<?php echo $m;?>5"></td>
       <?php $m++; }  ?>
      
    </tr>
	
  </tbody>
</table>



<br/>
<br/>







<p>Thinking of only the <strong style="font-weight: 600;"> reputation </strong>of each competitor, please rate each on only the <strong style="font-weight: 600;"> reputation </strong> of the competitor.  </p>


<table  class="table table-bordered" style="border: 2px solid #f4f4f4;">
  <thead>
    <tr style="background-color: #539bda;">
      <!-- First column header is not rotated -->
          <th></th>
      <!-- Following headers are rotated -->
	  
	 
	   <?php foreach($competitor as $com){ ?>
        <th class="rotate"><div><span style="color:#fff; font-weight: 600;"><?php echo $com->competitor_name;?></span></div></th>
       
	   <?php } ?>
	  
      
    </tr> 
  </thead>
  <tbody>
     <tr style="background-color: #c8e0ec;">
      <th class="row-header" style="font-weight: 600;">Much higher than competitors</th>
	  
	  <?php 
	  $n=1;
	  foreach($competitor as $com){ ?>
      <td><input  name="reputation<?php echo $com->id;?>" type="radio" value="<?php echo $n;?>1"></td>
     <?php $n++; } ?>
     </tr>
     <tr style="background-color: #e8d5d545;">
      <th class="row-header" style="font-weight: 600;">A little higher than competitors</th>
	  <?php 
	  $o=1;
	  foreach($competitor as $com){ ?>
      <td><input name="reputation<?php echo $com->id;?>" type="radio" value="<?php echo $o;?>2"></td>
	    <?php $o++; } ?>
     </tr>
    <tr style="background-color: #c8e0ec;">
      <th class="row-header" style="font-weight: 600;">About the same as competitors</th>
	   <?php 
	  $p=1;
	  foreach($competitor as $com){ ?>
      <td><input name="reputation<?php echo $com->id;?>" type="radio" value="<?php echo $p;?>3"></td>
        <?php $p++; } ?>
     
    </tr>
	<tr style="background-color: #e8d5d545;">
      <th class="row-header" style="font-weight: 600;">A little lower than competitors</th>
	   <?php 
	  $q=1;
	  foreach($competitor as $com){ ?>
      <td><input name="reputation<?php echo $com->id;?>" type="radio" value="<?php echo $q;?>4"></td>
      <?php $q++; } ?>
      
    </tr>
	
	<tr style="background-color: #c8e0ec;">
      <th class="row-header" style="font-weight: 600;">Much lower than competitors</th>
	  <?php 
	  $r=1;
	  foreach($competitor as $com){ ?>
      <td><input name="column11[]" type="radio" value="<?php echo $r;?>4"></td>
       <?php $r++; } ?>
    </tr>
	
  </tbody>
</table>

<br/>
<br/>


<p>Thinking of only the <strong style="font-weight: 600;"> profitability </strong> of each competitor, please rate each on only the <strong style="font-weight: 600;"> profitability </strong> of the competitor.  </p>


<table  class="table table-bordered" style="border: 2px solid #f4f4f4;">
  <thead>
    <tr style="background-color: #539bda;">
      <!-- First column header is not rotated -->
          <th></th>
      <!-- Following headers are rotated -->
	  <?php foreach($competitor as $com){ ?>
        <th class="rotate"><div><span style="color:#fff; font-weight: 600;"><?php echo $com->competitor_name;?></span></div></th>
       
	   <?php } ?>
        
    </tr> 
  </thead>
  <tbody>
    <tr style="background-color: #c8e0ec;">
      <th class="row-header" style="font-weight: 600;">Much higher than competitors</th>
      <?php 
	  $s=1;
	  foreach($competitor as $com){ ?>
      <td><input  name="profitability<?php echo $com->id;?>" type="radio" value="<?php echo $s;?>1"></td>
     <?php $s++; } ?>
     
    </tr>
    <tr style="background-color: #e8d5d545;">
      <th class="row-header" style="font-weight: 600;">A little higher than competitors</th>
      <?php 
	  $t=1;
	  foreach($competitor as $com){ ?>
      <td><input  name="profitability<?php echo $com->id;?>" type="radio" value="<?php echo $t;?>2"></td>
     <?php $t++; } ?>
     
    </tr>
    <tr style="background-color: #c8e0ec;">
      <th class="row-header" style="font-weight: 600;">About the same as competitors</th>
      <?php 
	  $u=1;
	  foreach($competitor as $com){ ?>
      <td><input  name="profitability<?php echo $com->id;?>" type="radio" value="<?php echo $u;?>3"></td>
     <?php $u++; } ?>
     
    </tr>
	<tr style="background-color: #e8d5d545;">
      <th class="row-header" style="font-weight: 600;">A little lower than competitors</th>
      <?php 
	  $v=1;
	  foreach($competitor as $com){ ?>
      <td><input  name="profitability<?php echo $com->id;?>" type="radio" value="<?php echo $v;?>4"></td>
     <?php $v++; } ?>
      
    </tr>
	
	<tr style="background-color: #c8e0ec;">
      <th class="row-header" style="font-weight: 600;">Much lower than competitors</th>
     <?php 
	  $w=1;
	  foreach($competitor as $com){ ?>
      <td><input  name="profitability<?php echo $com->id;?>" type="radio" value="<?php echo $w;?>1"></td>
     <?php $w++; } ?>
      
    </tr>
	
  </tbody>
</table>

<br/>
<br/>

<p>Thinking of only the quality of the <strong style="font-weight: 600;"> employees </strong>of each competitor, please rate each on only the quality of the <strong style="font-weight: 600;"> employees </strong> of the competitor.  </p>


<table  class="table table-bordered" style="border: 2px solid #f4f4f4;">
  <thead>
    <tr style="background-color: #539bda;">
      <!-- First column header is not rotated -->
          <th></th>
      <!-- Following headers are rotated -->
       <?php foreach($competitor as $com){ ?>
        <th class="rotate"><div><span style="color:#fff; font-weight: 600;"><?php echo $com->competitor_name;?></span></div></th>
       
	   <?php } ?>
      
    </tr> 
  </thead>
  <tbody>
    <tr style="background-color: #c8e0ec;">
      <th class="row-header" style="font-weight: 600;">Much higher than competitors</th>
       <?php 
	  $x=1;
	  foreach($competitor as $com){ ?>
      <td><input  name="employees<?php echo $com->id;?>" type="radio" value="<?php echo $x;?>1"></td>
     <?php $x++; } ?>
     
    </tr>
    <tr style="background-color: #e8d5d545;">
      <th class="row-header" style="font-weight: 600;">A little higher than competitors</th>
     <?php 
	  $y=1;
	  foreach($competitor as $com){ ?>
      <td><input  name="employees<?php echo $com->id;?>" type="radio" value="<?php echo $y;?>2"></td>
     <?php $y++; } ?>
     
    </tr>
    <tr style="background-color: #c8e0ec;">
      <th class="row-header" style="font-weight: 600;">About the same as competitors</th>
     <?php 
	  $z=1;
	  foreach($competitor as $com){ ?>
      <td><input  name="employees<?php echo $com->id;?>" type="radio" value="<?php echo $z;?>3"></td>
     <?php $z++; } ?>
     
    </tr>
	<tr style="background-color: #e8d5d545;">
      <th class="row-header" style="font-weight: 600;">A little lower than competitors</th>
       <?php 
	  $a=1;
	  foreach($competitor as $com){ ?>
      <td><input  name="employees<?php echo $com->id;?>" type="radio" value="<?php echo $a;?>4"></td>
     <?php $a++; } ?>
      
    </tr>
	
	<tr style="background-color: #c8e0ec;">
      <th class="row-header" style="font-weight: 600;">Much lower than competitors</th>
       <?php 
	  $b=1;
	  foreach($competitor as $com){ ?>
      <td><input  name="employees<?php echo $com->id;?>" type="radio" value="<?php echo $b;?>5"></td>
     <?php $b++; } ?>
      
    </tr>
	
  </tbody>
</table>

<br/>
<br/>

<p>Thinking of only the quality of the <strong style="font-weight: 600;"> management </strong> of each competitor, please rate each on only the quality of the <strong style="font-weight: 600;"> management </strong> of the competitor.  </p>


<table  class="table table-bordered" style="border: 2px solid #f4f4f4;">
  <thead>
    <tr style="background-color: #539bda;">
      <!-- First column header is not rotated -->
          <th></th>
      <!-- Following headers are rotated -->
        <?php foreach($competitor as $com){ ?>
		
        <th class="rotate"><div><span style="color:#fff; font-weight: 600;"><?php echo $com->competitor_name;?></span></div></th>
       
	   <?php } ?>
      
    </tr> 
  </thead>
  <tbody>
    <tr style="background-color: #c8e0ec;">
      <th class="row-header" style="font-weight: 600;">Much higher than competitors</th>
      <?php 
	  $c=1;
	  foreach($competitor as $com){ ?>
      <td><input  name="management<?php echo $com->id;?>" type="radio" value="<?php echo $c;?>1"></td>
     <?php $c++; } ?>
     
    </tr>
    <tr style="background-color: #e8d5d545;">
      <th class="row-header" style="font-weight: 600;">A little higher than competitors</th>
      <?php 
	  $d=1;
	  foreach($competitor as $com){ ?>
      <td><input  name="management<?php echo $com->id;?>" type="radio" value="<?php echo $d;?>2"></td>
     <?php $d++; } ?>
     
    </tr>
    <tr style="background-color: #c8e0ec;">
      <th class="row-header" style="font-weight: 600;">About the same as competitors</th>
      <?php 
	  $e=1;
	  foreach($competitor as $com){ ?>
      <td><input  name="management<?php echo $com->id;?>" type="radio" value="<?php echo $e;?>3"></td>
     <?php $e++; } ?>
     
    </tr>
	<tr style="background-color: #e8d5d545;">
      <th class="row-header" style="font-weight: 600;">A little lower than competitors</th>
       <?php 
	  $f=1;
	  foreach($competitor as $com){ ?>
      <td><input  name="management<?php echo $com->id;?>" type="radio" value="<?php echo $f;?>4"></td>
     <?php $f++; } ?>
    </tr>
	
	<tr style="background-color: #c8e0ec;">
      <th class="row-header" style="font-weight: 600;">Much lower than competitors</th>
      <?php 
	  $g=1;
	  foreach($competitor as $com){ ?>
      <td><input  name="management<?php echo $com->id;?>" type="radio" value="<?php echo $g;?>5"></td>
     <?php $g++; } ?>
      
    </tr>
	
  </tbody>
</table>


<br/>
<br/>

<p>Thinking of only the quality of the <strong style="font-weight:600"> customer service </strong> of each competitor, please rate each on only the quality of the <strong style="font-weight:600"> customer service </strong> of the competitor.   </p>


<table  class="table table-bordered" style="border: 2px solid #f4f4f4;">
  <thead>
    <tr style="background-color: #539bda;">
      <!-- First column header is not rotated -->
          <th></th>
      <!-- Following headers are rotated -->
        <?php foreach($competitor as $com){ ?>
		
        <th class="rotate"><div><span style="color:#fff; font-weight: 600;"><?php echo $com->competitor_name;?></span></div></th>
       
	   <?php } ?>
      
    </tr> 
  </thead>
  <tbody>
    <tr style="background-color: #c8e0ec;">
      <th class="row-header" style="font-weight: 600;">Much higher than competitors</th>
    <?php 
	  $h=1;
	  foreach($competitor as $com){ ?>
      <td><input  name="customer_service<?php echo $com->id;?>" type="radio" value="<?php echo $h;?>1"></td>
     <?php $h++; } ?>
     
    </tr>
    <tr style="background-color: #e8d5d545;">
      <th class="row-header" style="font-weight: 600;">A little higher than competitors</th>
    <?php 
	  $ha=1;
	  foreach($competitor as $com){ ?>
      <td><input  name="customer_service<?php echo $com->id;?>" type="radio" value="<?php echo $ha;?>2"></td>
     <?php $ha++; } ?>
     
    </tr>
    <tr style="background-color: #c8e0ec;">
      <th class="row-header" style="font-weight: 600;">About the same as competitors</th>
      <?php 
	  $hb=1;
	  foreach($competitor as $com){ ?>
      <td><input  name="customer_service<?php echo $com->id;?>" type="radio" value="<?php echo $hb;?>3"></td>
     <?php $hb++; } ?>
     
    </tr>
	<tr style="background-color: #e8d5d545;">
      <th class="row-header" style="font-weight: 600;">A little lower than competitors</th>
     <?php 
	  $hc=1;
	  foreach($competitor as $com){ ?>
      <td><input  name="customer_service<?php echo $com->id;?>" type="radio" value="<?php echo $hc;?>4"></td>
     <?php $hc++; } ?>
      
    </tr>
	
	<tr style="background-color: #c8e0ec;">
      <th class="row-header" style="font-weight: 600;">Much lower than competitors</th>
     <?php 
	  $hd=1;
	  foreach($competitor as $com){ ?>
      <td><input  name="customer_service<?php echo $com->id;?>" type="radio" value="<?php echo $hd;?>5"></td>
     <?php $hd++; } ?>
      
    </tr>
	
  </tbody>
</table>

<br/>
<br/>

<p>Thinking of only the <strong style="font-weight:600"> pricing </strong> of each competitor’s product/service offering, please rate each on only the <strong style="font-weight:600"> pricing </strong> of the competitor’s product/service offering.  </p>


<table  class="table table-bordered" style="border: 2px solid #f4f4f4;">
  <thead>
    <tr style="background-color: #539bda;">
      <!-- First column header is not rotated -->
          <th></th>
      <!-- Following headers are rotated -->
        <?php foreach($competitor as $com){ ?>
		
        <th class="rotate"><div><span style="color:#fff; font-weight: 600;"><?php echo $com->competitor_name;?></span></div></th>
       
	   <?php } ?>
      
    </tr> 
  </thead>
  <tbody>
    <tr style="background-color: #c8e0ec;">
      <th class="row-header" style="font-weight: 600;">Much higher than competitors</th>
       <?php 
	  $he=1;
	  foreach($competitor as $com){ ?>
      <td><input  name="pricing<?php echo $com->id;?>" type="radio" value="<?php echo $he;?>1"></td>
     <?php $he++; } ?>
     
    </tr>
    <tr style="background-color: #e8d5d545;">
      <th class="row-header" style="font-weight: 600;">A little higher than competitors</th>
       <?php 
	  $hf=1;
	  foreach($competitor as $com){ ?>
      <td><input  name="pricing<?php echo $com->id;?>" type="radio" value="<?php echo $hf;?>2"></td>
     <?php $hf++; } ?>
     
    </tr>
    <tr style="background-color: #c8e0ec;">
      <th class="row-header" style="font-weight: 600;">About the same as competitors</th>
       <?php 
	  $hg=1;
	  foreach($competitor as $com){ ?>
      <td><input  name="pricing<?php echo $com->id;?>" type="radio" value="<?php echo $hg;?>3"></td>
     <?php $hg++; } ?>
     
    </tr>
	<tr style="background-color: #e8d5d545;">
      <th class="row-header" style="font-weight: 600;">A little lower than competitors</th>
      <?php 
	  $hh=1;
	  foreach($competitor as $com){ ?>
      <td><input  name="pricing<?php echo $com->id;?>" type="radio" value="<?php echo $hh;?>4"></td>
     <?php $hh++; } ?>
      
    </tr>
	
	<tr style="background-color: #c8e0ec;">
      <th class="row-header" style="font-weight: 600;">Much lower than competitors</th>
      <?php 
	  $hi=1;
	  foreach($competitor as $com){ ?>
      <td><input  name="pricing<?php echo $com->id;?>" type="radio" value="<?php echo $hi;?>5"></td>
     <?php $hi++; } ?>
      
    </tr>
	
  </tbody>
</table>

<br/>
<br/>

<p>Thinking of only the <strong style="font-weight:600">product/service offering </strong> of each competitor, please rate each on only the <strong style="font-weight:600">overlap with your product/service offering.</strong>  </p>


<table  class="table table-bordered" style="border: 2px solid #f4f4f4;">
  <thead>
    <tr style="background-color: #539bda;">
      <!-- First column header is not rotated -->
          <th></th>
      <!-- Following headers are rotated -->
        <?php foreach($competitor as $com){ ?>
		
        <th class="rotate"><div><span style="color:#fff; font-weight: 600;"><?php echo $com->competitor_name;?></span></div></th>
       
	   <?php } ?>
      
    </tr> 
  </thead>
  <tbody>
    <tr style="background-color: #c8e0ec;">
      <th class="row-header" style="font-weight: 600;">Almost identical to mine</th>
     <?php 
	  $hj=1;
	  foreach($competitor as $com){ ?>
      <td><input  name="pricing<?php echo $com->id;?>" type="radio" value="<?php echo $hj;?>1"></td>
     <?php $hj++; } ?>
     
    </tr>
    <tr style="background-color: #e8d5d545;">
      <th class="row-header" style="font-weight: 600;">Significant overlap to mine</th>
     <?php 
	  $hk=1;
	  foreach($competitor as $com){ ?>
      <td><input  name="pricing<?php echo $com->id;?>" type="radio" value="<?php echo $hk;?>2"></td>
     <?php $hk++; } ?>
     
    </tr>
    <tr style="background-color: #c8e0ec;">
      <th class="row-header" style="font-weight: 600;">Some overlap to mine</th>
     <?php 
	  $hl=1;
	  foreach($competitor as $com){ ?>
      <td><input  name="pricing<?php echo $com->id;?>" type="radio" value="<?php echo $hl;?>3"></td>
     <?php $hl++; } ?>
     
    </tr>
	<tr style="background-color: #e8d5d545;">
      <th class="row-header" style="font-weight: 600;">Minor overlap to mine </th>
     <?php 
	  $hm=1;
	  foreach($competitor as $com){ ?>
      <td><input  name="pricing<?php echo $com->id;?>" type="radio" value="<?php echo $hm;?>4"></td>
     <?php $hm++; } ?>
      
    </tr>
	
	
	
  </tbody>
</table>

<br/>
<br/>

<p>Thinking of only the <strong style="font-weight:600"> market share </strong> of each competitor, please rate each on only the <strong style="font-weight:600">  market share </strong> of each competitor. </p>


<table  class="table table-bordered" style="border: 2px solid #f4f4f4;">
  <thead>
    <tr style="background-color: #539bda;">
      <!-- First column header is not rotated -->
          <th></th>
      <!-- Following headers are rotated -->
        <?php foreach($competitor as $com){ ?>
		
        <th class="rotate"><div><span style="color:#fff; font-weight: 600;"><?php echo $com->competitor_name;?></span></div></th>
       
	   <?php } ?>
      
    </tr> 
  </thead>
  <tbody>
    <tr style="background-color: #c8e0ec;">
      <th class="row-header" style="font-weight: 600;">Market Leader</th>
      <?php 
	  $hn=1;
	  foreach($competitor as $com){ ?>
      <td><input  name="market_share<?php echo $com->id;?>" type="radio" value="<?php echo $hn;?>1"></td>
     <?php $hn++; } ?>
     
    </tr>
    <tr style="background-color: #e8d5d545;">
      <th class="row-header" style="font-weight: 600;">Significant share, but not a leader</th>
     <?php 
	  $ho=1;
	  foreach($competitor as $com){ ?>
      <td><input  name="market_share<?php echo $com->id;?>" type="radio" value="<?php echo $ho;?>2"></td>
     <?php $ho++; } ?>
     
    </tr>
    <tr style="background-color: #c8e0ec;">
      <th class="row-header" style="font-weight: 600;">Smaller Competitor</th>
     <?php 
	  $hp=1;
	  foreach($competitor as $com){ ?>
      <td><input  name="market_share<?php echo $com->id;?>" type="radio" value="<?php echo $hp;?>3"></td>
     <?php $hp++; } ?>
     
    </tr>
	<tr style="background-color: #e8d5d545;">
      <th class="row-header" style="font-weight: 600;">Specialty Competitor</th>
      <?php 
	  $hq=1;
	  foreach($competitor as $com){ ?>
      <td><input  name="market_share<?php echo $com->id;?>" type="radio" value="<?php echo $hq;?>4"></td>
     <?php $hq++; } ?>
      
    </tr>
	
	
	
  </tbody>
</table>



<br/>
<br/>

<p>Thinking of only the <strong style="font-weight:600">pricing strategy</strong> of each competitor, please select the choice that most accurately represents the <strong style="font-weight:600"> pricing strategy </strong>  of the competitor.  </p>


<table  class="table table-bordered" style="border: 2px solid #f4f4f4;">
  <thead>
    <tr style="background-color: #539bda;">
      <!-- First column header is not rotated -->
          <th></th>
      <!-- Following headers are rotated -->
        <?php foreach($competitor as $com){ ?>
		
        <th class="rotate"><div><span style="color:#fff; font-weight: 600;"><?php echo $com->competitor_name;?></span></div></th>
       
	   <?php } ?>
      
    </tr> 
  </thead>
  <tbody>
    <tr style="background-color: #c8e0ec;">
      <th class="row-header" style="font-weight: 600;">Cost-plus pricing — Calculate cost and add a mark-up to make a profit</th>
      <?php 
	  $hr=1;
	  foreach($competitor as $com){ ?>
      <td><input  name="pricing_strategy<?php echo $com->id;?>" type="radio" value="<?php echo $hr;?>1"></td>
     <?php $hr++; } ?>
     
    </tr>
    <tr style="background-color: #e8d5d545;">
      <th class="row-header" style="font-weight: 600;">Competitive pricing — Product/Service price based on what other competitors charge</th>
     <?php 
	  $hs=1;
	  foreach($competitor as $com){ ?>
      <td><input  name="pricing_strategy<?php echo $com->id;?>" type="radio" value="<?php echo $hs;?>2"></td>
     <?php $hs++; } ?>
     
    </tr>
    <tr style="background-color: #c8e0ec;">
      <th class="row-header" style="font-weight: 600;">Skim pricing — Start with high price and lowering it as the market evolves</th>
      <?php 
	  $ht=1;
	  foreach($competitor as $com){ ?>
      <td><input  name="pricing_strategy<?php echo $com->id;?>" type="radio" value="<?php echo $ht;?>3"></td>
     <?php $ht++; } ?>
     
    </tr>
	<tr style="background-color: #e8d5d545;">
      <th class="row-header" style="font-weight: 600;">Penetration pricing—setting a price low to enter a competitive market and raising it later</th>
       <?php 
	  $hu=1;
	  foreach($competitor as $com){ ?>
      <td><input  name="pricing_strategy<?php echo $com->id;?>" type="radio" value="<?php echo $hu;?>4"></td>
     <?php $hu++; } ?>
      
    </tr>
	
	<tr style="background-color: #c8e0ec;">
      <th class="row-header" style="font-weight: 600;">Bundle pricing —Combining products/ services, increasing value and price</th>
      <?php 
	  $hv=1;
	  foreach($competitor as $com){ ?>
      <td><input  name="pricing_strategy<?php echo $com->id;?>" type="radio" value="<?php echo $hv;?>5"></td>
     <?php $hv++; } ?>
      
    </tr>
	
  </tbody>
</table>



<br/>
<br/>

<p>Thinking of only the <strong style="font-weight:600"> advertising avenues </strong> of each competitor, please select the choices that represents the <strong style="font-weight:600">  advertising avenues </strong> of each competitor.   </p>


<table  class="table table-bordered" style="border: 2px solid #f4f4f4;">
  <thead>
    <tr style="background-color: #539bda;">
      <!-- First column header is not rotated -->
          <th></th>
      <!-- Following headers are rotated -->
        <?php foreach($competitor as $com){ ?>
		
        <th class="rotate"><div><span style="color:#fff; font-weight: 600;"><?php echo $com->competitor_name;?></span></div></th>
       
	   <?php } ?>
      
    </tr> 
  </thead>
  <tbody>
    <tr style="background-color: #c8e0ec;">
      <th class="row-header" style="font-weight: 600;">Outdoor Advertising</th>
       <?php 
	  $hw=1;
	  foreach($competitor as $com){ ?>
      <td><input  name="advertising_avenues<?php echo $com->id;?>[]" type="checkbox" value="<?php echo $hw;?>1"></td>
     <?php $hw++; } ?>
     
    </tr>
    <tr style="background-color: #e8d5d545;">
      <th class="row-header" style="font-weight: 600;">Internet Related Advertising</th>
    <?php 
	  $hx=1;
	  foreach($competitor as $com){ ?>
      <td><input  name="advertising_avenues<?php echo $com->id;?>[]" type="checkbox" value="<?php echo $hx;?>2"></td>
     <?php $hx++; } ?>
     
    </tr>
    <tr style="background-color: #c8e0ec;">
      <th class="row-header" style="font-weight: 600;">Social Media Related Advertising</th>
      <?php 
	  $hy=1;
	  foreach($competitor as $com){ ?>
      <td><input  name="advertising_avenues<?php echo $com->id;?>[]" type="checkbox" value="<?php echo $hy;?>3"></td>
     <?php $hy++; } ?>
     
    </tr>
	<tr style="background-color: #e8d5d545;">
      <th class="row-header" style="font-weight: 600;">Direct Marketing / Print Media Advertising</th>
     <?php 
	  $hz=1;
	  foreach($competitor as $com){ ?>
      <td><input  name="advertising_avenues<?php echo $com->id;?>[]" type="checkbox" value="<?php echo $hz;?>4"></td>
     <?php $hz++; } ?>
      
    </tr>
	
	<tr style="background-color: #c8e0ec;">
      <th class="row-header" style="font-weight: 600;">Person to Person Advertising</th>
       <?php 
	  $aa=1;
	  foreach($competitor as $com){ ?>
      <td><input  name="advertising_avenues<?php echo $com->id;?>[]" type="checkbox" value="<?php echo $aa;?>5"></td>
     <?php $aa++; } ?>
      
    </tr>
	
	<tr style="background-color: #e8d5d545;">
      <th class="row-header" style="font-weight: 600;">Partnerships/Joint Ventures</th>
     <?php 
	  $ab=1;
	  foreach($competitor as $com){ ?>
      <td><input  name="advertising_avenues<?php echo $com->id;?>[]" type="checkbox" value="<?php echo $ab;?>6"></td>
     <?php $ab++; } ?>
      
    </tr>
	
	<tr style="background-color: #c8e0ec;">
      <th class="row-header" style="font-weight: 600;">Radio/TV Media Advertising</th>
     <?php 
	  $ac=1;
	  foreach($competitor as $com){ ?>
      <td><input  name="advertising_avenues<?php echo $com->id;?>[]" type="checkbox" value="<?php echo $ac;?>7"></td>
     <?php $ac++; } ?>
      
    </tr>
	
	<tr style="background-color: #e8d5d545;">
      <th class="row-header" style="font-weight: 600;">Other</th>
    <?php 
	  $ad=1;
	  foreach($competitor as $com){ ?>
      <td><input  name="advertising_avenues<?php echo $com->id;?>[]" type="checkbox" value="<?php echo $ad;?>8"></td>
     <?php $ad++; } ?>
      
    </tr>
	
  </tbody>
</table>

<br/>
<br/>



<p>Thinking of only where each competitor operates, please list the <strong style="font-weight:600"> geography </strong> (and internet) each competitor focuses. </p>


<table  class="table table-bordered" style="border: 2px solid #f4f4f4;">
  <thead>
    <tr style="background-color: #539bda;">
      <!-- First column header is not rotated -->
          <th></th>
      <!-- Following headers are rotated -->
       <?php foreach($competitor as $com){ ?>
		
        <th class="rotate"><div><span style="color:#fff; font-weight: 600;"><?php echo $com->competitor_name;?></span></div></th>
       
	   <?php } ?>
    </tr> 
  </thead>
  <tbody>
    <tr style="background-color: #c8e0ec;">
      <th class="row-header" style="font-weight: 600;">Local – One city, town or county</th>
       <?php 
	  $ae=1;
	  foreach($competitor as $com){ ?>
      <td><input  name="geography<?php echo $com->id;?>" type="radio" value="<?php echo $ae;?>1"></td>
     <?php $ae++; } ?>
     
    </tr>
    <tr style="background-color: #e8d5d545;">
      <th class="row-header" style="font-weight: 600;">Regional – Across multiple cities, counties or states</th>
       <?php 
	  $af=1;
	  foreach($competitor as $com){ ?>
      <td><input  name="geography<?php echo $com->id;?>" type="radio" value="<?php echo $af;?>2"></td>
     <?php $af++; } ?>
     
    </tr>
    <tr style="background-color: #c8e0ec;">
      <th class="row-header" style="font-weight: 600;">National – A single entire country</th>
        <?php 
	  $ag=1;
	  foreach($competitor as $com){ ?>
      <td><input  name="geography<?php echo $com->id;?>" type="radio" value="<?php echo $ag;?>3"></td>
     <?php $ag++; } ?>
     
    </tr>
	<tr style="background-color: #e8d5d545;">
      <th class="row-header" style="font-weight: 600;">International – Multiple countries</th>
      <?php 
	  $ah=1;
	  foreach($competitor as $com){ ?>
      <td><input  name="geography<?php echo $com->id;?>" type="radio" value="<?php echo $ah;?>4"></td>
     <?php $ah++; } ?>
      
    </tr>
	
	<tr style="background-color: #c8e0ec;">
      <th class="row-header" style="font-weight: 600;">Internet</th>
     <?php 
	  $ai=1;
	  foreach($competitor as $com){ ?>
      <td><input  name="geography<?php echo $com->id;?>[]" type="checkbox" value="<?php echo $ai;?>5"></td>
     <?php $ai++; } ?>
      
    </tr>
	
  </tbody>
</table>


<br/>
<br/>

<p>Thinking of only the  <strong style="font-weight:600">  strengths </strong> of each competitor, please list the top two <strong style="font-weight:600">strengths  </strong> for each competitor. </p>


<table  class="table table-bordered" style="border: 2px solid #f4f4f4;">
  <thead>
    <tr style="background-color: #539bda;">
      <!-- First column header is not rotated -->
          <th></th>
      <!-- Following headers are rotated -->
       <?php foreach($competitor as $com){ ?>
		
        <th class="rotate"><div><span style="color:#fff; font-weight: 600;"><?php echo $com->competitor_name;?></span></div></th>
       
	   <?php } ?>
      
    </tr> 
  </thead>
  <tbody>
    <tr style="background-color: #c8e0ec;">
      <th class="row-header" style="font-weight: 600;">Top strength #1</th>
      <?php 
	  $aj=1;
	  foreach($competitor as $com){ ?>
      <td><input  name="strength<?php echo $com->id;?><?php echo $aj;?>" class="form-control" type="text"></td>
     <?php  } ?>
     
      
     
    </tr>
    <tr style="background-color: #e8d5d545;">
      <th class="row-header" style="font-weight: 600;">Top strength #2</th>
    <?php 
	  $ak=2;
	  foreach($competitor as $com){ ?>
      <td><input  name="strength<?php echo $com->id;?><?php echo $ak;?>" class="form-control" type="text"></td>
     <?php  } ?>
     
     
    </tr>
    
  </tbody>
</table>


<br/>
<br/>

<p>Thinking of only the <strong style="font-weight:600"> weaknesses </strong>of each competitor, please list the top two  <strong style="font-weight:600">weaknesses  </strong>for each competitor. </p>


<table  class="table table-bordered" style="border: 2px solid #f4f4f4;">
  <thead>
    <tr style="background-color: #539bda;">
      <!-- First column header is not rotated -->
          <th></th>
      <!-- Following headers are rotated -->
        <?php foreach($competitor as $com){ ?>
		
        <th class="rotate"><div><span style="color:#fff; font-weight: 600;"><?php echo $com->competitor_name;?></span></div></th>
       
	   <?php } ?>
      
    </tr> 
  </thead>
  <tbody>
    <tr style="background-color: #c8e0ec;">
      <th class="row-header" style="font-weight: 600;">Weakness #1</th>
    <?php 
	  $al=1;
	  foreach($competitor as $com){ ?>
      <td><input  name="Weakness<?php echo $com->id;?><?php echo $al;?>" class="form-control" type="text"></td>
     <?php  } ?>
    </tr>
    <tr style="background-color: #e8d5d545;">
      <th class="row-header" style="font-weight: 600;">Weakness #2</th>
   
   <?php 
	  $am=2;
	  foreach($competitor as $com){ ?>
      <td><input  name="Weakness<?php echo $com->id;?><?php echo $am;?>" class="form-control" type="text"></td>
     <?php  } ?>
     
    </tr>
    
  </tbody>
</table>


<br/>
<br/>

<p>Thinking of only the <strong style="font-weight:600"> opportunities </strong> for each competitor, please list the top two <strong style="font-weight:600"> opportunities </strong> for each competitor.</p>


<table  class="table table-bordered" style="border: 2px solid #f4f4f4;">
  <thead>
    <tr style="background-color: #539bda;">
      <!-- First column header is not rotated -->
          <th></th>
      <!-- Following headers are rotated -->
       <?php foreach($competitor as $com){ ?>
		
        <th class="rotate"><div><span style="color:#fff; font-weight: 600;"><?php echo $com->competitor_name;?></span></div></th>
       
	   <?php } ?>
      
    </tr> 
  </thead>
  <tbody>
    <tr style="background-color: #c8e0ec;">
      <th class="row-header" style="font-weight: 600;">Opportunity #1</th>
    <?php 
	  $an=1;
	  foreach($competitor as $com){ ?>
      <td><input  name="Opportunity<?php echo $com->id;?><?php echo $an;?>" class="form-control" type="text"></td>
     <?php  } ?>
    </tr>
    <tr style="background-color: #e8d5d545;">
      <th class="row-header" style="font-weight: 600;">Opportunity #2</th>
   
    <?php 
	  $ao=2;
	  foreach($competitor as $com){ ?>
      <td><input  name="Opportunity<?php echo $com->id;?><?php echo $ao;?>" class="form-control" type="text"></td>
     <?php  } ?>
     
    </tr>
    
  </tbody>
</table>


<br/>
<br/>

<p>Thinking of only the <strong style="font-weight:600"> threats </strong> for each competitor, please list the top two <strong style="font-weight:600">threats </strong> for each competitor. </p>


<table  class="table table-bordered" style="border: 2px solid #f4f4f4;">
  <thead>
    <tr style="background-color: #539bda;">
      <!-- First column header is not rotated -->
          <th></th>
      <!-- Following headers are rotated -->
        <?php foreach($competitor as $com){ ?>
		
        <th class="rotate"><div><span style="color:#fff; font-weight: 600;"><?php echo $com->competitor_name;?></span></div></th>
       
	   <?php } ?>
      
    </tr> 
  </thead>
  <tbody>
    <tr style="background-color: #c8e0ec;">
      <th class="row-header" style="font-weight: 600;">Threat #1</th>
     <?php 
	  $ap=1;
	  foreach($competitor as $com){ ?>
      <td><input  name="Threat<?php echo $com->id;?><?php echo $ap;?>" class="form-control" type="text"></td>
     <?php  } ?>
    </tr>
    <tr style="background-color: #e8d5d545;">
      <th class="row-header" style="font-weight: 600;">Threat #2</th>
     <?php 
	  $aq=2;
	  foreach($competitor as $com){ ?>
      <td><input  name="Threat<?php echo $com->id;?><?php echo $aq;?>" class="form-control" type="text"></td>
     <?php  } ?>
     
    </tr>
    
  </tbody>
</table>



</div>	 
 
	  
    <div class="clearfix"></div>
    <div class="col-md-12">
      <hr style="border-color:#1e88e5; border-width:3px;"/>
    </div>
   
  </div>
</div>
<div class="box-header with-border">
  <h3 class="box-title">Market Description <small>( My Plans )</small></h3>
</div>
<div class="box-body">
  <div class="box-body">
  <div class="col-md-12">
    <table  class="table table-bordered" style="border: 2px solid #f4f4f4;">
  <thead>
    <tr style="background-color: #539bda;">
      <!-- First column header is not rotated -->
          <th></th>
      <!-- Following headers are rotated -->
        <th class="rotate"><div><span></span></div></th>
        <th class="rotate"><div><span></span></div></th>
       
        
      
    </tr> 
  </thead>
  <tbody>
    <tr style="background-color: #c8e0ec;">
      <th class="row-header" style="font-weight: 600;">Is your target market business to business (B2B) or business to consumer (B2C)? 	</th>
      <td><center>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Business to Business (B2B)<br/><input checked="checked" name="column9[]" type="radio" value="row1-column1"></center></td>
      <td><center>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Business to Consumer (B2C)<br/><input checked="checked" name="column9[]" type="radio" value="row1-column2"></center></td>
      
     
    </tr>
    <tr style="background-color: #e8d5d545;">
      <th class="row-header" style="font-weight: 600;">Is your target market seasonal or spread throughout the year? </th>
      <td><center>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Seasonal<br/><input name="column8[]" type="radio" value="row2-column1"></center></td>
      <td><center>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Spread throughout the year<br/><input name="column8[]" type="radio" value="row2-column2"></center></td>
      
     
    </tr>
    <tr style="background-color: #c8e0ec;">
      <th class="row-header" style="font-weight: 600;">Is the market established or a new/emerging market? </th>
      <td><center>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Established Market<br/><input name="column7[]" type="radio" value="row3-column1"></center></td>
      <td><center>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;New/Emerging Market<br/><input name="column7[]" type="radio" value="row3-column2"></center></td>
      
     
    </tr>
	<tr style="background-color: #e8d5d545;">
      <th class="row-header" style="font-weight: 600;">What level of competition is there? Is it a highly fragmented market or one with only a few dominant competitors?</th>
      <td> <center>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Fragmented<br/><input name="column6[]" type="radio" value="row3-column1"></center></td>
      <td> <center>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Tight Market (A few dominate players)<br/><input name="column6[]" type="radio" value="row3-column2"></center></td>
      
      
    </tr>
	
	<tr style="background-color: #c8e0ec;">
      <th class="row-header" style="font-weight: 600;">Are there large barriers to enter into this market?</th>
      <td><center>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Yes<br/><input name="column5[]" type="radio" value="row3-column1"></center></td>
      <td><center>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;No<br/><input name="column5[]" type="radio" value="row3-column2"></center></td>
     
    </tr>
	
	<tr style="background-color: #e8d5d545;">
      <th class="row-header" style="font-weight: 600;">In the last three years, has the market expanded or shrunk?</th>
      <td><center>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Expanding Market<br/><input name="column1[]" type="radio" value="row3-column4"></center></td>
      <td><center>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Shrinking Market<br/><input name="column2[]" type="radio" value="row3-column4"></center></td>
     
    </tr>
	
	<tr style="background-color: #c8e0ec;">
      <th class="row-header" style="font-weight: 600;">In the next three years, will the market expand or shrunk?</th>
      <td><center>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Expanding Market<br/><input name="column333[]" type="radio" value="row3-column1"></center></td>
      <td><center>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Shrinking Market<br/><input name="column333[]" type="radio" value="row3-column2"></center></td>
     
    </tr>
	
  </tbody>
</table>
</div>

    
    <div class="clearfix"></div>
    <div class="col-xl-6 col-12 pull-left">
      <p>Understanding the size of your market can help you to understand where to focus your business efforts.</p>
      <p>You can find revenue data from trade and government associations associated with the market. This information will help you figure out pricing and revenue potential.</p>
      <a data-toggle="modal" data-target="#myModal1" class="label label-success"><i class="fa fa-lightbulb-o"></i> Example By Plan Labs</a> </div>
    <div class="col-xl-6 col-12 pull-right">
      <label class="h5"><strong>What is its current size? :</strong></label>
      <textarea class="textarea" id="editor1" name="what_is_its_current_size" placeholder="Place some text here" style="width: 100%; height: 200px; font-size: 14px; line-height: 18px; border: 1px solid #dddddd; padding: 10px;"></textarea>
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
    <div class="col-xl-6 col-12 pull-left">
      <p>What portion of the market (stated either by revenue or percentage) do you currently hold? Ideally this is stated as a portion of your target market, rather than the larger market as a whole.</p>
      <p>For example, a bakery targeting consumers in a 5km radius may have a 30% share of their target market, but less than a 1% share of the general market in their state.</p>
      <a  data-toggle="modal" data-target="#myModal3" class="label label-success"><i class="fa fa-lightbulb-o"></i> Example By Plan Labs</a> </div>
    <div class="col-xl-6 col-12 pull-right">
      <label class="h5"><strong>Current market share :</strong></label>
      <textarea class="textarea" id="editor2" name="current_market_share" placeholder="Place some text here" style="width: 100%; height: 200px; font-size: 14px; line-height: 18px; border: 1px solid #dddddd; padding: 10px;"></textarea>
    </div>
    <div class="clearfix"></div>
  </div>
</div>
<div class="box-header with-border">
  <h3 class="box-title">Growth Forecast <small>( My Plans )</small></h3>
</div>
<div class="box-body">
  <div class="box-body">
    <div class="col-xl-6 col-12 pull-left">
      <p>What growth or decline has the industry experienced in the past 3 years? If you are in an early-stage market that is growing and changing rapidly, it would be beneficial to note growth or decline within the past 6-12 months.</p>
      <p>Readers should be able to understand whether the industry has been growing, stagnating or declining in recent times.</p>
      <a data-toggle="modal" data-target="#myModal" class="popup-with-form label label-success"><i class="fa fa-lightbulb-o"></i> Example By Plan Labs</a> </div>
    <div class="col-xl-6 col-12 pull-right">
      <label class="h5"><strong>Recent growth or decline within the industry :</strong></label>
      <textarea class="textarea" id="editor" name="recent_growth_or_decline_within_the_industry" placeholder="Place some text here" style="width: 100%; height: 200px; font-size: 14px; line-height: 18px; border: 1px solid #dddddd; padding: 10px;"></textarea>
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
    <div class="col-xl-6 col-12 pull-left">
      <p>What is the projected growth for the market? Ideally you will identify the growth rate in the coming 12 months, 3 years and 5-10 years.</p>
      <p>The projected market growth rate can be found in industry publications and industry media reports.</p>
      <a data-toggle="modal" data-target="#myModal1" class="label label-success"><i class="fa fa-lightbulb-o"></i> Example By Plan Labs</a> </div>
   
    <div class="col-xl-6 col-12 pull-right">
      <label class="h5"><strong>Forecasted growth :</strong></label>
      <textarea class="textarea" name="forecasted_growth" id="editor1" placeholder="Place some text here" style="width: 100%; height: 200px; font-size: 14px; line-height: 18px; border: 1px solid #dddddd; padding: 10px;"></textarea>
    </div>
    <div id="myModal1" class="modal fade" role="dialog">
      <div class="modal-dialog modal-lg">
        <div class="modal-content">
          <div class="modal-header" style="background-color:#1e88e5; color:#FFFFFF;">
            <button type="button" class="close" data-dismiss="modal">&times;</button>
            <h4 class="modal-title">Describe your business :</h4>
          </div>
          <div class="modal-body  modal-md">
            <p><strong>The Blog Designers list future growth opportunities within their marketing plan as:</strong></p>
            <em>
            <p>Our business has been operating well in the Australian market, but we believe there to be several opportunities to increase market share and the size of the market within Australia, as well as to reach new markets. These growth opportunities are:</p>
            <ul>
              <li>Develop partnership with marketing and advertising agencies that advise businesses on the need to blog, but don't have an in-house department to create and design the blogs.</li>
              <li>Offer a premium blog design service for brands that want the confidence of working with a blog specialist, but expect to receive a higher level of service and quality than traditional bloggers.</li>
              <li>Targeting international markets. Currently, no single agency serves as a leading blog design agency in the global economy. The United States in particular offers huge potential, with over 15x more bloggers than Australia. Success in international markets is possible and realistic due to the global nature of blogging.</li>
            </ul>
            </em> </div>
        </div>
      </div>
    </div>
  </div>
</div>
 <div class="clearfix"></div>

<div class="box-header with-border">
  <h3 class="box-title">Opportunity Statement <small>( My Plans )</small></h3>
</div>
<div class="box-body">
  <div class="box-body">
    <div class="col-md-12">
      <p>An Opportunity Statement is something usually not seen in a Marketing Plan but we suggest creating one to help you note down areas that your business could explore in the future. Not only will it increase your chances of taking new opportunities, but banks and investors love to see your awareness of your market and its opportunities.<br/>

Identify the unmet needs of the market that have led to the creation of your business and explain in depth why people need and want your product/service. It is important to ascertain whether customers will buy your product because of rational need or more emotional desire.
</p>

<br/>
<br/>

<p>Thinking of only the <strong style="font-weight:600"> annual sales </strong> of each competitor, please estimate the annual sales for each competitor. </p>


<table  class="table table-bordered" style="border: 2px solid #f4f4f4;">
  <thead>
    <tr style="background-color: #539bda;">
      <!-- First column header is not rotated -->
          <th></th>
      <!-- Following headers are rotated -->
         <?php foreach($competitor as $com){ ?>
		
        <th class="rotate"><div><span style="color:#fff; font-weight: 600;"><?php echo $com->competitor_name;?></span></div></th>
       
	   <?php } ?>
      
    </tr> 
  </thead>
  <tbody>
    <tr style="background-color: #c8e0ec;">
      <th class="row-header" style="font-weight: 600;">Annual Sales 2018</th>
      <?php 
	  $ar=1;
	  foreach($competitor as $com){ ?>
      <td><input  name="Annual_sales<?php echo $com->id;?><?php echo $ar;?>" class="form-control" type="text"></td>
     <?php  } ?>
    </tr>
    <tr style="background-color: #e8d5d545;">
      <th class="row-header" style="font-weight: 600;">Projected Annual Sales 2019</th>
      <?php 
	  $as=2;
	  foreach($competitor as $com){ ?>
      <td><input  name="Annual_sales<?php echo $com->id;?><?php echo $as;?>" class="form-control" type="text"></td>
     <?php  } ?>
     
    </tr>
	
	  <tr style="background-color: #c8e0ec;">
      <th class="row-header" style="font-weight: 600;">Projected Annual Sales 2020	</th>
    <?php 
	  $at=3;
	  foreach($competitor as $com){ ?>
      <td><input  name="Annual_sales<?php echo $com->id;?><?php echo $at;?>" class="form-control" type="text"></td>
     <?php  } ?>
     
    </tr>
	
	 <tr style="background-color: #e8d5d545;">
      <th class="row-header" style="font-weight: 600;">Projected Annual Sales 2021	</th>
     <?php 
	  $au=4;
	  foreach($competitor as $com){ ?>
      <td><input  name="Annual_sales<?php echo $com->id;?><?php echo $au;?>" class="form-control" type="text"></td>
     <?php  } ?>
     
    </tr>
    
  </tbody>
</table>


<br/>
<br/>

<table  class="table table-bordered" style="border: 2px solid #f4f4f4;">
  <thead>
    <tr style="background-color: #539bda;">
      <!-- First column header is not rotated -->
          <th></th>
      <!-- Following headers are rotated -->
        <th class="rotate"><div><span style="color:#fff; font-weight: 600;">Total Market Size 2018</span></div></th>
        <th class="rotate"><div><span style="color:#fff; font-weight: 600;">Projected Total Market Size 2019</span></div></th>
        <th class="rotate"><div><span style="color:#fff; font-weight: 600;">Projected Total Market Size 2020</span></div></th>
        <th class="rotate"><div><span style="color:#fff; font-weight: 600;">Projected Total Market Size 2021</span></div></th>
        
      
    </tr> 
  </thead>
  <tbody>
    <tr style="background-color: #c8e0ec;">
      <th class="row-header" style="font-weight: 600;">Top Competitor Sales</th>
     <td><input name="Total_Market_Size_2018<?php echo $com->id;?>1" type="text" class="form-control"></td>
     <td><input name="Total_Market_Size_2018<?php echo $com->id;?>1" type="text" class="form-control"></td>
     <td><input name="Total_Market_Size_2018<?php echo $com->id;?>1" type="text" class="form-control"></td>
     <td><input name="Total_Market_Size_2018<?php echo $com->id;?>1" type="text" class="form-control"></td>
   
    </tr>
    <tr style="background-color: #e8d5d545;">
      <th class="row-header" style="font-weight: 600;">Your Annual Sales</th>
     <td><input name="Projected_Total_Market_Size_2019<?php echo $com->id;?>2" type="text" class="form-control"></td>
     <td><input name="Projected_Total_Market_Size_2019<?php echo $com->id;?>2" type="text" class="form-control"></td>
     <td><input name="Projected_Total_Market_Size_2019<?php echo $com->id;?>2" type="text" class="form-control"></td>
     <td><input name="Projected_Total_Market_Size_2019<?php echo $com->id;?>2" type="text" class="form-control"></td>

     
    </tr>
	
	  <tr style="background-color: #c8e0ec;">
      <th class="row-header" style="font-weight: 600;">All Other competitors</th>
     <td><input name="All_Other_competitors<?php echo $com->id;?>3" type="text" class="form-control"></td>
     <td><input name="All_Other_competitors<?php echo $com->id;?>3" type="text" class="form-control"></td>
     <td><input name="All_Other_competitors<?php echo $com->id;?>3" type="text" class="form-control"></td>
     <td><input name="All_Other_competitors<?php echo $com->id;?>3" type="text" class="form-control"></td>
	
     
    </tr>
	
	 <tr style="background-color: #e8d5d545;">
      <th class="row-header" style="font-weight: 800;">Total Market Size</th>
     <td><input name="Total_Market_Size<?php echo $com->id;?>4" type="text" class="form-control"></td>
     <td><input name="Total_Market_Size<?php echo $com->id;?>4" type="text" class="form-control"></td>
     <td><input name="Total_Market_Size<?php echo $com->id;?>4" type="text" class="form-control"></td>
     <td><input name="Total_Market_Size<?php echo $com->id;?>4" type="text" class="form-control"></td>
	
     
    </tr>
    
  </tbody>
</table>


    </div>
  
  
    
   
    
	
 
    
  
 
    <div class="clearfix"></div>
    <div class="col-md-12">
      <button class="btn btn-success btn-large" type="submit" name="submit_step1" value="Save &amp; Continue" onClick="window.location.href='<?php echo base_url('plans/planStep3'); ?>'"> Save &amp; Continue <i class="fa fa-chevron-right"></i> </button>
    </div>
  </div>
</div>
<?php } ?>
<?php echo form_close(); ?>
</div>
</section>


<!-- Strength Pop up -->

<div class="modal fade" id="myModalstrength" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
  <div class="modal-dialog" role="document">
   <form id="strenght_form" type="post">
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
        <h4 class="modal-title" id="myModalLabel">What are your Strengths?</h4>
		
      </div>
	
      <div class="modal-body" id="strength_modal">
       <label  style="font-weight:600;">
	   <?php $r= $_GET['plan_id']; ?>
	   <?php $userId=$this->session->userdata['USER_ID']; ?>
        New Strength
      </label>
      <input type="text"  class="form-control" name="Strength[]">
      <input type="hidden"  class="form-control" name="plan_id" value="<?php echo $r;?>">
      <input type="hidden"  class="form-control" name="user_id" value="<?php echo $userId;?>">
	 
	  
	  </div>
	  
	  <div class="modal-footer">
	   <i class="fa fa-plus-square" id="Strength" style="color: #4d20aa; font-size:16px; cursor:pointer;">&nbsp;Add New Strength</i>
	   <i class="fa fa-minus-square" id="Strength_minus" style="color: #4d20aa; font-size:16px; float:right; cursor:pointer;">&nbsp;Remove Strength</i>
	  </div>
	
      <div class="modal-footer">
	  
	  
        <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
		
        <button type="submit" id="strength_final" class="btn btn-primary"   style="float: right;">Add Strength</button>
      </div>
	
    </div>
	 </form>
  </div>
</div>



<!-- Weekness Pop up -->

<div class="modal fade" id="myModalweekness" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
  <div class="modal-dialog" role="document">
   <form id="weekness_form" type="post">
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
        <h4 class="modal-title" id="myModalLabel">What are your Weekness?</h4>
		
      </div>
	
      <div class="modal-body" id="weekness_modal">
       <label  style="font-weight:600;">
	   <?php $r= $_GET['plan_id']; ?>
	   <?php $userId=$this->session->userdata['USER_ID']; ?>
        New Weekness
      </label>
      <input type="text"  class="form-control" name="Weekness[]">
      <input type="hidden"  class="form-control" name="plan_id" value="<?php echo $r;?>">
      <input type="hidden"  class="form-control" name="user_id" value="<?php echo $userId;?>">
	 
	  
	  </div>
	  
	  <div class="modal-footer">
	   <i class="fa fa-plus-square" id="Weekness" style="color: #4d20aa; font-size:16px; cursor:pointer;">&nbsp;Add New Weekness</i>
	   <i class="fa fa-minus-square" id="Weekness_minus" style="color: #4d20aa; font-size:16px; float:right; cursor:pointer;">&nbsp;Remove Weekness</i>
	  </div>
	
      <div class="modal-footer">
	  
	  
        <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
		
        <button type="submit" id="weekness_final" class="btn btn-primary" style="float: right;">Add Weekness</button>
      </div>
	
    </div>
	 </form>
  </div>
</div>

<!-- Opportunities Pop up -->

<div class="modal fade" id="myModalOpportunities" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
  <div class="modal-dialog" role="document">
   <form id="Opportunities_form" type="post">
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
        <h4 class="modal-title" id="myModalLabel">What are your Opportunities?</h4>
		
      </div>
	
      <div class="modal-body" id="Opportunities_modal">
       <label  style="font-weight:600;">
	   <?php $r= $_GET['plan_id']; ?>
	   <?php $userId=$this->session->userdata['USER_ID']; ?>
        New Opportunities
      </label>
      <input type="text"  class="form-control" name="Opportunities[]">
      <input type="hidden"  class="form-control" name="plan_id" value="<?php echo $r;?>">
      <input type="hidden"  class="form-control" name="user_id" value="<?php echo $userId;?>">
	 
	  
	  </div>
	  
	  <div class="modal-footer">
	   <i class="fa fa-plus-square" id="Opportunities" style="color: #4d20aa; font-size:16px; cursor:pointer;">&nbsp;Add New Opportunities</i>
	   <i class="fa fa-minus-square" id="Opportunities_minus" style="color: #4d20aa; font-size:16px; float:right; cursor:pointer;">&nbsp;Remove Opportunities</i>
	  </div>
	
      <div class="modal-footer">
	  
	  
        <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
		
        <button type="submit" id="Opportunities_final" class="btn btn-primary" style="float: right;">Add Opportunities</button>
      </div>
	
    </div>
	 </form>
  </div>
</div>

<!-- Threat Pop up -->

<div class="modal fade" id="myModalThreat" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
  <div class="modal-dialog" role="document">
   <form id="Threat_form" type="post">
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
        <h4 class="modal-title" id="myModalLabel">What are your Threats?</h4>
		
      </div>
	
      <div class="modal-body" id="Threat_modal">
       <label  style="font-weight:600;">
	   <?php $r= $_GET['plan_id']; ?>
	   <?php $userId=$this->session->userdata['USER_ID']; ?>
        New Threat
      </label>
      <input type="text"  class="form-control" name="Threat[]">
      <input type="hidden"  class="form-control" name="plan_id" value="<?php echo $r;?>">
      <input type="hidden"  class="form-control" name="user_id" value="<?php echo $userId;?>">
	 
	  
	  </div>
	  
	  <div class="modal-footer">
	   <i class="fa fa-plus-square" id="Threat" style="color: #4d20aa; font-size:16px; cursor:pointer;">&nbsp;Add New Threat</i>
	   <i class="fa fa-minus-square" id="Threat_minus" style="color: #4d20aa; font-size:16px; float:right; cursor:pointer;">&nbsp;Remove Threat</i>
	  </div>
	
      <div class="modal-footer">
	   <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
	   <button type="submit" id="Opportunities_final" class="btn btn-primary" style="float: right;">Add Threat</button>
      </div>
	
    </div>
	 </form>
  </div>
</div>


	  
	  <!-- Modal -->
<div class="modal fade" id="myModal121" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
        <h4 class="modal-title" id="myModalLabel">Add New Direct Competitor</h4>
      </div>
	   <?php echo form_open_multipart('Plans/addcompetitor_analysis',array('id'=>'pop_id')); ?>
      <div class="modal-body">
       <label style="font-weight:600;">
	   <?php $r= $_GET['plan_id']; ?>
        Competitor Name
      </label>
      <input type="text" class="form-control" name="competitor_name">
	  
	  <br/>
	  <label style="font-weight:600;">
       Location of this Competitor
      </label>
	  <input type="text" class="form-control" name="competitor_location">
	  <input type="hidden"  name="plan_id" value="<?php echo $r;?>">
	  <br/>
	  
	  <input type="file" id="fileLoader" name="fileToUpload" title="Load File" />
     <!--  <center><input type="button" id="btnOpenFileDialog" class="btn btn-primary" value = "Click to add picture for this competitor" onclick="openfileDialog();" style="padding: 2px 65px 3px 71px;"/></center> -->
	  <br/>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
		  
        <button type="submit" id="competitor" class="btn btn-primary" style="float: right;">Add Competitor</button>
      </div>
	  <?php echo form_close();?>
    </div>
  </div>
</div>
	

</div>
<style type="text/css">
.form-control{ margin-bottom:12px;}
.mb-3{margin-bottom:22px;}
.clearfix{ padding:42px 42px;}
.clearfix1{ padding:22px 22px;}
.h5{ color:#000; font-size:15px;}
.rotation{transform: rotate(270deg); display:block;}
table{ border-collapse:collapse;}
table tr td{ border-collapse:collapse; border-color:#000;}
table tr td:nth-child(3){ padding:12px 20px;}
table tr td:nth-child(2){ padding:12px 20px;}
table tr td h3{ color:#1e88e5; text-transform:uppercase; font-weight:500; font-size:17px;}
.contents{  position:relative; top:-52px;}
.headings{background:#1e88e5; color:#FFFFFF; text-transform:uppercase}
.pest{padding:12px 20px;}
</style>

<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>


<script src="https://bootstrap-tagsinput.github.io/bootstrap-tagsinput/dist/bootstrap-tagsinput.min.js" defer></script>


<!-- jQuery library -->
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>

<script>
$("#pop_id").submit(function() {
	
    $('html, body').animate({
         scrollTop: $("#flag").offset().top
    }, 2000);
   
});

</script>
<script>
	$(document).ready(function(){
	
	$('#pop_id').validate({
		
		rules:{
		      competitor_name:{
				  required:true,
			  },
			  competitor_location:{
				  required:true,
			  },
			  fileToUpload:{
				  required:true,
			  }
			 
			 
		}
	});
	
	
	});
	
	$('#pop_id').submit(function(e){
		
		
		$r=$('#pop_id').valid();
		if($r == false)
		{
			    e.preventDefault();
			    $('#pop_id').valid();
		}
		
		
	});
	
	</script>


<script>
function openfileDialog() {
    $("#fileLoader").click();
}

</script>

<script>

$('#Strength').click(function(){

$("#strength_modal").append("<input type='text' class='form-control' name='Strength[]'>");
});

$('#Strength_minus').click(function(){
	$("input[name='Strength[]']:last-child").remove();
});





$('#Weekness').click(function(){

$("#weekness_modal").append("<input type='text' class='form-control' name='Weekness[]'>");
});

$('#Weekness_minus').click(function(){
	$("input[name='Weekness[]']:last-child").remove();
});


$('#Opportunities').click(function(){

$("#Opportunities_modal").append("<input type='text' class='form-control' name='Opportunities[]'>");
});

$('#Opportunities_minus').click(function(){
	$("input[name='Opportunities[]']:last-child").remove();
});


$('#Threat').click(function(){

$("#Threat_modal").append("<input type='text' class='form-control' name='Threat[]'>");
});

$('#Threat_minus').click(function(){
	$("input[name='Threat[]']:last-child").remove();
});


</script>


<script>
$(document).ready(function(){
	
	$('#strenght_form').validate({
		
		rules:{
		      'Strength[]':{
				  required:true,
			  }
			 
			 
		}
	});
	
	
	});
	
	$('#strenght_form').submit(function(e){
		$r=$('#strenght_form').valid();
		if($r == false)
		{
			    e.preventDefault();
			    $('#strenght_form').valid();
		}else{
			
		 e.preventDefault();
			    var fd = new FormData(this);
				 $.ajax({
				  url: '<?php echo base_url('Plans/step2_strength'); ?>',
				  data: fd,
				  processData: false,
				  contentType: false,
				  type: 'POST',
				  success: function(response){
					   $("#myModalweekness").addClass('show');
					   $("#myModalweekness").css('display','block');
					   $("#myModalstrength").removeClass('show');
					    $("#myModalstrength").removeAttr('style');
					
				  }
				});
		}
		
		
	});


</script>


<script>
$(document).ready(function(){
	
	$('#weekness_form').validate({
		
		rules:{
		      'Weekness[]':{
				  required:true,
			  }
			 
			 
		}
	});
	
	
	});
	
	$('#weekness_form').submit(function(e){
		
		
		$r=$('#weekness_form').valid();
		if($r == false)
		{
			    e.preventDefault();
			    $('#weekness_form').valid();
		}else{
			
		 e.preventDefault();
			    var fd = new FormData(this);
				 $.ajax({
				  url: '<?php echo base_url('Plans/step2_weekness'); ?>',
				  data: fd,
				  processData: false,
				  contentType: false,
				  type: 'POST',
				  success: function(response){
					$("#myModalOpportunities").addClass('show');
					   $("#myModalOpportunities").css('display','block');
					   $("#myModalweekness").removeClass('show');
					    $("#myModalweekness").removeAttr('style');
				  }
				});
		}
		
		
	});


</script>

<script>
$(document).ready(function(){
	
	$('#Opportunities_form').validate({
		
		rules:{
		      'Opportunities[]':{
				  required:true,
			  }
			 
			 
		}
	});
	
	
	});
	
	$('#Opportunities_form').submit(function(e){
		
		
		$r=$('#Opportunities_form').valid();
		if($r == false)
		{
			    e.preventDefault();
			    $('#Opportunities_form').valid();
		}else{
			
		 e.preventDefault();
			    var fd = new FormData(this);
				 $.ajax({
				  url: '<?php echo base_url('Plans/step2_Opportunities'); ?>',
				  data: fd,
				  processData: false,
				  contentType: false,
				  type: 'POST',
				  success: function(response){
					$("#myModalThreat").addClass('show');
					   $("#myModalThreat").css('display','block');
					   $("#myModalOpportunities").removeClass('show');
					    $("#myModalOpportunities").removeAttr('style');
				  }
				});
		}
		
		
	});


</script>


<script>
$(document).ready(function(){
	
	$('#Threat_form').validate({
		
		rules:{
		      'Threat[]':{
				  required:true,
			  }
			 
			 
		}
	});
	
	
	});
	
	$('#Threat_form').submit(function(e){
		
		
		$r=$('#Threat_form').valid();
		if($r == false)
		{
			    e.preventDefault();
			    $('#Threat_form').valid();
		}else{
			
		 e.preventDefault();
			    var fd = new FormData(this);
				 $.ajax({
				  url: '<?php echo base_url('Plans/step2_Threat'); ?>',
				  data: fd,
				  processData: false,
				  contentType: false,
				  type: 'POST',
				  success: function(response){
					
					   location.reload();
				  }
				});
		}
		
		
	});


</script>

