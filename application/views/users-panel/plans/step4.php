<div class="content-wrapper" style="min-height: 549px;">
  <section class="content">
    <div class="box">
      <div class="box-header with-border">
        <h3 class="box-title">Marketing Strategy <small>( My Plans )</small></h3>
      </div>
      <?php echo form_open("plans/planStep4",array(""=>"frmStep4")); ?>
      <?php  if(!empty($diagramData)){
		  foreach($diagramData as $diagramData){
	  ?>
      <div class="box-body">
        <div class="box-body">
          <div class="col-md-12">
            <?php $this->load->view('users-panel/plans/menu-top-bar'); ?>
          </div>
          <div class="col-md-12">
            <div class="note pull-right">
              <label>Please Note Here:</label>
              <br/>
              <textarea name="noteStep4" class="form-control input-lg" style="width:100%;"><?php echo $diagramData->marketing_strategy_note; ?></textarea>
            </div>
            <p>Everything that you have studied about your market and customer should come together in your strategy. At this point, you should know the opportunities in your market, who your customers are, how to reach them and how to solve their problems.<br/>
              <br/>
              Your strategy should cover other things that are key to your anticipated results and your desired image. It might be that you are design-focused, have the most reputable customer service or be known for your support within the community.</p>
          </div>
          <div class="clearfix"></div>
          <div class="col-xl-6 col-12 pull-left">
            <p>Set a price point that your market can accept, that adequately rewards you and that fits within your brand values. Too many small businesses try to compete on price for fear of missing out on sales. In reality, confidence in the price that you set and the value that the price offers can make you far more profitable.</p>
            <a data-toggle="modal" data-target="#myModal" class="popup-with-form label label-success"><i class="fa fa-lightbulb-o"></i> Example By Plan Labs</a> </div>
          <div class="col-xl-6 col-12 pull-right">
            <label class="h5"><strong>Price :</strong></label>
            <textarea name="price" class="textarea" id="editor" placeholder="Place some text here" style="width: 100%; height: 200px; font-size: 14px; line-height: 18px; border: 1px solid #dddddd; padding: 10px;"><?php echo $diagramData->price;  ?></textarea>
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
            <p>Describe each of your product and service offerings including name, quality, price point, unique characteristics, how they are to be used and how they compare with each other.<br/>
              It is wise to have products at different price points so that customers can easily compare between each product and decide which is more relevant to their needs and value perceptions. <br/>
              Outline what you believe to be the most important aspects to your products and services being successful. What elements are critical to your quality and will make a difference in your ability to stand out on the shelves?<br/>
              If you have plans to introduce new products in the future, describe these here.</p>
            <a data-toggle="modal" data-target="#myModal1" class="label label-success"><i class="fa fa-lightbulb-o"></i> Example By Plan Labs</a> </div>
          <div class="col-xl-6 col-12 pull-right">
            <label class="h5"><strong>Product :</strong></label>
            <textarea name="product" class="textarea" id="editor1" placeholder="Place some text here" style="width: 100%; height: 200px; font-size: 14px; line-height: 18px; border: 1px solid #dddddd; padding: 10px;"><?php echo $diagramData->product;  ?></textarea>
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
            <p>If you are to sell through distributors, outline how you will motivate distributors to sell your products. When deciding on how to bring your products/services to market, ensure that your target market has access to buy your products in convenient places at the quantities that they desire.</p>
            <a  data-toggle="modal" data-target="#myModal3" class="label label-success"><i class="fa fa-lightbulb-o"></i> Example By Plan Labs</a> </div>
          <div class="col-xl-6 col-12 pull-right">
            <label class="h5"><strong>Place :</strong></label>
            <textarea name="place" class="textarea" id="editor2" placeholder="Place some text here" style="width: 100%; height: 200px; font-size: 14px; line-height: 18px; border: 1px solid #dddddd; padding: 10px;"><?php echo $diagramData->place;  ?></textarea>
          </div>
          <div class="clearfix"></div>
        </div>
      </div>
      <div class="box-body">
        <div class="box-body">
          <div class="col-xl-6 col-12 pull-left">
            <p>The personality of your business is essential to building a brand that people recognise, respect and adore. Consumers demand a closer connection with the brands that they buy from than ever before. Unless you let them in and connect them with your personality, they'll find it difficult to relate to you and build a strong relationship.<br/>
              <br/>
              There are personality traits that make you more knowable, likeable and trustable than others. A great brand personality can make a marketing strategy far more effective.</p>
            <a data-toggle="modal" data-target="#myModal" class="popup-with-form label label-success"><i class="fa fa-lightbulb-o"></i> Example By Plan Labs</a> </div>
          <div class="col-xl-6 col-12 pull-right">
            <label class="h5"><strong>Personality :</strong></label>
            <textarea name="personality" class="textarea" id="editor" placeholder="Place some text here" style="width: 100%; height: 200px; font-size: 14px; line-height: 18px; border: 1px solid #dddddd; padding: 10px;"><?php echo $diagramData->personality;  ?></textarea>
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
            <p>Describe the various elements that make up your customer service and overall service experience.</p>
            <a data-toggle="modal" data-target="#myModal1" class="label label-success"><i class="fa fa-lightbulb-o"></i> Example By Plan Labs</a> </div>
          <div class="col-xl-6 col-12 pull-right">
            <label class="h5"><strong>Service Experience :</strong></label>
            <textarea name="service_experience" class="textarea" id="editor1" placeholder="Place some text here" style="width: 100%; height: 200px; font-size: 14px; line-height: 18px; border: 1px solid #dddddd; padding: 10px;"><?php echo $diagramData->service_experience;  ?></textarea>
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
            <label class="h5"><strong>Story :</strong></label>
            <textarea name="story" class="textarea" id="editor1" placeholder="Place some text here" style="width: 100%; height: 200px; font-size: 14px; line-height: 18px; border: 1px solid #dddddd; padding: 10px;"><?php echo $diagramData->story;  ?></textarea>
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
            <label class="h5"><strong>Unique Selling Proposition :</strong></label>
            <textarea name="unique_selling_proposition" class="textarea" id="editor1" placeholder="Place some text here" style="width: 100%; height: 200px; font-size: 14px; line-height: 18px; border: 1px solid #dddddd; padding: 10px;"><?php echo $diagramData->unique_selling_proposition;  ?></textarea>
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
            <button class="btn btn-success btn-large" type="submit" name="submit_step1" value="Save &amp; Continue" onclick="window.location.href='<?php echo base_url('plans/planStep5'); ?>'"> Save &amp; Continue <i class="fa fa-chevron-right"></i> </button>
          </div>
          <input type="hidden" name="planIdStep4" value="<?php echo $diagramData->id; ?>" />
        </div>
      </div>
      <?php } }else{ ?>
      <div class="box-body">
        <div class="box-body">
          <div class="col-md-12">
            <?php $this->load->view('users-panel/plans/menu-top-bar'); ?>
          </div>
          <div class="col-md-12">
            <div class="note pull-right">
              <label>Please Note Here:</label>
              <br/>
              <textarea name="noteStep4" class="form-control input-lg" style="width:100%;"></textarea>
            </div>
            <p>Everything that you have studied about your market and customer should come together in your strategy. At this point, you should know the opportunities in your market, who your customers are, how to reach them and how to solve their problems.<br/>
              <br/>
              Your strategy should cover other things that are key to your anticipated results and your desired image. It might be that you are design-focused, have the most reputable customer service or be known for your support within the community.</p>
          </div>
          <div class="clearfix"></div>
          <div class="col-xl-6 col-12 pull-left">
            <p>Early you stated your pricing strategy would be [INSERT PRICING STRATEGY]. Set a price point that your market can accept, that adequately rewards you and that fits within your brand values. Too many small businesses try to compete on price for fear of missing out on sales. In reality, confidence in the price that you set and the value that the price offers can make you far more profitable.
</p>
            <a data-toggle="modal" data-target="#myModal" class="popup-with-form label label-success"><i class="fa fa-lightbulb-o"></i> Example By Plan Labs</a> </div>
          <div class="col-xl-6 col-12 pull-right">
            <label class="h5"><strong>Price :</strong></label>
            <textarea name="price" class="textarea" id="editor" placeholder="Place some text here" style="width: 100%; height: 200px; font-size: 14px; line-height: 18px; border: 1px solid #dddddd; padding: 10px;"></textarea>
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
            <p>Early you stated your product/service offering would be [INSERT QUALITY RATING], as compared to competitors. Here is where you defend your quality plans. Specifically why you plan to set your product/service quality at that level.<br/>

Take the time to describe each of your product and service offerings including name, quality, price point, unique characteristics, how they are to be used and how they compare with each other.<br/>
It is wise to have products at different price points so that customers can easily compare between each product and decide which is more relevant to their needs and value perceptions. <br/>
Outline what you believe to be the most important aspects to your products and services being successful. What elements are critical to your quality and will make a difference in your ability to stand out on the shelves?<br/>
If you have plans to introduce new products in the future, describe these here.<br/>
</p>
            <a data-toggle="modal" data-target="#myModal1" class="label label-success"><i class="fa fa-lightbulb-o"></i> Example By Plan Labs</a> </div>
          <div class="col-xl-6 col-12 pull-right">
            <label class="h5"><strong>Product :</strong></label>
            <textarea name="product" class="textarea" id="editor1" placeholder="Place some text here" style="width: 100%; height: 200px; font-size: 14px; line-height: 18px; border: 1px solid #dddddd; padding: 10px;"></textarea>
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
            <p>Early you stated your product/service offering would be [INSERT QUALITY RATING], as compared to competitors. Here is where you defend your quality plans. Specifically why you plan to set your product/service quality at that level.<br/>

If you are to sell through distributors, outline how you will motivate distributors to sell your products. If you plan to sell through retailers, how will get on the shelves.  If you plan to be a retailer/restaurant/online seller, why have you chosen the space, what benefits does it have for you over compositing spaces, what competitive advantages will you have being located there.<br/>
For each, where will you be, how much space will you have, what will you do to maximize the space.<br/>
When deciding on how to bring your products/services to market, ensure that your target market has access to buy your products in convenient places at the quantities that they desire.<br/>
</p>
            <a  data-toggle="modal" data-target="#myModal3" class="label label-success"><i class="fa fa-lightbulb-o"></i> Example By Plan Labs</a> </div>
          <div class="col-xl-6 col-12 pull-right">
            <label class="h5"><strong>Place :</strong></label>
            <textarea name="place" class="textarea" id="editor2" placeholder="Place some text here" style="width: 100%; height: 200px; font-size: 14px; line-height: 18px; border: 1px solid #dddddd; padding: 10px;"></textarea>
          </div>
          <div class="clearfix"></div>
        </div>
      </div>
      <div class="box-body">
        <div class="box-body">
          <div class="col-xl-6 col-12 pull-left">
            <p>The personality of your business is essential to building a brand that people recognize, respect and adore. Consumers demand a closer connection with the brands that they buy from than ever before. Unless you let them in and connect them with your personality, they'll find it difficult to relate to you and build a strong relationship. What is the personality of your business? Casual? Friendly? Professional? Expert? Fun? <br/>

There are personality traits that make you more knowable, likeable and trustable than others. A great brand personality can make a marketing strategy far more effective.
</p>
            <a data-toggle="modal" data-target="#myModal" class="popup-with-form label label-success"><i class="fa fa-lightbulb-o"></i> Example By Plan Labs</a> </div>
          <div class="col-xl-6 col-12 pull-right">
            <label class="h5"><strong>Personality :</strong></label>
            <textarea name="personality" class="textarea" id="editor" placeholder="Place some text here" style="width: 100%; height: 200px; font-size: 14px; line-height: 18px; border: 1px solid #dddddd; padding: 10px;"></textarea>
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
            <p>Early you stated your customer service offering would be [INSERT QUALITY RATING], as compared to competitors. Why? How will you use customer service to improve the customer experience? How will your customer service be used as a competitive advantage? 

Describe the various elements that make up your customer service and overall service experience.
</p>
            <a data-toggle="modal" data-target="#myModal1" class="label label-success"><i class="fa fa-lightbulb-o"></i> Example By Plan Labs</a> </div>
          <div class="col-xl-6 col-12 pull-right">
            <label class="h5"><strong>Service Experience :</strong></label>
            <textarea name="service_experience" class="textarea" id="editor1" placeholder="Place some text here" style="width: 100%; height: 200px; font-size: 14px; line-height: 18px; border: 1px solid #dddddd; padding: 10px;"></textarea>
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
            <p>How did you get here? What makes you want to own this business? Why is this business your passion? In this section you should write a 3-4 paragraph story about how your business was started, what it hoped to change and improve in the market and who the key figures are that are responsible for its operation.
</p>
            <a data-toggle="modal" data-target="#myModal1" class="label label-success"><i class="fa fa-lightbulb-o"></i> Example By Plan Labs</a> </div>
          <div class="col-xl-6 col-12 pull-right">
            <label class="h5"><strong>Story :</strong></label>
            <textarea name="story" class="textarea" id="editor1" placeholder="Place some text here" style="width: 100%; height: 200px; font-size: 14px; line-height: 18px; border: 1px solid #dddddd; padding: 10px;"></textarea>
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

In short, why you? Why spend money with your products/services versus a competing offer? What makes you better?<br/>

Try not to fall into the trap of playing it safe and not stepping on anyone's toes. Add a unique quality to your business that makes you unique, remarkable and that motivates the customer to buy.<br/>
EXAMPLE - Threadless is a community-designed T-Shirt and apparel website that runs competitions to determine which products to sell. Their simple USP of "Tees designed by the community" has helped them to achieve sales of over 1 million shirts per year. <br/>
</p>
            <a data-toggle="modal" data-target="#myModal1" class="label label-success"><i class="fa fa-lightbulb-o"></i> Example By Plan Labs</a> </div>
          <div class="col-xl-6 col-12 pull-right">
            <label class="h5"><strong>Unique Selling Proposition :</strong></label>
            <textarea name="unique_selling_proposition" class="textarea" id="editor1" placeholder="Place some text here" style="width: 100%; height: 200px; font-size: 14px; line-height: 18px; border: 1px solid #dddddd; padding: 10px;"></textarea>
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
            <button class="btn btn-success btn-large" type="submit" name="submit_step1" value="Save &amp; Continue" onclick="window.location.href='<?php echo base_url('plans/planStep5'); ?>'"> Save &amp; Continue <i class="fa fa-chevron-right"></i> </button>
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
</style>
