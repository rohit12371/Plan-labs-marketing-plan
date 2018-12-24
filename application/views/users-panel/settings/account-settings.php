<div class="content-wrapper" style="min-height: 549px;">
  <section class="content">
    <div class="box">
      <div class="box-header with-border">
        <h3 class="box-title">Plan Labs <small>(Account Settings )</small></h3>
      </div>
      <div class="box-body">
        <div class="box-body form-element">
		 <?php echo form_open("settings/accountSettings",array("id"=>"frmAccountSetting")) ?>
          <?php foreach($userData as $userData){ ?>
           <div class="col-md-10"> <span>Name:</span>
            <input name="username" type="text" class="form-control input-lg" placeholder=" Enter User Name :" autocomplete="off" value="<?php echo $userData->name; ?>">
          </div>
           <div class="col-md-10"> <span>Company Name:</span>
            <input name="companyname" type="text" class="form-control input-lg" placeholder=" Enter Company Name :" autocomplete="off" value="<?php echo $userData->companyname; ?>">
          </div>
           <div class="col-md-10"> <span>Address:</span>
            <input name="address" type="text" class="form-control input-lg" placeholder=" Enter Address :" autocomplete="off" value="<?php echo $userData->address; ?>">
          </div>
           <div class="col-md-10"> <span>Town / City:</span>
            <input name="town_city" type="text" class="form-control input-lg" placeholder=" Enter Town / City :" autocomplete="off" value="<?php echo $userData->town_city; ?>">
          </div>
           <div class="col-md-10"> <span>Postcode / Zip:</span>
            <input name="postcode_zip" type="text" class="form-control input-lg" placeholder=" Enter Postcode / Zip :" autocomplete="off" value="<?php echo $userData->postcode_zip; ?>">
          </div>
           <div class="col-md-10"> <span>Country:</span> <?php echo form_dropdown('country', $country,$userData->country, array('class' => 'form-control', 'id' => 'country', 'onchange' => 'getStates();')); ?> </div>
           <div class="col-md-10 "> <span>State:</span>
             <select class="form-control" name="states" id="states">
               <option>Select State</option>
           </select>
           </div>
           <div class="col-md-10"> <span>Phone:</span>
            <input name="phone" type="text" class="form-control input-lg" placeholder=" Enter Phone Number :" autocomplete="off" value="<?php echo $userData->phone; ?>">
            <input type="hidden" name="user_id" id="user_id" value="
		 <?php echo $this->session->userdata['USER_ID']; ?>" />
          </div>
           <div class="col-md-10">
            <button type="submit" class="btn btn-info">Submit</button>
            <button type="submit" class="btn btn-default">Reset</button>
          </div>
          <?php } ?>
		 <?php echo form_close(); ?> 
        </div>
        <div class="box-footer"> </div>
      </div>
    </div>
  </section>
</div>
<style type="text/css">
.form-control{margin-bottom:12px;}
.col-md-10 span{width:20%; display:block; color:#1e88e5; font-weight:600; font-size:15px;}
.col-md-10 input{width:80%;}
.col-md-10 select{width:80%;}
</style>
<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.3.1/jquery.js"></script>
<script type="text/javascript">
/*****************************************/   
$(document).ready(function(){
  getStates();
  $('#states').val("<?php echo $userData->states; ?>");
});
</script>
<script type="text/javascript">
/*****************************************/   
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