<div class="content-wrapper" style="min-height: 549px;">
  <section class="content">
    <div class="box">
      <div class="box-header with-border">
        <h3 class="box-title">You're Done <small>( My Plans )</small></h3>
      </div>
      <div class="box-body">
        <div class="box-body">
          <div class="col-md-12">
            <?php $this->load->view('users-panel/plans/menu-top-bar'); ?>
          </div>
          <div class="col-md-12">
            <p>Congratulations on completing your marketing plan! We hope that you've come away with a much better idea of how to effectively market your business. <br/>
              We recommend using this time to print out your marketing plan in it's entirety, reviewing it and then logging in and making any updates to area's that you believe could be improved.</p>
          </div>
          <div class="col-xl-12">
            <h3>Download Your Marketing Plan</h3>
          </div>
          <div class="col-md-12"> 
		  <?php $plan_id=!empty($_GET['plan_id'])?$_GET['plan_id']:""; ?>
		  <a href="<?php echo base_url('plans/planGetWordReport/?plan_id='.$plan_id); ?>" style="color:#7460ee;"> <i class="fa fa-file-word-o fa-5x"></i> <b style="display:block; padding-bottom:12px;">Download Word</b> </a> <a href="<?php echo base_url('plans/planGetPdfReport/?plan_id='.$plan_id); ?>" style="color:red;" target="_blank"> <i class="fa fa-file-pdf-o fa-5x"></i> <b style="display:block; padding-bottom:12px;">Download Pdf</b> </a> <a href="<?php echo base_url('plans/planGetPPTReport/?plan_id='.$plan_id); ?>" style="color:#6fd62b;"> <i class="fa fa-file-text-o fa-5x"></i> <b style="display:block; padding-bottom:12px;">Download PPT</b> </a>
            <p>Thank you once again for using Plan Lab. Remember that you can always come back and refine your marketing plan as your business and the marketing world evolves.<br/>
              <strong class="text-primary">Tweet about your Marketing Plan!</strong></p>
          </div>
        </div>
      </div>
    </div>
  </section>
</div>
<style type="text/css">
.form-control{ margin-bottom:12px;}
.clearfix{ padding:42px 42px;}
</style>
