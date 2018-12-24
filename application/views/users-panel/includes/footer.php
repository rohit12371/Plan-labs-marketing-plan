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
<script src="<?php echo base_url(); ?>assets/vendor_components/jquery-3.3.1/jquery-3.3.1.js"></script>
<script src="<?php echo base_url(); ?>assets/vendor_components/jquery-ui/jquery-ui.js"></script>
<script>
	  $.widget.bridge('uibutton', $.ui.button);
</script>
<script src="<?php echo base_url(); ?>assets/vendor_components/popper/dist/popper.min.js"></script>
<script src="<?php echo base_url(); ?>assets/vendor_components/bootstrap/dist/js/bootstrap.js"></script>
<script src="<?php echo base_url(); ?>assets/vendor_components/chart.js-master/Chart.min.js"></script>
<script src="<?php echo base_url(); ?>assets/vendor_components/jquery-slimscroll/jquery.slimscroll.js"></script>
<script src="<?php echo base_url(); ?>assets/vendor_components/fastclick/lib/fastclick.js"></script>
<script src="<?php echo base_url(); ?>assets/vendor_components/jquery.peity/jquery.peity.js"></script>
<script src="<?php echo base_url(); ?>assets/vendor_components/raphael/raphael.min.js"></script>
<script src="<?php echo base_url(); ?>assets/vendor_components/morris.js/morris.min.js"></script>
<script src="<?php //echo base_url(); ?>assets/vendor_components/jvectormap/lib2/jquery-jvectormap-2.0.2.min.js"></script>
<script src="<?php //echo base_url(); ?>assets/vendor_components/jvectormap/lib2/jquery-jvectormap-world-mill-en.js"></script>
<script src="<?php //echo base_url(); ?>assets/vendor_components/jvectormap/lib2/jquery-jvectormap-us-aea-en.js"></script>
<script src="<?php echo base_url(); ?>assets/js/template.js"></script>
<script src="<?php echo base_url(); ?>assets/js/pages/dashboard.js"></script>
<script src="<?php echo base_url(); ?>assets/js/demo.js"></script>
<script src="<?php echo base_url(); ?>assets/js/horizontal-layout.js"></script>
<script src="http://cdn.tinymce.com/4/tinymce.min.js"></script>
<script type="text/javascript">
tinymce.init({
    selector: '#editor,#editor1,#editor2',
    theme: 'modern',
    plugins: [
    'advlist autolink lists link image charmap print preview anchor',
    'searchreplace visualblocks code fullscreen',
    'insertdatetime table contextmenu paste code'
    ],
    toolbar1: 'insertfile undo redo | styleselect | bold italic | bullist numlist outdent indent | fontsizeselect',
	setup: function (editor)
	{
		editor.on ('init', function()
		{
		})
	}
});
</script>
<script src="<?php echo base_url(); ?>assets/js/jquery-tagsinput.js" defer></script>
<script src="<?php echo base_url(); ?>assets/js/jquery.validate.js" defer></script>
<script src="<?php echo base_url(); ?>assets/js/jquery-tagsinput.min.js" defer></script>
<link href="<?php echo base_url(); ?>assets/css/jquery.tagsinput-revisited.css" rel="stylesheet" type="text/css" />
<link href="<?php echo base_url(); ?>assets/css/jquery-tagsinput.min.css" rel="stylesheet" type="text/css" />
<script>
    $(document).ready(function() {
      $('[data-role="tags-input"]').tagsInput();
    });
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
 </style>
<script src="https://cdn.datatables.net/1.10.19/js/jquery.dataTables.min.js"></script>
<script type="text/javascript">
$(document).ready( function () {
    $('#example').DataTable();
} );
</script>
<script type="text/javascript">
$('#frmCompetitor').click(function(){
		  /*var response1=$('#frmCompetitor').valid();
		  if(response1==true){*/
          $.ajax({
            type: 'post',
            url: '<?php echo base_url(); ?>plans/createCompetitor',	
            data:{"competitor_name":$('#competitor_name').val(),"description":$('#description').val(),"performance":$('#performance').val(),"market_position":$('#market_position').val(),"plan_id":"","user_id":<?php echo $this->session->userdata['USER_ID']; ?>},
            success: function (data) {
			  alert("New Competitor Has Been Added Successfully");
            }
          });
		  /*}*/
        });
/*************************************************/
/*************************************************/
$(document).ready(function(){
 setInterval(function(){ 
        $.ajax({
            type:'post',
            url: '<?php echo base_url(); ?>plans/getCompetitors',	
            data:{"plan_id":"1","user_id":<?php echo $this->session->userdata['USER_ID']; ?>},
	        datatype:'json', 
            success: function(response){
			  var json_competitors = JSON.parse(response);
			  $("#comps_data").empty();
			  for(i=0,r=1;i<json_competitors.length;++i,++r){
			   $("#comps_data").append("<tr><td>"+r+"</td><td>"+json_competitors[i].competitor_name+"</td><td>"+json_competitors[i].description+"</td><td>"+json_competitors[i].performance+"</td><td>"+json_competitors[i].market_position+"</td><td><a href='#' onClick='deleteCompetitor("+json_competitors[i].id+")' class='badge badge-primary'>Delete</a></td></tr>")
			  }
            }
          });
		  }, 1000);
});	
/*************************************************/
/*************************************************/
function deleteCompetitor(competitorId){
      $.ajax({
            type:'post',
            url: '<?php echo base_url(); ?>plans/deleteCompetitor',	
            data:{"competitorId":competitorId},
	        datatype:'json', 
            success: function(response){
			    alert("Competitor Has Been Deleted Successfully");
            }
          });
}	
</script>
</body></html>