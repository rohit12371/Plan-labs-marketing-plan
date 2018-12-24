

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
	border-radius: 5%;
		
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
<div class="box-header with-border">
  <h3 class="box-title">PEST Analysis <small>( My Plans )</small></h3>
</div>
<div class="box-body">
  <div class="box-body">
    <div class="col-md-12">
							  <p>It is important when planning a business to be aware of all of the factors in your environment that could influence your success.<br/>
								List and analyse how each factor may affect your business.</p>
							  <!--<a data-toggle="modal" data-target="#PESTDiagram" class="popup-with-form label label-success"><i class="fa fa-lightbulb-o"></i> Diagram</a>--> </div>
   
    <div class="col-md-12">
      <hr style="border-color:#1e88e5; border-width:3px;"/>
    </div>
	<br/>
	
	
	 <div class="col-md-12"> <a  data-toggle="modal" data-target="#myModalPolitical" class="popup-with-form label label-success" style="font-size: 15px;"><i class="fa fa-lightbulb-o"></i> Click Here To Start</a><strong class="text-center" style="text-align:center; display:block; font-weight:900; font-size:27px;">PEST Analysis</strong>
            <p class="text-center">&nbsp;</p>
          <center>  <table width="760" height="486" border="1">
              <tr>
                <td width="475" height="55" scope="row">&nbsp;</td>
                <td width="338" align="center" class="headings" style="background-color:#180542">POLITICAL</td>
                <td width="345" align="center" class="headings">ECONOMICAL</td>
				 <td width="475" height="55" scope="row">&nbsp;</td>
              </tr>
              <tr>
                <td  scope="row" align="center" class="headings"><div class="rotation">&nbsp;</div></td>
                <td><div id="textarea"  class="contents">
                    <?php 
				$select_data1="pest_analysis_political";
				$swot1 = get_swot($plan_id,$user_id,$select_data1);?>
				<?php if (empty($swot1)){?>
			    <p> </p>
				<?php } else {?>
				
				<?php
				      $swot_first1=$swot1[0]->pest_analysis_political;
				
				     $swot_final1=explode(",", $swot_first1);
					 
					 foreach($swot_final1 as $final1)
					 {
				   ?>
				   <p class="text-bold"> <?php echo '.';?> <?php echo $final1; ?> </p>
                  
					 <?php } ?>
					 
				<?php } ?>
                  </div></td>
                <td><div id="textarea"   class="contents">
                    <?php 
				$select_data2="pest_analysis_economical";
				$swot2 = get_swot($plan_id,$user_id,$select_data2);?>
				<?php if (empty($swot2)){?>
			    <p> </p>
				<?php } else {?>
				
				<?php
				      $swot_first2=$swot2[0]->pest_analysis_economical;
				
				     $swot_final2=explode(",", $swot_first2);
					
					 foreach($swot_final2 as $final2)
					 {
				   ?>
				   <p class="text-bold"> <?php echo '.';?> <?php echo $final2; ?> </p>
                  
					 <?php } ?>
					 
				<?php } ?>
                  </div></td>
				  <td  scope="row" align="center" class="headings"><div class="rotation">&nbsp;</div></td>
              </tr>
              <tr>
                <td align="center" class="headings"><div class="rotation">&nbsp;</div></td>
                <td><div id="textarea"   class="contents">
                     <?php 
				$select_data3="pest_analysis_socio_cultural";
				$swot3 = get_swot($plan_id,$user_id,$select_data3);?>
				<?php if (empty($swot3)){?>
			    <p> </p>
				<?php } else {?>
				
				<?php
				      $swot_first3=$swot3[0]->pest_analysis_socio_cultural;
				
				     $swot_final3=explode(",", $swot_first3);
					 
					 foreach($swot_final3 as $final3)
					 {
				   ?>
				   <p class="text-bold"> <?php echo '.';?> <?php echo $final3; ?> </p>
                  
					 <?php } ?>
					 
				<?php } ?>
                  </div></td>
                <td><div id="textarea"  class="contents">
                     <?php 
				$select_data4="pest_analysis_technological";
				$swot4 = get_swot($plan_id,$user_id,$select_data4);?>
				<?php if (empty($swot4)){?>
			    <p> </p>
				<?php } else {?>
				
				<?php
				      $swot_first4=$swot4[0]->pest_analysis_technological;
				
				     $swot_final4=explode(",", $swot_first4);
					 
					 foreach($swot_final4 as $final4)
					 {
				   ?>
				   <p class="text-bold"> <?php echo '.';?> <?php echo $final4; ?> </p>
                  
					 <?php } ?>
					 
				<?php } ?>
                  </div></td>
				   <td align="center" class="headings"><div class="rotation">&nbsp;</div></td>
              </tr>
			  
			  <tr> 	
                <td width="475" height="55" scope="row">&nbsp;</td>
                <td width="338" align="center" class="headings">SOCIO-CULTURAL</td>
                <td width="345" align="center" class="headings">TECHNOLOGICAL</td>
				 <td width="475" height="55" scope="row">&nbsp;</td>
              </tr>
            </table>
			</center>
          </div>
	
	
	

  </div>
