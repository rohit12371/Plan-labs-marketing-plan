<div class="content-wrapper" style="min-height: 549px;">
  <section class="content">
    <div class="box">
      <div class="box-header with-border">
        <h3 class="box-title">List Of Existing Created Plans <small>( My Plans )</small></h3>
      </div>
      <div class="box-body">
        <div class="table-responsive">
          <table id="example" class="table table-bordered table-hover display nowrap margin-top-10 w-p100">
            <thead>
              <tr>
                <th>Sr.No</th>
                <th>Business Plan Name</th>
                <th>Describe your business</th>
                <th>Product/Service</th>
                <th>List your goals</th>
                <th>Created Date</th>
                <th>Action</th>
              </tr>
            </thead>
            <tbody>
              <?php 
		   $sr_no=0;
		   foreach($planIntro as $planIntros){ ?>
              <tr>
                <td><?php echo ++$sr_no; ?></td>
                <td><?php echo $planIntros->business_title; ?></td>
                <td><?php echo substr(strip_tags($planIntros->describe_your_business),"0","150"); ?></td>
                <td><?php echo substr(strip_tags($planIntros->describe_why_people_need_and_want_your_product_service),"0","150"); ?></td>
                <td><?php echo substr(strip_tags($planIntros->list_your_goals),"0","150"); ?></td>
                <td><label class="label label-primary"><?php echo date('d-M-Y h:i:s',strtotime($planIntros->created_date)); ?></label></td>
                <td style="width:130px;"><a href="<?php echo base_url("plans/planStep1/?plan_id=".$planIntros->id); ?>" class="btn btn-primary btn-1" ><i class="fa fa-edit"></i></a> <a href="" class="btn btn-danger btn-1" ><i class="fa fa-trash"></i></a></td>
              </tr>
              <?php } ?>
            </tbody>
          </table>
        </div>
      </div>
    </div>
  </section>
</div>
<style type="text/css">
.form-control{ margin-bottom:12px;}
.clearfix{ padding:42px 42px;}
p{ display:inline;}
::-webkit-scrollbar {width: 5px; height:5px;}
::-webkit-scrollbar-track {-webkit-box-shadow: inset 0 0 6px #398bf7; border-radius: 10px;}
::-webkit-scrollbar-thumb {border-radius: 10px; -webkit-box-shadow: inset 0 0 6px #398bf7;  background:#398bf7;}
.btn-1{ border-radius:100%;}
</style>
