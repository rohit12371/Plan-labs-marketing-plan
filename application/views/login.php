<html lang="en">
<head>
<meta charset="utf-8">
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta name="viewport" content="width=device-width, initial-scale=1">
<meta name="description" content="">
<meta name="author" content="">
<title>Plan Labs - Log in</title>
<link rel="stylesheet" href="<?php echo base_url(); ?>assets/vendor_components/bootstrap/dist/css/bootstrap.min.css">
<link rel="stylesheet" href="<?php echo base_url(); ?>assets/css/bootstrap-extend.css">
<link rel="stylesheet" href="<?php echo base_url(); ?>assets/css/master_style.css">
<link rel="stylesheet" href="<?php echo base_url(); ?>assets/css/skins/_all-skins.css">
<link href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" rel="stylesheet" type="text/css" />
<style>
[type=checkbox]+label:before, [type=checkbox]:not(.filled-in)+label:after
{
       background: #768686 !important;
   
}

[type=checkbox]:checked+label:before{
   
    border-right: 2px solid #ecb245 !important;
    border-bottom: 2px solid #d3a92b !important;

}
</style>


</head>
<body class="hold-transition login-page">
<div class="container h-p100">
  <div style="padding:20px 0px; height:30px">&nbsp;</div>
  <div class="row align-items-center justify-content-md-center h-p100" >
    <div class="col-lg-4 col-md-8 col-12">
      <div class="login-box">
        <div class="login-box-body text-center">
          <img src="<?php echo base_url(); ?>assets/images/plan-lab-logo.png" alt="logo" width="150px">
          <p class="login-box-msg">Sign in to start your session</p>
           <?php echo form_open("welcome",array("id"=>"frmLogin")) ?>
            <div class="form-group has-feedback">
              <input type="email" name="email" class="form-control rounded" placeholder="Email">
              <span class="fa fa-email form-control-feedback"></span> </div>
            <div class="form-group has-feedback">
              <input type="password" name="password" class="form-control rounded" placeholder="Password">
              <span class="fa fa-locked form-control-feedback"></span> </div>
            <div class="row">
              <div class="col-6">
                <div class="checkbox">
                  <input type="checkbox" id="basic_checkbox_1">
                  <label for="basic_checkbox_1">Remember Me</label>
                </div>
              </div>
              <div class="col-6">
                <div class="fog-pwd text-right"> <a href="javascript:void(0)" class="text-danger" style="color:#ffb22b !important;"><i class="fa fa-lock"></i> Forgot Password?</a><br>
                </div>
              </div>
              <div class="col-12 text-center">
                <button type="submit" class="btn btn-info btn-block margin-top-10">SIGN IN</button>
              </div>
            </div>
          <?php echo form_close(); ?>
          <div class="social-auth-links text-center">
            <p>- OR -</p>
            <a href="#" class="btn btn-outline btn-light btn-social-icon"><i class="fa fa-facebook"></i></a> <a href="#" class="btn btn-outline btn-light btn-social-icon"><i class="fa fa-google-plus"></i></a> <a href="#" class="btn btn-outline btn-light btn-social-icon"><i class="fa fa-twitter"></i></a> <a href="#" class="btn btn-outline btn-light btn-social-icon"><i class="fa fa-instagram"></i></a> </div>
          <div class="margin-top-30 text-center">
            <p>Don't have an account? <a href="<?php echo base_url('welcome/registerPlanLabs'); ?>" class="text-warning ml-5">Sign Up</a></p>
          </div>
        </div>
      </div>
	  <div style="padding:30px 0px; height:30px">&nbsp;</div>
    </div>
    <div class="col-lg-4 col-md-8 col-12">
      <div class="login-box" style="min-height:457px;">
        <div class="login-box-body" style="min-height:457px;">
          <h1>Not signed up yet? Get started now.
</h1>
          <ul>
            <li>Complete marketing plan interview
</li>
            <li> 100’s of examples, help guides and advice.
</li>
            <li> Updated with the latest advice
</li>
            <li> Start today
</li>
          </ul>
          <a class="btn btn-info btn-block margin-top-10" href="<?php echo base_url('welcome/registerPlanLabs'); ?>"> Signup here </a> </div>
      </div>
	<div style="padding:30px 0px; height:30px">&nbsp;</div>
    </div>
	<div style="padding:20px 0px; height:30px">&nbsp;</div>
	<div style="padding:20px 0px; height:30px">&nbsp;</div>
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
<script src="<?php echo base_url(); ?>assets/vendor_components/jquery-3.3.1/jquery-3.3.1.js"></script>
<script src="<?php echo base_url(); ?>assets/vendor_components/popper/dist/popper.min.js"></script>
<script src="<?php echo base_url(); ?>assets/vendor_components/bootstrap/dist/js/bootstrap.min.js"></script>
</body>
</html>
