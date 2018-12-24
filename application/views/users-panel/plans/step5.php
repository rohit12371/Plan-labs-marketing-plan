<style>
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
</style>
<div class="content-wrapper" style="min-height: 549px;">
  <section class="content">
    <div class="box">
      <div class="box-header with-border">
        <h3 class="box-title">Marketing Mix <small>( My Plans )</small></h3>
      </div>
	   <?php echo form_open("plans/planStep5",array(""=>"frmStep5")); ?>
	   <?php if(!empty($diagramData)){ 
		  foreach($diagramData as $diagramData){
	   ?>
      <div class="box-body">
        <div class="box-body">
          <div class="col-md-12">
            <?php $this->load->view('users-panel/plans/menu-top-bar'); ?>
          </div>
          <div class="col-md-12">
		    <div class="note pull-right">
		    <label>Please Note Here:</label><br/>
			<textarea name="noteStep5" class="form-control input-lg" style="width:100%;"><?php echo $diagramData->marketing_mix; ?></textarea>
		  </div>
            <p>Promotion is the fun part for some small business owners and a headache for others. In your promotional plan, outline exactly how you are going to reach your market, attract the right people and convert sales. Regardless of how good you are, if the market doesn't know about you, it's unlikely that you'll make many sales.<br/><br/>

Typically a sale will come from a buildup of the benefits of a few different marketing tactics. For this reason we recommend that you spend time working on a variety of marketing tactics so that you're covered in all areas, even if you have a few standouts that are working well for you.

Describe how you will utilise opportunities in each of the following marketing channels:</p>
          </div>
          <div class="clearfix"></div>
          <div class="col-xl-6 col-12 pull-left">
            <p>Direct marketing allows your business to market to the market directly, without intermediaries such as distributors, retailers or wholesalers. Communication comes directly from you and is typically very sales-focused.<br/><br/>

Direct mail is the most common of direct marketing tactics, although many businesses still distribute coupons, hand out catalogues and flyers, run TV and radio adverts and place advertisements in newspapers and magazines.</p>
            <a data-toggle="modal" data-target="#myModal" class="popup-with-form label label-success"><i class="fa fa-lightbulb-o"></i> Example By Plan Labs</a> </div>
          <div class="col-xl-6 col-12 pull-right">
            <label class="h5"><strong>Direct Marketing :</strong></label>
            <textarea name="direct_marketing" class="textarea" id="editor" placeholder="Place some text here" style="width: 100%; height: 200px; font-size: 14px; line-height: 18px; border: 1px solid #dddddd; padding: 10px;"><?php echo $diagramData->direct_marketing; ?></textarea>
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
            <p>Common Internet marketing tactics include banner advertisements on websites, Google AdWords advertisements on the side and top of Google search results, Search Engine Optimisation to appear higher in search engine rankings, email marketing to send newsletters or product specials to a database of fans, customers and leads and the use of an effective website.<br/><br/>

List each tactic that you wish to use and describe its projected impact on exposure.</p>
            <a data-toggle="modal" data-target="#myModal1" class="label label-success"><i class="fa fa-lightbulb-o"></i> Example By Plan Labs</a> </div>
          <div class="col-xl-6 col-12 pull-right">
            <label class="h5"><strong>Internet Marketing :</strong></label>
            <textarea name="internet_marketing" class="textarea" id="editor1" placeholder="Place some text here" style="width: 100%; height: 200px; font-size: 14px; line-height: 18px; border: 1px solid #dddddd; padding: 10px;"><?php echo $diagramData->internet_marketing; ?></textarea>
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
            <p>Popular social media platforms such as Facebook, Twitter and blogging have broken down the barriers between brands, consumers and influential figures. Many brands have utilised social media to strengthen brand loyalty, spread word of mouth and on the other side of the coin, to unwillingly destroy their own brand reputation.<br/><br/>

Facebook is the most popular social media platform with over 950 million users around the world. People visit Facebook primarily to be entertained and satisfy their curiosity as to what is happening in the world and their friends' lives. Facebook is easier to get right for businesses that sell to consumers (B2C) rather than other businesses (B2B) and is best for sharing, conversing with the market and gathering feedback.<br/><br/>

Twitter offers access to a more professional market. Twitter users are on average more educated and belong to higher socio-economic groups than Facebook users. Many businesses (especially those in B2B markets) use Twitter to network with other businesses, customers and influential people within their markets and in recent times. Twitter is best for sharing, increasing your influence by distributing the most helpful information to your specialty, and for direct communication with the market.<br/><br/>

LinkedIn is an entirely professional social network and is used by people around the world to publish their experience, employment/business activity and other professional qualifications. LinkedIn is neglected by the majority of users, with most of its activity coming from a small portion of dedicated users.<br/><br/>

Pinterest is a fantastic platform for brands that sell lifestyle products or anything with a strong visual connection. Blogging is fantastic for engaging with customers, bringing new leads to a website and raising your profile within an industry.</p>
            <a  data-toggle="modal" data-target="#myModal3" class="label label-success"><i class="fa fa-lightbulb-o"></i> Example By Plan Labs</a> </div>
          <div class="col-xl-6 col-12 pull-right">
            <label class="h5"><strong>Social Media :</strong></label>
            <textarea name="social_media" class="textarea" id="editor2" placeholder="Place some text here" style="width: 100%; height: 200px; font-size: 14px; line-height: 18px; border: 1px solid #dddddd; padding: 10px;"><?php echo $diagramData->social_media; ?></textarea>
          </div>
          <div class="clearfix"></div>
        </div>
      </div>
      <div class="box-body">
        <div class="box-body">
          <div class="col-xl-6 col-12 pull-left">
            <p>Public Relations as part of a marketing strategy is a purposeful effort to gain positive exposure in the public and media. The nature of Public Relations has changed in recent years but the effectiveness has not. Today, bloggers are often as influential as traditional journalists and should not be ignored.<br/><br/>

Any successful effort in attracting Public Relations interest and promotion should come from a targeted pitch explaining why you're worth talking about and why their readers will enjoy reading about your business and a relationship that has been built over time.<br/><br/>

Describe the types of PR targets that you wish to attract, how you plan to attract them and what you have to say that would be worthwhile for their audience.</p>
            <a data-toggle="modal" data-target="#myModal" class="popup-with-form label label-success"><i class="fa fa-lightbulb-o"></i> Example By Plan Labs</a> </div>
          <div class="col-xl-6 col-12 pull-right">
            <label class="h5"><strong>Public Relations :</strong></label>
            <textarea name="public_relations" class="textarea" id="editor" placeholder="Place some text here" style="width: 100%; height: 200px; font-size: 14px; line-height: 18px; border: 1px solid #dddddd; padding: 10px;"><?php echo $diagramData->public_relations; ?></textarea>
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
            <p>Advertising is a mass medium that directs a message or offer to a large number of people with a single communication. Your business can decide what it wants to say and broadcast that message through a newspaper ad, television ad, radio ad, magazine insert or outdoor poster.<br/><br/>

Describe any bulk advertising tactics that you plan to use, when you plan to use them and what message will be communicated.</p>
            <a data-toggle="modal" data-target="#myModal1" class="label label-success"><i class="fa fa-lightbulb-o"></i> Example By Plan Labs</a> </div>
          <div class="col-xl-6 col-12 pull-right">
            <label class="h5"><strong>Advertising :</strong></label>
            <textarea name="advertising" class="textarea" id="editor1" placeholder="Place some text here" style="width: 100%; height: 200px; font-size: 14px; line-height: 18px; border: 1px solid #dddddd; padding: 10px;"><?php echo $diagramData->advertising; ?></textarea>
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
            <p>In this section you should write a 3-4 paragraph story about how your business was started, what it hoped to change and improve in the market and who the key figures are that are responsible for its operation.</p>
            <a data-toggle="modal" data-target="#myModal1" class="label label-success"><i class="fa fa-lightbulb-o"></i> Example By Plan Labs</a> </div>
          <div class="col-xl-6 col-12 pull-right">
            <label class="h5"><strong>Budget :</strong></label>
            <textarea name="budget" class="textarea" id="editor1" placeholder="Place some text here" style="width: 100%; height: 200px; font-size: 14px; line-height: 18px; border: 1px solid #dddddd; padding: 10px;"><?php echo $diagramData->budget; ?></textarea>
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
            <p>Spend some time explaining your brand and your Unique Selling Proposition. Your Unique Selling Proposition is what you market as a feature or benefit that you can give your customers that no other competitor can.<br/>
              Try not to fall into the trap of playing it safe and not stepping on anyone's toes. Add a unique quality to your business that makes you unique, remarkable and that motivates the customer to buy.<br/>
              <strong>EXAMPLE -</strong> Threadless is a community-designed T-Shirt and apparel website that runs competitions to determine which products to sell. Their simple USP of "Tees designed by the community" has helped them to achieve sales of over 1 million shirts per year.</p>
            <a data-toggle="modal" data-target="#myModal1" class="label label-success"><i class="fa fa-lightbulb-o"></i> Example By Plan Labs</a> </div>
          <div class="col-xl-6 col-12 pull-right">
            <label class="h5"><strong>Action Plan :</strong></label>
            <textarea name="action_plan" class="textarea" id="editor1" placeholder="Place some text here" style="width: 100%; height: 200px; font-size: 14px; line-height: 18px; border: 1px solid #dddddd; padding: 10px;"><?php echo $diagramData->action_plan; ?></textarea>
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
          <div class="col-md-12">
            <button class="btn btn-success btn-large" type="submit" name="submit_step1" value="Save &amp; Continue" onclick="window.location.href='<?php echo base_url('plans/lastStep'); ?>'"> Save &amp; Continue <i class="fa fa-chevron-right"></i> </button>
          </div>
        </div>
      </div>
	  <input type="hidden" name="planIdStep5" value="<?php echo $diagramData->id; ?>" />
	   <?php } }else{ ?>
	  <div class="box-body">
        <div class="box-body">
          <div class="col-md-12">
            <?php $this->load->view('users-panel/plans/menu-top-bar'); ?>
          </div>
          <div class="col-md-12">
	 	    <div class="note pull-right">
		    <label>Please Note Here:</label><br/>
			<textarea name="noteStep5" class="form-control input-lg" style="width:100%;"></textarea>
		  </div>
            <p>Promotion is the fun part for some small business owners and a headache for others. In your promotional plan, outline exactly how you are going to reach your market, attract the right people and convert sales. Regardless of how good you are, if the market doesn't know about you, it's unlikely that you'll make many sales.<br/>

Typically a sale will come from a buildup of the benefits of a few different marketing tactics. For this reason we recommend that you spend time working on a variety of marketing tactics so that you're covered in all areas, even if you have a few standouts that are working well for you. 
</p>
          </div>
		   <div class="clearfix"></div>
		   <div class="col-md-8">
		  <table  class="table table-bordered" style="border: 2px solid #f4f4f4;">
  <thead>
    <tr style="background-color: #539bda;">
      <!-- First column header is not rotated -->
          
      <!-- Following headers are rotated -->
        <th class="rotate"><div><span style="color:#fff; font-weight: 600;">Our Profitability as a business is...</span></div></th>
        <th class="rotate"><div><span style="color:#fff; font-weight: 600;"></span></div></th>
       
       
      
    </tr> 
  </thead>
  <tbody>
    <tr style="background-color: #c8e0ec;">
      <th class="row-header" style="font-weight: 600;"><input  name="column161[]" type="checkbox" id="checkbox_101"></th>
      <td>Outdoor Advertising    <a data-toggle="modal" data-target="#myModal111" class="popup-with-form label label-success" style="float: right; font-size:10px;"><i class="fa fa-lightbulb-o"></i> Example </a></td>
     
     
    </tr>
    <tr style="background-color: #e8d5d545;">
      <th class="row-header" style="font-weight: 600;"><input  name="column161[]" type="checkbox" id="checkbox_102"></th>
      <td>Internet Related Advertising   <a data-toggle="modal" data-target="#myModal112" class="popup-with-form label label-success"  style="float: right; font-size:10px;"><i class="fa fa-lightbulb-o"></i> Example</a></td>
     
      
     
    </tr>
    <tr style="background-color: #c8e0ec;">
      <th class="row-header" style="font-weight: 600;"><input  name="column161[]" type="checkbox" id="checkbox_103"></th>
       <td>Socail Media Advertising   <a data-toggle="modal" data-target="#myModal113" class="popup-with-form label label-success"  style="float: right; font-size:10px;"><i class="fa fa-lightbulb-o"></i> Example</a></td>
     
     
     
    </tr>
	<tr style="background-color: #e8d5d545;">
      <th class="row-header" style="font-weight: 600;"><input  name="column161[]" type="checkbox" id="checkbox_104" value="row1-column1"></th>
      <td>Direct Marketing / Print Media Advertising   <a data-toggle="modal" data-target="#myModal114" class="popup-with-form label label-success"  style="float: right; font-size:10px;"><i class="fa fa-lightbulb-o"></i> Example</a></td>
      
    
      
    </tr>
	
	<tr style="background-color: #c8e0ec;">
      <th class="row-header" style="font-weight: 600;"><input  name="column161[]" type="checkbox" id="checkbox_105" value="row1-column1"> </th>
      <td>Person To Person Advertising   <a data-toggle="modal" data-target="#myModal115" class="popup-with-form label label-success"  style="float: right; font-size:10px;"><i class="fa fa-lightbulb-o"></i> Example</a></td>
      
     
      
    </tr>
	
	<tr style="background-color: #e8d5d545;">
      <th class="row-header" style="font-weight: 600;"><input  name="column161[]" type="checkbox" id="checkbox_106" value="row1-column1"> </th>
      <td>Partnership/Joint Ventures   </td>
      
     
      
    </tr>
	
	<tr style="background-color: #c8e0ec;">
      <th class="row-header" style="font-weight: 600;"><input  name="column161[]" type="checkbox" id="checkbox_107" value="row1-column1"> </th>
      <td>Radio/TV Media Advertising   <a data-toggle="modal" data-target="#myModal116" class="popup-with-form label label-success"  style="float: right; font-size:10px;"><i class="fa fa-lightbulb-o"></i> Example</a></td>
      
     
      
    </tr>
	
	<tr style="background-color: #e8d5d545;">
      <th class="row-header" style="font-weight: 600;"><input  name="column161[]" type="checkbox" id="checkbox_other" value="row1-column1"> </th>
      <td>Other</td>
      
    </tr>
	
  </tbody>
</table>
</div>


<div class="col-md-12 other" id="other" style="display:none; margin-bottom: -80px;">
<br/>
<br/>
								   <div class="form-group">
									 <label class="h5"><strong>Other?</strong></label>
									    <input name="other" type="text" class="form-control input-lg" placeholder="other" autocomplete="off">
									  </div>
</div>


	  <!-- Modal -->
<div class="modal fade" id="myModal111" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
        <h4 class="modal-title" id="myModalLabel">Blimps, Banners, and/or Billboards</h4>
      </div>
     
      <div class="modal-footer">
        <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
       
      </div>
    </div>
  </div>
</div>
	
 <!-- Modal -->
<div class="modal fade" id="myModal112" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
        <h4 class="modal-title" id="myModalLabel">Blogs, Podcasts, Email, Online Marketing (SEO/SEM/Social Media), Web contests, Online coupons or discount codes
</h4>
      </div>
      
      <div class="modal-footer">
        <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
       
      </div>
    </div>
  </div>
</div>

<!-- Modal -->
<div class="modal fade" id="myModal113" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
        <h4 class="modal-title" id="myModalLabel">Facebook, Twitter, LinkedIn, Google+, YouTube,  Pinterest, Instagram, Tumblr, Flickr, Reddit, Snapchat, WhatsApp, Quora, Vine, Periscope, BizSugar, StumbleUpon, Delicious, Digg, Viber 
</h4>
      </div>
     
      <div class="modal-footer">
        <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
      
      </div>
    </div>
  </div>
</div>

<!-- Modal -->
<div class="modal fade" id="myModal114" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
        <h4 class="modal-title" id="myModalLabel">Catalogs, Classified Ads, Contests, Coupons, Direct Mail, Door Hangers, Flyers, Gift Certificates, Newsletters, Newspaper/Magazine/Journal ads, Postcards, Yellow Pages
</h4>
      </div>
      
      <div class="modal-footer">
        <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
        
      </div>
    </div>
  </div>
</div>

<!-- Modal -->
<div class="modal fade" id="myModal115" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
        <h4 class="modal-title" id="myModalLabel">Networking, Conferences, Trade Shows, Word of Mouth / Viral Marketing
</h4>
      </div>
      
      <div class="modal-footer">
        <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
        
      </div>
    </div>
  </div>
</div>

<!-- Modal -->
<div class="modal fade" id="myModal116" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
        <h4 class="modal-title" id="myModalLabel">Press Releases/PR, Radio Ads/TV Ads/Infomercials, Telemarketing
</h4>
      </div>
     
      <div class="modal-footer">
        <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
      
      </div>
    </div>
  </div>
</div>

          <div class="clearfix"></div>
		  
		  <div class="101" style="display:none;">
				  <div class="col-xl-6 col-12 pull-left">
					<p>Direct marketing and print marketing allows your business to market to the market directly, without intermediaries such as distributors, retailers or wholesalers. Communication comes directly from you and is typically very sales-focused.<br/>

		Direct mail is one of the most common of direct marketing tactics, although many businesses still distribute coupons, hand out catalogues and flyers, run TV and radio adverts and place advertisements in newspapers and magazines.<br/>


		Define your direct marketing plans. Include where you will advertise, cost, expected return, frequency</p>
					<a data-toggle="modal" data-target="#myModal" class="popup-with-form label label-success"><i class="fa fa-lightbulb-o"></i> Example By Plan Labs</a> </div>
				  <div class="col-xl-6 col-12 pull-right">
					<label class="h5"><strong>Direct Marketing / Print Media:</strong></label>
					<textarea name="direct_marketing" class="textarea" id="editor" placeholder="Place some text here" style="width: 100%; height: 200px; font-size: 14px; line-height: 18px; border: 1px solid #dddddd; padding: 10px;"></textarea>
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
		  </div>
          
		  <div class="102" style="display:none;">
				  <div class="col-xl-6 col-12 pull-left">
					<p>Common Internet marketing tactics include banner advertisements on websites, Google AdWords advertisements on the side and top of Google search results, Search Engine Optimization (SEO) to appear higher in search engine rankings, email marketing to send newsletters or product specials to a database of fans, customers and leads and the use of an effective website.<br/>

		List each tactic that you wish to use and describe its projected impact on exposure.<br/>
		Blogs, Podcasts, Email, Online Marketing (SEO/SEM/Social Media), Web contests, Online coupons or discount codes<br/>
		</p>
					<a data-toggle="modal" data-target="#myModal1" class="label label-success"><i class="fa fa-lightbulb-o"></i> Example By Plan Labs</a> </div>
				  <div class="col-xl-6 col-12 pull-right">
					<label class="h5"><strong>Internet Marketing :</strong></label>
					<textarea name="internet_marketing" class="textarea" id="editor1" placeholder="Place some text here" style="width: 100%; height: 200px; font-size: 14px; line-height: 18px; border: 1px solid #dddddd; padding: 10px;"></textarea>
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
		  </div>
         
		  
		  <div class="103" style="display:none;">
							  <div class="col-xl-6 col-12 pull-left">
								<p>Popular social media platforms such as Facebook, Twitter and blogging have broken down the barriers between brands, consumers and influential figures. Many brands have utilised social media to strengthen brand loyalty, spread word of mouth and on the other side of the coin, to unwillingly destroy their own brand reputation.<br/><br/>

					Facebook is the most popular social media platform with over 950 million users around the world. People visit Facebook primarily to be entertained and satisfy their curiosity as to what is happening in the world and their friends' lives. Facebook is easier to get right for businesses that sell to consumers (B2C) rather than other businesses (B2B) and is best for sharing, conversing with the market and gathering feedback.<br/><br/>

					Twitter offers access to a more professional market. Twitter users are on average more educated and belong to higher socio-economic groups than Facebook users. Many businesses (especially those in B2B markets) use Twitter to network with other businesses, customers and influential people within their markets and in recent times. Twitter is best for sharing, increasing your influence by distributing the most helpful information to your specialty, and for direct communication with the market.<br/><br/>

					LinkedIn is an entirely professional social network and is used by people around the world to publish their experience, employment/business activity and other professional qualifications. LinkedIn is neglected by the majority of users, with most of its activity coming from a small portion of dedicated users.<br/><br/>

					Pinterest is a fantastic platform for brands that sell lifestyle products or anything with a strong visual connection. Blogging is fantastic for engaging with customers, bringing new leads to a website and raising your profile within an industry.</p>
								<a  data-toggle="modal" data-target="#myModal3" class="label label-success"><i class="fa fa-lightbulb-o"></i> Example By Plan Labs</a>
					<p><br/>Social Media marketing tactics include advertising on social media, posting to social media and influencer posts/stories.  Using social media to a database of fans, customers and leads can lead to significant boosts in awareness and sales. <br/>

					List each social media account and its tactic that you wish to use and describe its projected impact on exposure.
					</p>
								</div>
							  <div class="col-xl-6 col-12 pull-right">
								<label class="h5"><strong>Social Media :</strong></label>
								<textarea name="social_media" class="textarea" id="editor2" placeholder="Place some text here" style="width: 100%; height: 200px; font-size: 14px; line-height: 18px; border: 1px solid #dddddd; padding: 10px;"></textarea>
							  </div>
				 <div class="clearfix"></div>			  
		  </div>
		  
         
        </div>
      </div>
      <div class="box-body">
        <div class="box-body">
          <div class="col-xl-6 col-12 pull-left">
            <p>Public Relations as part of a marketing strategy is a purposeful effort to gain positive exposure in the public and media. The nature of Public Relations has changed in recent years but the effectiveness has not. Today, bloggers are often as influential as traditional journalists and should not be ignored.<br/><br/>

Any successful effort in attracting Public Relations interest and promotion should come from a targeted pitch explaining why you're worth talking about and why their readers will enjoy reading about your business and a relationship that has been built over time.<br/><br/>

Describe the types of PR targets that you wish to attract, how you plan to attract them and what you have to say that would be worthwhile for their audience.</p>
            <a data-toggle="modal" data-target="#myModal" class="popup-with-form label label-success"><i class="fa fa-lightbulb-o"></i> Example By Plan Labs</a>



			</div>
          <div class="col-xl-6 col-12 pull-right">
            <label class="h5"><strong>Public Relations :</strong></label>
            <textarea name="public_relations" class="textarea" id="editor" placeholder="Place some text here" style="width: 100%; height: 200px; font-size: 14px; line-height: 18px; border: 1px solid #dddddd; padding: 10px;"></textarea>
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
            <p>Advertising is a mass medium that directs a message or offer to a large number of people with a single communication. Your business can decide what it wants to say and broadcast that message through a newspaper ad, television ad, radio ad, magazine insert or outdoor poster.<br/><br/>

Describe any bulk advertising tactics that you plan to use, when you plan to use them and what message will be communicated.</p>
            <a data-toggle="modal" data-target="#myModal1" class="label label-success"><i class="fa fa-lightbulb-o"></i> Example By Plan Labs</a> </div>
          <div class="col-xl-6 col-12 pull-right">
            <label class="h5"><strong>Advertising :</strong></label>
            <textarea name="advertising"  class="textarea" id="editor1" placeholder="Place some text here" style="width: 100%; height: 200px; font-size: 14px; line-height: 18px; border: 1px solid #dddddd; padding: 10px;"></textarea>
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
            <p>In this section you should write a 3-4 paragraph story about how your business was started, what it hoped to change and improve in the market and who the key figures are that are responsible for its operation.</p>
            <a data-toggle="modal" data-target="#myModal1" class="label label-success"><i class="fa fa-lightbulb-o"></i> Example By Plan Labs</a> </div>
          <div class="col-xl-6 col-12 pull-right">
            <label class="h5"><strong>Budget :</strong></label>
            <textarea name="budget" class="textarea" id="editor1" placeholder="Place some text here" style="width: 100%; height: 200px; font-size: 14px; line-height: 18px; border: 1px solid #dddddd; padding: 10px;"></textarea>
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
            <p>Spend some time explaining your brand and your Unique Selling Proposition. Your Unique Selling Proposition is what you market as a feature or benefit that you can give your customers that no other competitor can.<br/>
              Try not to fall into the trap of playing it safe and not stepping on anyone's toes. Add a unique quality to your business that makes you unique, remarkable and that motivates the customer to buy.<br/>
              <strong>EXAMPLE -</strong> Threadless is a community-designed T-Shirt and apparel website that runs competitions to determine which products to sell. Their simple USP of "Tees designed by the community" has helped them to achieve sales of over 1 million shirts per year.</p>
            <a data-toggle="modal" data-target="#myModal1" class="label label-success"><i class="fa fa-lightbulb-o"></i> Example By Plan Labs</a> </div>
          <div class="col-xl-6 col-12 pull-right">
            <label class="h5"><strong>Action Plan :</strong></label>
            <textarea name="action_plan" class="textarea" id="editor1" placeholder="Place some text here" style="width: 100%; height: 200px; font-size: 14px; line-height: 18px; border: 1px solid #dddddd; padding: 10px;"></textarea>
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
          <div class="col-md-12">
            <button class="btn btn-success btn-large" type="submit" name="submit_step1" value="Save &amp; Continue" onclick="window.location.href='<?php echo base_url('plans/lastStep'); ?>'"> Save &amp; Continue <i class="fa fa-chevron-right"></i> </button>
          </div>
        </div>
      </div>
	  <?php } ?>
    </div>
  </section>
</div>
<style type="text/css">
.form-control{ margin-bottom:12px;}
.clearfix{ padding:42px 42px;}
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
				var ckboxother = $('#checkbox_other');
	

	 $('#checkbox_other').on('click',function () {
        if (ckboxother.is(':checked')) {
            $('.other').show();
        } else {
            $('.other').hide();
        }
    });
	
	
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