</div>



 <div class="box-body">
  <div class="box-body">
 
   
   <div class="col-md-12">
		  <a href="<?php echo base_url('plans/planStep2/?plan_id='.$plan_id);?>"> <button class="btn btn-success btn-large" type="button" name="submit_step1" id="back_step1" value="Save &amp; Continue" style="float: left;"> <i class="fa fa-chevron-left"></i> Back  </button></a>

         <?php $data=getpestanalysisfilled($plan_id,$user_id);

           if($data[0]->pest_analysis_political=='' || $data[0]->pest_analysis_economical=='' || $data[0]->pest_analysis_socio_cultural=='' || $data[0]->pest_analysis_technological =='')
          {?>
          <button class="btn btn-success btn-large" type="button" id="lowdata" value="Save &amp; Continue" style="float: right;"> Save &amp; Next <i class="fa fa-chevron-right"></i> </button>
         <?php } else { ?>
        <a href="<?php echo base_url('Plans/planstep2_competitor/?plan_id='.$plan_id);?>"> <button class="btn btn-success btn-large" type="button"  value="Save &amp; Continue" style="float: right;"> Save &amp; Next <i class="fa fa-chevron-right"></i> </button></a>
         <?php } ?>
           
          </div>
  </div>
</div> 
 <div class="clearfix"></div>
<?php } ?>
<?php echo form_close(); ?>
</div>
</section>


<!-- Strength Pop up -->

<div class="modal fade" id="myModalPolitical" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
  <div class="modal-dialog" role="document">
   <form id="Political_form" type="post">
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close close_modal" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
        <h4 class="modal-title" id="myModalLabel">What are your Political?</h4>
		
      </div>
	
      <div class="modal-body" id="Political_modal">
       <label  style="font-weight:600;">
	   <?php $r= $_GET['plan_id']; ?>
	   <?php $userId=$this->session->userdata['USER_ID']; ?>
        New Political
      </label>
	  
	  
	   <?php 
				$select_data1="pest_analysis_political";
				$swot1 = get_swot($plan_id,$user_id,$select_data1);?>
				<?php if (empty($swot1)){?>
			  <input type="text"  class="form-control" name="Political[]">
				<?php } else {?>
				
				<?php
				      $swot_first1=$swot1[0]->pest_analysis_political;
				
				     $swot_final1=explode(",", $swot_first1);
					 
					 foreach($swot_final1 as $final1)
					 {
				   ?>
				   <input type="text"  class="form-control" name="Political[]" value="<?php echo $final1; ?>"> 
                  
					 <?php } ?>
					 
				<?php } ?>
	  
	  
      
      <input type="hidden"  class="form-control" name="plan_id" value="<?php echo $r;?>">
      <input type="hidden"  class="form-control" name="user_id" value="<?php echo $userId;?>">
	 
	  
	  </div>
	  
	  <div class="modal-footer">
	   <i class="fa fa-plus-square" id="Political" style="color: #4d20aa; font-size:16px; cursor:pointer;">&nbsp;Add New Political</i>
	   <i class="fa fa-minus-square" id="Political_minus" style="color: #4d20aa; font-size:16px; float:right; cursor:pointer;">&nbsp;Remove Political</i>
	  </div>
	
      <div class="modal-footer">
	  
	  
        <button type="button" class="btn btn-default close_modal" data-dismiss="modal">Close</button>
		
        <button type="submit" id="strength_final" class="btn btn-primary"   style="float: right;">Add Political</button>
      </div>
	
    </div>
	 </form>
  </div>
