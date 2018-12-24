<html lang="en">
<head>
<meta charset="utf-8">
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta name="viewport" content="width=device-width, initial-scale=1">
<meta name="description" content="">
<meta name="author" content="">
<title>Plan Labs - Registration</title>
<link rel="stylesheet" href="<?php echo base_url(); ?>assets/vendor_components/bootstrap/dist/css/bootstrap.min.css">
<link rel="stylesheet" href="<?php echo base_url(); ?>assets/css/bootstrap-extend.css">
<link rel="stylesheet" href="<?php echo base_url(); ?>assets/css/master_style.css">
<link rel="stylesheet" href="<?php echo base_url(); ?>assets/css/skins/_all-skins.css">
<link href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" rel="stylesheet" type="text/css" />
</head>
<body class="hold-transition register-page">
<div class="container h-p100">
	<div style="padding:20px 0px; height:30px">&nbsp;</div>
  <div class="row align-items-center justify-content-md-center h-p100">
    <div class="col-lg-4 col-md-8 col-12">
      <div class="register-box">
        <div class="register-box-body text-center"> <img src="<?php echo base_url(); ?>assets/images/plan-lab-logo.png" alt="logo" width="150px">
          <p class="login-box-msg">Register a new membership</p>
          <?php echo form_open("welcome/registerPlanLabs",array("id"=>"frmRegistration")) ?>
          <div class="first_section">
            <div class="form-group has-feedback">
              <input type="text" name="username" class="form-control" placeholder="Name">
              <span class="fa fa-person form-control-feedback "></span> </div>
            <div class="form-group has-feedback">
              <input type="text" name="companyname" class="form-control" placeholder="Company Name">
              <span class="fa fa-person form-control-feedback "></span> </div>
            <div class="form-group has-feedback">
              <input type="email" name="email" class="form-control" placeholder="Email">
              <span class="fa fa-email form-control-feedback "></span> </div>
            <div class="form-group has-feedback">
              <input type="password" name="password" class="form-control" placeholder="Password">
              <span class="fa fa-locked form-control-feedback "></span> </div>
            <div class="form-group has-feedback">
              <input type="password" name="repassword" class="form-control" placeholder="Retype password">
              <span class="fa fa-log-in form-control-feedback "></span> </div>
            <div class="row">
              <div class="col-6 text-center"> </div>
              <div class="col-6 text-center">
                <button type="button" class="btn btn-info btn-block margin-top-10" id="btnNext1">Next</button>
              </div>
            </div>
          </div>
          <div class="second_section hide">
            <div class="form-group has-feedback">
              <input type="text" name="address" class="form-control" placeholder="Address">
              <span class="fa fa-person form-control-feedback "></span> </div>
            <div class="form-group has-feedback">
              <input type="text" name="town_city" class="form-control" placeholder="Town/City">
              <span class="fa fa-person form-control-feedback "></span> </div>
            <div class="form-group has-feedback">
              <input type="postcode_zip" name="postcode_zip" class="form-control" placeholder="Postcode/Zip">
              <span class="fa fa-email form-control-feedback "></span> </div>
            <div class="form-group has-feedback"> <?php echo form_dropdown('country', $country,set_select('country'), array('class' => 'form-control', 'id' => 'country', 'onchange' => 'getStates();')); ?> <span class="fa fa-log-in form-control-feedback "></span> </div>
            <div class="form-group has-feedback">
              <select class="form-control" name="states" id="states">
                <option>Select State</option>
              </select>
              <span class="fa fa-locked form-control-feedback "></span> </div>
            <div class="form-group has-feedback">
              <input type="phone" name="phone" class="form-control" placeholder="Phone">
              <span class="fa fa-email form-control-feedback "></span> </div>
			<input type="hidden" name="plan_type" value="<?php if(!empty($_GET['plan_type'])){
			 echo $_GET['plan_type'];
			} ?>" />
			<input type="hidden" name="plan_name" value="<?php if(!empty($_GET['plan_name'])){
			 echo $_GET['plan_name'];
			} ?>" />
			<input type="hidden" name="plan_cost" value="<?php if(!empty($_GET['cost'])){
			 echo $_GET['cost'];
			} ?>" />  
            <div class="row">
              <div class="col-12">
                <div class="checkbox">
                  <input type="checkbox" id="basic_checkbox_1">
                  <label for="basic_checkbox_1">I agree to the <a href="#" class="text-warning"><b>Terms</b></a></label>
                </div>
              </div>
              <div class="col-6 text-center">
                <button type="button" class="btn btn-info btn-block margin-top-10" id="btnPrev1">Prev</button>
              </div>
              <div class="col-6 text-center">
                <button type="submit" class="btn btn-info btn-block margin-top-10">SIGN UP</button>
              </div>
            </div>
          </div>
          <?php echo form_close(); ?>
          <div class="margin-top-20 text-center">
            <p>Already have an account?<a href="<?php echo base_url('welcome'); ?>" class="text-info m-l-5" style="color:#ffb22b !important;"> Sign In</a></p>
          </div>
        </div>
      </div>
      <div style="padding:20px 0px; height:30px">&nbsp;</div>
    </div>
    <div class="col-lg-4 col-md-8 col-12">
      <div class="login-box" style="min-height:496px;">
        <div class="login-box-body" style="min-height:496px;">
          <h1> Why sign up today?</h1>
          <ul>
            <li>Complete marketing plan interview
