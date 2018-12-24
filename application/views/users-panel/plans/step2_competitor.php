<style>
#fileLoader
{
    display:none;
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

</style>
<br/>	
<br/><br/>	
<br/>
<div class="box-header with-border">
  <h3 class="box-title">Competitor Analysis <small>( My Plans )</small></h3>
</div>

  <div class="box-body">	
    <div class="col-md-9">
      <p>Think about the top competitors in their market. Enter the top 5 (or more) here by clicking ‘Add New Direct Competitor’. </p>
	  <button type="button" id="mymodal121" class="btn btn-primary btn-lg" data-toggle="modal" data-target="#myModal121" style="padding: 0px 24px 0px 24px;">
     <i class="fa fa-plus"></i> Add New Direct Competitor</a>
</button>
<?php  $userId= $this->session->userdata['USER_ID'];?>  
<div class="container" id="flag">

<?php $competitor=getcompetitor($userId,$plan_id); ?>
  <h2>List of Competitor <p id="comment"> <?php $competitor_count = count($competitor);
  if(!empty($competitor) && $competitor_count < 5){?>
    Please Add Atleast Five Competitor.
  <?php } ?>
  </p></h2> 
  <div class="list-group">
  
  
  <table class="table table-bordered" style="background-color: #c8e0ec;">
  <?php foreach($competitor as $com){ ?>
<tr>
    <td> <?php echo $com->competitor_name;?></td> <td><center><?php echo $com->location;?> </center> </td></tr>
  <?php } ?>
</table>
  </div>
</div>
	  
      </div>

 <div class="clearfix"></div>
 <div class="clearfix"></div>
          <div class="col-md-12">
		  <a href="<?php echo base_url('Plans/planstep2_pest/?plan_id='.$plan_id);?>"> <button class="btn btn-success btn-large" type="button" name="submit_step1" id="back_step1" value="Save &amp; Continue" style="float: left;"> <i class="fa fa-chevron-left"></i> Back  </button>
         
<?php if(!empty($competitor) && $competitor_count < 5){?>

            <button class="btn btn-success btn-large" type="button" id="lowdata" value="Save &amp; Continue" style="float: right;"> Save &amp; Next <i class="fa fa-chevron-right"></i> </button>

<?php } else {?>

<button class="btn btn-success btn-large" type="submit" name="submit_step1" value="Save &amp; Continue" style="float: right;"> Save &amp; Next <i class="fa fa-chevron-right"></i> </button>

<?php } ?>
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
    <center><input type="button" id="btnOpenFileDialog" class="btn btn-primary" value = "Click to add picture for this competitor" onclick="openfileDialog();" style="padding: 2px 65px 3px 71px;"/></center> 
	  <br/>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
		  
        <button type="submit" id="competitor" class="btn btn-primary" style="margin: 0px 0px 0px 240px;">Add Competitor</button>
      </div>
	  <?php echo form_close();?>
    </div>
  </div>
</div>
	

<br/>	
<br/>	
<!-- jQuery library -->
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>

<script>
function openfileDialog() {
    $("#fileLoader").click();
}

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
$('#lowdata').click(function(){

  alert('Please Add Atleast Five Competitor.');

});

</script>