</div>



<!-- Economical Pop up -->

<div class="modal fade" id="myModalEconomical" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
  <div class="modal-dialog" role="document">
   <form id="Economical_form" type="post">
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close close_modal" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
        <h4 class="modal-title" id="myModalLabel">What are your Economical?</h4>
		
      </div>
	
      <div class="modal-body" id="Economical_modal">
       <label  style="font-weight:600;">
	   <?php $r= $_GET['plan_id']; ?>
	   <?php $userId=$this->session->userdata['USER_ID']; ?>
        New Economical
      </label>
	  
	  <?php 
				$select_data2="pest_analysis_economical";
				$swot2 = get_swot($plan_id,$user_id,$select_data2);?>
				<?php if (empty($swot2)){?>
			   <input type="text"  class="form-control" name="Economical[]">
				<?php } else {?>
				
				<?php
				      $swot_first2=$swot2[0]->pest_analysis_economical;
				
				     $swot_final2=explode(",", $swot_first2);
					
					 foreach($swot_final2 as $final2)
					 {
				   ?>
				    <input type="text"  class="form-control" name="Economical[]" value=" <?php echo $final2; ?>"> </p>
                  
					 <?php } ?>
					 
				<?php } ?>
	  
	  
     
      <input type="hidden"  class="form-control" name="plan_id" value="<?php echo $r;?>">
      <input type="hidden"  class="form-control" name="user_id" value="<?php echo $userId;?>">
	 
	  
	  </div>
	  
	  <div class="modal-footer">
	   <i class="fa fa-plus-square" id="Economical" style="color: #4d20aa; font-size:16px; cursor:pointer;">&nbsp;Add New Economical</i>
	   <i class="fa fa-minus-square" id="Economical_minus" style="color: #4d20aa; font-size:16px; float:right; cursor:pointer;">&nbsp;Remove Economical</i>
	  </div>
	
      <div class="modal-footer">
	  
	  
        <button type="button" class="btn btn-default close_modal" data-dismiss="modal">Close</button>
		
        <button type="submit" id="Economical_final" class="btn btn-primary" style="float: right;">Add Economical</button>
      </div>
	
    </div>
	 </form>
  </div>
</div>

<!-- Social-culture Pop up -->

<div class="modal fade" id="myModalSocial_culture" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
  <div class="modal-dialog" role="document">
   <form id="Social_culture_form" type="post">
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close close_modal" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
        <h4 class="modal-title" id="myModalLabel">What are your Social-culture?</h4>
		
      </div>
	
      <div class="modal-body" id="Social_culture_modal">
       <label  style="font-weight:600;">
	   <?php $r= $_GET['plan_id']; ?>
	   <?php $userId=$this->session->userdata['USER_ID']; ?>
        New Social-culture
      </label>
	  
	  <?php 
				$select_data3="pest_analysis_socio_cultural";
				$swot3 = get_swot($plan_id,$user_id,$select_data3);?>
				<?php if (empty($swot3)){?>
			    <input type="text"  class="form-control" name="Social_culture[]">
				<?php } else {?>
				
				<?php
				      $swot_first3=$swot3[0]->pest_analysis_socio_cultural;
				
				     $swot_final3=explode(",", $swot_first3);
					 
					 foreach($swot_final3 as $final3)
					 {
				   ?>
				   <input type="text"  class="form-control" name="Social_culture[]" value="<?php echo $final3; ?>"> 
                  
					 <?php } ?>
					 
				<?php } ?>
	  
	  
      
      <input type="hidden"  class="form-control" name="plan_id" value="<?php echo $r;?>">
      <input type="hidden"  class="form-control" name="user_id" value="<?php echo $userId;?>">
	 
	  
	  </div>
	  
	  <div class="modal-footer">
	   <i class="fa fa-plus-square" id="Social_culture" style="color: #4d20aa; font-size:16px; cursor:pointer;">&nbsp;Add New Social-culture</i>
	   <i class="fa fa-minus-square" id="Social_culture_minus" style="color: #4d20aa; font-size:16px; float:right; cursor:pointer;">&nbsp;Remove Social-culture</i>
	  </div>
	
      <div class="modal-footer">
	  
	  
        <button type="button" class="btn btn-default close_modal" data-dismiss="modal">Close</button>
		
        <button type="submit" id="Social-culture_final" class="btn btn-primary" style="float: right;">Add Social-culture</button>
      </div>
	
    </div>
	 </form>
  </div>