</li>
            <li> 100’s of examples, help guides and advice.
</li>
            <li> Updated with the latest advice
</li>
            <li> Start today
</li>
            <li> Here what others subscribers have to say:<br/>
"I started using PlanLab a week ago and already have a marketing plan that’s more helpful and full of ideas than templates  I’ve tried in the past."
</li>
          </ul>
          <div class="social-auth-links text-center">
            <p>- OR -</p>
            <a href="#" class="btn btn-outline btn-social-icon btn-light"><i class="fa fa-facebook"></i></a> <a href="#" class="btn btn-outline btn-social-icon btn-light"><i class="fa fa-google-plus"></i></a> <a href="#" class="btn btn-outline btn-social-icon btn-light"><i class="fa fa-twitter"></i></a> <a href="#" class="btn btn-outline btn-social-icon btn-light"><i class="fa fa-instagram"></i></a> </div>
        </div>
      </div>
      <div style="padding:20px 0px; height:30px">&nbsp;</div>
    </div>
	<div style="padding:20px 0px; height:30px">&nbsp;</div>
    <footer class="footer">
      <div class="container">
        <div class="row">
          <div class="col-md-3">
            <h3>Modern, Simplified
              Business Planning</h3>
            <p>PlanLabs simplifies business planning, budgeting, forecasting, and performance tracking for small businesses and startups.</p>
          </div>
          <div class="col-md-9">
            <div class="col-md-3">
              <ul>
                <h3>About Us</h3>
                <li><a href="https://studio-tesseract.co/planlabs/our-story">The Plan Lab Story</a></li>
                <li><a href="https://studio-tesseract.co/planlabs/faq">F.A.Q.</a></li>
                <li><a href="https://studio-tesseract.co/planlabs/media">Media</a></li>
              </ul>
            </div>
            <div class="col-md-3">
              <ul>
                <h3>PLAN LAB</h3>
                <li><a href="https://studio-tesseract.co/planlabs/support">Support</a></li>
                <li><a href="https://studio-tesseract.co/planlabs/system-status">System Status</a></li>
                <li><a href="https://studio-tesseract.co/planlabs/latest-updates">Latest Updates</a></li>
                <li><a href="https://studio-tesseract.co/planlabs/security">Security</a></li>
              </ul>
            </div>
            <div class="col-md-3">
              <ul>
                <h3>BRANDS WE LOVE</h3>
                <li><a href="https://studio-tesseract.co/planlabs/engage-marketing">Engage Marketing</a></li>
                <li><a href="https://studio-tesseract.co/planlabs/the-blog-designers">The Blog Designers</a></li>
              </ul>
            </div>
            <div class="col-md-3">
              <h3>PRIVACY &amp; POLICY</h3>
              <ul>
                <li><a href="https://studio-tesseract.co/planlabs/privacy-privacy-policy">Privacy &amp; Privacy Policy</a></li>
                <li><a href="https://studio-tesseract.co/planlabs/terms-conditions">Terms &amp; Conditions</a></li>
              </ul>
            </div>
          </div>
        </div>
      </div>
    </footer>
    <div class="footer-bottom">
      <div class="container">
        <div class="col-md-12">
          <div class="col-md-12">
            <div class="pas-logo"> </div>
            <p>&copy; 2010-2018 Plan Labs. ALL RIGHTS RESERVED</p>
          </div>
        </div>
      </div>
    </div>
  </div>
