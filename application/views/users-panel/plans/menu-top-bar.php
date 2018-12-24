<?php 
$planId=!empty($_GET['plan_id'])? $_GET['plan_id'] : ""; ?>
<div class="btn-group" style="padding-bottom:35px;"> 
<a href="<?php echo base_url("plans/planStep1/?plan_id=".$planId); ?>" class="btn btn-large <?php 
if(strcmp($_SERVER['REQUEST_URI'],'/planlabs-marketing-plan/plans/planStep1/?plan_id='.$planId.'')==0){ echo "btn-primary"; }elseif(strcmp($_SERVER['REQUEST_URI'],'/planlabs-marketing-plan/plans/planStep1')==0){ echo "btn-primary"; }else{ echo "btn-success";} ?>">Introduction <i class="fa fa-edit"></i></a> 

<a href="<?php echo base_url("plans/planStep2/?plan_id=".$planId); ?>" class="btn btn-large <?php 
if(strcmp($_SERVER['REQUEST_URI'],'/planlabs-marketing-plan/plans/planStep2/?plan_id='.$planId.'')==0){ echo "btn-primary"; }elseif(strcmp($_SERVER['REQUEST_URI'],'/planlabs-marketing-plan/Plans/planstep2_pest/?plan_id='.$planId.'')==0){ echo "btn-primary"; }else{ echo "btn-success";} ?>">The Market <i class="fafa-ok"></i></a> 
<a href="<?php echo base_url("plans/planStep3/?plan_id=".$planId); ?>" class="btn btn-large <?php 
if(strcmp($_SERVER['REQUEST_URI'],'/planlabs-marketing-plan/plans/planStep3/?plan_id='.$planId.'')==0){ echo "btn-primary"; }else{ echo "btn-success";} ?>">The Customer <i class="fa fa-ok"></i></a> 

<a href="<?php echo base_url("plans/planStep4/?plan_id=".$planId); ?>" class="btn btn-large <?php 
if(strcmp($_SERVER['REQUEST_URI'],'/planlabs-marketing-plan/plans/planStep4/?plan_id='.$planId.'')==0){ echo "btn-primary"; }else{ echo "btn-success";} ?>">Marketing Strategy <i class="icon-white icon-ok"></i></a> 

<a href="<?php echo base_url("plans/planStep5/?plan_id=".$planId); ?>" class="btn btn-large <?php 
if(strcmp($_SERVER['REQUEST_URI'],'/planlabs-marketing-plan/plans/planStep5/?plan_id='.$planId.'')==0){ echo "btn-primary"; }else{ echo "btn-success";} ?>">Marketing Mix <i class="icon-plus"></i></a> 

<a href="<?php echo base_url("plans/lastStep/?plan_id=".$planId); ?>" class="btn btn-large <?php 
if(strcmp($_SERVER['REQUEST_URI'],'/planlabs-marketing-plan/plans/lastStep/?plan_id='.$planId.'')==0){ echo "btn-primary"; }else{ echo "btn-success";} ?>">Done <i class="icon-plus"></i></a> </div>