</div>

<!-- Technological Pop up -->

<div class="modal fade" id="myModalTechnological" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
  <div class="modal-dialog" role="document">
   <form id="Technological_form" type="post">
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close close_modal" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
        <h4 class="modal-title" id="myModalLabel">What are your Technological?</h4>
		
      </div>
	
      <div class="modal-body" id="Technological_modal">
       <label  style="font-weight:600;">
	   <?php $r= $_GET['plan_id']; ?>
	   <?php $userId=$this->session->userdata['USER_ID']; ?>
        New Technological
      </label>
	  
	  <?php 
				$select_data4="pest_analysis_technological";
				$swot4 = get_swot($plan_id,$user_id,$select_data4);?>
				<?php if (empty($swot4)){?>
			   <input type="text"  class="form-control" name="Technological[]">
				<?php } else {?>
				
				<?php
				      $swot_first4=$swot4[0]->pest_analysis_technological;
				
				     $swot_final4=explode(",", $swot_first4);
					 
					 foreach($swot_final4 as $final4)
					 {
				   ?>
				  <input type="text"  class="form-control" name="Technological[]" value="<?php echo $final4; ?>">
                  
					 <?php } ?>
					 
				<?php } ?>
	  
	  
      
      <input type="hidden"  class="form-control" name="plan_id" value="<?php echo $r;?>">
      <input type="hidden"  class="form-control" name="user_id" value="<?php echo $userId;?>">
	 
	  
	  </div>
	  
	  <div class="modal-footer">
	   <i class="fa fa-plus-square" id="Technological" style="color: #4d20aa; font-size:16px; cursor:pointer;">&nbsp;Add New Technological</i>
	   <i class="fa fa-minus-square" id="Technological_minus" style="color: #4d20aa; font-size:16px; float:right; cursor:pointer;">&nbsp;Remove Technological</i>
	  </div>
	
      <div class="modal-footer">
	   <button type="button" class="btn btn-default close_modal" data-dismiss="modal">Close</button>
	   <button type="submit" id="Technological_final" class="btn btn-primary" style="float: right;">Add Technological</button>
      </div>
	
    </div>
	 </form>
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



<!-- jQuery library -->
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>


<script>
$('.close_modal').click(function(){
	location.reload();
});

</script>

<script>
$('#lowdata').click(function(){

  alert('Please Filled all PEST Analysis Properly');

});
 
</script>

<script>

$('#Political').click(function(){

$("#Political_modal").append("<input type='text' class='form-control' name='Political[]'>");
});

$('#Political_minus').click(function(){
	$("input[name='Political[]']:last-child").remove();
});





$('#Economical').click(function(){

$("#Economical_modal").append("<input type='text' class='form-control' name='Economical[]'>");
});

$('#Economical_minus').click(function(){
	$("input[name='Economical[]']:last-child").remove();
});


$('#Social_culture').click(function(){

$("#Social_culture_modal").append("<input type='text' class='form-control' name='Social_culture[]'>");
});

$('#Social_culture_minus').click(function(){
	$("input[name='Social_culture[]']:last-child").remove();
});