</div>
<script src="<?php echo base_url(); ?>assets/vendor_components/jquery-3.3.1/jquery-3.3.1.js"></script>
<script src="<?php echo base_url(); ?>assets/vendor_components/popper/dist/popper.min.js"></script>
<script src="<?php echo base_url(); ?>assets/vendor_components/bootstrap/dist/js/bootstrap.min.js"></script>
<script src="<?php echo base_url(); ?>assets/js/jquery.validate.js"></script>
<script type="text/javascript">
  $(document).ready(function(){
  $("#frmRegistration").validate({
    rules: {
     username: "required",
     companyname: "required",
	 email: "required",
	 password:"required",
	 repassword:"required",
	 address:"required",
	 town_city:"required",
	 postcode_zip:"required",
	 country:"required",
	 states:"required",
	 phone:"required",
    },
    messages: {
     username: "Please specify your name",
	 companyname: "Please specify your company name",
	 email: "Please specify your email",
	 password: "Please specify your password",
	 repassword:"Please specify your retype password",
	 address:"Please specify your address",
	 town_city:"Please specify your town / city",
	 postcode_zip:"Please specify your postcode / zip",
	 country:"Please specify your country",
	 states:"Please specify your state",
	 phone:"Please specify your phone",
    }
  });
 });
/**************************************************/
/**************************************************/   
  $("#btnNext1").click(function(){
    var response=$("#frmRegistration").valid();
	if(response==true){
    $(".first_section").addClass("hide");
	$(".second_section").removeClass("hide");
	}
   });
  $("#btnPrev1").click(function(){
    $(".first_section").removeClass("hide");
	$(".second_section").addClass("hide");
  });
</script>
<script type="text/javascript">
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
<style type="text/css">
.footer {
    background:#262734;
	padding:22px 22px 22px 22px;
}
footer.footer ul {
    padding-left: 0;
    list-style: none;
}
footer.footer h3 {
    padding-bottom: 8px;
    margin: 34px 0 14px;
    font-size: 14px;
    line-height: 22px;
    font-weight: 700;
    text-align: left;
    text-transform: uppercase;
    border-bottom: 2px solid #8a9196;
    color: #b2d2e1;
}
.no-padding{ padding:0px;}.col-md-3{ float:left;}
.footer-bottom {
    clear: both;
    padding-top: 15px;
    width: 100%;
    height: 60px;
    background-color: gray;
    color: #fff;
}
.footer span, .footer p, .footer a {
    color: #bebebe;
    font-weight: normal;
    margin-bottom: 15px;
}
.login-page, .register-page {
    background-size: cover;
    height: 100%;
    width: 100%;
    position: relative!important; 
}
 </style>
 <script id="mcjs">!function(c,h,i,m,p){m=c.createElement(h),p=c.getElementsByTagName(h)[0],m.async=1,m.src=i,p.parentNode.insertBefore(m,p)}(document,"script","https://chimpstatic.com/mcjs-connected/js/users/721c6a15f0443864ae82c7850/d27e23b81da27dec22a2c1ffd.js");</script>
</body>
</html>