$('#Technological').click(function(){

$("#Technological_modal").append("<input type='text' class='form-control' name='Technological[]'>");
});

$('#Technological_minus').click(function(){
	$("input[name='Technological[]']:last-child").remove();
});


</script>


<script>
$(document).ready(function(){
	
	$('#Political_form').validate({
		
		rules:{
		      'Political[]':{
				  required:true,
			  }
			 
			 
		}
	});
	
	
	});
	
	$('#Political_form').submit(function(e){
		$r=$('#Political_form').valid();
		if($r == false)
		{
			    e.preventDefault();
			    $('#Political_form').valid();
		}else{
			
		 e.preventDefault();
			    var fd = new FormData(this);
				 $.ajax({
				  url: '<?php echo base_url('Plans/step2_Political'); ?>',
				  data: fd,
				  processData: false,
				  contentType: false,
				  type: 'POST',
				  success: function(response){
					   $("#myModalEconomical").addClass('show');
					   $("#myModalEconomical").css('display','block');
					   $("#myModalPolitical").removeClass('show');
					    $("#myModalPolitical").removeAttr('style');
					
				  }
				});
		}
		
		
	});


</script>


<script>
$(document).ready(function(){
	
	$('#Economical_form').validate({
		
		rules:{
		      'Economical[]':{
				  required:true,
			  }
			 
			 
		}
	});
	
	
	});
	
	$('#Economical_form').submit(function(e){
		
		
		$r=$('#Economical_form').valid();
		if($r == false)
		{
			    e.preventDefault();
			    $('#Economical_form').valid();
		}else{
			
		 e.preventDefault();
			    var fd = new FormData(this);
				 $.ajax({
				  url: '<?php echo base_url('Plans/step2_Economical'); ?>',
				  data: fd,
				  processData: false,
				  contentType: false,
				  type: 'POST',
				  success: function(response){
					   $("#myModalSocial_culture").addClass('show');
					   $("#myModalSocial_culture").css('display','block');
					   $("#myModalEconomical").removeClass('show');
					   $("#myModalEconomical").removeAttr('style');
				  }
				});
		}
		
		
	});


</script>

<script>
$(document).ready(function(){
	
	$('#Social_culture_form').validate({
		
		rules:{
		      'Social_culture[]':{
				  required:true,
			  }
			 
			 
		}
	});
	
	
	});
	
	$('#Social_culture_form').submit(function(e){
		
		
		$r=$('#Social_culture_form').valid();
		if($r == false)
		{
			    e.preventDefault();
			    $('#Social_culture_form').valid();
		}else{
			
		 e.preventDefault();
			    var fd = new FormData(this);
				 $.ajax({
				  url: '<?php echo base_url('Plans/step2_Social_culture'); ?>',
				  data: fd,
				  processData: false,
				  contentType: false,
				  type: 'POST',
				  success: function(response){
					$("#myModalTechnological").addClass('show');
					   $("#myModalTechnological").css('display','block');
					   $("#myModalSocial_culture").removeClass('show');
					    $("#myModalSocial_culture").removeAttr('style');
				  }
				});
		}
		
		
	});


</script>


<script>
$(document).ready(function(){
	$('#Technological_form').validate({
		
		rules:{
		      'Technological[]':{
				  required:true,
			  }
			 
			 
		}
	});
	
	
	});
	
	
	$('#Technological_form').submit(function(e){
		
		
		$r=$('#Technological_form').valid();
		if($r == false)
		{
			    e.preventDefault();
			    $('#Technological_form').valid();
		}else{
			
		 e.preventDefault();
		  var url = window.location.href;
           var id = url.substring(url.lastIndexOf('=') + 1);

			    var fd = new FormData(this);
				 $.ajax({
				  url: '<?php echo base_url('Plans/step2_Technological'); ?>',
				  data: fd,
				  processData: false,
				  contentType: false,
				  type: 'POST',
				  success: function(response){
					
					 window.location.href='<?php echo base_url('Plans/planstep2_competitor');?>'+'/?plan_id='+id;
				  }
				});
		}
		
		
	});


</script>

